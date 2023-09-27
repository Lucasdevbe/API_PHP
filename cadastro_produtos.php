<?php
    //Incluir o arquivo de conexão com o banco de dados
    include "database.php";

    //resgatar as informações do formulario enviadas via POST
    $id_produto;
    $nome_produto = $_POST['nome_produto'];
    $descricao_produto = $_POST['descricao_produto'];
    $descricao_produto = $_POST['categoria_produto'];
    $quantidade_produto = $_POST['quantidade_produto'];
    $fornecedor_produto = $_POST['fornecedor_produto'];

    //Criar a string com o comando em SQL 
    $sql = "INSERT INTO sup_produtos (nome_produto, descricao_produto, quantidade_produto, fornecedor_produto) 
    VALUES ('$nome_produto', '$descricao_produto', '$quantidade_produto', '$fornecedor_produto')";

    //conectar ao banco de dados e executar o comando em sql
    if(mysqli_query($conexao,$sql)){
        header("location: listar_produtos.php");
    
    } else{
        echo "Falha ao realizar o cadastro";
    }