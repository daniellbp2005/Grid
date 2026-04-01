<?php include "data.php";

    $id = $_GET['id'] ?? null;

    $produtoEncontrado = null;

    foreach($produtos_base as $produto){
        if($produto["id"] == $id){
            $produtoEncontrado = $produto;
            break;
        }
    }

    if(!$produtoEncontrado){
        echo "Produto Não Encontrado";
        exit;
    }
?>
<!DOCTYPE html >
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produto</title>
    <link rel="stylesheet" href="css/produto.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="icon" href="../ img/logos-Photoroom (1).png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
</head>
<body>
    <?php
    require_once 'partials/header.php';
    ?>
    <main>
        <?php 
            echo '
            
            <div class="conteiner">
            <div class="lado lado-eq">
                <div class="linha-cont">
                    <div class="grupo-1">
                        <div class="icon">
                            <a href=""><img src="'.$produtoEncontrado['imagem'].'" alt=""></a>
                        </div>
                        <div class="icon" style="padding: 1rem;">
                            <a href="">                            <img src=" img/chat-removebg-preview.png" alt=""></a>
                        </div>
                        <div class="icon" style="padding: 1rem;">
                            <a href=""><img src=" img/3pnts-removebg-preview.png" alt=""></a>
                        </div>
                        <div class="icon">
                            <a href=""><img src=" img/download-removebg-preview.png" alt=""></a>
                        </div>
                    </div>
                     <button>
                            Salvar
                    </button>
                </div>
                <div class="cont-baixo">
                    <img src=" img/img_14.jpg" alt="" class="img-prod">
                </div>
            </div>
            <div class="lado lado-di">
                <div class="cont-lado-di">
                    <h1>Foto Profissional de Diamente </h1>
                    <h2>No moseu do luvre</h2>
                    <p>de: <s>R$19,99</s> por</p>
                    <p>R$: 9,99</p>
                    <button><a href="#comprar">Comprar</a></button>
                    <h3>A Promoção vai até 25/06/2026</h3>
                    <p class="texto">Para finalizar a compra dessa imagem preencha o forulário abaixo:</p>
                    <form>
                        <input type="" placeholder="Nome Completo:">
                        <input type="" placeholder="Email:">
                        <input type="" placeholder="Senha:">
                        <button class="form-di" id="comprar"><a href=" index.php">Finalizar</a></button>
                    </form>
                </div>
            </div>
        </div>
            
            '
        ; ?>
        
    </main>
    <section>
        
    </section>
    <footer>
    <?php
    require_once 'partials/footer.php';
    ?>
    </footer>
</body>
</html>