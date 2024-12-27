<?php
    function senEmail($destinatario = "",$cc="", $assunto = "", $mensagem = "") {
        echo "Destinatários: " . $destinatario . "<br>";
        echo "CC: " . $cc . "<br>";
        echo "Assunto: " . $assunto . "<br>";
        echo "Mensagem: " . $mensagem . "<br>";
    }

    senEmail(
        "leo@dominio.com.br",
        "joao@dominio.com.br",
        "Argumentos nomeados",
        "Dominando a ferramenta de argumentos nomeados"

    );

    echo "<hr>";
    
    senEmail(
        "leo@dominio.com.br",
        
        "Argumentos nomeados",
        "Dominando a ferramenta de argumentos nomeados"

    );

    echo "<hr>";

    echo "<h1>Argumentos nomeados</h1>";

    senEmail(
        destinatario: "leo@dominio.com.br",
        cc: "joao@dominio.com.br",
        assunto: "Argumentos nomeados",
        mensagem: "Dominando a ferramenta de argumentos nomeados"

    );

    echo "<br>";

    senEmail(
        destinatario: "leo@dominio.com.br",
        assunto: "Argumentos nomeados",
        mensagem: "Dominando a ferramenta de argumentos nomeados"
    );
?>