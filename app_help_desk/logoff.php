<?php
    session_start();

    /*
    echo '<pre>';
    print_r($_SESSION);
    echo '</pre>';
    // remover indice de sessão
    // unset();

    // destruir variavel de sessão
    // session_destroy();


    unset($_SESSION['x']); // para remover indice apenas se existir
    echo '<pre>';
    print_r($_SESSION);
    echo '</pre>';


    session_destroy(); // será destruída
    // forçar redirecionamento
    echo '<pre>';
    print_r($_SESSION);
    echo '</pre>';
     */ 

     session_destroy();
     header('Location: index.php');


?>