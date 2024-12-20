<html>
    <head>
        <meta charset="utf-8">
        <title>Curso PHP</title>
        
    </head>

    <body>
        <?php

            // funcao simples
           // $preco = 900;
            // $preco2 = 10;

          function calculoBasico($preco, $preco2) {    
            $total = $preco + $preco2;
            return $total;
            }
            echo '<br/>';
            $total2 = calculoBasico(1,4);
            echo $total2;
             //$total = calculoBasico($preco, $preco2);
            //echo $total;

            //
        ?> 

    </body>
</html>