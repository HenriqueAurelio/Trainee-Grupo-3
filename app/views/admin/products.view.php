<!doctype html>
<html lang="pt-br">
<?php $i=0; ?>
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../../public/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Carrois+Gothic&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/307d809775.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="../assets/js/scripts.js"></script>

    <title>Produtos</title>
  </head>
  <body>
    <!--Inicio Pagina Produtos-->
            <div class="container">
                <div class="row medrow">
                <div class="col-md-3">
                    <span class="resicon" onclick="openNav()"><i class="fas fa-bars"  ></i></span>
                    <div class="input-group">
                        <form  method="POST" action="/produtos/pesquisa" class="form-inline my-0.3 my-lg-0 resquisa">
                            <input name="pesquisa" id="formuPes" class="form-control mr-sm-2 formuPes" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
                            <div class="input-group-append">                                                          
                                <button class="btn btn-outline-danger my-2 my-sm-0 butaoPes" type="submit"><i class="fas fa-search"></i></button>                            
                            </div>
                        </form>
                    </div>           
                    <ul id="list-group reslista"class="list-group reslista">
                        <li class="list-group-item hicon"><span class="ticon"><i class="fas fa-angle-right"></i>  <a href="#" class="removeblue">Administração</a></span></li>
                        <li class="list-group-item hicon"><span class="ticon"><i class="fas fa-angle-right"></i>  <a href="#" class="removeblue">Auto Ajuda</a></span></li>
                        <li class="list-group-item hicon"><span class="ticon"><i class="fas fa-angle-right"></i>  <a href="#" class="removeblue">Ciências Exatas</a></span></li>                    
                        <li class="list-group-item hicon"><span class="ticon"><i class="fas fa-angle-right"></i>  <a href="#" class="removeblue">Comedia</a></span></li>
                        <li class="list-group-item hicon"><span class="ticon"><i class="fas fa-angle-right"></i>  <a href="#" class="removeblue">Fantasia</a></span></li>
                        <li class="list-group-item hicon"><span class="ticon"><i class="fas fa-angle-right"></i>  <a href="#" class="removeblue">Ficção científica</a></span></li>
                        <li class="list-group-item hicon"><span class="ticon"><i class="fas fa-angle-right"></i>  <a href="#" class="removeblue">Filosofia</a></span></li>
                        <li class="list-group-item hicon"><span class="ticon"><i class="fas fa-angle-right"></i>  <a href="#" class="removeblue">Informática</a></span></li>
                        <li class="list-group-item hicon"><span class="ticon"><i class="fas fa-angle-right"></i>  <a href="#" class="removeblue">Marketing</a></span></li>                       
                        <li class="list-group-item hicon"><span class="ticon"><i class="fas fa-angle-right"></i>  <a href="#" class="removeblue">Mistério</a></span></li>                       
                        <li class="list-group-item hicon"><span class="ticon"><i class="fas fa-angle-right"></i>  <a href="#" class="removeblue">Motivacional</a></span></li>                       
                        <li class="list-group-item hicon"><span class="ticon"><i class="fas fa-angle-right"></i>  <a href="#" class="removeblue">Romance</a></span></li>                       
                        <li class="list-group-item hicon"><span class="ticon"><i class="fas fa-angle-right"></i>  <a href="#" class="removeblue">Suspense</a></span></li>                                                               
                    </ul>

                </div>
                <div class="col-md-9 col-sm-6">
                    <div class="row">

                            <?php foreach($produtos as $produto) : ?>
                
                                <div class="col-md-3 col-6">
                                    <div class="card prcards">
                                                <img class="card-img-top tamanhocard" src="../../public/css/img/<?= $produto->foto; ?>" alt="Imagem de capa do card">
                                            <div class="card-body rescard">
                                                    <h5 class="card-title tituloCard"><?= $produto->nome; ?></h5>
                                                    <p class="varlivro"><?= $produto->preco; ?></p>
                                                    <form method="POST" action="produtos/visualizar">
                                                        <input name="id" type="hidden" value="<?= $produto->id; ?>">
                                                        <a href="#" class="btn btn-product resbopro">VER PRODUTO</a>
                                                    </form>                                
                                            </div>
                                        </div>
                                    </div>                                                   
                            <?php endforeach;?>
                   </div>  
                </div>
                    <div class="col-md-4 offset-md-10">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination produtospagination">
                        <li class="page-item"><a class="page-link intenprpag" href="#">Previous</a></li>
                        <li id="actpago" class="page-item actpago active" onclick="actpago()"><a id="actpagol" class="page-link intenprpag activepagination" href="#">1</a></li>
                        <li id="actpags" class="page-item actpags" onclick="actpags()"><a id="actpagsl" class="page-link intenprpag" href="#">2</a></li>
                        <li id="actpagt" class="page-item actpagt" onclick="actpagt()"><a id="actpagtl" class="page-link intenprpag" href="#">3</a></li>
                        <li class="page-item"><a class="page-link intenprpag" href="#">Next</a></li>
                        </ul>
                    </nav>
                    </div>
                </div>

            <!-- JavaScript (Opcional) -->
            <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <!--Fim Pagina Produtos-->
  </body>
</html>