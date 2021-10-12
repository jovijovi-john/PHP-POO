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


    class Moto extends Veiculo{

        public $contraPesoGuidao = true;

        function __construct($placa, $cor){
            $this->placa = $placa;
            $this->cor = $cor;
        }

        function empinar(){
            echo "Empinando";
        }

    }


    $carro = new Carro("ABC1234", "Preto");
    echo "<pre>";
    print_r($carro);
    
    $moto = new Moto("BCD321", "Azul");
    print_r($moto);
    echo "</pre><hr/>";


    $carro->abrirTetoSolar();
    echo "<br/>";
    $carro->acelerar();
    echo "<br/>";
    $carro->freiar();
    
    echo "<hr/>";

    $moto->empinar();
    echo "<br/>";
    $moto->acelerar();
    echo "<br/>";
    $moto->freiar();
?>