<?php

    class Pessoa {

        public $nome = null;

        function __construct($nome){
            $this->__set("nome", $nome);
        }

        function __destruct(){
            echo "objeto removido";
        }

        // getters and setters

        function __get($attribute){
            return $this->$attribute;
        }

        function __set($attribute, $value){
            $this->$attribute = $value;
        }

        // methods

        function correr(){
            return $this->__get("nome")." está correndo";
        }
    }

    $pessoa = new Pessoa("John");
    
    echo $pessoa->__get("nome")." foi criado.<br/>";
    echo $pessoa->correr()."<br/>";

    // unset($pessoa);

?>