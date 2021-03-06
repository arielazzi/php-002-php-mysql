<?php 
require_once("cabecalho.php");
require_once("banco-produto.php");
require_once("logica-usuario.php");
?>


<table class="table table-striped table-bordered">
<?php
	$produtos = listaProdutos($conexao);
	foreach ($produtos as $produto):
?>
	<tr>
		<td><?= $produto['nome']?></td>
		<td><?= $produto['preco']?></td>
		<td><?=substr($produto['descricao'], 0, 15)?>...</td>
		<td><?=$produto['categoria_nome']?></td>
		<td><a class="btn btn-primary" href="produto-altera-produto.php?id=<?=$produto['id']?>">Alterar</a></td>
		<td>
			<form action="remove-produto.php" method="post">
				<input type="hidden" name="id" value="<?=$produto['id']?>">
				<button class="btn btn-danger">Remover</button>
			</form>
		</td>
	</tr>
<?php
	endforeach
?>
</table>

<?php require_once("rodape.php"); ?>
