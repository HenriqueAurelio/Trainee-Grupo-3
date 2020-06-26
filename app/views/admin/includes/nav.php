<?php $status = session_status();
if($status == PHP_SESSION_NONE){
    //There is no active session
    session_start();
}
?>

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
        <link rel="stylesheet" href="../../../public/css/all.css">
        <link rel="stylesheet" href="../../../public/css/admin-styles.css">
        <link rel="stylesheet" href="../../../public/css/styles.css">
        <link rel="shortcut icon" href="../../../public/img/aurelio_transparent_30-30.png" />
        <title>Aurelio Livraria - Admin</title>
            
    </head>
    <body>
        <nav class="navbar navbar-dark crud-navbar sticky-top" id="crud-sidebar">
            <div>
                <a class="admin-logo-text navbar-brand" href="#">
                    <img id="admin-navbar-logo" src="../../../public/img/aurelio_transparent.png" width="80" height="80">
                </a>
            </div>
            <button class="navbar-toggler d-md-none collapsed" id="toggle-button" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </nav>

        <div class="container-fluid">
                <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-dark admin-sidebar collapse">
                    <div class="pt-3 mt-5">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    Bem-vindo, <?= $_SESSION['nome']; ?>!
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/admin/produtos">
                                    <i class="fas fa-book-open admin-navbar-item"></i>
                                    <span class="admin-navbar-item">Livros</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/categorias">
                                    <i class="fas fa-sitemap admin-navbar-item"></i>
                                    <span class="admin-navbar-item">Categorias</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/usuarios">
                                    <i class="fas fa-users admin-navbar-item"></i>
                                    Usuários
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="/">
                                    <i class="fas fa-arrow-left white admin-navbar-item"></i>
                                   <span class="admin-navbar-item">Voltar para o site</span>
                                </a>
                            </li>
                            <li class="nav-item mt-3">
                                <form method="POST" action="/logout">
                                    <button class="nav-link button-form-logout" type="submit">
                                        <i class="fas fa-sign-out-alt admin-navbar-item"></i>
                                        Sair
                                    </button>
                                </form>    
                            </li>
                        </ul>
                    </div>
                </nav>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
        <script src="../../../public/js/admin-script.js"></script>
    </body>
</html>