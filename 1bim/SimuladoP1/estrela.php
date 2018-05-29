<!DOCTYPE html>
<html>
    <body>
        <?php
            class Estrela{
                private $nome, $massa, $temperatura;
                
                public function __construct($nome, $massa, $temperatura){
                    $this->nome = $nome;
                    $this->massa = $massa;
                    $this->temperatura = $temperatura;
                }
                
                public function mostrarInfo(){
                    echo "<p> $this->nome <p>";
                    echo "<p> $this->temperatura <p>";
                    echo "<p> $this->massa <p>";
                }
                
                public function getMassa(){
                    return $this->massa;
                }
                
                public function getTemperatura(){
                    return $this->temperatura;
                }
            }
            
            class Constelacao{
                private $nome, $estrelas;
                
                public function __construct($nome){
                    $this->nome = $nome;
                    $this->estrelas = array();
                }
                
                public function mostrarNome(){
                    echo "<h1> $this->nome </h1>";
                }
                
                public function cadastrarEstrela(Estrela $es){
                    $this->estrelas[] = $es;
                }
                
                public function mostrarEstrelas(){
                    foreach($this->estrelas as $estrela){
                        $estrela->mostrarInfo();
                    }
                }
                
                public function maiorTemperatura(){
                    $aux = $this->estrelas[0];
                    foreach($this->estrelas as $estrela){
                        $aux = max($aux,$estrela->getTemperatura());
                    }
                    return $aux;
                }
                
                public function menorMassa(){
                    $aux = $this->estrelas[0];
                    foreach($this->estrelas as $estrela){
                        $aux = min($aux,$estrela->getMassa());
                    }
                    return $aux;
                }
            }
            
        ?>
    </body>
</html>