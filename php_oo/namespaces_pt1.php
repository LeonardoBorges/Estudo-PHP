<?php
    
    namespace A;
    class Cliente implements \B\CadastroInterface {
        public $nome = 'Leo';

        public function __construct(){
            echo '<pre>';
            print_r(get_class_methods($this));
            echo '</pre>';
        }

        public function __get($attr){
            return $this->$attr;
        }

        public function salvar(){
            echo 'Salvando';
        }
        public function remover(){
            echo 'Removendo';
        }

    }

    interface CadastroInterface {
        public function salvar();
    }

    
    namespace B;
    class Cliente implements \A\CadastroInterface {
        public $nome = 'João';

        public function __construct(){
            echo '<pre>';
            print_r(get_class_methods($this));
            echo '</pre>';
        }
        public function __get($attr){
            return $this->$attr;
        }
        public function remover(){
            echo 'Removendo';
        }
        public function salvar(){
            echo 'Salvando';
        }
    }

    interface CadastroInterface {
        public function remover();
    }

    $c = new \B\Cliente();

    print_r($c);
    echo '<br/>';
    echo $c->__get('nome');
?>