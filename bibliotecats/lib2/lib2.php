<?php

namespace B;

class Cliente implements \A\CadastroInterface {
    public $nome = 'Jamilton';

    public function __construct() {
        echo '<pre>';
        print_r(get_class_methods($this));
        echo '</pre>';
    }

    public function __get($attr) {
        return $this->$attr;
    }

    public function remover() {
        echo 'Remover';
    }

    public function salvar() {
        echo 'Salvar';
    }
}

interface CadastroInterface {
    public function remover();
}


//---------------

$c = new \B\Cliente();
print_r($c);
echo $c->__get('nome');

?>