<?php

    class MinhaExceptionCustomizada extends Exception {
        
        private $erro = '';

        public function __construct($erro){
            $this->erro = $erro;
        }

        public function exibirMensagemErroCustomizada() {
            echo "<div style='display: inline-flex; border: 1px solid #000; color: white; padding: 15px; background: red'>";
            echo $this->erro;
            echo "</div>";
        }
    }

    try {

        throw new MinhaExceptionCustomizada("Exceção de teste");

        // Error (php)  -> geralmente nao utilizamos no dia a dia
        // Exception (programadores) 
        // Customizadas (programadores)

    } catch (MinhaExceptionCustomizada $e){
        $e->exibirMensagemErroCustomizada();
    }

?>