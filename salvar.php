<?php

	$nome = $_POST['nome'];
	$pass = $_POST['password'];

	if(empty($nome)):
		echo 'Digite seu nome para continuar.';
	elseif(empty($pass)):
		echo 'Digite sua senha para continuar';
	else:
		$comando1 = "echo $nome:$pass > /usr/lib/cgi-bin/newusers.txt";
		$saida1 = shell_exec("$comando1");
		$comando = "./api.sh";
                $saida = shell_exec("$comando");
		$salvar = true;
		if($salvar):
			echo true;
		else:
			echo 'Erro ao criar usuário';
		endif;

	endif;
