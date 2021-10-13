<?php

    class Exemplo {
        
        public static $atributo1 = "eu sou um atributo estático";
        public $atributo2 = "eu sou um atributo normal";

        public static function metodo1 (){
            // $this->atributo1 = "novo";
            // echo $atributo1;
            echo "eu sou um método estático";
        }
        
        public function metodo2 (){
            echo "eu sou um método normal";
        }
    }

    $exemplo = new Exemplo();
    echo Exemplo::$atributo1."<br/>";
    Exemplo::metodo1();
    echo "<br/>";
    
    // echo Exemplo::$atributo2."<br/>";
    // Exemplo::metodo2();
    // echo "<br/>";

    // echo $exemplo->atributo1;
    echo $exemplo->metodo2();
?>