<?php
    require_once "init.php";

    if(isset($_GET['produtoadd']) && $_GET['produtoadd'] === '1'){
        print '<p class="aviso">Produto add com Sucesso!!</p>';
    }

?> 
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php print $nomeLoja; ?></title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="icon" href="img/logos-Photoroom (1).png">
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
        echo '<div class="categoria">';
        echo '<p>Catálogo de Produtos:</p>';
        echo '<ul class="ul-cat">';
        foreach ($categorias as $kcat => $catNome) {
            echo '<li><a href="#cat-' . $kcat . '">' . $catNome . '</a></li>';
        }
        echo '</ul>';
        echo '</div>';
        ?>
    <div class="conteiner">
            <?php
            foreach($_SESSION['produtos'] as $produto  ){
                echo '
            <div class="col">
                <div class="cima">
                    <select name="" id="">
                        <option value=""> Mais</option>
                        <option value=""> Acessar</option>
                    </select>
                    <img src="' . $produto['imagem'] . '" alt="">
                </div>
                <div class="baixo">
                    <a href="produto.php?id=' . $produto['id'] . '"> 
                    <div class="NomeProd">' . $produto['descricao_curta'] . ' </div>
                    <!-- <button class="button-col">comprar</button> -->
                    <p class="preco">R$: ' . $produto['preco'] . '</p>
                    </a>
                </div>
            </div>
            ';
            }
            ?>
    </div>
    </main>
    <section>
        <form action="cadastroProduto.php" method="POST">
            <div class="lado-e">
                <img src="img/img_1.jpg" alt="">
            </div>
            <div class="lado-d">
                <div class="caixa-form">
                    <div class="form-intro">
                        <h1>Faça seu Pedido Personalizado</h1>
                    </div>
                    <input type="text" name="nome" placeholder="Digite seu Nome Completo" id="nome"> <!-- coloquei password no nome para escondelo-->
                    <input type="email" name="email" placeholder="Digite seu Email" id="email">
                    <input type="tel" name="telefone" placeholder="(11) 98712-1234" id="tel">
                    <input type="password" name="senha" placeholder="Digite sua Senha" id="pass">
                    <div class="form-linha">
                        <div class="esquerda">
                            <select name="tipoFoto" id="">
                                <option>Tipo de Foto</option>
                                <option value="abstrata">Foto Abstrata</option>
                                <option value="comercial">Foto Comercial</option>
                                <option value="editorial">Foto Editorial</option>
                                <option value="manimalista">Foto Minimalista</option>
                            </select>
                        </div>
                        <div class="direita">
                            <p>Gostou do tandimento ?</p>
                            <input type="radio" class="radio" name="avaliacao" value="sim">
                            <p>Sim</p>
                            <input type="radio" class="radio" name="avaliacao" value="nao">
                            <p>Não</p>
                        </div>
                    </div>
                    <button id="btnEnviar" name="enviar" type="submit">Enviar</button>
                    <p class="text-form1" id="paragrafo">Preencha o Formulário</p>
                </div>
            </div>
        </form>
    </section>
    <?php
    require_once 'partials/footer.php';
    ?>
    <!-- <script src="js/script.js"></script> -->
</body>
</php>