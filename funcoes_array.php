<html>
    <head>
        <meta charset="utf-8">
        <title>Curso PHP</title>
        
    </head>

    <body>
        <?php

        /*
          $array = ['String'];   
          $retorno = is_array($array);
        
          if($retorno){
              echo 'O array é um array';
          } else {
              echo 'O array não é um array';
          }
        */

            /*
            $array = [1=> 'a', 7=> 'b', 18=> 'c'];
            echo '<pre>';
            print_r($array);
            echo '</pre>';
            
            $chaves = array_keys($array);
            echo '<pre>';
            print_r($chaves);
            echo '</pre>';
            */ 


            /*
            $array = ['banana', 'maçã', 'laranja', 'uva', 'abacate'];
            echo '<pre>';
            print_r($array);
            echo '</pre>';  

            sort($array);
            echo '<pre>';
            print_r($array);        
            echo '</pre>';
            */

            $array = ['banana', 'maçã', 'laranja', 'uva', 'abacate'];
            echo '<pre>';
            print_r($array);
            echo '</pre>';  

            asort($array);
            echo '<pre>';
            print_r($array);        
            echo '</pre>';
        ?> 
    </body>
</html>