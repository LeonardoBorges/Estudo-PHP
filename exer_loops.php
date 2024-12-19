<html>
    <head>
        <meta charset="utf-8">
        <title>Curso PHP</title>
        
    </head>

    <body>
        <?php

            $registros = [ 
            ['titulo' => 'Titulo Noticia 1', 'conteudo' => 'Conteudo Noticia 1'], 
            ['titulo' => 'Titulo Noticia 2', 'conteudo' => 'Conteudo Noticia 2'], 
            ['titulo' => 'Titulo Noticia 3', 'conteudo' => 'Conteudo Noticia 3'], 
            
            ];

            /*
            $indice = 0;
            while($indice <= count($registros) -1 ){

               echo '<h3>'.$registros[$indice]['titulo'].'</h3>';
               echo '<p>'.$registros[$indice]['conteudo'].'</p>';
                echo '<br/>';
                $indice++;

            }
                */

                /*
            do{
                echo '<h3>'.$registros[$indice]['titulo'].'</h3>';
                echo '<p>'.$registros[$indice]['conteudo'].'</p>';
                echo '<br/>';
                $indice++;
            } while($indice <= count($registros) -1 );
                */

            for($indice = 0; $indice <= count($registros) -1 ; $indice++){
                echo '<h3>'.$registros[$indice]['titulo'].'</h3>';
                echo '<p>'.$registros[$indice]['conteudo'].'</p>';
                echo '<br/>';
            }   

        ?> 

    </body>
</html>