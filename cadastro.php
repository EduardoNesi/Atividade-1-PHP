<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aparelho</title>
	<link rel="stylesheet" type="text/css" href="Css/estilo.css">
</head>
<body>

			<h1>Aparelho</h1>

			<img src="consumo.png">
		
	<?php  

		$nome  	  = $_POST['nome'];
		$watts    = $_POST['watts'];
		$dia  	  = $_POST['dia'];
		$mes  	  = $_POST['mes'];
		$hora  	  = $_POST['hora'];

		$diario   = $watts/1000;
		$mensal   = $dia * $mes;
		$aparelho = $mes * $hora;

		echo"<p>O seu aparelho é $nome.<p>";
		echo"<p>O seu consumo máximo em watts é $watts.<p>";
		echo"<p>O seu aparelho fica ligado $dia horas por dia.<p>";
		echo"<p>O seu aparelho fica ligado $mes dias por mês.<p>";

		if($mensal < 5){
			echo "<p>O seu consumo é baixo.<p>";
		}
		else if($mensal < 10){
			echo "<p>O seu consumo é medio.<p>";

		}
		else{
			echo "<p>O seu consumo é alto.<p>";
		}

	?>



</body>
</html>