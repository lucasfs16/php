<html>
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
                //(Conta $conta) --> da permissao apenas para instancia de conta,
                //impedindo q seja usado int, str ou qq outra coisa
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
            
            $conta = new Conta("ANA",7800);
            $cliente = new Premium($conta);
            $cliente->tarifarPremium();
            
        ?>
    </body>
</html>