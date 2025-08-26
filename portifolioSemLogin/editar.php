<?php
require_once("conexao.php");

if (isset($_GET['id'])) {
    $id = intval($_GET['id']); 
    $query = "SELECT * FROM trabalhos WHERE trabalhos_id = $id";
    $puxa = $teste->query($query);
    if ($puxa && $puxa->num_rows > 0) {
        $mostra = $puxa->fetch_object();
    }
    
    if(isset($_POST['editar'])){
        $nome = $_POST['nome'];
        $descricao = $_POST['descricao'];
        $linktrabalho = $_POST['link'];
        $linkimg = $_POST['linkimg'];

        $query = "UPDATE trabalhos SET 
            trabalhos_nome = '$nome',
            trabalhos_descricao = '$descricao',
            trabalhos_link = '$linktrabalho',
            trabalhos_img = '$linkimg' 
            WHERE trabalhos_id = $id
        ";

        if ($teste->query($query) === TRUE) {
            header("Location: trabalhos.php ");
            exit();
        } else {
            echo "Erro ao atualizar o trabalho: " . $teste->error;
        }
    }
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Portfólio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" 
          rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
            <link rel="stylesheet" href="style.css">
</head>
<style>
      .form-compacta {
      max-width: 400px;
      margin: 0 auto;
    }
</style>
<body>
<div class="container mt-5">
    <form action="" method="POST" class="p-3 border rounded shadow-sm bg-light form-compacta">
      
      <!-- imagem -->
      <div class="mb-3 text-center">
        <img src="<?php echo $mostra->trabalhos_img; ?>" alt="Imagem do trabalho" class="img-fluid rounded" style="max-width:200px;"><br><br>
        <label for="linkimg" class="form-label">link da imagem</label>
        <input type="text" name="linkimg" id="" class="form-control"  placeholder="insira o link da nova imagem" value="<?php echo $mostra->trabalhos_img ?>">
      </div>
        
      <!-- nome -->
      <div class="mb-3">
        <label for="nome" class="form-label">Nome</label>
        <input type="text" name="nome" id="nome" class="form-control" 
               value="<?php echo $mostra->trabalhos_nome; ?>">
      </div>

      <!-- descrição -->
      <div class="mb-3">
        <label for="descricao" class="form-label">Descrição</label>
        <input type="text" name="descricao" id="descricao" class="form-control" 
               value="<?php echo $mostra->trabalhos_descricao; ?>">
      </div>

      <!-- link -->
      <div class="mb-3">
        <label for="link" class="form-label">Link</label>
        <input type="text" name="link" id="link" class="form-control" 
               value="<?php echo $mostra->trabalhos_link; ?>">
      </div>
      <button name="editar" value="editar">editar</button>
    </form>
</div>
</body>
</html>
