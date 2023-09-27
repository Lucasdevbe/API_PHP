<?php
    //declarando variaveis e atribuindo as
    // informações de conexão com o banco de dados

    $server_host = "localhost"; //local do DB
    $server_user = "root";
    $server_password = "";
    $database_name = "shopping";

    //Declarando uma variavel para receber a conexao com o BD
    //A função mysqli_connect necessita de 4 parametros na sequencia a seguir
    $conexao = mysqli_connect($server_host,$server_user,$server_password,$database_name);