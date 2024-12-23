<?php

    class Carro extends Veiculos{
         public $teto_solar = true;

        function __construct($placa, $cor){
            $this->placa = $placa;
            $this->cor = $cor;
        }

        function abrirTetoSolar(){
             echo 'Abrindo teto solar...';
         }

        function alterarPosicaoVolante(){
             echo 'Alterando posicao volante...';
        }

    }

    class Moto extends Veiculos{
        public $contraPesoGuidao = true;

        function __construct($placa, $cor){
            $this->placa = $placa;
            $this->cor = $cor;
        }
        

        function empinar(){
             echo 'Empinar...';
        }

        function trocarMarcha(){
            echo 'Trocando marcha com o peé e não com mão...';
        }
    }

    class Caminhao extends Veiculos{
        
        function trocarMarcha(){
            echo 'Trocando marcha com a mãe e não com pé...';
        }
       
    }

    class Veiculos {
        public $placa = 'null';
        public $cor = 'null';

        function acelerar(){
            echo 'Acelerando...';
        }
        
        function freiar(){
            echo 'Freiando...';
        }

        function trocarMarcha(){
            echo 'Trocando marcha...';
        }
    }


    $carro = new Carro('ABC123', 'Azul');
    $moto = new Moto('XYZ456', 'Vermelho');
    $caminhao = new Caminhao('123456', 'Preto');
    $carro->trocarMarcha();
    echo '<br/>';
    $moto->trocarMarcha();
    echo '<br/>';
    $caminhao->trocarMarcha();
    