
<!DOCTYPE html>
<html>
    <body>
        <?php

            class Usuario{
                public function painel(){
                    echo "<h1> PAINEL GENERICO </h1>";    
                }
            }
            
            class Comum extends Usuario{
                public function painel(){
                    echo "<h1> 403: FORBIDDEN </h1>"
                }
            }
            
            class Adm extends Usuario{
                public function painel(){
                    echo "<h1> 200: OK </h1>"
                }
            }
            
            class Sistema{
                private $login, $senha;
                
                public function __construct($login, $senha){
                    $this->login = $login;
                    $this->senha = $senha;
                }
                
                //melhor maneira de fazer: abstract function
                public function auth(){
                    if($this->login == "root" &&
                       $this->senha == "root"){
                        return new Adm();
                    }else{
                        return new Comum();
                    }
                }
            }
            
            $sist = new Sistema($_GET["login"],$_GET["senha"]);
            $sist->auth()->painel();
        ?>
    </body>
</html>