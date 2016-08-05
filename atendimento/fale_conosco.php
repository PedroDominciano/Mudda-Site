<html>
	<head>
		<title>Fale Conosco - Mudda</title>
		<meta charset="utf-8"/>
		<link rel = "stylesheet" type = "text/css" href = "css/fale_conoscostyle.css" />
	</head>
	<body>
		<div id="div-form">
			<h1>Preencha o formulário</h1>
			<form action = "processa.php" method="post" id="formulario">
				<div class = "divInput">
					<input name="nome" type = "text" id="inp-nome" placeholder = "Nome..." />
				</div>
				<div class = "divInput">
					<input type = "text" name="sobrenome" id="inp-sobreNome" placeholder = "Sobrenome..." />
				</div>
				<div class = "divInput">
					<input type = "text" name="email" id="inp-email" placeholder = "Email..." />
				</div>
				<div class = "divInput">
					<input type = "text" name="ass" id="inp-ass" placeholder = "Assunto..." />
				</div>
				<div class = "divTextArea">
					<textarea name="campo" id="txt-campo" maxlength="200" placeholder = "Mensagem..." onkeyup="countChar(this)" ></textarea>
					<button type = "submit" onclick="verificar()" id="bt-enviar">Enviar</button>
					<p id="p-chars">200</p>
				</div>
			</form>
		</div>
		
		<script src="js/verify.js"></script>
	</body>


</html>