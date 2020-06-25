<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/9c2b80ca1e.js" crossorigin="anonymous"></script>
    <title>Painel Administrativo</title>
  </head>
  <body>
    <?php require($_SERVER['DOCUMENT_ROOT'].'/app/views/admin/includes/nav.php'); ?>
    <div class="container">   
      <div class="row">
        <div>
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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>