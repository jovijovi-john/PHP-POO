<?php

    class Veiculo {

        public $placa = null;
        public $cor = null;
    
        function acelerar(){
            echo "Acelerando";
        }

        function freiar(){
            echo "Freiando";
        }

        function trocarMarcha(){
            echo "Desengatar embreagem com o pé e engatar marcha com a mão";
        }
    }

    class Carro extends Veiculo {

        public $teto_solar = true;

        // -------------------------------------------

        function __construct($placa, $cor){
            $this->placa = $placa;
            $this->cor = $cor;
        }

        // -------------------------------------------

        function abrirTetoSolar(){
            echo "Abrindo teto solar";
        }

        function alterarPosicaoVolante(){
            echo "Alterando posição do volante";
        }
    }


    class Moto extends Veiculo {

        public $contraPesoGuidao = true;

        function __construct($placa, $cor){
            $this->placa = $placa;
            $this->cor = $cor;
        }

        function empinar(){
            echo "Empinando";
        }

        function trocarMarcha(){
            echo "Desengatar embreagem com o mão e engatar marcha com a pé";
        }

    }

    class Caminhao extends Veiculo {}


    $carro = new Carro("ABC1234", "Preto");
    $moto = new Moto("BCD321", "Azul");
    $caminhao = new Caminhao();



    $carro->trocarMarcha();
    echo "<br/>";
    $moto->trocarMarcha();
    echo "<br/>";
    $caminhao->trocarMarcha();


?>