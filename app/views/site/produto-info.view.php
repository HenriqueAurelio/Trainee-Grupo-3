<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <link href="https://fonts.googleapis.com/css2?family=Carrois+Gothic+SC&display=swap" rel="stylesheet">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Página Produto</title>
        <link rel="stylesheet" href="../../../public/css/products.style.css">
    </head>
    <body class="product-page">
        <div class="container page">
            <div class="img-box">
                <img class="vizualizacao" src="../../../public/img/<?= $produto->foto; ?>">
            </div>
            <div class="text-box">
                <h1 class="name"><?= $produto->nome ?><br><span class="alteracao">Svetlana Aleksiévitch</span></h1>
                <p class="product-description">
                    <?= $produto->descricao ?>
                </p>
                <h2 class="valor">R$ <?= $produto->preco ?></h2>
                <button class="botao">Comprar</button>
            </div>
        </div>
    </body>
</html>