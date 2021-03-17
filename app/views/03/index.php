<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>mjailton - ligando você ao mundo do conhecimento</title>
  	<link  rel="stylesheet" href="<?php echo URL_BASE?>assets/03/css/style.css">
	<script type="text/javascript" src="<?php echo URL_BASE?>assets/03/js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="<?php echo URL_BASE?>assets/03/js/js.js"></script>

<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<h1> Projeto mjailton </h1>
	<div class="calendario">
	<h2>Calendário</h2>
	<form action="<?php echo URL_BASE ."Ex003/Dias"?>" method="POST">
	
		<label><small>INSIRA O ANO AQUI:</small> <input type="text" value="<?php echo isset($ano) ? $ano : null ?>" name="ano" placeholder="00"></label>
		<label><small>Insira o Mês aqui:</small> <input type="text" value="<?php echo isset($meses) ? $meses : null ?>" name="meses" placeholder="00"></label>
		<label><small>Insira o Dia aqui:</small> <input type="text" value="<?php echo isset($dias) ? $dias : null ?>" name="dias" placeholder="00"></label>
		<input type="submit" value="Calcular" class="btn">
		<span class="resultado"><small>Você viveu:</small><p><?php echo $resultado ?></p></span>
	</form>
	</div>
	
	<!--<hr>
	link do curso: https://mjailton.com.br/campus/curso/ver/5766dbc5b545accbc4b20a5c1d18c282/?f=140<br><br>
	Faça um programa que calcule quantos dias uma pessoa já viveu.
Para isso será informada a idade dela em anos, meses e dias (considere 1 ano = 365 dias e um mês = 30 dias)-->
</body>
</html>