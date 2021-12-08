<?php 
    class Pai {

        private $nome;
        protected $sobrenome = 'Silva';
        public $ocupacao = 'Funkeiro e pai de família';

        public function getNome() {
            return $this->nome;
        }

        public function setNome($value) {
            if(strlen($value) >= 3) {
            $this->nome = $value;
            }else {
            $this->nome = 'nome nao definido';
            }
        }

        private function executarMania() {
            echo "Estalar dedos";
        }

        protected function responder() {
            echo 'oi';
        }

        public function executaAcao() {
            $x = rand(1, 100);
            if($x >= 1 && $x <= 75) {
            $this->executarMania();
         } else {
             $this->responder();
         }

        }

    }

     $pai = new Pai();
     echo $pai->setNome('Joao');
     echo $pai->getNome();
    // echo $pai->executaAcao()

    class Filho extends Pai {
        public function getAtributo($attr) {
            return $this->$attr;
        }
    }
    
    $filho = new Filho();

    echo $filho->getAtributo('nome');
    // $pai = new Pai();
    // echo $pai->getNome();
    // echo $pai->setNome('Joao');
    // echo $pai->getNome();
    // echo $pai->executaAcao()
   
?>