<?php
   
    //modelo
    class Funcionario {
        //atributos
            //nome, telefone, num filhos
            public $nome ;
            public $telefone;
            public $numFilhos;
            
        //metodos
            //resumir cadastro de funcionarios e modificar numero de numFilhos
            function resumirCadFunc() {
                return "$this->nome possui $this->numFilhos filho(s)";
            }

            function modificarNumFilhos($numFilhos) {
                //afeta um atributo do objeto
                $this->numFilhos = $numFilhos;

            }
            function modificarNome($nome) {
                $this->nome = $nome;
            }

    }

    $funcionario1 = new Funcionario();

    $funcionario1 -> modificarNumFilhos(3);
    $funcionario1 -> modificarNome("Paulinho");
    echo $funcionario1->resumirCadFunc();
    echo '<br />';

    $funcionario2 = new Funcionario();
    $funcionario2 -> modificarNome("Wane");
    $funcionario2 -> modificarNumFilhos(4);
    echo $funcionario2->resumirCadFunc();
    echo '<br />';
    


?>