<?php include_once "header.php"; ?>
<div class="container mt-3">
    <h1>API PHP - CRUD - CREATE (INSERT)</h1>
    <P>Cadastro de produtos</P>

    <form action="cadastro_produtos.php" method="post">
        <div class="mb-3 mt-3">
            <label for="nome_produto">Nome: </label>
            <input type="text" name="nome_produto" id="nome_produto" class="form-control">
        </div>

        <div class="mb-3">
            <label for="descricao_produto">Descrição: </label>
            <input type="text" name="descricao_produto" id="descricao_produto" class="form-control">
        </div>

        <div class="mb-3">
            <label for="quantidade_produto">Quantidade: </label>
            <input type="number" name="quantidade_produto" id="quantidade_produto" class="form-control">
        </div>

        <div class="mb-3">
            <label for="fornecedor_produto">Fornecedor: </label>
            <input type="text" name="fornecedor_produto" id="fornecedor_produto" class="form-control"> 
        </div>
        <div class="mb-3">
            <label for="fornecedor_produto">Fornecedor: </label>
            <input type="text" name="fornecedor_produto" id="fornecedor_produto" class="form-control"> 
        </div>

            <input type="submit" value="Cadastrar Produto" class="btn btn-primary">
        

    </form>
 </div>       
            
<?php include "footer.php"?>