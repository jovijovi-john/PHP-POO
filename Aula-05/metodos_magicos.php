<?php

    // modelo

    class Funcionario {

        // atributos 

        public $nome = null;
        public $telefone = null;
        public $qntdFilhos = null;
        public $cargo = null;
        public $salario = null;

        // overloading (sobrecarga gos métodos)

        function __get($atributo){
            return $this->$atributo;
        }

        function __set($atributo, $valor) {
            $this->$atributo = $valor;
        }

        // -----------------------------------
        
        // metodos

        function resumirCadFunc(){
            return  "$this->nome possui $this->qntdFilhos filhos, trabalha como $this->cargo ganhando R$ $this->salario, e seu telefone é $this->telefone";
        }
    };

    $y = new Funcionario();

    $y->__set("nome","JoJo");
    $y->__set("telefone", "98 985997782");
    $y->__set("qntdFilhos", 2);
    $y->__set("cargo", "programador");
    $y->__set("salario", 8500);

    echo "Nome: ".$y->__get("nome")." <br/>";
    echo "Telefone: ".$y->__get("telefone")." <br/>";
    echo "Quantidade de Filhos: ".$y->__get("qntdFilhos")."<br/>";
    echo "Cargo: ".$y->__get("cargo")."<br/>";
    echo "Salario: R$ ".$y->__get("salario")."<br/><br/>";
    
    echo $y->resumirCadFunc()."<hr/>";
    

    $x = new Funcionario();
    
    $x->__set("nome", "ViVi");
    $x->__set("telefone", "98 985307650");
    $x->__set("qntdFilhos", 4);
    $x->__set("cargo", "dev web");
    $x->__set("salario", 6000);

    echo "Nome: ".$x->__get("nome")."<br/>";
    echo "Telefone: ".$x->__get("telefone")."<br/>";
    echo "Quantidade de filhos".$x->__get("qntdFilhos")."<br/>";
    echo "Cargo: ".$x->__get("cargo")."<br/>";
    echo "Salario: R$ ".$x->__get("salario")."<br/><br/>";

    echo $x->resumirCadFunc()."<hr/>";
?>