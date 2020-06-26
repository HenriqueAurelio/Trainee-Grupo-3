<?php
    $i = 0;
    if(!empty($produtos)) {
        if (!empty($produtos_limite)) {
            $limit = 5;
            $num_pages = ceil(count($produtos) / $limit);
            $ids = array();
            foreach($produtos as $produto) {
                array_push($ids, $produto->id);
            } 
            $actual_page = array_search($produtos_limite[0]->id, $ids);
            $possible = $actual_page + 5;
            if ($possible <= count($produtos)) {
                $exists = 1;
            }
            else {
                $exists = 0;
            }
        }
    }        
?>
<!DOCTYPE html>
<html lang="pt-br">

	<head> 

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" /> 
        <title>Painel Administrativo</title>
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
                    <h1 class="mt-5 pt-3 start-crud">Livros</h1>
                </div>    
            </div>    
            <div class="row">
                    <div class="col-lg-2 col-md-3"></div>
                    <div class="col-lg-5 col-md-4" id="add-crud-responsive">
                        <a href="/admin/novoproduto"><button type="button" class="btn newbox-add-crud btn-crud btn-lg mb-5 mt-5 cabecalho-crud"><i class="fas fa-plus mr-3"></i>Adicionar</button></a>
                    </div>
                    <div class="col-lg-5 col-md-5" id="search-bar-crud">    
                        <div class="input-group mt-5 mb-5 responsive-search-crud float-right procurar-crud">
                            <form action="/admin/produtos/pesquisa" method="POST">
                                <div class="input-group mb-3">
                                <input name="pesquisa" type="text" class="form-control" placeholder="Livro..." aria-label="Recipient's username" aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary btn-search-crud" type="submit"><i class="fas fa-search"></i><i</button>
                                    </div>
                                </div>  
                            </form>
                        </div>
                    </div>
            </div>
            <div class="row">
                <div class="col-lg-2 col-md-3"></div>
                <div class="col-lg-10 col-md-9">
                    <div class="row">
                        <div class="col-md-4 offset-md-8">
                        <?php if(isset($produtos) && !empty($produtos) || isset($pesquisa)) : ?>
                                <?php if (isset($produtos_limite)) : ?>
                                    <?php if (($actual_page + 5) <= count($produtos)) : ?>
                                        <p class="counter-products">Mostrando <?= $actual_page+1; ?>-<?= $actual_page+5; ?>/<?= count($produtos); ?> livros</p>
                                    <?php else : ?>
                                        <p class="counter-products">Mostrando <?= $actual_page+1; ?>-<?= count($produtos); ?>/<?= count($produtos); ?> livros</p>
                                    <?php endif; ?>
                                <?php elseif (isset($pesquisa)) : ?>
                                    <p class="counter-products">Exibindo os resultados da pesquisa <b><?= $pesquisa[0]; ?></b></p>    
                                <?php endif; ?>
                            <?php endif; ?>        
                        </div>    
                    </div>        
                    <div class = "table-responsive">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th class="titulo-crud" scope="col">Título</th>
                                    <th class="categoria-crud" scope="col">Categoria</th>
                                    <th class="preco-crud" scope="col">Preço</th>
                                    <th class="acoes-crud" scope="col" colspan="3">Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php if(!empty($produtos_limite)) : ?>
                                <?php foreach ($produtos_limite as $produto) : ?>
                                    <tr class="border-top border-bottom">
                                        <td class="font-adjustment-crud"><?= $produto->nome; ?></td>
                                        <td class="font-adjustment-crud"><?= $produto->categoria->nome; ?></td>
                                        <td class="font-adjustment-crud">R$ <?= $produto->preco ?></td>
                                        <td class="font-adjustment-crud border-right-0">
                                            <form method="POST" action="/produtos/mostrar">
                                                <input type="hidden" value="<?= $produto->id; ?>" name="id">
                                                <button type="submit" class="btn btn-view-crud btn-crud-table newbox-crud btn-sm ml-2"><i class="fas fa-eye adjust-eyeicon-crud ml-1"></i></button>
                                            </form>
                                        </td>
                                        <td class="font-adjustment-crud border-0">    
                                            <form method="POST" action="/editarproduto">
                                                <input type="hidden" value="<?= $produto->id; ?>" name="id">
                                                <button type="submit" class="btn btn-edit-crud btn-crud-table newbox-crud btn-sm ml-2"><i class="fas fa-edit mr-1"></i></button>
                                            </form>
                                        </td>
                                        <td class="font-adjustment-crud border-0 table-books-admin">
                                        <form method="POST" action="/produtos/deletar">
                                            <input type="hidden" value="<?= $produto->id; ?>" name="id">
                                            <button type="button" class="btn btn-delete-crud btn-crud-table newbox-crud btn-sm ml-2" data-toggle="modal" data-target="#exampleModalCenter<?= $i; ?>"><i class="far fa-trash-alt"></i></button>
                                            <div class="modal fade" id="exampleModalCenter<?= $i; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                        <h5 class="modal-title font-modaltitle-crud" id="exampleModalLongTitle">Excluir Livro</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                        </div>
                                                        <div class="modal-body font-modalbody-crud">
                                                            Tem certeza que deseja excluir este livro?
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="submit" class="btn btn-primary">Sim</input>
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Não</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        </td>
                                    </tr>
                                    <?php $i++; ?>     
                                <?php endforeach; ?>
                            <?php elseif(!empty($produtos)) : ?>
                                <?php foreach ($produtos as $produto) : ?>
                                    <tr class="border-top border-bottom">
                                        <th class="font-adjustment-crud"><?= $produto->nome; ?></th>
                                        <td class="font-adjustment-crud"><?= $produto->categoria->nome; ?></td>
                                        <td class="font-adjustment-crud">R$ <?= $produto->preco; ?></td>
                                        <td class="font-adjustment-crud border-right-0">
                                            <form method="POST" action="/produtos/mostrar">
                                                <input type="hidden" value="<?= $produto->id; ?>" name="id">
                                                <button type="submit" class="btn btn-view-crud btn-crud-table newbox-crud btn-sm ml-2"><i class="fas fa-eye adjust-eyeicon-crud ml-1"></i></button>
                                            </form>
                                        </td>
                                        <td class="font-adjustment-crud border-0">    
                                            <form method="POST" action="/editarproduto">
                                                <input type="hidden" value="<?= $produto->id; ?>" name="id">
                                                <button type="submit" class="btn btn-edit-crud btn-crud-table newbox-crud btn-sm ml-2"><i class="fas fa-edit mr-1"></i></button>
                                            </form>
                                        </td>
                                        <td class="font-adjustment-crud border-0 table-books-admin">
                                        <form method="POST" action="/produtos/deletar">
                                            <input type="hidden" value="<?= $produto->id; ?>" name="id">
                                            <button type="button" class="btn btn-delete-crud btn-crud-table newbox-crud btn-sm ml-2" data-toggle="modal" data-target="#exampleModalCenter<?= $i; ?>"><i class="far fa-trash-alt"></i></button>
                                            <div class="modal fade" id="exampleModalCenter<?= $i; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                        <h5 class="modal-title font-modaltitle-crud" id="exampleModalLongTitle">Excluir Livro</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                        </div>
                                                        <div class="modal-body font-modalbody-crud">
                                                            Tem certeza que deseja excluir este livro?
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="submit" class="btn btn-primary">Sim</input>
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Não</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        </td>
                                    </tr>
                                    <?php $i++; ?>     
                                <?php endforeach; ?>
                            <?php else : ?>
                                <?php if(empty($pesquisa)) : ?>
                                    <p class="counter-products">Não há nenhum livro cadastrado.</p>
                                <?php endif; ?>   
                            <?php endif; ?>  
                            </tbody>
                        </table>
                    </div>
                </div>    
            </div>
            <?php if(!empty($produtos_limite)) : ?>
                <nav aria-label="pagination-crud">
                    <ul class="pagination justify-content-end" id="paginacao-crud-responsive">
                    <li class="page-item">
                        <form method="POST" action="/produtos/limite">
                        <?php if ($actual_page == 0) : ?>
                            <input type="hidden" name="offset" value="<?= $actual_page; ?>" />
                        <?php else : ?>
                            <input type="hidden" name="offset" value="<?= ($actual_page - 5); ?>" />
                            <button type="submit" class="page-link pagination-crud-buttons newbox-crud"><</button>
                        <?php endif; ?>       
                        </form>
                    </li>
                    <?php for ($j = 1; $j <= $num_pages; $j++) : ?>
                        <li class="page-item actpago">
                            <form method="POST" action="/produtos/limite">
                                <input id="actual_page" type="hidden" name="offset" value="<?= ($j*5)-5; ?>"/>
                                <button type="submit" class="page-link pagination-crud-buttons newbox-crud"><?= $j; ?></a>
                            </form>
                        </li>
                    <?php endfor; ?>
                    <li class="page-item">
                        <form method="POST" action="/produtos/limite">
                        <?php if ($exists == 1) : ?>
                            <input type="hidden" name="offset" value="<?= ($actual_page + 5); ?>" />
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
        
        <script src="../../../../public/js/admin-script.js"></script>
        <script src="../../../../public/js/scripts.js"></script>
    </body>


</html>
