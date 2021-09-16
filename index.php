<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aparelhos Eletronicos</title>
	<link rel="stylesheet" type="text/css" href="Css/estilo.css">
</head>
<body>

	<h1>Cadastre seu Aparelho</h1>

	<h3>Por favor, complete as informações abaixo:</h3>

	<form action="cadastro.php" method="post">
		
		<p>
			<label>Marca do aparelho:</label><br>
			<input type="text" name="nome" required>
		</p>

		<p>
			<label>Consumo máximo em watts:</label><br>
			<input type="number" name="watts" min="1" required>
		</p>

		<p>
			<label>Número de horas que o aparelho é ligado por dia:</label><br>
			<input type="number" name="dia" required>
		</p>

		<p>
			<label>Número de dias que o aparelho ficará ligado no mês:</label><br>
			<input type="number" name="mes" required>
		</p>

		<p>
			<label>Valor do kilowatt-hora:</label><br>
			<input type="number" name="hora" required>
		</p>

		<p>
			<button type="submit" name="enviar">Enviar</button>
		</p>


	</form>
</body>
</html>