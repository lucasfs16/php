<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">    
    </head>
    
<body>
       <?php
            //MODIFICADOR static: DESACOPLA O MEMBRO
            //DA INSTANCIA. OU SEJA, ELE VIRARA MEMBRO
            //DA CLASSE.
            
            class Sapo{
                private $idade=0;
                private static $populacao = 0;
                
                public function __construct(){
                    $this->idade = $this->idade + 1;
                    self::$populacao = self::$populacao + 1;
                }
                
                public function getIdade(){
                    return $this->idade;
                }
                
                public static function getPopulacao(){
                    return self::$populacao;
                }
            }
            
            $s1 = new Sapo();
            $s2 = new Sapo();
            //$s3 = new Sapo();
            $a = Sapo::getPopulacao();
            echo "<h1> $a </h1>";
            echo $s1->getIdade();
            echo $s2->getIdade();
            //echo $s3->getIdade();
       ?> 

</body>

</html>