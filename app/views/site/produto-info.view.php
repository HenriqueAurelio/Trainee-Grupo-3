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
    <?php require 'includes/navbar.php' ?>
    <a href="/produtos"><button class="btn btn-danger mt-4 ml-5"><i class="fas fa-arrow-left white"></i> Voltar</button></a>
        <div class="container page">
            <div class="img-box">
                <img class="vizualizacao" src="../../../public/img/<?= $produto->foto; ?>">
            </div>
            <div class="text-box">
                <h1 class="name ml-2"><?= $produto->nome ?><br></h1>
                <p class="product-description ml-2"><?= $produto->descricao ?></p>
                <h2 class="valor ml-2">R$ <?= $produto->preco ?></h2><br><br>  
                <button class="botao mt-1">Comprar</button>
            </div>
        </div>
        <?php require 'includes/footer.php' ?>
    </body>
    
</html>