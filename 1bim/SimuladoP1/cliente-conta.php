<!DOCTYPE html>
<html>
    <body>
        <?php
            class Cliente{
                private $nomeCliente, $valorDisp, $numeroConta;
                
                public function __construct($nomeCliente, $valorDisp, $numeroConta){
                    $this->nomeCliente = $nomeCliente;
                    $this->valorDisp = $valorDisp;
                    $this->numeroConta = $numeroConta;
                }
                
                public function toJSON(){
                    echo json_encode($this);
                }
                
                public function taxar($valor){
                    $this->valorDisp = $this->valorDisp*(1-$valor);
                }
            }
            
        ?>
    </body>
</html>