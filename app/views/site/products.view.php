<!doctype html>
<html lang="pt-br">
<?php
    $i = 0;
    if(!empty($produtos)) {
        if (isset($produtos_limite)) {
            $limit = 16;
            $num_pages = ceil(count($produtos) / $limit);
            $ids = array();
            foreach($produtos as $produto) {
                array_push($ids, $produto->id);
            } 
            $actual_page = array_search($produtos_limite[0]->id, $ids);
            $possible = $actual_page + 16;
            if ($possible <= count($produtos)) {
                $exists = 1;
            }
            else {
                $exists = 0;
            }
        }
    }        
?>
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Carrois+Gothic&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/307d809775.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../public/css/styles.css">
    <link rel="shortcut icon" href="public\img\aurelio_transparent_30-30.png" />
   

    <title>Produtos</title>
  </head>
  <body>
        <?php include 'includes/navbar.php'; ?>
    <!--Inicio Pagina Produtos-->
            <div class="container view-product">
                <div class="row medrow">
                    <div class="col-md-3">
                        <span class="resicon" onclick="openNav()"><i class="fas fa-bars"  ></i></span>
                        <div class="row">
                            <div class="input-group pesgruop">
                                <form  method="POST" action="/produtos/pesquisa" id="resquisa" class="form-inline my-0.3 my-lg-0 resquisa">
                                    <input name="pesquisa" id="formuPes" class="form-control formuPes ml-3 pr-0" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
                                    <div class="input-group-append">                                                          
                                        <button class="btn btn-outline-danger my-2 my-sm-0 butaoPes" type="submit"><i class="fas fa-search"></i></button>                            
                                    </div>
                                </form>
                            </div>
                        </div>
                                                    
                            <ul id="list-group reslista"class="list-group reslista">
                                <?php foreach($categorias as $categoria) : ?>
                                    <form method="POST" action="/produtos/categorias">
                                   
                                        <input name="Catid" type="hidden" value="<?= $categoria->id;?>">
                                        <li class="list-group-item hicon"><span class="ticon"><i class="fas fa-angle-right"></i>  <button type="submit" class="removeblue border-0 bgb"><?= $categoria->nome; ?></button><span></li>
                                     
                                    </form>
                                <?php endforeach;?>  
                            </ul>                                            
                            </div>
                            <div class="col-md-9 col-sm-6">
                            <?php if(isset($produtos) && !empty($produtos) || isset($pesquisa) || isset($cat)) : ?>
                                <?php if (isset($produtos_limite)) : ?>
                                    <?php if (($actual_page + 16) <= count($produtos)) : ?>
                                        <p class="counter-products">Mostrando <?= $actual_page+1; ?>-<?= $actual_page+16; ?>/<?= count($produtos); ?> livros</p>
                                    <?php else : ?>
                                        <p class="counter-products">Mostrando <?= $actual_page+1; ?>-<?= count($produtos); ?>/<?= count($produtos); ?> livros</p>
                                    <?php endif; ?>
                                <?php elseif(isset($cat)) : ?>
                                    <p class="counter-products">Exibindo os resultados da categoria <b><?= $cat->nome; ?></b></p>
                                <?php elseif(isset($pesquisa)) : ?>
                                    <p class="counter-products">Exibindo os resultados da pesquisa <b><?= $pesquisa[0]; ?></b></p>     
                                <?php endif; ?>
                            <?php endif; ?>      
                                <div class="row">
                                    <?php if(!empty($produtos_limite)) : ?>
                                        <?php foreach($produtos_limite as $produto) : ?>
                            
                                            <div class="col-md-3 col-6">
                                                <div class="card prcards">
                                                            <form method="POST" action="/informacoes-produto">
                                                                <input name="id" type="hidden" value="<?= $produto->id; ?>">
                                                                <button type="submit" class="border-0 btn-img-produto"><img class="card-img-top tamanhocard" src="../../public/img/<?= $produto->foto; ?>" alt="Imagem de capa do card"></button>
                                                            </form>
                                                        <div class="card-body rescard">
                                                                <h5 class="card-title tituloCard"><?= $produto->nome; ?></h5>
                                                                <p class="varlivro">R$ <?= $produto->preco; ?></p>
                                                                <form class="botres" method="POST" action="/informacoes-produto">
                                                                    <input name="id" type="hidden" value="<?= $produto->id; ?>">
                                                                    <button type="submit" class="btn btn-product resbopro">VER PRODUTO</button>
                                                                </form>                                
                                                        </div>
                                                    </div>
                                                </div>                                                   
                                        <?php endforeach;?>
                                    <?php elseif(!empty($produtos)) : ?>
                                        <?php foreach($produtos as $produto) : ?>
                                            
                                            <div class="col-md-3 col-6">
                                                <div class="card prcards">
                                                    <form method="POST" action="/informacoes-produto">
                                                        <input name="id" type="hidden" value="<?= $produto->id; ?>">
                                                            <button type="submit" class="border-0 btn-img-produto"><img class="card-img-top tamanhocard" src="../../public/img/<?= $produto->foto; ?>" alt="Imagem de capa do card"></button>
                                                        <div class="card-body rescard">
                                                                <h5 class="card-title tituloCard"><?= $produto->nome; ?></h5>
                                                                <p class="varlivro">R$ <?= $produto->preco; ?></p>
                                                                <form method="POST" action="/informacoes-produto">
                                                                    <input name="id" type="hidden" value="<?= $produto->id; ?>">
                                                                    <button type="submit" class="btn btn-product resbopro">VER PRODUTO</button>
                                                                </form>                                
                                                        </div>
                                                    </div>
                                                </div>                                                   
                                        <?php endforeach;?>
                                    <?php else : ?>
                                        <?php if(empty($pesquisa) && empty($cat)) : ?>
                                            <p class="counter-products">Não há nenhum livro cadastrado.</p>
                                        <?php endif; ?>        
                                    <?php endif; ?>         
                            </div>  
                            </div>
                                <div class="col-md-4 offset-md-8">
                                <?php if(!empty($produtos_limite)) : ?>
                                    <nav aria-label="pagination-crud">
                                        <ul class="pagination justify-content-end" id="paginacao-crud-responsive">
                                        <li class="page-item">
                                            <form method="POST" action="/produtos/limit">
                                            <?php if ($actual_page == 0) : ?>
                                                <input type="hidden" name="offset" value="<?= $actual_page; ?>" />
                                            <?php else : ?>
                                                <input type="hidden" name="offset" value="<?= ($actual_page - 16); ?>" />
                                                <button type="submit" class="page-link pagination-crud-buttons newbox-crud"><</button>
                                            <?php endif; ?>       
                                            </form>
                                        </li>
                                        <?php for ($j = 1; $j <= $num_pages; $j++) : ?>
                                            <li class="page-item actpago">
                                                <form method="POST" action="/produtos/limit">
                                                    <input id="actual_page" type="hidden" name="offset" value="<?= ($j*16)-16; ?>"/>
                                                    <button type="submit" class="page-link pagination-crud-buttons newbox-crud"><?= $j; ?></a>
                                                </form>
                                            </li>
                                        <?php endfor; ?>
                                        <li class="page-item">
                                            <form method="POST" action="/produtos/limit">
                                            <?php if ($exists == 1) : ?>
                                                <input type="hidden" name="offset" value="<?= ($actual_page + 16); ?>" />
                                                <button type="submit" class="page-link pagination-crud-buttons newbox-crud">></button>
                                            <?php else : ?>
                                                <input type="hidden" name="offset" value="<?= $actual_page; ?>" />
                                            <?php endif; ?>        
                                            </form>
                                        </li>
                                        </ul>
                                    </nav>
                                <?php endif; ?> 
                                </div>
                    </div>
                </div>
            </div>        
                <?php include 'includes/footer.php'; ?>

            <!-- JavaScript (Opcional) -->
            <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
            <script src="../../../../../../public/js/scripts.js"></script>
        <!--Fim Pagina Produtos-->
  </body>
</html>