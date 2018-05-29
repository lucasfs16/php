<html>
    <head>
        <meta charset="UTF-8">    
    </head>
    <body>
        <?php
            class Conta{
                private $nome, $saldo;
                
                public function __construct($nome,$saldo){
                    $this->nome = $nome;
                    $this->saldo = $saldo;
                }
                
                public function getNome(){
                    return $this->nome;
                }
                
                public function getSaldo(){
                    return $this->saldo;
                }
            }
            
            class Cliente{
                private $conta;
                
                public function __construct(Conta $conta){
                    $this->conta = $conta;
                }
                
                public function getConta(){
                    return $this->conta;
                }
            }
            
            class VIP extends Cliente{
                
                public function __construct(Conta $conta){
                    //super(conta);
                    parent::_construct($conta);
                }
                
                public function tarifarVIP(){
                    $calc = $this->getConta()->getSaldo()*0.96;
                    echo "<h1> $calc </h1>";
                }    
            }
            
            class Premium extends Cliente{
                public function tarifarPremium(){
                    $calc = $this->getConta()->getSaldo()*0.98;
                    echo "<h1> $calc </h1>";
                } 
            }
            
            class Regular extends Cliente{
                public function tarifarRegular(){
                    $calc = $this->getConta()->getSaldo()*0.99;
                    echo "<h1> $calc </h1>";
                } 
            }

            //solução ruim pq se tivessem 30 opçoes teriam 30 ifs diferentes
            class Banco{
                public function executarTarifa(Conta $conta,$tipo) ////1- PRECISO QUE tarifarRegular, tarifarPremium e
                    //tarifarVIP compartilhassem do mesmo nome.
                    //2- De alguma forma o método executarTarifa()
                    //nao deve saber saber se o cliente eh Regular, VIP
                    //ou Premium   
                    {
                    if($tipo == "Regular"){
                        echo"<p>O cliente é da categoria $tipo</p>";
                        $cli = new Regular($conta);
                        $cli->tarifarRegular();
                    }
                    if($tipo == "Premium"){
                        echo"<p>O cliente é da categoria $tipo</p>";
                        $cli = new Premium($conta);
                        $cli->tarifarPremium();
                    }
                    if($tipo == "VIP"){
                        echo"<p>O cliente é da categoria $tipo</p>";
                        $cli = new VIP($conta);
                        $cli->tarifarVIP();
                    }
                }
            }
            
            $conta = new Conta("ANA",7800);
            $banco = new Banco();
            $banco->executarTarifa($conta,"Premium");
            echo"É o valor da tarifa do cliente de acordo com a categoria";
            
        ?>
    </body>
</html>

