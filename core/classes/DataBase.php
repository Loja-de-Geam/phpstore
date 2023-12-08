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

        public function getPaginaFinal($limiteItens=5) {
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

    }

?>