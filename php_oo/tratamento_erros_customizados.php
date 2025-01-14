<?php
    class MinhaExceptionCustomizada extends Exception {
        private $erro = '';

        public function __construct($erro){
            $this->erro = $erro;
        }

        public function exibirMensagemErroCustomizada(){
            echo '<div style="border solid 1px red; padding: 10px; margin: 10px; background-color: pink;">';
                echo $this->erro;
            echo '</div>';
        }
    }



    try{

        throw new MinhaExceptionCustomizada('Erro customizado');

    } catch (MinhaExceptionCustomizada $e){
        $e->exibirMensagemErroCustomizada();
    }


?>
