<?php include "data.php";?>
<!DOCTYPE html >
<html lang="pt-br">
<head>
<!-- //require se o arquivo n existir o site quebra
//include se o arquivo n existir ctn a execussão
// ctl + f -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="    css/footer.css">
    <link rel="icon" href="../img/logos-Photoroom (1).png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cal+Sans&family=Zalando+Sans+Expanded:ital,wght@0,200..900;1,200..900&display=swap" rel="stylesheet">

</head>
<body>
    <main>
        <div class="conteiner-login">
                <div class="div-login">
                    <div class="col-e">
                        <h1>Bem vindo de Volta !</h1>
                        <p>Caso queira criar uma conta, clique no botão abaixo</p>
                        <button ><a href="cadastro.php">Cadastro</a></button>
                        <button ><a href="index.php">Voltar</a></button>
                    </div>
                    <div class="col-d">
                        <div class="Pai">
                            <h1 class="Modo" >Fazer Login</h1>
                            <div class="logs">
                                <div class="circulo">
                                    <img src="img/github_foto.png" id="a"draggable="false">
                                </div>
                                <div class="circulo">
                                    <img src="img/X_foto.png" id="b"draggable="false">
                                    </div>
                                <div class="circulo">
                                    <img src="img/instagram_foto.png" id="c"draggable="false">
                                </div>
                            </div>
                            <div class="texto">
                                <p>Faça Cadastro de forma mais rápida, usando alguma de suas contas acima e faça cadastro utilizando elas</p>
                            </div>
                            <div class="card">
                                
                                <input type="email" placeholder="Email" required   id="email" autocomplete="off" id="email" >
                                <input type="password" placeholder="Senha" required minlength="12" maxlength="15" autocomplete="off" id="senha" >
                                <br>
                                <button id="btn" >Entrar</button>
                                <p class="texto" id="texto">Preecha o Login</p>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        <script src="js/jjs.js"></script>
</body>
</php >