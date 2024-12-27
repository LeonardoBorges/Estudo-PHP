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
    }


     $carro = new Carro('ABC123', 'Azul');
     $moto = new Moto('XYZ456', 'Vermelho');

     echo '<pre>';
     print_r($carro);
     echo '<br/>';
     print_r($moto);
     echo '</pre>';
     echo '<hr/>';

     $carro->abrirTetoSolar();
     echo '<br/>';
     $carro-> acelerar();
     echo '<br/>';
     $carro->freiar();

     echo '<hr/>';
     $moto->empinar();
     echo '<br/>';
     $moto->acelerar();
     echo '<br/>';
     $moto->freiar();