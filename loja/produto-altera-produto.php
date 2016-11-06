<?php
include("cabecalho.php");
include("conecta.php");
include("banco-categoria.php");
include("banco-produto.php");

$categorias = listaCategorias($conexao);

$id = $_GET['id'];

$produto = busca_produto($conexao, $id);

$usado = $produto['usado'] ? "checked='checked'" : "";
?>
	<h1>Alterando produto</h1>
    <form action="altera-produto.php" method="post">
    	<table class="table">
    	 	<input type="hidden" name="id" value="<?=$produto['id']?>">
			<?php include("produto-formulario-base.php"); ?>
			<tr>
				<td>
        			<input class="btn btn-primary" type="submit" value="Alterar" />
				</td>
			</tr>
    	</table>

    </form>
</html>
<?php include("rodape.php"); ?>
