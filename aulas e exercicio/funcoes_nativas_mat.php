<html>
    <head>
        <meta charset="utf-8">
        <title>Curso PHP</title>
        
    </head>

    <body>
        <?php

            $valor  = 99.39;

            // ceil 
            echo ceil($valor);
            echo '<br/>';

            // floor
            echo floor($valor);
            echo '<br/>';

            // round
            echo round($valor);
            echo '<br/>';   

            // rand
            echo getrandmax();
            echo '<br/>';
            echo rand(1,10);
            echo '<br/>';

            // sqrt
            echo sqrt($valor);     
            echo '<br/>';
        ?> 

    </body>
</html>