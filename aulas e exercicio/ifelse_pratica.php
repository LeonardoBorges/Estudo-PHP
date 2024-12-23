<html>
    <head>
        <meta charset="utf-8">
        <title>Curso PHP</title>
        
    </head>

    <body>
        <?php

        // frete de ecomerce

        $produto = 'camiseta';
        $preço =  19.99;
        $qtt = 3;
        $frete = 10;
        $cartão =  true;
        $recebeu_desconto = true;
        $total_compra = ($preço * $qtt) + $frete;

        if(($preço *  $qtt) > 100 || $cartão == true ){
            $total_compra = $total_compra - $frete;
            echo "Seu frete é por conta da casa, total  da sua compra é: $total_compra ";
            $recebeu_desconto = true;
        } else {
            echo "total  da sua compra com frete é: $total_compra ";
            $recebeu_desconto = false;
        }
        ?> 
        <p>  Possui CARTÃO? <?= $teste = $cartão ? 'Sim' : 'Não'; ?></p>
        <?php 
           
               $teste = $cartão ? 'Sim' : 'Não';
               echo $teste;
        
        ?>
        </p>

        <p>
        <?php 
            if($recebeu_desconto == true){
                echo"o seu desconto foi de $frete reais";
            } else {
                echo"o seu desconto seria de $frete reais";
                echo "<br/>";
                echo "adicione mais itens ou faça o cartão da loja para receber descontos";
            }
            
        
        ?>
        </p>

    </body>
</html>