<?php
    
    // Modelo 

    class Funcionario {
        
        public $nome = null;
        public $telefone = null;
        public $numFilhos = null;
        public $cargo = null;
        public $salario = null;

        // getters e setters
/*
        function setNome($nome){
            $this->nome = $nome;
        }

        function setNumFilhos($qtdd){
            $this->numFilhos = $qtdd;
        }

        function setTelefone($telefone){
            $this->telefone = $telefone;
        }

        function getNome(){
            return $this->nome;
        }

        function getNumFilhos(){
            return $this->numFilhos;
        }

        function getTelefone(){
            return $this->telefone;
        }
*/

        // getters e setters overloading

         function __set($atributo, $valor){
            $this->$atributo = $valor;
        }

        function __get($atributo){
            return $this->$atributo;
        }
        // métodos 

        function resumirCadFunc(){
            //return "$this->nome possui o telefone $this->telefone, o $this->nome recebe o salário de $this->salario, 
            //está no cargo de $this->cargo e ele(a) tem $this->numFilhos filho(s)";
            return $this->__get('nome') . ' possui o telefone ' . $this->__get('telefone') . ', o ' . $this->__get('nome') . ' recebe o salário de ' . $this->__get('salario') . ', está no cargo de ' . $this->__get('cargo') . ' e ele(a) tem ' . $this->__get('numFilhos') . ' filho(s)';
        }

       function modificarNumFilhos($qtdd){
            return $this->numFilhos = $qtdd;
       }
    }

    $y = new Funcionario();
    $y->__set('nome','José');    
    $y->__set('numFilhos',2);
    $y->__set('telefone', '11 99999999');
    $y->__set('cargo', 'Analista de Sistemas');
    $y->__set('salario', 10000.00);
    echo $y->resumirCadFunc();
    echo '<br>';


    echo '<hr>';
    $y-> modificarNumFilhos(3);
    echo '<br>';
    echo $y->resumirCadFunc();

    echo '<hr>';
    $X = new Funcionario();
    echo '<br>';
    echo $X->resumirCadFunc();
?>