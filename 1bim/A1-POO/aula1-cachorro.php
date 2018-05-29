<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
    
    </head>
    <body>
        
        <?php
        
        // criar classe cachorro com atributos nome e raça
        
        class Cachorro{
            public $nome, $raca;
            
            //metodos:
            public function latir() {
                echo "<h1> nome do cachorro:  $this->nome : AUAU </h1>";
                //this é o "chamador"
                //this se refere a membro de classe
            }
            
            public function mostrarRaca(){
                echo "<h1> Raça do $this->nome eh: $this->raca </h1>";
            }
        }
        
        //instanciar/criar objeto:
        $c = new Cachorro();
        $d = new Cachorro();
       
        $c->nome = "Rex";
        $d->nome = "Bidu";
        
        $c->raca = "Pitbull";
        $d->raca = "S.R.D. = vira lata";
        
        $c->latir();
        $d->latir();
        
        $c->mostrarRaca();
        $d->mostrarRaca();
        
        //php só executa codigo fora de classe
        
        //classes: Cachorro (tudo que está dentro: atributos e metodos)
        //atributos: nome, raca
        //metodos: latir, mostrarRaca
        //objetos: "new Cachorro()"
        //estado: "Rex", "Bidu",...
        
        ?>
        
    </body>
</html>