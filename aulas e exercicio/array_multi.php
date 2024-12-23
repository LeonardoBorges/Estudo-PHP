<html>
    <head>
        <meta charset="utf-8">
        <title>Curso PHP</title>
        
    </head>

    <body>
        <?php

           $lista_coisas = [];

           $lista_coisas ['frutas'] = ['1' =>'banana', 'maçã', 'laranja', 'uva'];
           $lista_coisas ['pessoas'] = [1 =>['nome' => 'João', 'idade' => 25],'b' => 'Maria','c' =>'Pedro','d' => 'Ana'];
           $lista_coisas['pessoas'][1] = ['nome' => 'João', 'idade' => 25];
           echo '<pre>';   
           print_r($lista_coisas);


           print_r($lista_coisas['pessoas']);
        ?> 
    </body>
</html>