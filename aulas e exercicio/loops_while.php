<html>
    <head>
        <meta charset="utf-8">
        <title>Curso PHP</title>
        
    </head>

    <body>
        <?php
            
            $num = 5 ;
            while($num != 11){
                echo "$num <br/>";
                
                $num++;
                if($num == 10){
                    echo "$num <br/>";
                    break;
                }
           
            }
        ?> 

    </body>
</html>