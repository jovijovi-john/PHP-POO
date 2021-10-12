<?php

    // modelo

    class Funcionario {

        // atributos 

        public $nome = null;
        public $telefone = null;
        public $qntdFilhos = null;

        // getters and setters


        // -----------------------------------
        
        function getNome() {
            return $this->nome;
        }
        
        function setNome($nome) {
            $this->nome = $nome;
        }
       
        // -----------------------------------
       
        function getTelefone(){
            return $this->telefone;
        }
        
        function setTelefone($telefone){
            $this->telefone = $telefone;
        }
        
        // -----------------------------------
       
        function getQntdFilhos(){
            return $this->qntdFilhos;
        }
        
        function setQntdFilhos($qntdFilhos){
            $this->qntdFilhos = $qntdFilhos;
        }
        
        // -----------------------------------
        
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

    $y->setNome("JoJo");
    $y->setQntdFilhos(3);
    $y->setTelefone("98 985997782");

    echo "Nome: ".$y->getNome()." <br/>";
    echo "Telefone: ".$y->getTelefone()." <br/>";
    echo "Quantidade de Filhos: ".$y->getQntdFilhos()." <br/><br/>";
    
    echo $y->resumirCadFunc()."<hr/>";
    


    $x = new Funcionario();
    
    $x->setNome("ViVi");
    $x->setQntdFilhos(5);
    $x->setTelefone("98 985307650");

    echo $x->resumirCadFunc()."<hr/>";
?>