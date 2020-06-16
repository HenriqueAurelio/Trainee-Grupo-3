<?php $i = 0; ?>

<!DOCTYPE html>
<html lang="pt-br">

	<head> 

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" /> 
        <title>Painel Administrativo</title>
        <link rel="stylesheet" href="../../../public/css/styles.css">
        <link rel="stylesheet" href="../../../public/css/admin-styles.css">
        <link rel="stylesheet" 
            href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" 
            integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" 
            crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Carrois+Gothic+SC&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/9c2b80ca1e.js" crossorigin="anonymous"></script>
	</head>
	<body>
        <?php require('includes/head.php'); ?>
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
                        <a href="/novoproduto"><button type="button" class="btn newbox-add-crud btn-crud btn-lg mb-5 mt-5 cabecalho-crud"><i class="fas fa-plus mr-3"></i>Adicionar</button></a>
                    </div>
                    <div class="col-lg-5 col-md-5" id="search-bar-crud">    
                        <div class="input-group mt-5 mb-5 responsive-search-crud float-right">
                            <span class = "procurar-crud">Pesquisar:</span><input type="text" class="form-control float-right newbox-crud input-crud-responsive cabecalho-crud ml-3" placeholder="Livro, Categoria..." aria-label="Recipient's username" aria-describedby="basic-addon2">
                        </div>
                    </div>
            </div>
            <div class="row">
                <div class="col-lg-2 col-md-3"></div>
                <div class="col-lg-10 col-md-9">
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
                            <?php foreach ($produtos as $produto) : ?>
                                <tr class="border-top border-bottom">
                                    <th class="font-adjustment-crud" scope="row" ><?= utf8_encode($produto->nome); ?></th>
                                    <td class="font-adjustment-crud"><?= utf8_encode($produto->categoria->nome); ?></td>
                                    <td class="font-adjustment-crud">R$ <?= utf8_encode($produto->preco) ?></td>
                                    <td class="font-adjustment-crud border-right-0">
                                        <form method="POST" action="produtos/mostrar">
                                            <input type="hidden" value="<?= $produto->id; ?>" name="id">
                                            <button type="submit" class="btn btn-view-crud btn-crud-table newbox-crud btn-sm view-table-crud"><i class="fas fa-eye adjust-eyeicon-crud"></i></button>
                                        </form>
                                    </td>
                                    <td class="font-adjustment-crud border-0">    
                                        <form method="POST" action="editarproduto">
                                            <input type="hidden" value="<?= $produto->id; ?>" name="id">
                                            <button type="submit" class="btn btn-edit-crud btn-crud-table newbox-crud btn-sm ml-2"><i class="fas fa-edit mr-1"></i></button>
                                        </form>
                                    </td>
                                    <td class="font-adjustment-crud border-0 table-books-admin">
                                    <form method="POST" action="produtos/deletar">
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
                            </tbody>
                        </table>
                    </div>
                </div>    
            </div>

            <nav aria-label="pagination-crud">
                <ul class="pagination justify-content-end" id="paginacao-crud-responsive">
                  <li class="page-item"><a class="page-link pagination-crud-buttons newbox-crud" href="#"><</a></li>
                  <li class="page-item actpago" id="actpago" onclick="actpago()"><a class="page-link pagination-crud-buttons newbox-crud" id="actpagol" href="#">1</a></li>
                  <li class="page-item actpags" id="actpags" onclick="actpags()"><a class="page-link pagination-crud-buttons newbox-crud" id="actpagsl" href="#">2</a></li>
                  <li class="page-item actpagt" id="actpagt" onclick="actpagt()"><a class="page-link pagination-crud-buttons newbox-crud" id="actpagtl" href="#">3</a></li>
                  <li class="page-item"><a class="page-link pagination-crud-buttons newbox-crud" href="#">></a></li>
                </ul>
              </nav>
        </div>
        
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
        <script src="../../../public/js/admin-script.js"></script>
    </body>


</html>
