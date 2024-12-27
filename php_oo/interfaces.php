<?php
    
    interface EquipamentoEeletronicoInterface {
        public function ligar();
        public function desligar();


    }


    class Geladeira implements EquipamentoEeletronicoInterface {

        public function abrirPorta(){
            echo 'Abrindo porta';
        }

        public function desligar(){
            echo 'Desligando';
        }   
        public function ligar(){
            echo 'Ligando';
        }
    }

    class TV  implements EquipamentoEeletronicoInterface {

        public function trocarCanal(){
            echo 'Trocando canal';
        }
        public function desligar(){
            echo 'Desligando';
        }   
        public function ligar(){
            echo 'Ligando';
        }
    }

    $x = new Geladeira();
    $y = new TV();

    //----------------------------------------------------------------------------- 

    interface mamiferoInterface { 
        public function respirar();
    }

    interface terrestreInterface { 
        public function respirar();
    }

    interface aquaticoInterface { 
        public function nadar();
    }

    class Humano implements MamiferoInterface, TerrestreInterface{
        public function nadar(){
            echo 'Nadando';
        }
        public function respirar(){
            echo 'Respirando';
        }

        public function conversar(){
            echo 'Conversando';
        }
    }

    class Baleia implements MamiferoInterface, AquaticoInterface{
        public function respirar(){
            echo 'Respirando';
        }
        public function nadar(){
            echo 'Nadando';
        }
        protected function esguichar(){
            echo 'Esguichar';
        }
    }

     //-----------------------------------------------------------------------------

    interface AnimalInterface {
        public function comer();
    }

    interface AveInterface  extends AnimalInterface{
        public function voar();
    }

    class Papagaio implements AveInterface{
        public function comer(){
            echo 'Comendo';
        }

        public function voar(){ 
            echo 'Voando';
        }
    }
?>
