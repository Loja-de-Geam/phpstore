<?php

    namespace core\classes;

    class DataBase {

        private $gestor;
        private $pagina;
        private $paginaFinal;

        public function __construct() {
            $this->gestor = new \PDO("mysql:host=" . 'localhost' . ";dbname=" . 'fynderfood' . ";charset=utf8", 'root', '');
            $this->pagina = 1;
        }

        public function getPagina() {
            return $this->pagina;
        }

        public function getPaginaFinal($limiteItens = 5) {
            $this->paginaFinal = ceil($this->countidmenu() / $limiteItens);
            return $this->paginaFinal;
        }

        public function countidmenu() {
            $result = $this->gestor->query("SELECT * FROM countidmenu ")->fetch()["count"];
            return $result;
        }

        public function paginacaoDinamica($nomeTabela, $limiteItens = 5) {
            if (isset($_GET['pagina']) && $_GET['pagina'] > 0 && $_GET['pagina'] <= $this->getPaginaFinal($limiteItens)) {
                $this->pagina = filter_input(INPUT_GET, "pagina", FILTER_VALIDATE_INT);
            }
            $inicio = ($this->pagina * $limiteItens) - $limiteItens;
            $registros = $this->gestor->query("SELECT * FROM $nomeTabela ORDER BY id LIMIT $inicio, $limiteItens");
            return $registros;
        }

        public function cadastroUsuario($nome, $telefone, $email, $cpf, $senha, $genero) {
            try {
                $comando = $this->gestor->prepare("INSERT INTO usuarios VALUES (NULL, :nome, :telefone, :email, :cpf, :senha, :genero, :data)");

                $comando->execute(
                    [
                        ':nome' => $nome,
                        ':telefone' => $telefone,
                        ':email' => $email,
                        ':cpf' => $cpf,
                        ':senha' => $senha,
                        ':genero' => $genero,
                        ':data' => date('Y-m-d')
                    ]
                );

                $_SESSION['logado'] = true;
                $_SESSION['email'] = $email;

                echo "<script>window.location.href='./'</script>";

            } catch (\Throwable $e) {
                echo "<script>alert('Usuario já existente!')</script>";
                echo "<script>window.location.href='./?a=cadastro'</script>";
            }
        }

        public function loginUsuario($email, $senha) {
            $comando = $this->consultaUsuario($email, $senha);
            if ($comando->rowCount() == 1) {

                $_SESSION['logado'] = true;
                $_SESSION['email'] = $email;

                echo "<script>window.location.href='./'</script>";
                
            } else {
                $comando = $this->consultaUsuario($email, $senha, 'adm');

                if ($comando->rowCount() == 1) {

                    $_SESSION['logado'] = true;
                    $_SESSION['adm'] = true;
                    $_SESSION['email'] = $email;

                    echo "<script>window.location.href='./'</script>";
                }

            }
        }

        public function addMenu($nome, $descricao, $descricaoMais, $preco, $files) {
            $idAdm = $this->getEmailADM($_SESSION['email']);
            $data = date('Y-m-d');
            $img = $files['foto']["name"];
            move_uploaded_file($files['foto']['tmp_name'], "../public_html/assets/images/comidas/" . $files['foto']['name']);
            return $this->gestor->query("CALL addmenu($idAdm, '$nome', '$descricao', '$descricaoMais', $preco, '$img', '$data')");
        }

        private function consultaUsuario($email, $senha, $tabela='usuarios') {
            $comando = $this->gestor->prepare("SELECT * FROM $tabela WHERE email = :email AND senha = :senha LIMIT 1");

            $comando->execute(

                [
                    ':email' => $email,
                    ':senha' => $senha
                ]

            );

            return $comando;
        }

        private function getEmailADM($email) {
            return $this->gestor->query("SELECT id FROM adm WHERE email='$email'")->fetch()['id'];
        }
    }