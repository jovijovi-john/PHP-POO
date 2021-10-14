<?php

    interface EquipamentoEletronicoInterface {
        public function ligar();
        public function desligar();
    }


    class Geladeira implements EquipamentoEletronicoInterface {
        
        public function ligar(){
            echo "Ligando";
        }
        
        public function desligar(){
            echo "Desligando";
        }

        public function abrirPorta(){
            echo "abrindo a porta";
        }
    }
    
    class TV {
        
        public function ligar(){
            echo "Ligar";
        }
        
        public function desligar(){
            echo "Desligar";
        }
        
        public function trocarCanal(){
            echo "trocando canal";
        }
    }

    $x = new Geladeira();
    $y = new TV();

    //  ===================================================

    interface MamiferoInterface {
        public function respirar();
    }

    interface TerrestreInterface {
        public function andar();
    }

    interface AquaticoInterface {
        public function nadar();
    }

    class Humano implements MamiferoInterface, TerrestreInterface {
        
        public function andar() {
            echo "Humano andando";
        }

        public function respirar() {
            echo "Humano respirando";
        }

        public function conversar(){
            echo "Conversando";
        }
    }

    class Baleia implements MamiferoInterface, AquaticoInterface {

        
        public function respirar() {
            echo "Baleia respirando";
        }

        public function nadar() {
            echo "Baleia nadando";
        }

        protected function esguichar(){
            echo "Esguichando";
        }
    }

    // ===================================================================

    interface AnimalInterface {
        public function comer();
    }

    interface AveInterface extends AnimalInterface{
        public function voar();
    }

    class Papagaio implements AveInterface {
        
        public function voar(){
            echo "voando";
        }

        public function comer(){
            echo "comendo";
        }
    }
?>