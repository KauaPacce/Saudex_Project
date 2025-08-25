<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>

<body>
<div id="geral">
  	<div class="container">
		<form id="cadastro" action="" method="get">
			<div class="row">
				<div class="col-25">
					<label for="Nome">Nome</label>
				</div>
				<div class="col-75">
					<input type="text" id="Nome" name="Nome" placeholder="Digite o Nome...">
				</div>
			</div>

			<div class="row">
				<div class="col-25">
					<label for="Email">Email</label>
				</div>
				<div class="col-75">
					<input type="email" id="Email" name="Email" placeholder="seu@email.com">
				</div>
			</div>

			<div class="row">
				<div class="col-25">
					<label for="Telefone">Telefone</label>
				</div>
				<div class="col-75">
					<input type="text" id="Telefone" name="Telefone" placeholder="(00) 00000-0000">
				</div>

			</div>

			<div class="row">
				<div class="col-25">
					<label for="cpf">Cpf</label>
				</div>
				<div class="col-75">
					<input type="text" id="cpf" name="cpf" placeholder="000.000.000-00">
				</div>
			</div>

			<div class="row">
				<div class="col-25">
					<label for="cep">Cep</label>
				</div>
				<div class="col-75">
					<input type="text" id="cep" name="cep" placeholder="00000-000">
				</div>
			</div>

			<div class="row">
				<div class="col-25">
					<label for="nasc">Nascimento</label>
				</div>
				<div class="col-75">
					<input type="date" name="nasc" id="nasc">
				</div>
			</div>

			<div class="row">
				<div class="col-25">
					<label for="genero">Genero</label>
				</div>
				<div class="col-75">
					<input type="radio" name="genero" value="H">Homem
					<input type="radio" name="genero" value="M">Mulher
					<input type="radio" name="genero" value="N">Não-Binario
				</div>
			</div>

			<br>
			<div class="row">
				<input type="button" id="btnEnviar"    value="Enviar"    onclick="Cadastrar();">
			</div>
		</form>
  	</div>

	<div id="resposta"> 
		<!-- dentro desta div fica o retorno -->
	</div>
</div> 

	<script src="js/Pacientes.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>

<script>
	//===MASCARA PARA O FORMULARIO =================================
    $(document).ready(function(){ 
        $('#cpf').mask('000.000.000-00');
		$('#Telefone').mask('(00) 00000-0000');
		$('#cep').mask('00000-000');
    });
</script>
</body>
</html>