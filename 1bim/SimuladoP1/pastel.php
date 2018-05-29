<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Ex. 1</title>
    </head>
    <body>
        <?php
            class Pastel{
                private $listaRecheio, $precoTotal;
                
                public function __construc(){
                    $this->listaRecheio = array();
                    $this->precoTotal = 0;
                }
                public function montaPastel(Recheio $recheio){
                    $this->listaRecheio[] = $recheio;
                    $this->precoTotal = $this->precoTotal + $recheio->getPreco();
                }
                public function mostrarPastel(){
                     foreach($this->listaRecheio as $rech){
                         $rech->mostrarDadosRecheio();
                     }
                     echo "<p>Valor Total dos pastéis: R$ $this->precoTotal</p>";
            }
            }
            
            class Recheio{
                private $nome, $preco;
                
                public function __construct($nome, $preco){
                    $this->nome = $nome;
                    $this->preco = $preco;
                }
                
                public function getPreco(){
                    return $this->preco;
                }
                
                public function mostrarDadosRecheio(){
                    echo "<p>Nome: $this->nome </p>";
                    echo "<p>R$:$this->preco </p>";
                }
            }
            
            $r1 = new Recheio("Frango", 1);
            $r2 = new Recheio("Carne", 1);
            $r3 = new Recheio("Linguiça", 1);
            //$r4 = new Recheio("Cheddar", 0.5);
            //$r5 = new Recheio("Catupiry", 1.5);
            $p1 = new Pastel();
            $p1->montaPastel($r2);
            $p1->montaPastel($r3);
            //$p1->montaPastel($r4);
            $p1->mostrarPastel();
        ?>
    </body>
</html>
