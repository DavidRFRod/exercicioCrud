<?php
include_once("cabecalho.php");
include_once ("conecta.php");
include_once ("produto-database.php");
?>
<!DOCTYPE html>
<html>
    <form action="produto-insere.php" method="GET">
        <fildset>
            <div class="form-group">
                <label for="Name">Nome</label>
                <input type="Nome" class="form-control" id="nomeprod" name='Nome' placeholder="Nome">
            </div>
            <div class="form-group">
                <label for="Preço">Preço</label>
                <input type="text" class="form-control" id="precoprod" name='Preco' placeholder="Preço">
            </div>
            <div class="form-group">
                <label for="Descrição">Descrição</label>
                <textarea class="form-control" rows="1"  name='Descricao'></textarea>
            </div>
            <div class="form-group">
                <label for="Categoria">Categoria</label>
                <select class="form-control" name="Categorias" >
                <?php
                $categorias = listaCategorias($conexao);
                foreach ($categorias as $categoria) {
                ?>
                    <option value="<?= $categoria["id"] ?>"><?= $categoria["nome"] ?></option>
                <?php
                }
                ?>
                </select>
            </div> 

            </div>
            <button type="submit" class="btn btn-primary">Inserir</button>
        </fildset>
    </form>
</html>
<?php
// $produtos = alteraProduto($conexao, $id, $nome, $preco, $descricao, $categoria_id) 
// foreach ($ca_)        
?>
<?php
include_once ("rodape.php");
?>