<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
  
    <title>Painel Administrativo</title>
    <link rel="icon" type="image/png" href="../../../../public/img/aurelio_transparent.png"/>
  </head>
  <body>
    <?php require($_SERVER['DOCUMENT_ROOT'].'/app/views/admin/includes/nav.php'); ?>
    <div class="container">   
      <div class="row">
      <div class="col-lg-2 col-md-3"></div>
        <div class="col-lg-10 col-md-9">
            <h1 class="display-4">Erro ao deletar</h1>
            <p class="lead">Não foi possivel deletar esta categorias pois há livros com essa categoria</p>
            <hr class="my-4">
            <p>Troque a categorias ou delete os livros para poder deletar esta categorias</p>
            <a class="btn btn-danger btn-lg" href="/categorias" role="button"><i class="fas fa-arrow-left"></i> Categorias</a>
            <a class="btn btn-danger btn-lg" href="/admin/produtos" role="button"><i class="fas fa-arrow-right"></i> Ir para Produtos</a>
        </div>
      </div>
    </div>

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
  </body>
</html>