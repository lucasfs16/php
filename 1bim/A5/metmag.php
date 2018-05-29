<!DOCTYPE html>
<html>
    <body>
       <?php
            class Foo{
                //QUEREMOS UM GET E UM SET QUE 
                //VALHA PARA TODOS:
                private $a, $b, $c;
                
                public function __get($atributo){
                    return $this->$atributo;
                }
                
                public function __set($atributo,$valor){
                    $this->$atributo = $valor; //$atributo é uma var variavel
                }
                
                public function mostrar(){
                    echo "<h1> OLA </h1>";
                    echo json_encode(get_object_vars($this));
                }
            }
            
            //VARIAVEIS VARIAVEIS
            
             $f = new Foo();
            $f->__set("c",7);
            $f->__set("b",3);
            $f->__set("a",true);
            $f->mostrar();
            echo $f->__get("b");

            
            /*
            //ex. 1:
            $x = "teste";
            $teste = 5;
            echo $$x; // resultado = "5" pq
                        // $x = teste e $teste = 5
                        
            //ex. 2:
            $clazz = "Foo";
            $f = new $clazz();
            $f-> OLA(); // resultado = OLA
            // trocar function mostrar para "ola"
            
            //ex. 3:
            $clazz = "Foo";
            $f = new $clazz();
            $met = "ola";
            $f->$met();
              
            */            
       ?> 
    </body>
</html>




