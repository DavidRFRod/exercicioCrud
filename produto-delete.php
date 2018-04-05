<?php

include_once ("conecta.php");

function printaMensagemERedirecionaPagina($mensagem){
    echo "<script>alert('$mensagem'); window.location='produto-lista.php'</script>";
}

$id = $_GET['id'];
$deleta = mysqli_query($conexao, "DELETE FROM produtos WHERE id = $id");
$deleta == "" ? printaMensagemERedirecionaPagina("Houve um erro ao deletar!") :
                printaMensagemERedirecionaPagina("Registro excluído com sucesso!");
?>