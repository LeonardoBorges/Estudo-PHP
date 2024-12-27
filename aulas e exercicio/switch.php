<html>
    <head>
        <meta charset="utf-8">
        <title>Curso PHP</title>
        
    </head>

    <body>
        <?php

            $preco = 900;

            switch ($preco) {
                case ($preco < 10):
                    echo 'Preço de 10';
                    break;
                case 20:
                    echo 'Preço de 20';
                    break;
                case 30:
                    echo 'Preço de 30';
                    break;
                
                case ($preco >= 50 && $preco <= 100):
                    echo 'Preço de 50';
                    break;
                default:
                    echo 'Preço inválido';
                    break;
            }


        ?> 

    </body>
</html>