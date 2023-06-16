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

    }

?>