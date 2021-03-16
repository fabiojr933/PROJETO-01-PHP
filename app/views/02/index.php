<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>mjailton - ligando você ao mundo do conhecimento</title>
  	<link  rel="stylesheet" href="<?php echo URL_BASE ?>assets/02/css/style.css">
	<script type="text/javascript" src="<?php echo URL_BASE ?>assets/02/js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="<?php echo URL_BASE ?>assets/02/js/js.js"></script>

<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<h1> Projeto mjailton </h1>
	<div class="caixa">
	<form method="POST" action="<?php echo URL_BASE ."Ex002/Media" ?>">
		<label><small>Nota 01</small><input type="text" name="nota1" value="<?php echo isset($nota1) ? $nota1 : null ?>" placeholder="Insira valor"></label>
		<label><small>Nota 02</small><input type="text" name="nota2" value="<?php echo isset($nota2) ? $nota2 : null ?>" placeholder="Insira valor"> </label>
		<label><small>Nota 03</small><input type="text" name="nota3" value="<?php echo isset($nota3) ? $nota3 : null ?>" placeholder="Insira valor"> </label>
		 <input type="submit" value="Calcular" class="btn">
		 <span><?php echo $resultado ?> </span>
	</form>
	
	</div>
	<!--link do curso: https://mjailton.com.br/campus/curso/ver/5766dbc5b545accbc4b20a5c1d18c282/?f=140<br><br>
	Fazer um algoritmo para calcular e imprimir a média aritmética das notas de um grupo de três alunos. As notas deverão ser lidas via teclado.-->
</body>
</html>