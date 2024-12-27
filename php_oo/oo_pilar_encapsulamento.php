<?php

    class Pai {
        private $nome = 'João';
        protected $sobrenome = 'Silva';
        public $humor = 'Feliz';

        public function getNome(){
            return $this->nome;
        }

        public function setNome($nome){
            if(strlen($nome) >=5){
            $this->nome = $nome;
            
        } else{
            echo 'Nome inválido';
            }
        }

        function getSobrenome(){
            return $this->sobrenome;
        }

        public function setSobrenome($nome){
            if(strlen($nome) >=5){
            $this->sobrenome = $nome;
            
        } else{
            echo 'Sobrenome inválido';
            }
        }   

        

    }

    $pai = new Pai();
    echo $pai->getNome();
    echo '<br/>';
    $pai->setNome('Maria');
    echo $pai->setSobrenome('Borges');   
    echo $pai->getSobrenome();

    
    

    /*
    echo $pai->humor;
    echo '<br/>';
    echo $pai->humor='Triste';

     */
?>