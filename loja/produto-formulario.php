<?php
include("cabecalho.php");
include("conecta.php");
include("banco-categoria.php");
include("logica-usuario.php");

verificaUsuario();
$produto = array('nome' => "", 'preco' => "", 'descricao' => "", 'categoria_id' => "1");
$usado = false;
$categorias = listaCategorias($conexao);
?>
	<h1>Adiciona Produto</h1>
    <form action="adiciona-produto.php" method="post">
    	<table class="table">
			<?php include("produto-formulario-base.php"); ?>
			<tr>
				<td>
        			<input class="btn btn-primary" type="submit" value="Cadastrar" />
				</td>
			</tr>
    	</table>

    </form>
</html>
<?php include("rodape.php"); ?>
