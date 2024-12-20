<html>
    <head>
        <meta charset="utf-8">
        <title>Curso PHP</title>
        
    </head>

    <body>
        <?php
        /*
        $itens = ['sofa', 'mesa', 'banheiro', 'cadeira','fogão', 'geladeira'];

         foreach($itens as $item){
             echo $item;
             echo '<br/>';

             if($item == 'cadeira'){
                 echo 'Você não pode colocar a cadeira aqui';
             }
         }
             */

        $funcionarios = [
            ['nome' => 'João', 'salario' => 2300], 
            ['nome' => 'Maria', 'salario' => 3000], 
            ['nome' => 'Julia', 'salario' => 3500] 
        ];
        

        foreach($funcionarios as $indice => $funcionario){ 
           
            foreach($funcionario as $chave => $valor){
                echo $chave.': '.$valor.'<br/>';
            }
        }
        ?> 
    </body>
</html>