<?php 

    namespace core\controladores;

    use core\classes\Store;

    class Main
    {

        public function index()
        {

            Store::Layout([
                'inicio'
            ]);

        }

        public function loja()
        {
            echo 'Loja!!!!!!!!!';
        }

        public function cadastro()
        {

            Store::Layout([
                'cadastro'
            ]);

        }

        public function login()
        {

            Store::Layout([
                'login'
            ]);

        }

        public function suporte()
        {

            Store::Layout([
                'suporte'
            ]);

        }

        public function sobre()
        {

            Store::Layout([
                'sobre_a_Empresa'
            ]);

        }

        public function oquefazemos()
        {

            Store::Layout([
                'o_que_fazemos'
            ]);

        }
        
        public function bebidas()
        {

            Store::Layout([
                'Bebidas'
            ]);

        }

        public function doces()
        {

            Store::Layout([
                'doces'
            ]);

        }

        public function salgados()
        {

            Store::Layout([
                'salgados'
            ]);

        }

        public function erro()
        {

            Store::Layout([
                'erro'
            ]);

        }

        public function logout()
        {

            Store::Layout([
                'logout'
            ]);

        }

    }

?>