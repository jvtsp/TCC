<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css"> 
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="vieweport" content="width=device-width", initial-scale=1.0>
	<meta http-equiv="X-UA-Compatible" content="ie=edge">   
    <title>Bem vindo ao Cadastro</title>
</head>
<body>
<form class="box" action="salvar.php" method="post">
    <fieldset>
	<h1>Cadastro</h1>
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" placeholder="Digite seu nome" value="">
        <label for="password">Senha:</label>
        <input type="password" name="password" id="password" placeholder="Digite sua senha" value="">
    </fieldset>
    <button type="submit" id="but_salvar">Salvar</button>
</form>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="all.js"></script>
</body>
</html>
