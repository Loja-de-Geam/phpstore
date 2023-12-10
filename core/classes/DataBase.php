<?php

    namespace core\classes;

    class DataBase {

        private $gestor;
        private $pagina;

        public function __construct() {
            $this->gestor = new \PDO("mysql:host=" . 'localhost' . ";dbname=" . 'fynderfood' . ";charset=utf8", 'root', '');
            $this->pagina = 1;
        }

        public function getPagina() {
            return $this->pagina;
        }

        public function getPaginaFinal($quantId, $limiteItens = 5) {
            return ceil($quantId / $limiteItens);
        }

        public function countid($tabela) {
            return $this->gestor->query("SELECT * FROM countid" . $tabela)->fetch()["count"];
        }

        public function viewMenu() {
            return $this->gestor->query("SELECT * FROM viewmenu");
        }

        public function viewTipo() {
            return $this->gestor->query("SELECT * FROM viewtipo");
        }

        public function paginacaoDinamica($nomeTabela, $limiteItens = 5) {
            $quantId = $this->countid($nomeTabela);
            if (isset($_GET['pagina']) && $_GET['pagina'] > 0 && $_GET['pagina'] <= $this->getPaginaFinal($quantId, $limiteItens)) {
                $this->pagina = filter_input(INPUT_GET, "pagina", FILTER_VALIDATE_INT);
            }
            $inicio = $this->getInicio($limiteItens);
            return $this->gestor->query("SELECT * FROM $nomeTabela ORDER BY id LIMIT $inicio, $limiteItens");
        }

        public function pagDinamicaMenuTipo($nomeTabela, $limiteItens = 5) {
            $quantId = $this->countid($nomeTabela);
            if (isset($_GET['pagina']) && $_GET['pagina'] > 0 && $_GET['pagina'] <= $this->getPaginaFinal($quantId, $limiteItens)) {
                $this->pagina = filter_input(INPUT_GET, "pagina", FILTER_VALIDATE_INT);
            }
            $inicio = $this->getInicio($limiteItens);
            return $this->gestor->query("SELECT menutipo.id, menu.nome, tipo.tipo FROM menutipo, menu, tipo WHERE menu.id=menutipo.id_menu AND menutipo.id_tipo=tipo.id ORDER BY id_menu LIMIT $inicio, $limiteItens");
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

        public function addTipo($tipo) {
            $idAdm = $this->getIdADM($_SESSION['email']);
            $data = date('Y-m-d');
            return $this->gestor->query("INSERT INTO tipo VALUES(NULL, $idAdm, '$tipo', '$data')");
        }

        public function addMenu($nome, $descricao, $descricaoMais, $preco, $files) {
            $idAdm = $this->getIdADM($_SESSION['email']);
            $data = date('Y-m-d');
            $img = $files['foto']["name"];
            move_uploaded_file($files['foto']['tmp_name'], "../public_html/assets/images/comidas/" . $files['foto']['name']);
            return $this->gestor->query("CALL addmenu($idAdm, '$nome', '$descricao', '$descricaoMais', $preco, '$img', '$data')");
        }

        public function addMenuTipo($idMenu, $idTipo) {
            $idAdm = $this->getIdADM($_SESSION['email']);
            return $this->gestor->query("CALL addmenutipo($idMenu, $idTipo, $idAdm)");
        }

        public function addInfoBug($titulo, $categoria, $descricao) {
            $data = date('Y-m-d');
            return $this->gestor->query("CALL addinformabug('$titulo', '$categoria', '$descricao', '$data')");
        }

        public function deleteComida() {
            $id = $this->getId();
            $sql_delete = "DELETE FROM menu WHERE id=$id";
            $sql_delete_2 = "DELETE FROM menutipo WHERE id_menu=$id";
            $sql_delete_3 = "DELETE FROM pedido WHERE id_produto=$id";

            $this->gestor->query($sql_delete_3);
            $this->gestor->query($sql_delete_2);
            $this->gestor->query($sql_delete);
        }

        public function deleteTipo() {
            $id = $this->getId();
            $sql_delete = "DELETE FROM tipo WHERE id=$id";
            $sql_delete_2 = "DELETE FROM menutipo WHERE id_tipo=$id";

            $this->gestor->query($sql_delete_2);
            $this->gestor->query($sql_delete);
        }

        public function deleteMenuTipo() {
            $id = $this->getId();
            $sql_delete = "DELETE FROM menutipo WHERE id=$id";
            $this->gestor->query($sql_delete);
        }

        public function editComida($novoNome, $novoPreco, $novoDesc, $novoDescMais, ) {
            $id = $this->getId();
            $idAdm = $this->getIdADM($_SESSION['email']);
            $data = date('Y-m-d');
            if (isset($_GET['id'])) {
                $sql_update = "UPDATE menu SET id_adm=$idAdm, nome='$novoNome', descricao='$novoDesc', descricao_saiba_mais='$novoDescMais', preco=$novoPreco, data_adicionamento_modificacao='$data' WHERE id=$id";
        
                return $this->gestor->query($sql_update);
            }
        }

        public function getComida() {
            $id = $this->getId();
            return $this->gestor->query("SELECT * FROM menu WHERE id=$id");;
        }

        public function finalizarCompras() {
            $email = $_SESSION['email'];
            return $this->gestor->query("SELECT sum(menu.preco) as preco FROM menu, usuarios, pedido WHERE menu.id=pedido.id_produto AND usuarios.id=pedido.id_cliente AND usuarios.email='$email' AND pedido.estado='carrinho';")->fetch()['preco'];
        }

        public function getMaiorPreco() {
            return $this->gestor->query("SELECT FORMAT(MAX(preco),2) AS maior FROM menu")->fetch()["maior"];
        }

        public function getMenorPreco() {
            return $this->gestor->query("SELECT FORMAT(MIN(preco),2) AS menor FROM menu")->fetch()["menor"];
        }

        public function pratosDestaque() {
            return $this->gestor->query("SELECT * FROM pratosdestaque");
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

        private function getIdADM($email) {
            return $this->gestor->query("SELECT id FROM adm WHERE email='$email'")->fetch()['id'];
        }

        private function getId() {
            return filter_input(INPUT_GET, "id", FILTER_VALIDATE_INT);
        }

        private function getInicio($limiteItens) {
            return  ($this->pagina * $limiteItens) - $limiteItens;
        }

    }