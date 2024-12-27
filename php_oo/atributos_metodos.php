<?php

    class Exemplo { 
        public static $atributo1 = 'Eu sou um atributo estático';
        public $atributo2 = 'Eu sou um atributo normal';

        public static function metodo1(){
            echo 'Eu sou um metodo estático';
        }

        public function metodo2(){
            echo 'Eu sou um metodo normal';
        }

  
    }
       $x = new Exemplo();
       echo $x->atributo2;
      /*
    echo Exemplo::$atributo1; 
    echo '<br/>';
    echo Exemplo::metodo1();
    

    echo '<br/>';
    Exemplo::metodo2();
    */

    

?>
