<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Ex. 3</title>
    </head>
    <body>
        <?php
            class Produto{
                private $nome, $preco, $tipo;
                
                public function __construct($nome, $preco, $tipo){
                    $this->nome = $nome;
                    $this->preco = $preco;
                    $this->tipo = $tipo;
                }
                
                public function mostraProduto(){
                    echo "<p>Nome: $this->nome </p>";
                    echo "<p>Preco: $this->preco </p>";
                    echo "<p>Tipo: $this->tipo </p>";
                }
            }
            
            $p1 = new Produto("Caneta", 2.30, "Escritorio");
            $p1->mostraProduto();
            //print_r($p1);
        ?>
    </body>
</html>