<?php

    class Pai {

        private $nome = "John";
        protected $sobrenome = "Goncalves";
        public $humor = "Bravo";

    
        public function __get($attr){
            return $this->$attr;
        }
        
        public function __set($attr, $value){
            $this->$attr = $value;
        }

        private function executarMania(){
            echo "Assobiando";
        }

        protected function responder(){
            echo "Oi";
        }

        public function executarAcao(){
            // esse método está funcionando como interface. Por ser público a aplicação pode executar esse método do objeto e internamente esse método trata de fazer alguma coisa
            
            $x = rand(1, 10);

            if ($x > 2 && $x < 6){
                $this->executarMania();
            }  else {
                $this->responder();
            }
            
        }
    }

    class Filho extends Pai {

        public function __construct(){
            
            echo " dentro da classe filha <pre>";
            print_r(get_class_methods($this));
            echo "</pre>";

        }
        
        private function executarMania(){
            echo "Fazendo outra coisa";
        }
        
        protected function responder(){
            echo "Executando responder da classe filha";
        }

        public function getAtributo($attr){
            return $this->$attr;
        }

        public function setAtributo($attr, $value){
            $this->$attr = $value;
        }   
    }

    $pai = new Pai();
    $filho = new Filho();

    // echo "<pre>";
    // print_r($filho);
    // echo "</pre>";

    // echo $filho->getAtributo("humor")."<br/>";
    // echo $filho->getAtributo("sobrenome")."<br/>";
    // echo $filho->getAtributo("nome")."<br/>";
    
    // $filho->setAtributo("humor", "muito triste!");
    // echo $filho->getAtributo("humor")."<br/>";
    
    // $filho->setAtributo("sobrenome", "cruz");
    // echo $filho->getAtributo("sobrenome")."<br/>";
    
    
    echo "<pre>";
    print_r($filho);
    echo "</pre>";

    // $filho->setAtributo("nome", "jojo"); // isso aqui vai adicionar um atributo nome, mas nao é o atributo nome do pai

    // echo $filho->getAtributo("nome")."<br/>";
    $filho->name = "oioi?";
    
    echo "<pre>";
    print_r($filho);
    echo "</pre>";

    // exibindo os métodos do objeto

    echo "<hr/><pre>";
    print_r(get_class_methods($filho));
    echo "</pre>";

    echo $filho->nome."<br/>";
    $filho->__set("nome", "novo nome do pai");
    echo $filho->nome;

    
    echo "<hr/><pre>";
    print_r(get_class_methods($filho));
    echo "</pre>";

    $filho->executarAcao();
    // $filho->responder();


?>