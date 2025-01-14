<?php

    $dsn = 'mysql:host=localhost;dbname=php_pdo';
    $usuario = 'root';
    $senha = '';

    try{
        $conexao = new PDO($dsn, $usuario, $senha);

        $query = '
            CREATE TABLE if not exists tb_usuarios(
                id int not null primary key auto_increment,
                nome varchar(50) not null,
                email varchar(100) not null,
                senha varchar(32) not null
            )
        ';
        $retorno = $conexao->exec($query);
        //0        
        echo $retorno;
        echo '<br>';


        $query = '
            delete from tb_usuarios;
        ';

        $retorno = $conexao->exec($query);
        echo $retorno;
       
        
    } catch(PDOException $e){
        echo 'Erro: '.$e->getCode().' Mensagem: '.$e->getMessage();
        //registrar erro
        
    }

?>
