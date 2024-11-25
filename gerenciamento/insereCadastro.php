<?php

include 'db.php';

$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$data = $_POST['data'];
$status_disponibilidade = $_POST['status_disponibilidade'];

$query = "INSERT INTO projetos (nome, descricao, data, status_disponibilidade) 
VALUES ('$nome', '$descricao', '$data', '$status_disponibilidade')";

mysqli_query($conexao, $query);

header('location:index.php?pagina=cadastros');
