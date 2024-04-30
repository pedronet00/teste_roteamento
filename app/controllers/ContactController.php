<?php 


    namespace app\Controller;

    class ContactController{
        public function index(){
            return Controller::view('contact');
        }

        public function store($params){
            var_dump($params->nome);
        }
    }


?>