<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">    
    </head>
    <body>
        <?php
        //servidor
            class Revolver{
                public $qtMunicao, $qtMaxima;
                //O CONSTRUTOR EH UM "METODO" QUE AUXILIA
                //NA INICIALIZACAO DOS ATRIBUTOS. ELE EH
                //EXECUTADO SOMENTE APÓS O USO DO NEW.
                //CADA OBJETO PODERÁ CHAMAR O CONSTRUTOR
                //APENAS UMA VEZ.
                public function __construct($qtMunicao, $qtMaxima){
                    $this->qtMunicao = $qtMunicao;
                    $this->qtMaxima = $qtMaxima;
                }
                
                public function atirar(){
                    if($this->qtMunicao > 0){
                        $this->qtMunicao = $this->qtMunicao - 1;
                        echo "<h1>Municao: $this->qtMunicao </h1>";
                    }else{
                        echo "<h1>Recarregue!</h1>";
                    }
                }
                
                public function recarregar(){
                    if($this->qtMunicao < $this->qtMaxima){
                        $this->qtMunicao = $this->qtMunicao + 1;
                        echo "<h1>Municao: $this->qtMunicao </h1>";
                    }else{
                        echo "<h1>Atire!</h1>";
                    }
                }
                
            }
            
            $r = new Revolver($_POST["municao"],$_POST["maxima"]);
            //$s = new Revolver(8,10);
            $r->atirar();
            $r->atirar();
            $r->atirar();
            $r->atirar();
            $r->atirar();
            $r->recarregar();
            
        ?>
    </body>
</html>
