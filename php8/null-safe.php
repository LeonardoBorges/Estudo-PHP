<?php
   /*
   $objeto = null;

     $objeto?->total();

    */

    class Funcionario{
        public function __construct(
            public string $nome ="",
            public float $salario = 0
        
        ){}
        public function info() {
            return "Funcionario: " . $this->nome . " Salario: " . $this->salario;
        }
    }

    class FolhaPagamento{

        private $funcionarios = null;

        public function __construct(){
            $this->funcionarios = [ 
                new Funcionario("João", 1000),
                new Funcionario("Maria", 2000),
                new Funcionario("Pedro", 3000),
                new Funcionario("Ana", 4000),
                new Funcionario("Carlos", 5000),
            ];
        }
        public function getTotalFuncionarios(){
            return count($this->funcionarios);
        }

        public function getFuncionario(){
            return $this->funcionarios[9];
        }
    }

    $folhaPagamento = new FolhaPagamento();
    // $folhaPagamento = null;

    

    echo "<pre>";
    echo $folhaPagamento?->getTotalFuncionarios();
    echo "<br>";
    print_r($folhaPagamento?->getFuncionario()?->info() );
    echo "</pre>";
?>
