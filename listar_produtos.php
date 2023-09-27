<?php

//incluir o arquivo de conexão ao banco de dados
 include "database.php";
 include_once "header.php"; 
 
 //construir a string em sql para selecionar 
 //do banco de dados

 $sql_dados_db = "SELECT * FROM sup_produtos";
 
 //conectar ao banco e executar o sql
 $dados_db = mysqli_query($conexao,$sql_dados_db);
 
 ?>
<div class= "container mt-3">
    <h1>API PHP - CRUD - READ (SELECT)</h1>
    <P>Lista de produtos cadastrados</P>

    <h2>LISTAGEM DE PRODUTOS</h2>
        
    

    <table class=" table table-bordered">
        <thead>
            <tr>
                <th>Nome: </th>
                <th>Descricao: </th>
                <th>Quantidade: </th>
                <th>Fornecedor: </th>
                <th>Atualizar: </th>
                <th>Excluir: </th>
            </tr>
        </thead>
    
        <tbody> 
            <!-- a funcao mysqli_featch_array converte os dados do banco 
            em um array associativo - resumindo ele associa a coluna do
             banco ao conteudo cadastrado facilitando a busca da informacao-->
            <?php while($dados = mysqli_fetch_array($dados_db)){?>
            <tr>
                <td><?php echo$dados['nome_produto'];?></td>
                <td><?php echo$dados['descricao_produto'];?></td>
                <td><?php echo$dados['quantidade_produto'];?></td>
                <td><?php echo$dados['fornecedor_produto'];?></td>
                <td><a href="form_atualizar__cadastro_produto.php?id_aluno=<?php echo $dados['id_produto'];?>">Atualizar</a></td>
                <td><a href="excluir_cadastros.php?id_aluno=<?php echo $dados['id_produto'];?>">Excluir</a></td>
            </tr>
            <?php }?>
        </tbody>
    </h1>
</table>
            </div>
<?php include "footer.php"?>