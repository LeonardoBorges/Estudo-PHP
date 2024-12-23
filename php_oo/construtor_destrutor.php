<?php
    class Pessoa {
        public $nome = null;

         function __construct($nome){
            echo ' Objeto iniciado';
            $this->nome = $nome;
         }

         function __destruct(){
             echo ' Objeto destruido';
         }

         function  __get($atributo){
            return $this ->$atributo; 
            
            }
        
        function correr(){
            return $this->__get('nome') . ' está correndo';
        }
    }    

    $pessoa = new Pessoa('Leo');
    echo '<br/ > Nome: ' . $pessoa->__get('nome');
    echo '<br/ > Correndo: ' . $pessoa->correr();

    echo '<br/>';
    unset($pessoa);
?>