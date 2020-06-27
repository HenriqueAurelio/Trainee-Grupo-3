<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" type="image/png" href="../../../../public/img/aurelio_transparent.png"/>
        <link rel="stylesheet" 
            href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" 
            integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" 
            crossorigin="anonymous">
        <title>Aurelio Livraria - Admin</title>    
    </head>
    <body>
        <?php require($_SERVER['DOCUMENT_ROOT'].'/app/views/admin/includes/nav.php'); ?>
            <div class="row">
                <div class="col-lg-2 col-md-3"></div>
                <div class="col-lg-10 col-md-9">
                    <h2>Editar Usuário</h2>
                </div>
            </div>
            <form method="POST" action="editado">
                <div class="row">
                    <div class="col-lg-2 col-md-3"></div>
                    <div class="col-lg-10 col-md-9 form-group">
                        <?php 
                            if(!empty($message)) {
                                ?><div class="alert alert-danger" role="alert">
                                <?= $message[0]; ?>
                            </div> <?php
                            } 
                        ?>
                        <label for="exampleFormControlInput1">E-mail</label>
                        <input type="hidden" name="id" value="<?= $usuer->id; ?>">
                        <input type="text" name="email" value="<?= $usuer->email; ?>" class="form-control" id="exampleFormControlInput1" placeholder="E-mail">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-2 col-md-3"></div>
                    <div class="col-lg-10 col-md-9 form-group">
                        <label for="exampleFormControlInput1">Nome</label>
                        <input type="hidden" name="id" value="<?= $usuer->id; ?>">
                        <input type="text" name="nome" value="<?= $usuer->nome; ?>" class="form-control" id="exampleFormControlInput1" placeholder="Nome">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-2 col-md-3"></div>
                    <div class="col-lg-5 col-md-4 form-group">
                        <label for="exampleFormControlInput2">Senha</label>
                        <input type="hidden" name="id" value="<?= $usuer->id; ?>">
                        <input type="password" name="senha" value="<?= $usuer->senha; ?>" class="form-control" id="exampleFormControlInput2" placeholder="Senha">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-11 col-8"></div>
                    <div class="col-lg-1 col-4">
                        <button type="submit" class="btn admin-submit-button">Editar</button>
                    </div>    
                </div>     
            </form>    
        </div>    
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
        <script src="../assets/js/admin-script.js"></script>
    </body>
</html>