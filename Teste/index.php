<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <?php $a = isset($_GET["a"])?$_GET["a"]:"Digite um Título"; ?>
    <title><?php echo "$a"; ?></title>
  </head>
  <body>

    <pre>
    <?php

      class Pessoa {
        protected $nome;
        protected $idade;

        function __construct($idade) {
          $this->idade = $idade;
        }

        public function getNome() {
          return $this->nome;
        }

        public function setNome($nome) {
          $this->nome = $nome;
        }

        public function getIdade() {
          return $this->idade;
        }

        public function setIdade() {
          $this->idade = $idade;
        }

      }

      class Aluno extends Pessoa {

        private $matricula;

        function __construct($nome, $idade, $matricula) {
          $this->nome = $nome;
          $this->idade = $idade;
          $this->matricula = $matricula;
        }

        public function setMatricula($matricula) {
          $this->matricula = $matricula;
        }

        public function getMatricula() {
          return $this->matricula;
        }

      }


      $p1 = new Pessoa(18);
      $p1->setNome("Gabriel");
      $p2 = new Aluno("Creuza", 18, 123);

      echo "<br/>Nome: ", $p1->getNome(), "<br/>Idade: ", $p1->getIdade();
      echo "<br/><br/>", $p2->getNome(), "<br/>Idade: ", $p2->getIdade(), "<br/>Matricula: ", $p2->getMatricula();


      function soma ($num1, $num2) {
        return $num1 + $num2;
      }

      $var = array(5, 8, 12, 3, 45, 23);
      $var[] = 98;
      $data = date("Y");
      echo "<br/><br/>$data<br/><br/>";
      print_r($var);
      echo soma(5, 8);


    ?>
    </pre>

  </body>
</html>
