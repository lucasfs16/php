<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">    
    </head>
    <body>
        <?php
            class Teste{
        
                public function testar(){
                    $r = new Revolver($_POST["municao"],$_POST["maxima"]);
                    $r->atirar();
                    $r->atirar();
                    $r->atirar();
                    $r->atirar();
                    $r->atirar();
                    $r->recarregar();
                }
        
            }
            //Import do modulo aula2
            include_once "Aula2.php";
            $t = new Teste();
            $t->testar();
            
        ?>
    </body>
</html>
