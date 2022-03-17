<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>3DAW</title>
    </head>
    <body>
        <?php
		 echo "<h2>Exercício 03</h2>";
		 class Disciplina {
			 public $nome;
			 public $sigla;
			 public $cargaHoraria;
			 public function __construct($nome, $sigla, $cargaHoraria);
				$this->nome = $nome;
				$this->sigla = $sigla;
				$this->cargaHoraria = $cargaHoraria;
		 }
		 public function getDisc(){
			 return "nome da disciplina:" . $this->nome.
					"nome da disciplina:" . $this->sigla.
					"nome da disciplina:" . $this->cargaHoraria;
		}
				
		 $objdisciplinas = new Disciplina("desenvolvimento web","3daw","80");
		 echo $objdisciplinas->getDisc();
		 echo "<br>";
		 
		 $objdisciplinas2 = new Disciplina("Algebra Linear","3alg","40");
		 echo $objdisciplinas2->getDisc();
		 echo "<br>";
		 
		 $objdisciplinas3 = new Disciplina("Redes","3RSD","60");
		 echo $objdisciplinas3->getDisc();
		 echo "<br>";
		 
		 var_dump($disciplinas);
		 echo $disciplinas[0];
		 echo "<br>";
		 echo $disciplinas[1];
		 echo "<br>";
		 echo $disciplinas[2];
		 echo "<br>";
        ?>
		<br>
    </body>
</html>
