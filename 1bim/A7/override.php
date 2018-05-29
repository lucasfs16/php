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
                
                public function __construct(Conta $conta){
                    $this->conta = $conta;
                }
                
                public function getConta(){
                    return $this->conta;
                }
                //ESSE METODO DEPENDE DA INSTANCIA DO OBJETO (SUBCLASSE)
                public function tarifar(){
                    $calc = $this->conta->getSaldo();
                    echo "<h1> $calc </h1>";
                }
            }
            
            class VIP extends Cliente{
                
                public function __construct(Conta $conta){
                    //super(conta);
                    parent::__construct($conta);
                }
                
                public function tarifar(){
                    $calc = $this->getConta()->getSaldo()*0.96;
                    echo "<h1> $calc </h1>";
                }    
            }
            
            class Premium extends Cliente{
                public function tarifar(){
                    $calc = $this->getConta()->getSaldo()*0.98;
                    echo "<h1> $calc </h1>";
                } 
            }
            
            class Regular extends Cliente{
                public function tarifar(){
                    $calc = $this->getConta()->getSaldo()*0.99;
                    echo "<h1> $calc </h1>";
                } 
            }
            
            class Banco{
                public function executarTarifa(Conta $conta,$tipo){
                    //1- PRECISO QUE tarifarRegular, tarifarPremium e
                    //tarifarVIP compartilhassem do mesmo nome.
                    //2- De alguma forma o método executarTarifa()
                    //nao deve saber saber se o cliente eh Regular, VIP
                    //ou Premium
                    if($tipo == "Regular"){
                        $cli = new Regular($conta);
                        $cli->tarifar();
                    }
                    if($tipo == "Premium"){
                        $cli = new Premium($conta);
                        $cli->tarifar();
                    }
                    if($tipo == "VIP"){
                        $cli = new VIP($conta);
                        $cli->tarifar();
                    }
                    if($tipo == "Cliente"){
                        $cli = new Cliente($conta);
                        $cli->tarifar();
                    }
                    //CONCLUSAO O tarifar() DA SUBCLASSE TEM PRIORIDADE
                    //SOBRE A DA SUPERCLASSE.
                }
            }
            
            $conta = new Conta("ANA",7800);
            $banco = new Banco();
            $banco->executarTarifa($conta,"VIP");
            
        ?>
    </body>
</html>
