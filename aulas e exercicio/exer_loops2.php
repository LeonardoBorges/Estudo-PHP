<html>
    <head>
        <meta charset="utf-8">
        <title>Curso PHP</title>
        
    </head>

    <body>
        <?php
        $sorteio = [];

        function calcularSorteio(){
            $numero = [];
            for($aux = 0; $aux <= 5; $aux++){
                $numero[$aux] = rand(1,60);
                
            }

            
            return $numero;
        }

        $sorteio = calcularSorteio();

        echo "Números sorteados: " . implode(", ", $sorteio);

        
        ?> 
    </body>
</html>