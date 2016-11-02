<?php

function usuarioLogado()
{
    return $_COOKIE["usuario_logado"];
}


function verificaUsuario()
{
	if (!usuarioLogado())
	{
		header("Location:index.php?falhaDeSeguranca=true");
		die();
	}
}

function usuarioEstaLogado()
{
    return isset($_COOKIE["usuario_logado"]);
}

function logaUsuario($email)
{
  setcookie("usuario_logado", $email);
}