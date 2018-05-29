<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">    
    </head>
<body>

<?php

class Foo {
    public $a;
    private $b;
    
    public function getB(){
        return $this->b;
    }
    
    public function setB($b){
        $this->b = $b;
    }
    
    public function teste(){
        $this->b = 5;
        echo "<h2>aparece pq ta dentro da classe: b = $this->b </h2>";
        echo "<h1> METODO teste </h1>";
    }
    
    private function testePriv(){
        echo "<h1> METODO testePriv </h1>";
    }
    
}

//tudo fora da classe = MUNDO:
    $f = new Foo();
    $f->a = 7; //acesso de escrita
    //$f->b = 7; //nao é possivel acessar nem escrita nem leitura
    echo "<h2>$f->a </h2>"; //acesso de leitura
    $f->teste(); //acesso de chamada
    
    $f->setB(8); //ACESSO DE ESCRITA DADO PELO SET
    //ACESSO DE LEITURA DADO PELO GET
    $a = $f->getB(); 
    echo "<h1> $a </h1>";
    //CONCLUSAO: metodos get e set ao mesmo tempo induzem
        //q o atributo se comporte como publico
        //pq 


?>

</body>

</html>