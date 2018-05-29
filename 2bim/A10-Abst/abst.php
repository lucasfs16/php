<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">    
    </head>
    
<body>

<?php
    abstract class Animal{
        private $nome;
        
        public function __construct($nome){
            $this->nome = $nome;
        }
        
        public function getNome(){
            return $this->nome;
        }
        
        abstract public function emitirSom();
    }
    
    /*
    $a = new Animal("???");
    $a->emitirSom();
    //da erro pq nao pode instanciar metodos abstratos, já q eles nao tem codigo
    */

    //certo:
    $a = new Cachorro("???");
    //O METODO emitirSom sera escolhido baseado em qual instancia
    //foi provida.
    $a->emitirSom();
            

?>

</body>

</html>