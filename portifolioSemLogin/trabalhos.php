<?php
require_once("conexao.php");
require_once("codigo.php");
$query = "SELECT * FROM trabalhos";
$puxa = $teste->query($query);
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
        #trabalhos {
            background-color: rgba(100, 97, 97, 0.24);
            border-radius: 10px;
        }

        #rodape {
            display: flex;
            flex-direction: row;
            list-style: none;
        }
    </style>
</head>
<body>
    <div class="container text-center">
        <div class="row">
            <p id="tituloTrabalho">Meus trabalhos</p>
        </div>
    </div>

    <div class="container text-center">
        <?php if($puxa->num_rows == 0){
            echo "não há trabalhos";
        }else{ ?>
            <?php  
                while ($mostra = $puxa->fetch_object()) {  
            ?>
        <div class="row">
            <div class="col-4">
            </div>
                <div class="col-4 shadow-sm p-3 mb-5 bg-body-tertiary rounded">
                    <img src="<?php echo $mostra->trabalhos_img ?>" alt="" class="img-fluid rounded mx-auto d-block">
                    <br>
                    <p><?php echo $mostra->trabalhos_nome ?></p>
                    <p><?php echo $mostra->trabalhos_descricao ?></p>
                    <a href="<?php echo $mostra->trabalhos_link ?>" class="btn btn-dark">ver trabalho</a>
                </div>
            <div class="col-4">
            </div>
        </div>
        <?php } ?>
         <?php } ?>
    </div>
</body>
</html>
