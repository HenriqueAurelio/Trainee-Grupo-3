<!DOCTYPE html>
<?php $i = 0; ?>

<html lang="pt-br">

	<head> 

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" /> 
        <title>Painel Administrativo</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Carrois+Gothic+SC&display=swap" rel="stylesheet">
        <script type="text/javascript" src="../assets/js/scripts.js"></script>
        <link rel="icon" type="image/png" href="../../../../public/img/aurelio_transparent.png"/>
        <script src="https://kit.fontawesome.com/9c2b80ca1e.js" crossorigin="anonymous"></script>

	</head>
	
	<body>
        <?php require($_SERVER['DOCUMENT_ROOT'].'/app/views/admin/includes/nav.php'); ?>
        <div class = "container font-crud">
            <h1 class="mt-5 pt-3 start-crud">Usuário</h1>
            <div class="row">
                    <div class="col-md-6" id="add-crud-responsive">
                    <form method="get" action="voltar">                        
                       <button type="submit" class="btn newbox-add-crud btn-crud btn-lg mb-5 mt-5 cabecalho-crud">Voltar</button>
                    </form>
                    </div>
            </div>
            <div class = "table-responsive">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th class="titulo-crud" scope="col">E-mail</th>
                            <th class="titulo-crud" scope="col">Nome</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th> <?= $usuarioRead->email; ?></th>
                            <th> <?= $usuarioRead->nome; ?></th>>
                        </tr>   
                    </tbody>
                </table>
            </div>            
        </div>
    

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	</body>


</html>