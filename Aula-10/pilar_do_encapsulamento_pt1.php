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

    $pai = new Pai();

    echo $pai->sobrenome;
    echo "<br/>";

    echo $pai->nome = "novoNome";
    echo "<br/>";

    echo $pai->nome;
    echo "<br/>";
    
    echo $pai->executarAcao();

?>