<!DOCTYPE html>

<html lang="pt-br">

	<head> 

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" /> 
        <title>Painel Administrativo</title>
        <link rel="stylesheet" href="../../../public/css/styles.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Carrois+Gothic+SC&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/9c2b80ca1e.js" crossorigin="anonymous"></script>

	</head>
	
	<body>
    <?php require('includes/nav.php'); ?>
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
                    <img width="300" height="400" src="../../../public/img/<?= $produto[0]->foto; ?>">
                </div>
                <div class="book-info col-lg-6 col-md-5">
                    <p><b>Nome: </b><?= utf8_encode($produto[0]->nome); ?></p>
                    <p><b>Preço: </b>R$ <?= utf8_encode($produto[0]->preco); ?></p>
                    <p><b>Categoria: </b><?= utf8_encode($produto[0]->categoria[0]["nome"]); ?></p>
                    <p><b>Descrição: </b><?= utf8_encode($produto[0]->descricao); ?></p>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-lg-2 col-md-3"></div>
                <div class="col-lg-10 col-md-9">
                  <a href="/produtos"><button class="btn btn-primary btn-sm">Voltar para a listagem</button></a>
                  <button type="submit" form="form-edit" class="btn btn-edit-crud btn-crud-table newbox-crud btn-sm ml-2"><i class="fas fa-edit mr-1"></i></button>
                  <form method="POST" id="form-edit" action="/editarproduto">
                      <input type="hidden" value="<?= $produto[0]->id; ?>" name="id">
                  </form>
                </div>
            </div>
        </div>
        <br><br>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="../../../public/js/scripts.js"></script>
    </body>
</html>
