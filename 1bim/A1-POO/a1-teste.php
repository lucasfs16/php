<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">    
    </head>
    
<body>

<?php

class Gato {
    public $nome, $raca;
    
    public function miar(){
        echo "<h1> $this->nome : MIAUUU </h1>";
    }
    
    public function mostrarRaca(){
            echo "<h2> Raça do gato $this->nome : $this->raca </h2>";
        }
}

    $obj1 = new Gato();
    $obj2 = new Gato();
    
    $obj1->nome = "Branco";
    $obj2->nome = "Gatinho";
    
    $obj1->raca = "xxx";
    $obj2->raca = "yyy";
    
    $obj1->miar();
    $obj2->miar();
    
    $obj1->mostrarRaca();
    $obj2->mostrarRaca();
    
?>

</body>

</html>