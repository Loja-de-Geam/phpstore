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

    }

?>