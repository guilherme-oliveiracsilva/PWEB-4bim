<?php

include 'db.php';

$id = $_POST['id'];

while ($linha = mysqli_fetch_array($consultaCadastros)) {
    if ($linha['id'] == $id) {
?>

<br>
<div class="caixa">
    <h4>Editar Cadastro de Livro</h4>
    <br>
    <a type="button" class="btn btn-primary" href="?pagina=cadastros"><i class="bi bi-backspace"></i> Voltar</a>
    <br><br><br> 
    <form method="post" action="processaEditaCadastro.php" autocomplete="off">
        <input value="<?php echo $linha['id']; ?>" type="hidden" id="id" name="id">
        
        <div class="mb-3">
            <label for="nome" class="form-label">Título</label>
            <input value="<?php echo $linha['nome']; ?>" type="text" class="form-control" id="nome" name="nome" required>
        </div>
        
        <div class="mb-3">
            <label for="descricao" class="form-label">descricao</label>
            <input value="<?php echo $linha['descricao']; ?>" type="text" class="form-control" id="descricao" name="descricao" required>
        </div>
        
        <div class="mb-3">
            <label for="data" class="form-label">Gênero</label>
            <input value="<?php echo $linha['data']; ?>" type="date" class="form-control" id="data" name="data" required>
        </div>
        
        <div class="mb-3">
            <label for="status_disponibilidade" class="form-label">Status de Disponibilidade</label>
            <select class="form-control" id="status_disponibilidade" name="status_disponibilidade" required>
                <option value="disponível" <?php echo ($linha['status_disponibilidade'] == 'disponível') ? 'selected' : ''; ?>>Disponível</option>
                <option value="indisponível" <?php echo ($linha['status_disponibilidade'] == 'indisponível') ? 'selected' : ''; ?>>Indisponível</option>
            </select>
        </div>
        
        <br>
        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>   
</div>
<br><br>

<?php
    }
}
?>
