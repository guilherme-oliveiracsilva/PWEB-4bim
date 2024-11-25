<?php

include 'db.php';  // Incluindo a conexão com o banco de dados

// Recebe os dados do formulário
$id = $_POST['id'];
$nome = $_POST['nome'];  // Campo 'nome'
$descricao = $_POST['descricao'];    // Campo 'descricao'
$data = $_POST['data'];  // Campo 'data' - novo campo
$status_disponibilidade = $_POST['status_disponibilidade']; // Campo 'status_disponibilidade' 

// Atualiza o livro na tabela 'livros'
$query = "UPDATE projetos 
          SET nome='$nome', descricao='$descricao', data='$data', status_disponibilidade='$status_disponibilidade' 
          WHERE id=$id";

// Executa a consulta
if (mysqli_query($conexao, $query)) {
    // Redireciona para a página de cadastros após o sucesso
    header('Location: index.php?pagina=cadastros');
} else {
    // Caso ocorra um erro, exibe a mensagem
    echo "Erro ao atualizar o livro: " . mysqli_error($conexao);
}
?>
