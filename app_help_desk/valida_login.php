<?php 
    /*
        print_r($_GET); 
        echo '<br>';

        echo $_GET['email'];    
        echo '<br>';
        echo $_GET['senha'];
    */

    /*
        print_r($_POST); 
        echo '<br>';

        echo $_POST['email'];    
        echo '<br>';
        echo $_POST['senha'];
    */

    //variavel que verifica autenticação

    session_start();

   
    $usuario_autenticado = false;

    // usuarios do sistema
    $usuarios_app = [
    ['email' => 'adm@teste.com.br', 'senha' => '123456'],
    ['email' => 'user@teste.com.br', 'senha' => 'abcd'],

    ];
  
    foreach($usuarios_app as $user){

        if( $user['email'] === $_POST['email'] && $user['senha'] === $_POST['senha']){
          $usuario_autenticado = true;

        }

        
    }
    if($usuario_autenticado){
        echo 'Usuário Autenticado';
        $_SESSION['autenticado'] = 'SIM';
    } else {
        $_SESSION['autenticado'] = 'NAOS';
        header('Location: index.php?login=erro');

    }
?>