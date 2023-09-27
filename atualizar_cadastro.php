<?php

    include "listar_produtos.php";
    include "database.php";
    $id_produto = $_POST['id_produto'];

    $sql_id = "SELECT * FROM sup_produtos
    WHERE sup_produtos.id_produto = '$id_produto'";

    $dados_bd_id = mysqli_query($conexao,$sql_id);
    
    
    $nome_produto = $_POST['nome_produto'];
    $descricao_produto = $_POST['descricao_produto'];
    $quantidade_produto = $_POST['quantidade_produto'];
    $fornecedor_produto = $_POST['fornecedor_produto'];

    $consulta_bd_id = mysqli_fetch_array($dados_bd_id);

    $SQL_update = "UPDATE sup_produtos SET id_produto = '$id_produto', nome_produto = '$nome_produto', descricao_produto = '$descricao_produto ', quantidade_produto = '$quantidade_produto', fornecedor_produto = '$fornecedor_produto' WHERE sup_produtos.`id_produto = '$id_produto";

     if(mysqli_query($conexao,$sql)){
        header("location: listar_produtos.php");
    
    } else{
        echo "Falha ao realizar o cadastro";
    }

?>