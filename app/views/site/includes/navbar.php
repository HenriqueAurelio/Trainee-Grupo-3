<?php $status = session_status();
if($status == PHP_SESSION_NONE){
    //There is no active session
    session_start();
}else
if($status == PHP_SESSION_DISABLED){
    //Sessions are not available
}else
if($status == PHP_SESSION_ACTIVE){
    //Destroy current and start new one
    session_destroy();
    session_start();
} ?>
<!DOCTYPE html>
<html lang="pt-br">
      <head>
            <meta charset="utf-8">
            <link rel="stylesheet" href="../../../../public/css/style.css">
            <link rel="stylesheet" href="../../../../public/css/styles.css">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
            <title>Aurelio Livraria</title>
            <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
            <script src="https://kit.fontawesome.com/9c2b80ca1e.js" crossorigin="anonymous"></script>
     </head>
     <body>
        <nav class="navbar navbar-site navbar-expand-lg">
          <div class="container">
                <a class="navbar-brand" href="/"><img src="../../../../public/img/aurelio_transparent.png" width="80" height="80"></a>
            <nav class="navbar-light">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
            </nav>  
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">                
                    <li class="nav-item">
                      <a class="nav-link linkestilo" href="/produtos">Produtos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link linkestilo" href="/sobre">Sobre Nós</a>
                     </li>
                     <?php if(!isset($_SESSION['email'])) : ?>
                        <li class="nav-item">
                            <a class="nav-link linkestilo" href="/admin">Login</a>
                        </li>
                     <?php else : ?>
                        <li class="nav-item">
                            <a class="nav-link linkestilo" href="/admin/home">Área Administrativa</a>
                        </li>
                     <?php endif; ?>   
                     <li class="nav-item">
                      <a class="nav-link linkestilo" href="/contato">Contato</a>
                    </li>
                  </ul>
                  <div class="pesquisa">
                    <form class="form-inline my-2 my-lg-0">
                      <div class="input-group">
                        <input type="text" class="form-control" placeholder="Procurar..." aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                          <button class="btn btn-outline-secondary btn-search-navbar-site border-0" type="submit"><i class="fas fa-search"></i></button>
                        </div>
                      </div>
                    </form>
                  </div>                  
                </div>
              </div>
        </nav>
                         <!-- Optional JavaScript -->
                 <!-- jQuery first, then Popper.js, then Bootstrap JS -->
                <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
                <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
     </body>
</html>