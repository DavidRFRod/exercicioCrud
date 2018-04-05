<!--cabeçalho
conexao 
arquivo de manipulação dos produtos no banco de dados
...$nome = $_POST['nome']
executar a chamada a função alteraProduto()-->

<?php
include_once ("conecta.php");
include_once ("produto-database.php");
alteraProduto($conexao, $_GET["id"], $_GET["Nome"], $_GET["Preco"], $_GET["Descricao"], $_GET["Categorias"]);
header('Location: produto-lista.php');
?>


