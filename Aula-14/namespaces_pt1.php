<?php

    namespace A;
    
    class Cliente implements CadastroInterface, \B\CadastroInterface{
        // ta implementando a interface do namespace A e a do namespace B

        public $nome = "John";

        public function __construct() {
            echo "<pre>";
            print_r(get_class_methods($this));
            echo "</pre>";
        }
        
        public function __get($attr){
            return $this->$attr;
        }

        
        public function salvar(){
            echo "Salvando";
        }

        public function remover(){
            echo "removendo";
        }
    }

    interface CadastroInterface {
        public function salvar();
    }

    
    
    namespace B;
    


    class Cliente implements CadastroInterface, \A\CadastroInterface{

        
        // ta implementando a interface do namespace B e a do namespace A
        
        public $nome = "Jovi";

        
        public function __construct() {
            echo "<pre>";
            print_r(get_class_methods($this));
            echo "</pre>";
        }


        public function __get($attr){
            return $this->$attr;
        }

        public function remover() {
            echo "removendo";
        }
        
        public function salvar(){
            echo "Salvando";
        }
    }

    
    interface CadastroInterface {
        public function remover();
    }

    // $c = new Cliente();
    // echo "<pre>";
    // print_r($c);
    // echo "</pre>";
    // echo $c->__get("nome");
    // // aqui vai printar o "Jovi", isso porque ainda estamos no namespace b

    
    $c = new \B\Cliente();
    echo "<pre>";
    print_r($c);
    echo "</pre>";
    echo $c->__get("nome");

?>