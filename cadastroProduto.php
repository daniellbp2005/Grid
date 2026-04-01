<?php
    include_once 'init.php';
    print_r($_POST);
    // print_r($produtos_base);
    if ($_SERVER['REQUEST_METHOD'] === 'POST'){//qnd a página for acessada como metodo POST, ele executa esse comando.
        $ids = array_column($_SESSION['produtos'], 'id'); 
        $novoId = $ids ? max($ids) + 1 : 1;

        $_SESSION['produtos'][] = [
            'id' => $novoId,
            'nome' => $_POST['nome'],
            'preco' => $_POST['preco'],
            'categoria' => $_POST['categoria'],
            'descricao' => $_POST['descricao'],
            'descricao_curta' => $_POST['descricao_curta'] ?? '',
            'imagem' => $_POST['imagem'] ?? 'img/img_1.jpg'
        ];

        header('Location: produto.php?produtoadd=1');
        exit;
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
    <div class=" cadastroProduto">
          <form action="cadastroProduto.php" method="POST">
            <div class="lado-e">
                <img src="img/img_1.jpg" alt="">
            </div>
            <div class="lado-d">
                <div class="caixa-form">
                    <div class="form-intro">
                        <h1>Faça seu Cadastro de Produto</h1>
                    </div>
                    <input type="text" name="nome" placeholder="Digite o Nome do Produto" id="nomeProduto"> <!-- coloquei password no nome para escondelo-->
                    <input type="text" name="preco" placeholder="Digite o Preço do Produto" id="precoProduto">
                    <input type="text" name="descricao_curta" placeholder="Digite a Descrição Curta do Produto" id="catagoriaProduto">
                    <input type="text" name="descricao" placeholder="Digite a Descrição do Produto" id="catagoriaProduto">
                    <input type="text" name="categoria" placeholder="Digite a Categoria do Produto" id="catagoriaProduto">
                    <input type="url" name="imagem" placeholder="Cole a URL da Imagem (ex: https://example.com/img.jpg)" id="imagemProduto">
                    <div class="form-linha">
                    </div>
                    <button id="btnEnviar" name="enviar" type="submit">Enviar</button>
                    <p class="text-form1" id="paragrafo">Preencha o Formulário</p>
                </div>
            </div>
        </form>
    </div>
    </main>
    <?php
    require_once 'partials/footer.php';
    ?>
    <!-- <script src="js/script.js"></script> -->
</body>
</php>