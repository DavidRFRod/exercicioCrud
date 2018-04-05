<?php
include_once ("conecta.php");
include_once ("produto-database.php");
insereProduto($conexao, $_GET["Nome"], $_GET["Preco"], $_GET["Descricao"], $_GET["Categorias"]);
header('Location: produto-lista.php');
?>