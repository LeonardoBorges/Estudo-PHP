<html>
    <head>
        <meta charset="utf-8">
        <title>Curso PHP</title>
        
    </head>

    <body>
        <?php

            echo date('d/m/Y H:i:s');

            echo '<br/>';

            echo date_default_timezone_get();

            echo '<br/>';   
            date_default_timezone_set('America/Sao_Paulo');

            echo date('d/m/Y H:i:s');
        ?> 

        <hr/>
        <?php
            $data_ini = '2020-01-01';
            $data_fim = '2020-12-31';

            $time_ini =  strtotime($data_ini);
            $time_fim =  strtotime($data_fim);

            $diferenca = $time_fim - $time_ini;
            echo $diferenca;

            $segundos_em_dia = 24 * 60 * 60;    

            echo '<br/>';
            echo $diferenca / $segundos_em_dia;
        ?>

    </body>
</html>