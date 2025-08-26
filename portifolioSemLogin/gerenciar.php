<?php
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
        #gerenciar{
        background-color: rgba(100, 97, 97, 0.24);
        border-radius: 10px;
    }
</style>
</head>
<body>

    <div class="container text-center">
        <div class="row">
            <p id="tt_trabalhos">Trabalhos</p>
        </div>
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
            <a href="adicionarTrabalhos.php" class="btn btn-light shadow p-3 mb-5  rounded" id="btn1">Adicionar trabalhos</a>
            <a href="excluirtrabalhos.php" class="btn btn-light shadow p-3 mb-5  rounded" id="btn2">Excluir trabalhos</a>
            <a href="editartrabalhos.php" class="btn btn-light shadow p-3 mb-5  rounded" id="btn3">Editar trabalhos</a>
            </div>
        </div>
        <div class="col-3"></div>
    </body>
</html> 