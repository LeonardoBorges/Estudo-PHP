<html>
    <head>
        <meta charset="utf-8">
        <title>Curso PHP</title>
        
    </head>

    <body>
        <?php
            $texto = 'Curso completo de PHP';   
            echo $texto;
            echo '<br/>';

            // string to lower
            echo strtolower($texto);
            echo '<br/>';

            // string to upper
            echo strtoupper($texto);
            echo '<br/>';

            // string ucfirst
            echo ucfirst($texto);
            echo '<br/>';

            // string lcfirst
            echo lcfirst($texto);
            echo '<br/>';

            // string length
            echo strlen($texto);
            echo '<br/>';

            // string str_replace
            echo str_replace('PHP', 'Java', $texto);
            echo '<br/>';

            // string substr
            echo substr($texto, 0, 5) . '...';
            echo '<br/>';
        ?> 
    </body>
</html>