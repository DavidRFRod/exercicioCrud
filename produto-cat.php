<?php
include_once ("conecta.php");
include_once ("produto-database.php");
insereCategoria($conexao,$_GET["Cat"]);
header('Location: produto-lista.php');
?>