<!DOCTYPE html>
<html>
    <body>
        <?php
            class A{
                public $a1;
                private $a2;
                protected $a3;
                
                private function metodo1(){
                    echo "<h1> METODO 1</h1>";
                }
                protected function metodo2(){
                    echo "<h1> METODO 2</h1>";
                }
                public function metodo4(){
                    echo "<h1> METODO 4</h1>";
                }
            }
            // B EH UM A
            class B extends A{
                private $b1;
                
                public function metodo3(){
                   $this->metodo2(); //S
                   $this->metodo4();//S
                   $this->a1 = 1;   //S
                   $this->a3 = 3;   //S
                   $this->b1 = 4;   //S, privado, porem dele
                   echo $this->a1;  //S
                   echo $this->a3;  //S
                }
            }
            
            $a = new A();
            $b = new B();
            //$b->metodo3();
            echo $a instanceof A;
            echo $a instanceof B or $a->metodo4();
            echo $b instanceof A;
            echo $b instanceof B;
        ?>
    </body>
</html>