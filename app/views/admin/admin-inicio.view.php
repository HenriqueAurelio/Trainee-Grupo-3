<!DOCTYPE html>

<html lang="pt-br">

	<head> 

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" /> 
        <title>Painel Administrativo</title>
        <link rel="stylesheet" href="../../../public/css/admin-styles.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Carrois+Gothic+SC&display=swap" rel="stylesheet">
        <script type="text/javascript" src="../../../public/js/scripts.js"></script>
        <script src="https://kit.fontawesome.com/9c2b80ca1e.js" crossorigin="anonymous"></script>
	</head>
	
	<body>
        
        <div class="container">
          <div class="row">
            <a href="/"><button type="button" class="btn newbox-add-crud btn-crud btn-lg cabecalho-crud admin-init-crud-buttons mt-5 mr-5">Voltar para o site</button></a>
          </div>
            <div class="row">
              <div class="col text-center">
                <img src="../../../public/img/aurelio_transparent.png" class="admin-initial-logo mt-4"></img>
                <h1 class="admin-initial-title mt-3 mb-5">Bem vindo a área administrativa, <?= $_SESSION['nome']; ?>!</h1>
                <a href="/admin/produtos"><button type="button" class="btn newbox-add-crud btn-crud btn-lg cabecalho-crud admin-init-crud-buttons mt-5 mr-5">Produtos</button></a>
                <a href="/categorias"><button type="button" class="btn newbox-add-crud btn-crud btn-lg cabecalho-crud admin-init-crud-buttons mt-5 ml-5 mr-5">Categorias</button></a>
                <a href="/usuarios"><button type="button" class="btn newbox-add-crud btn-crud btn-lg cabecalho-crud admin-init-crud-buttons mt-5 ml-5">Usuarios</button></a>
                <form method="POST" action="/logout">
                  <button type="submit" class="btn newbox-add-crud btn-crud btn-lg cabecalho-crud admin-init-crud-buttons mt-5">Sair</button>
                </form>
              </div>
            </div>
          </div>   



        </div>




        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	</body>


</html>