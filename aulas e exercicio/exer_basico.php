<html>
    <head>
        <meta charset="utf-8">
        <title>Curso PHP</title>
        
    </head>

    <body>
        <h1> Ficha Cadastradal para doar sangue </h1>
        <?php
     
            $nome = 'João';
            $idade = 79;
            $peso = 90.5;
            
            if((16 <= $idade && $idade <= 50) && $peso >= 50){

                echo "Atende aos Requisitos";
            } else {
                echo "Não atende aos requisitos";
            }

            
        ?> 

     
    </body>
</html>