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

        public function menu()
        {
            Store::Layout([
                'menu'
            ]);
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
        
        public function comousar()
        {

            Store::Layout([
                'comousar'
            ]);

        }

        public function informarbug()
        {

            Store::Layout([
                'informarbug'
            ]);

        }

        public function outros()
        {

            Store::Layout([
                'outros'
            ]);

        }

        public function reclamacao()
        {

            Store::Layout([
                'reclamacao'
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

        public function adm()
        {

            Store::Layout([
                'adm'
            ]);

        }

        public function cadComidas()
        {

            Store::Layout([
                'cadComidas'
            ]);

        }

        public function edit()
        {

            Store::Layout([
                'edit'
            ]);

        }

        public function delete()
        {

            Store::Layout([
                'delete'
            ]);

        }

        public function comidas()
        {

            Store::Layout([
                'comidas'
            ]);

        }

    }

?>