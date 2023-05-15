<?php

$email = $_POST['email'];
$senha = $_POST['senha'];

// Verificar o e-mail e a senha
if ($email == 'teste@teste.com' && $senha == '1234') {
  // Se as credenciais estiverem corretas, redirecionar para a página de sucesso
  header('Location: gera-qrcode.php');
  exit;
} else {
  // Se as credenciais estiverem incorretas, exibir a mensagem de erro
  echo "<script>alert('Erro! E-mail e/ou senha incorretos.');</script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Página de Login</title>

	<style>
		body {
			background-color: #f2f2f2;
			font-family: Arial, sans-serif;
		}

		.container {
			margin: auto;
			margin-top: 100px;
			width: 300px;
			padding: 20px;
			background-color: #fff;
			box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
			border-radius: 5px;
		}

		.input-group {
			margin-bottom: 10px;
		}

		.input-group label {
			display: block;
			margin-bottom: 5px;
			color: #555;
		}

		.input-group input {
			width: 100%;
			padding: 10px;
			border-radius: 3px;
			border: 1px solid #ccc;
		}

		.btn {
			display: block;
			background-color: #4CAF50;
			color: #fff;
			padding: 10px;
			border: none;
			border-radius: 3px;
			cursor: pointer;
			width: 100%;
      font-size: 18px;
		}

		.btn:hover {
			background-color: #3e8e41;
		}

	</style>
</head>
<body>
    <div class="container">
		<h2>Página de Login</h2>
		<form method="post" action="verifica-login.php">
			<div class="input-group">
				<label for="email">Email:</label>
				<input type="email" id="email" name="email" required>
			</div>
			 <div class="input-group">
				<label for="senha">Senha:</label>
				<input type="password" id="senha" name="senha" required>
			</div>
			<button type="submit" class="btn">Entrar</button>
		</form>
	</div>
</body>
</html>

