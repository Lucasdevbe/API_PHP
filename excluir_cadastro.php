<?php    
    include "database.php";
    include "header.php";
    

    $id_produto = $_GET['sup.produtos.id_produto'];

    $sql_id ="DELETE FROM produtos WHERE id_produto = '$id_produto'";

    $dados_bd_id = mysqli_query($conexao, $sql_id);

    $bd_id = mysqli_fetch_array($dados_bd_id);

    if(mysqli_query($conexao,$sql)){
        header("location: listar_produtos.php");
    
    } else{
        echo "Falha ao realizar o cadastro";
    }
?>