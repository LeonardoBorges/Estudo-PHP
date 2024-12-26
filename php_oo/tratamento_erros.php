<?php

    try{
        echo '<h3> *** Try *** </h3>';

        // $sql = 'SELECT * FROM usuarios';
        // mysql_query($sql); // error
        
        if(!file_exists('require_arquivo_a.php')){
            throw new Exception('Arquivo não encontrado, não estava disponivel na hora ');
        }

    } catch (Error $e){
        echo '<h3> *** Catch *** </h3>';
        echo '<p style="color: red" > ' . $e . '</p>';

    } catch (Exception $e){
        echo '<h3> *** Catch Exception *** </h3>';
        echo '<p style="color: red" > ' . $e . '</p>';

    } finally{
        echo '<h3> *** Finally *** </h3>';
    }
?> 