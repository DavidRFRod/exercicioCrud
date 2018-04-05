<?php
include_once("conecta.php");
include_once("cabecalho.php");
?>

<!DOCTYPE html>
<html>
    <form action="produto-cat.php">
        <label for="Cat">Nova Categoria</label>
        <input type="text" class="form-control" id="Cat" name='Cat' placeholder="Nova Categoria">
        <button type="submit" class="btn btn-primary">Inserir</button>
    </form>
</html>