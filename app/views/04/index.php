<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>mjailton - ligando você ao mundo do conhecimento</title>
  	<link  rel="stylesheet" href="<?php echo URL_BASE?>assets/04/css/style.css">
	<script type="text/javascript" src="<?php echo URL_BASE?>assets/04/js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="<?php echo URL_BASE?>assets/04/js/js.js"></script>

<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	
	<div class="quadro">	
	<form method="post" action="<?php echo URL_BASE ."Ex004/salario"?>">	
		<label>
			<span>Nome:</span> 
			<input type="text" name="nome">
		</label>
		<label class="col">
			<span>Idade:</span>
			<input type="text" name="idade">
		</label>
		<label class="col">
			<span>Salário:</span> 
			<input type="text" name="salario">
		</label>
		<label>
			<span>Cargo:</span>
			<input type="text" name="cargo">
			</label>
		 <input type="submit" value="Calcular" class="btn">
	</form>
	</div>
	
	
	<div class="resultado">	
		<h3>Resultado:</h3>
		<p><b>Nome: <?php echo isset($nome) ? $nome :null ?></p>
		<p><b>Idade: <?php echo isset($idade) ? $idade :null ?></p>
		<p><b>Cargo: <?php echo isset($cargo) ? $cargo :null ?></p>
		<p><b>Salário Total:<?php echo isset($bruto) ? $bruto :null ?></p>
		<p><b>Salário Líquido: <?php echo isset($liquido2) ? $liquido2 :null ?></p>
	
	</div>

	<!--link do curso: https://mjailton.com.br/campus/curso/ver/5766dbc5b545accbc4b20a5c1d18c282/?f=140<br><br>
	Dado as seguintes informações de um funcionário:  Nome, idade cargo e o seu salário bruto considere: <br>

a) O salario atual sofrerá um reajuste de 38%.<br>

b) O funcionário receberá também uma gratificação de 20% sobre o salário atual.<br>
c) O Salário, após o reajuste e gratificação, será descontado em 15%.<br>

 <br>

Escreva os seguintes resultados:<br>

- Imprimir nome, idade e cargo.<br>

- Imprimir o salario reajustes (salario bruto).<br>

- Imprimir o salario líquido final.<br>
-->
</body>
</html>