<?php
require_once("conexao.php");

if(isset($_GET['id']) && isset($_GET['excluir'])){
    $id = intval($_GET['id']);
    $delete = "DELETE FROM contato WHERE contato_id = $id";
    $teste->query($delete);
}
$query = "SELECT * FROM contato";
$puxa = $teste->query($query);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Portfólio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container mt-4 mb-4">

    <a href="gerenciar.php" class="text-decoration-none">
        <i class="bi bi-arrow-left fs-2"></i> 
    </a>
</div>

<div class="container text-center mt-4">
<?php if($puxa->num_rows == 0): ?>
    <p class="fs-5">Nenhuma tentativa de contato registrada</p>
<?php else: ?>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>id</th>
                <th>Nome</th>
                <th>Sobrenome</th>
                <th>Email</th>
                <th>Telefone</th>
                <th>Motivo</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
        <?php while ($mostra = $puxa->fetch_object()): ?>
            <tr>
                <td><?php echo $mostra->contato_id; ?></td>
                <td><?php echo $mostra->contato_nome; ?></td>
                <td><?php echo $mostra->contato_sobrenome; ?></td>
                <td><?php echo $mostra->contato_email; ?></td>
                <td><?php echo $mostra->contato_telefone; ?></td>
                <td><?php echo $mostra->contato_motivo; ?></td>
                <td>
                    <form method="GET" >
                        <input type="hidden" name="id" value="<?php echo $mostra->contato_id; ?>">
                        <button type="submit" name="excluir" class="btn btn-danger btn-sm">Excluir</button>
                    </form>
                </td>
            </tr>
        <?php endwhile; ?>
        </tbody>
    </table>
<?php endif; ?>
</div>
</body>
</html>
