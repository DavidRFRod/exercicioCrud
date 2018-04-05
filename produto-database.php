<?php

function listaProdutos($conexao) {
    $produtos = array();
    $resultado = mysqli_query($conexao, "select p.*,c.nome as cat_nome from produtos as p inner join categorias as c on c.id = p.categoria_id");
    while ($produto = mysqli_fetch_assoc($resultado)) {
        array_push($produtos, $produto);
    }
    return $produtos;
}

function listaCategorias($conexao) {
    $categorias = array();
    $resultado = mysqli_query($conexao, "select * from categorias");
    while ($categoria = mysqli_fetch_assoc($resultado)) {
        array_push($categorias, $categoria);
//        $categorias[] = $categoria;
    }
    return $categorias;
}

function alteraProduto($conexao, $id, $nome, $preco, $descricao, $categoria_id) {
    $query = "update produtos set nome = '{$nome}',preco = '{$preco}',descricao = '{$descricao}',categoria_id ='{$categoria_id}' where id = '{$id}'";
    return mysqli_query($conexao, $query);
}

function buscaProduto($conexao, $id) {
    $query = "select * from produtos where id ={$id}";
    $resultado = mysqli_query($conexao, $query);
}
function insereProduto($conexao, $nome, $preco, $descricao, $categoria_id) {
    $query = "insert into produtos (nome,preco,descricao,categoria_id) values  ('$nome', $preco, '$descricao', $categoria_id)";
    return mysqli_query($conexao, $query);
}
function insereCategoria($conexao, $nome) {
    $query = "insert into categorias (nome) values ('$nome')";
    return mysqli_query($conexao, $query);
}
