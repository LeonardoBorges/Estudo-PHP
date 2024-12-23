<html>
    <head>
        <meta charset="utf-8">
        <title>Curso PHP</title>
        
    </head>

    <body>

        <h3> Calulo de imposto de renda</h3>

        <p class="text-center">
        <?php

          function calculoImposto($salario) {
            
            switch ($salario) {
                case ($salario <= 1903.98):
                    echo 'Você está isento de imposto';
                    break;
                case ($salario > 1903.98 && $salario <= 2826.65):
                    echo 'Você está com imposto de 7.5%';
                    $total_imposto = $salario * 0.075;
                    echo '<br/>';
                    echo "Valor total a pagar de imposto: $total_imposto";
                    echo '<br/>';
                    $total = $salario + $total_imposto;
                    echo "Valor total a pagar: $total";
                    break;
                case ($salario > 2826.65 && $salario <= 3751.05):
                    echo 'Você está com imposto de 15%';    
                    $total_imposto = $salario * 0.15;
                    echo '<br/>';
                    echo "Valor total a pagar de imposto: $total_imposto";
                    $total = $salario + $total_imposto;
                    echo "Valor total a pagar: $total";
                    break;
                case ($salario > 3751.05 && $salario <= 4664.68 ):
                    echo 'Você está com imposto de 22.5%';
                    $total_imposto = $salario * 0.225;
                    echo '<br/>';
                    echo "Valor total a pagar deimposto: $total_imposto";
                    $total = $salario + $total_imposto;
                    echo "Valor total a pagar: $total";
                    break;  
                case $salario > 4664.68:
                    echo 'Você está com imposto de 27.5%';
                    $total_imposto = $salario * 0.275;
                    echo '<br/>';
                    echo "Valor total a pagar de imposto: $total_imposto";
                    $total = $salario + $total_imposto;
                    echo "Valor total a pagar: $total";
                    break;
                    
                default:
                    echo 'Valor inválido';
                    break;
            }
           
            
          }

          calculoImposto(2000);

        ?> 
        </p>
    </body>
</html>