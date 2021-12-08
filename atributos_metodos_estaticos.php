<?php 
    class Exemplo {
        public static $atributo1  = 'Eu sou um atributo estatico';
        public $atributo2 = 'Eu sou um atributo normal';

        public static function metodo1() {
            echo 'Eu sou um metodo estatico';
        }

        public function metodo2() {
            echo 'Eu sou um metodo normal';
        }

    }

    //Para acessar um atributo de método estatico, não é necessário
    //declarar uma nova variavel com "new exemplo()"

    echo Exemplo::$atributo1;
    echo '<br />';
    Exemplo::metodo1();

?>