<html>
    <head>
        <meta charset="utf-8">
        <title>Curso PHP</title>
        
    </head>

    <body>
        <?php

            //in-array() -> true or false
            //array_search() -> retorna o index da posição da pesquisa


           $lista_frutas = ['banana', 'maçã', 'laranja', 'uva'];
       
          echo '<pre>';
          print_r($lista_frutas);
          echo'</pre>'; 

          echo in_array('abacate', $lista_frutas);
          echo '<br/>';


          $index = array_search('uva ', $lista_frutas);
          if($index != null){
              echo "A pesquisa foi realizada com sucesso" ;
          } else {
              echo 'A pesquisa não foi realizada';
          }
       ?> 
    </body>
</html>