<?php 

    namespace core\classes;

    use Exception;
    use PDO;
    use PDOException;

    class DataBase
    {
        // Gestão da Base de Dados
        
        private $base_de_dados;
        private function ligar()
        {
            // Ligar base de dados
            $this->base_de_dados = new PDO(
                'mysql:host='.MYSQL_SERVER.';'.
                'dbname='.MYSQL_DATABASE.';'.
                'charset='.MYSQL_CHARSET,
                MYSQL_USER,
                MYSQL_PASS,
                array(PDO::ATTR_PERSISTENT => true)
            );
            // Debug
            $this->base_de_dados->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
        }

        // ================================================================================

        private function desligar()
        {
            // Desligar Base de dados
            $this->base_de_dados = null;
        }

        // ================================================================================

        public function select($sql, $parametros=null)
        {

            // Verificar se é SELECT
            if (!preg_match("/^SELECT/i", $sql)) {
                throw new Exception('Base de Dados - Não é uma instrução SELECT');
                // die('Base de Dados - Não é uma instrução SELECT');
            }

            // Executa função de pesquisa do SQL
            $this->ligar();

            $resultados = null;

            // Comunicação com a Base de Dados
            try {
                // Comunicação com o BD
                if(!empty($parametros))
                {
                    $executar = $this->base_de_dados->prepare($sql);
                    $executar->execute($parametros);
                    $resultados = $executar->fetchAll(PDO::FETCH_CLASS);
                }else
                {
                    $executar = $this->base_de_dados->prepare($sql);
                    $executar->execute();
                    $resultados = $executar->fetchAll(PDO::FETCH_CLASS);
                }

            } catch (PDOException $e) {
                // Caso exista erro
                return false;
            }

            // Desligar BD
            $this->desligar();
            // Devolver resultados
            return $resultados;
        }

        // ================================================================================

        public function insert($sql, $parametros=null)
        {

            // Verificar se é INSERT
            if (!preg_match("/^INSERT/i", $sql)) {
                throw new Exception('Base de Dados - Não é uma instrução INSERT');
                // die('Base de Dados - Não é uma instrução INSERT');
            }

            // Executa função de pesquisa do SQL
            $this->ligar();

            // Comunicação com a Base de Dados
            try {
                // Comunicação com o BD
                if(!empty($parametros))
                {
                    $executar = $this->base_de_dados->prepare($sql);
                    $executar->execute($parametros);
                }else
                {
                    $executar = $this->base_de_dados->prepare($sql);
                    $executar->execute();
                }

            } catch (PDOException $e) {
                // Caso exista erro
                return false;
            }

            // Desligar BD
            $this->desligar();
        }

        // ================================================================================

        public function update($sql, $parametros=null)
        {

            // Verificar se é UPDATE
            if (!preg_match("/^UPDATE/i", $sql)) {
                throw new Exception('Base de Dados - Não é uma instrução UPDATE');
                // die('Base de Dados - Não é uma instrução UPDATE');
            }

            // Executa função de pesquisa do SQL
            $this->ligar();

            // Comunicação com a Base de Dados
            try {
                // Comunicação com o BD
                if(!empty($parametros))
                {
                    $executar = $this->base_de_dados->prepare($sql);
                    $executar->execute($parametros);
                }else
                {
                    $executar = $this->base_de_dados->prepare($sql);
                    $executar->execute();
                }

            } catch (PDOException $e) {
                // Caso exista erro
                return false;
            }

            // Desligar BD
            $this->desligar();
        }

        // ================================================================================

        public function delete($sql, $parametros=null)
        {

            // Verificar se é DELETE
            if (!preg_match("/^DELETE/i", $sql)) {
                throw new Exception('Base de Dados - Não é uma instrução DELETE');
                // die('Base de Dados - Não é uma instrução DELETE');
            }

            // Executa função de pesquisa do SQL
            $this->ligar();

            // Comunicação com a Base de Dados
            try {
                // Comunicação com o BD
                if(!empty($parametros))
                {
                    $executar = $this->base_de_dados->prepare($sql);
                    $executar->execute($parametros);
                }else
                {
                    $executar = $this->base_de_dados->prepare($sql);
                    $executar->execute();
                }

            } catch (PDOException $e) {
                // Caso exista erro
                return false;
            }

            // Desligar BD
            $this->desligar();
        }


        // ================================================================================

        public function statement($sql, $parametros=null)
        {

            // Verificar se é uma instrução diferente das anteriores
            if (preg_match("/^(SELECT|INSERT|UPDATE|DELETE)/i", $sql)) {
                throw new Exception('Base de Dados - Invalida');
                // die('Base de Dados - Invalida');
            }

            // Executa função de pesquisa do SQL
            $this->ligar();

            // Comunicação com a Base de Dados
            try {
                // Comunicação com o BD
                if(!empty($parametros))
                {
                    $executar = $this->base_de_dados->prepare($sql);
                    $executar->execute($parametros);
                }else
                {
                    $executar = $this->base_de_dados->prepare($sql);
                    $executar->execute();
                }

            } catch (PDOException $e) {
                // Caso exista erro
                return false;
            }

            // Desligar BD
            $this->desligar();
        }

    }

?>