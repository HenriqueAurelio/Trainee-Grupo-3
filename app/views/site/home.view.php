<!doctype html>
<html lang="pt-br">
  <?php $cl=0; ?>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <title>Aurelio Livraria</title>
  </head>
  <body>
    <!-- Navbar vai ficar aqui -->
    <?php require('includes/navbar.php'); ?>
     <!-- Carousel -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img id="carousel1" src="../../../public/img/carousel-1.png" class="d-block w-100" alt="Imagem de publicidade Aurelio Livraria">
          </div>
          <div class="carousel-item">
            <img id="carousel2" src="../../../public/img/carousel-2.png" class="d-block w-100" alt="Imagem de publicidade Aurelio Livraria">
          </div>
          <div class="carousel-item">
            <img id="carousel3" src="../../../public/img/carousel-3.png" class="d-block w-100" alt="Imagem de publicidade Aurelio Livraria">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      <!-- Final do carousel -->

      <!-- Página home (livros e preços) -->
      <div class="container">
        <div class="row book-list">
          <?php foreach($homeprodutos as $homeproduto)  : ?>  
              <div class="col-md-3 col-6">
                  <div class="card mt-2 border-0 book-card">
                    <form method="POST" action="/informacoes-produto">
                      <input type="hidden" name="id" value="<?= $homeproduto->id ?>">
                        <button type="submit" class="button-home-reset border-0"><img src="public\img\<?= $homeproduto->foto; ?>" class="home-img-zoom card-img-top home-book-img ml-3" alt="Imagem livro"></button>
                    </form>
                    <div class="card-body">
                      <div class="home-book-title-group">
                        <h5 class="card-title home-book-title"><?= $homeproduto->nome; ?></h5>
                      </div>  
                        <p class="card-text home-book-price">R$ <?= $homeproduto->preco; ?></p>
                        <form method="POST" action="/informacoes-produto">
                            <input type="hidden" name="id" value="<?= $homeproduto->id ?>">
                            <button type="submit" class="btn home-btn-product ml-2">VER PRODUTO</button>
                            <?php $cl ++; ?>
                        </form>
                      </div>
                  </div>
              </div>
          <?php endforeach; ?>
        </div>
      </div>
        
        <!-- Final da página home -->
        <?php require('includes/footer.php'); ?>
        <!-- Footer vai ficar aqui -->
    <script src="../../../public/js/index.js"></script>
</body>
</html>