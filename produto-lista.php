<?php
include_once("cabecalho.php");
include_once ("conecta.php");
include_once ("produto-database.php");
?>
<table class="table table-striped table-bordered">
    <tr>
        <td>Nome</td>
        <td>Preço</td>
        <td>Descrição</td>
        <td>Categoria</td>
        <td>Ações</td>
    </tr>
    <?php
    $produtos = listaProdutos($conexao);
    foreach ($produtos as $produto):
        ?>
        <tr>
            <td><?= utf8_encode($produto["nome"]) ?></td>
            <td><?= $produto["preco"] ?> </td>
            <td><?= utf8_encode($produto["descricao"]) ?> </td>
            <td><?= utf8_encode($produto["cat_nome"]) ?></td>
            <td><a class="btn btn-primary" href="produto-update-form.php?id=<?= $produto["id"] ?>">Alterar</a>
                <a class="btn btn-danger" href="produto-delete.php?id=<?= $produto["id"] ?>">Deletar</a>
            </td>
            
        </tr>
        <?php
    endforeach;
    ?>
</table>
<?php
include_once("rodape.php");
