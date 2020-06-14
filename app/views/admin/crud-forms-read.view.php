<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" 
            href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" 
            integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" 
            crossorigin="anonymous">
            <link rel="stylesheet" href="../../../public/css/admin-styles.css">
            <link rel="stylesheet" href="../../../public/css/all.css">  
        <title>Aurelio Livraria - Admin</title>    
    </head>
    <body>
        <nav class="navbar navbar-dark crud-navbar sticky-top">
            <a class="admin-logo-text navbar-brand" href="#">
               <img id="admin-navbar-logo" src="../../../public/img/aurelio_transparent.png" width="80" height="80">
            </a>
            <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </nav>

        <div class="container-fluid">
            <div class="row">
                <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-dark admin-sidebar collapse">
                    <div class="pt-3 mt-5">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    Bem-vindo, Gabriel!
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="#">
                                    <i class="fas fa-home admin-navbar-item"></i>
                                    Home
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <i class="fas fa-book-open admin-navbar-item"></i>
                                    Livros
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <i class="fas fa-sitemap admin-navbar-item"></i>
                                    Categorias
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <i class="fas fa-users admin-navbar-item"></i>
                                    Usuários
                                </a>
                            </li>
                            <li class="nav-item mt-3">
                                <a class="nav-link" href="#">
                                    <i class="fas fa-sign-out-alt admin-navbar-item"></i>
                                    Sair
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="row">
                <div class="col-lg-2 col-md-3"></div>
                <div class="col-lg-10 col-md-9">
                    <h2>Detalhes do livro</h2>
                    <div>
                        <h4>Nome: <span><?= $produto[0]->nome; ?></span></h4>
                        <h4>Categoria: <span><?= $produto[0]->categoria[0]->nome; ?></span></h4>
                        <h4>Preço: <span><?= $produto[0]->preco; ?></span></h4>
                        <h4>Descrição: <span><?= $produto[0]->descricao; ?></span></h4>
                        <input type="hidden" name="id" value="<?= $produto[0]->id; ?>">
                    </div>
                </div>
            </div>
            
            
        </div>    
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
        <script src="../assets/js/admin-script.js"></script>