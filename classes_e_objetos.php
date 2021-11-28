<?php
   
    //modelo
    class Funcionario {
        //atributos
            //nome, telefone, num filhos
            public $nome = null;
            public $telefone = null;
            public $numFilhos = null;
        //metodos
            function setNumFilhos($numFilhos) {
                $this->numFilhos = $numFilhos;
            }
            function setNome($nome) {
                $this->nome = $nome;
            }
            function setTelefone($telefone) {
                $this->telefone = $telefone;
            }
            function getNome() {
                return $this->nome;
            }
            function getTelefone() {
                return $this->telefone;
            }
            function getNumFilhos() {
                return $this->numFilhos;
           }
           function fraseResume() {
               return  $this->nome . ' tem ' . $this->numFilhos . ' filhos e o seu telefone é ' . $this->telefone;
           }
    }

    $funcionario1 = new Funcionario();
    $funcionario1 -> setNumFilhos(3);
    $funcionario1 -> setNome('Paulinho');
    $funcionario1 -> setTelefone("3899899555");
    echo $funcionario1 -> fraseResume();
    echo '<br />';

    $funcionario2 = new Funcionario();
    $funcionario1 -> setNumFilhos(1);
    $funcionario1 -> setNome('Wane');
    $funcionario1 -> setTelefone("3895479458");
    echo $funcionario1 -> fraseResume();
    echo '<br />';


?>