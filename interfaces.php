<?php

    interface EquipamentoEletronicoInterface {
        public function ligar();
        public function desligar();

    }

    class Geladeira implements EquipamentoEletronicoInterface {
        public function abrirPorta() {
            echo 'porta abriu';
        }

        public function ligar(){
            echo 'ligar';
        }

        public function desligar(){
            echo 'desligar';
        }
    }

     class TV implements EquipamentoEletronicoInterface {
         public function trocarCanal() {
             echo 'trocou de canal';
         }

         public function ligar(){
            echo 'ligar';
        }

        public function desligar(){
            echo 'desligar';
        }
     }

    $brastemp = new Geladeira();
    $samsung = new TV();

    //----------------------------------------------------------------

    interface MamiferoInterface {
        public function mamar();
    }

    interface TerrestreInterface {
        public function andar();
    }

    interface AquaticoInterface {
        public function nadar();
    }

    class Humano implements MamiferoInterface, TerrestreInterface {
        public function mamar() {
            echo 'mamou';
        }
        public function andar() {
            echo 'andou';
        }
        public function conversou() {
            echo 'conversou';
        }
    }


?>