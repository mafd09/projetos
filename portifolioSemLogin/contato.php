<?php
require_once("conexao.php");
require_once("codigo.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Meu Portfólio</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" 
        crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" 
          integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" 
          crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
            <link rel="stylesheet" href="style.css">
  <style>
    .form-compacta {
      max-width: 400px;
      margin: 0 auto;
    }

    .btn-preto {
      background-color: #000;
      color: #fff;
      border: none;
    }

    .btn-preto:hover {
      background-color: #333;
      color: #fff;
    }
     #contato{
        background-color: rgba(100, 97, 97, 0.24);
        border-radius: 10px;
    }
            #rodape{
         display: flex;
        flex-direction: row; 
        list-style: none;
    }
  </style>
</head>
<body>
  <div class="container mt-5">
    <form action="" method="POST" class="p-3 border rounded shadow-sm bg-light form-compacta">
      <div class="mb-3">
        <label for="nome" class="form-label">Nome</label>
        <input type="text" class="form-control" id="nome" name="nome" placeholder="Insira seu nome">
      </div>

      <div class="mb-3">
        <label for="sobrenome" class="form-label">Sobrenome</label>
        <input type="text" class="form-control" id="sobrenome" name="sobrenome" placeholder="Insira seu sobrenome">
      </div>

      <div class="mb-3">
        <label for="email" class="form-label">E-mail</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Insira seu e-mail">
      </div>

      <div class="mb-3">
        <label for="telefone" class="form-label">Telefone</label>
        <div class="input-group">
          <span class="input-group-text"><i class="bi bi-telephone"></i></span>
          <input type="tel" class="form-control" id="telefone" name="telefone" placeholder="(11) 91234-5678">
        </div>

        <div class="mb-3">
        <label for="motivo" class="form-label">motivo de contato</label>
        <input type="text" class="form-control" id="motivo" name="motivo" placeholder="fale o motivo de contatar">
      </div>
      </div>

      <button type="submit" class="btn btn-preto w-100" name="enviar">Enviar</button>
    </form>
  </div>
</body>
</html>
</body>
</html> 