<?php

function insereProduto($conexao, $nome, $preco) {
    $query = "INSERT INTO produtos(nome, preco) VALUES ('{$nome}',{$preco})";
    return mysqli_query($conexao, $query);
}

function listarProdutos($conexao) {
    $produtos = array();
    $query = "SELECT * FROM produtos";
    $retorno = mysqli_query($conexao, $query);
    while ($produto = mysqli_fetch_assoc($retorno)) {
        array_push($produtos, $produto);
    }
    return $produtos;
}

function removerProdutos($conexao, $id) {
    $query = "DELETE FROM produtos WHERE ID = {$id}";
    return mysqli_query($conexao, $query);
}

function atualizarProduto($conexao, $id, $nome, $preco) {
    $query = "UPDATE produtos SET nome = '{$nome}' ,preco = {$preco} WHERE id = {$id}";
    return mysqli_query($conexao, $query);
}

function listarProdutosPorId($conexao, $id) {
    $query = "SELECT nome, preco FROM produtos WHERE ID = {$id}";
    $retorno = mysqli_query($conexao, $query);
    return mysqli_fetch_assoc($retorno);
}