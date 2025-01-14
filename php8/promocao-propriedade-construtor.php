<?php
/*
    class Produto {
        public string $nome ="";
        public float $valor = 0;

        public function __construct($nome, $valor) {
            $this->nome = $nome;
            $this->valor = $valor;
        }
    }
*/
    // construtor 
    /*
    class Produto {
        public function __construct(
            public string $nome ="",
            public float $valor = 0
        ){}
    }

    $produto = new Produto("Notebook", 2000);
    
    echo "Produto: " . $produto->nome;
    echo "<br>";
    echo "Valor: " . $produto->valor;
*/ 

    // argumentos e construtor
    class Produto {
        public string $nome ="";
        public float $valor = 0;

        public function __construct($nome, $valor) {
            $this->nome = $nome;
            $this->valor = $valor;
        }
    }

    
    $produto = new Produto(valor: 2600,nome:"celular");
    
    echo "Produto: " . $produto->nome;
    echo "<br>";
    echo "Valor: " . $produto->valor;

    ?>