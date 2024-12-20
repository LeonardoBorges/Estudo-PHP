<html>
    <head>
        <meta charset="utf-8">
        <title>Curso PHP</title>
        
    </head>

    <body>
        <?php

           $funcionario = null;
           $funcionario2 = '';
           $funcionario3 = false;


           if(is_null($funcionario)){   
               echo 'O funcionario é nulo';
           } else {
               echo 'O funcionario não é nulo';
           }
           echo '<br/>';

           if(is_null($funcionario2)){   
            echo 'O funcionario é nulo';
            } else {
                echo 'O funcionario não é nulo';
            }


            echo '<br/>';
            echo '<hr/>';   
            if(empty($funcionario)){   
                echo 'O funcionario está vazio';
            } else {
                echo 'O funcionario não está vazio';
            }
            echo '<br/>';

            if(empty($funcionario2)){   
                echo 'O funcionario está vazio';
            } else {
                echo 'O funcionario não está vazio';
            }
            echo '<br/>';   
            if(empty($funcionario3)){   
                echo 'O funcionario está vazio';
            } else {
                echo 'O funcionario não está vazio';
            }

           

        ?> 
    </body>
</html>