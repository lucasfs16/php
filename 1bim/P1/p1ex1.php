<!DOCTYPE html>
<html>
    <body>
        <?php
            abstract class Tag{
                private $v;
                
                public function __construct($v){
                    $this->v = $v;
                }
                
                public function innerHtml(){
                    echo "TAG GENERICA";
                }
            }
            
            class P extends Tag{
                public function innerHtml(){
                    echo "<p> $v </p>";
                }
            }
            
            class Div extends Tag{
                public function innerHtml(){
                    echo "<div> $v </div>";
                }
            }
            
            class Span extends Tag{
                public function innerHtml(){
                    echo "<span> $v </span>";
                }
            }
            
            class AntiTag{
                public static function innerHtml($v, $tipo){
                    if($tipo == "P"){
                        echo "<p> $v </p>";
                    }
                    if($tipo == "Div"){
                        echo "<div> $v </div>";
                    }
                    if($tipo == "Span"){
                        echo "<span> $v </span>";
                    }
                }
            }
         ?>
    </body>
</html>
        