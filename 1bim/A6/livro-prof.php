<!DOCTYPE html>
<html>
    <body>
        <?php
            class Estante{
               private $categoria, $livros, $qt, $qtMax; 
               
               public function __construct($categoria,$qtMax){
                   $this->categoria = $categoria;
                   $this->livros = array();
                   $this->qtMax = $qtMax;
                   $this->qt    = 0;
               }
               
               public function colocarLivro($livro){
                    if($this->categoria == $livro->getCategoria()
                       && $this->qt < $this->qtMax){
                       $this->livros[] = $livro;
                       $this->qt++;
                    }
               }
               
               public function listarLivros(){
                   echo "<h1> ESTANTE </h1>";
                   echo "<h2> $this->categoria </h2>";
                   foreach($this->livros as $livro){
                       $livro->mostrarDados();
                   }
               }
               
            }
            
            class Livro{
               private $nome, $autor, $categoria;
               
               public function __construct($nome, $autor, $categoria){
                   $this->nome = $nome;
                   $this->autor = $autor;
                   $this->categoria = $categoria;
               }
               
               public function mostrarDados(){
                   echo "<ul> <li> Nome: $this->nome </li>";
                   echo "<li> Autor: $this->autor </li>";
                   echo "<li> Categoria: $this->categoria </li></ul>";
               }
               
               public function getCategoria(){
                   return $this->categoria;
               }
               
            }
            //ENUM
            class Categoria{
                const COMEDIA = "COMEDIA";
                const AUTOAJUDA = "AUTO-AJUDA";
                const FILOSOFIA = "FILOSOFIA";
                const FICCAO    = "FICCAO";
            }
            
            $l1 = new Livro("CRITICA DA RAZAO PURA","KANT",Categoria::FILOSOFIA);
            $l2 = new Livro("A DIVINA COMEDIA","DANTE ALIGHIERI",Categoria::FICCAO);
            $l3 = new Livro("GAIA CIENCIA","NIETZSCHE",Categoria::FILOSOFIA);
            $l4 = new Livro("O CREPUSCULO DOS IDOLOS","NIETZSCHE",Categoria::FILOSOFIA);
            $l5 = new Livro("O CAPITAL","KARL MARX",Categoria::FILOSOFIA);
            $e = new Estante(Categoria::FILOSOFIA,3);
            $e->colocarLivro($l1);
            $e->colocarLivro($l2);
            $e->colocarLivro($l3);
            $e->colocarLivro($l4);
            $e->colocarLivro($l5);
            $e->listarLivros();
        ?>
    </body>
</html>



