<?php
include("cabecalho.php");

if (isset($_GET['login']) && $_GET['login'] == true):
?>
<p class="alert-success">Logado com sucesso!</p>
<?php endif ?>

<?php if (isset($_GET['login']) && $_GET['login'] == false): ?>
<p class="alert-danger">Usuário ou senha invalida!</p>
<?php endif ?>

    <h1>Bem vindo!</h1>
    <h2>Login</h2>
    <form action="login.php" method="post">
    	<table class="table">
    		<tr>
    			<td>Email</td>
    			<td><input class="form-control" type="email" name="email"></td>
    		</tr>
    		<tr>
    			<td>Senha</td>
    			<td><input class="form-control" type="password" name="senha"></td>
    		</tr>
    		<tr>
    			<td><button class="btn btn-primary" type="submit">Login</button></td>
    		</tr>
    	</table>
    </form>
<?php include("rodape.php"); ?>
