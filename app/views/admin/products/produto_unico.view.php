<!DOCTYPE html>

<html lang="pt-br">

	<head> 

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" /> 
        <title>Painel Administrativo</title>
        <link rel="stylesheet" href="../../../public/css/styles.css">
        <link href="https://fonts.googleapis.com/css2?family=Carrois+Gothic+SC&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/9c2b80ca1e.js" crossorigin="anonymous"></script>
        <link rel="icon" type="image/png" href="../../../../public/img/aurelio_transparent.png"/>

	</head>
	
	<body>
  <?php require($_SERVER['DOCUMENT_ROOT'].'/app/views/admin/includes/nav.php'); ?>
        <div class = "container font-crud">
            <div class="row">
              <div class="col-lg-2 col-md-3"></div>
              <div class="col-lg-10 col-md-9">
                <h1 class="mt-5 pt-3 start-crud">Livro</h1>
              </div>   
            </div>  
            <div class="row">
              <div class="col-lg-2 col-md-3"></div>
                <div class="col-lg-4 col-md-4">
                    <img width="300" height="400" src="../../../public/img/<?= $produto->foto; ?>">
                </div>
                <div class="book-info col-lg-6 col-md-5">
                    <p><b>Nome: </b><?= $produto->nome; ?></p>
                    <p><b>Preço: </b>R$ <?= $produto->preco; ?></p>
                    <p><b>Categoria: </b><?= $produto->categoria->nome; ?></p>
                    <p><b>Descrição: </b><?= $produto->descricao; ?></p>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-lg-2 col-md-3"></div>
                <div class="col-lg-10 col-md-9">
                  <a href="/admin/produtos"><button class="btn btn-go-back btn-sm"><i class="fas fa-arrow-left mr-1 white"></i></button></a>
                  <button type="submit" form="form-edit" class="btn btn-edit-crud btn-crud-table newbox-crud btn-sm ml-2"><i class="fas fa-edit mr-1"></i></button>
                  <form method="POST" id="form-edit" action="/editarproduto">
                      <input type="hidden" value="<?=$produto->id; ?>" name="id">
                  </form>
                </div>
            </div>
        </div>
        <br><br>
        <script src="../../../public/js/scripts.js"></script>
    </body>
</html>
