<!doctype html>
<html lang="pt-br">
  <?php $cl=0; ?>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="public\css\styles.css">
    <title>Aurelio Livraria</title>
  </head>
  <body>
    <!-- Navbar vai ficar aqui -->
    <?php include 'navbar.view.php'; ?>
     <!-- Carousel -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img id="carousel1" src="public\img\carousel-1.png" class="d-block w-100" alt="Imagem de publicidade Aurelio Livraria">
          </div>
          <div class="carousel-item">
            <img id="carousel2" src="public\img\carousel-2.png" class="d-block w-100" alt="Imagem de publicidade Aurelio Livraria">
          </div>
          <div class="carousel-item">
            <img id="carousel3" src="public\img\carousel-3.png" class="d-block w-100" alt="Imagem de publicidade Aurelio Livraria">
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
                      <img src="public\img\<?= $homeproduto->foto; ?>" class="home-img-zoom card-img-top home-book-img" alt="Imagem livro">
                      <div class="card-body">
                        <div class="home-book-title-group">
                          <h5 class="card-title home-book-title"><?= $homeproduto->nome; ?></h5>
                        </div>  
                        <p class="card-text home-book-price">R$ <?= $homeproduto->preco; ?></p>
                        <form method="POST" action="/produto">
                            <input type="hidden" name="id" value="<?= $homeproduto->id ?>">
                            <button type="submit" class="btn home-btn-product">VER PRODUTO</button>
                            <?php $cl ++; ?>
                        </form>
                      </div>
                  </div>
              </div>
          <?php endforeach; ?>
        </div>
      </div>
        
        <!-- Final da página home -->
        <?php include 'public/includes/footer.view.php'; ?>
        <!-- Footer vai ficar aqui -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="../assets/js/index.js"></script>
</body>
</html>