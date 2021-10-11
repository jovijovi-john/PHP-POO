<?php

    // modelo

    class Funcionario {

        // atributos 

        public $nome = "John";
        public $telefone = "98 98599-7782";
        public $qntdFilhos = 0;

        // metodos

        function resumirCadFunc(){
            return  "$this->nome possui $this->qntdFilhos filhos, e seu telefone é $this->telefone";
        }

        function modificarNumFilhos($numFilhos){
            // afetar um atributo do objeto, não precisa retornar nada 
            $this->qntdFilhos = $numFilhos;
        }
    };

    $y = new Funcionario();
    echo $y->resumirCadFunc()."<br/>";

    $y->modificarNumFilhos(5);
    echo $y->resumirCadFunc()."<hr/>";
    
    $x = new Funcionario();
    echo $x->resumirCadFunc()."<br/>";
    
    $x->modificarNumFilhos(1);
    echo $x->resumirCadFunc()."<br/>";
?>