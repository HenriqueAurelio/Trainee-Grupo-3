<!DOCTYPE html>

<html lang="pt-br">
<?php $i=0; ?>
	<head> 

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" /> 
        <title>Painel Administrativo</title>
        <link rel="stylesheet" href="../public/css/style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Carrois+Gothic+SC&display=swap" rel="stylesheet">
        <script type="text/javascript" src="../../../../assets/js/scripts.js"></script>
        <script src="https://kit.fontawesome.com/9c2b80ca1e.js" crossorigin="anonymous"></script>

	</head>
	
	<body>
        <div class = "container font-crud">
            <h1 class="mt-5 pt-3 start-crud">Categorias</h1>
            <div class="row">
                    <div class="col-md-3" id="add-crud-responsive">
                        <a href="categorias/cadastrar"><button type="button" class="btn newbox-add-crud btn-crud btn-lg mb-5 mt-5 cabecalho-crud"><i class="fas fa-plus mr-3"></i>Adicionar</button><a>
                    </div>
            </div>
            <div class="row d-flex justify-content-end">
                    <div class="col-md-4" id="search-bar-crud">    
                        <div class="input-group mt-5 mb-5 responsive-search-crud ">
                            <span class = "procurar-crud">Pesquisar:</span><input type="text" class="form-control  newbox-crud input-crud-responsive cabecalho-crud ml-3" placeholder="Categoria" aria-label="Recipient's username" aria-describedby="basic-addon2">
                        </div>
                    </div>
            </div>
            <div class = "table-sm-responsive">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th class="categoria-crud" scope="col">Categoria</th>
                            <th class="acoes-crud" scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                      <?php foreach ($categorias as $categoria) : ?>
                        <tr>
                            <td class="font-adjustment-crud"><?= $categoria->nome; ?></td>
                            <td class="border-right-0">
                              <div class="row">
                              <form  method="POST" action="categorias/mostrar" class="ml-4">
                                <input  class="btn-crud-table" type="hidden" name="id" value="<?= $categoria->id ?>">
                                <button type="submit" class="btn btn-view-crud btn-crud-table newbox-crud btn-sm view-table-crud vasco"><i class="fas fa-eye adjust-eyeicon-crud"></i></button>
                              </form>
                            
                              <form method="POST" action="categorias/editar" >
                                <input class="btn-crud-table" type="hidden" name="id" value="<?= $categoria->id ?>">
                                <button type="submit" class="btn btn-edit-crud btn-crud-table newbox-crud btn-sm ml-2 vasco"><i class="fas fa-edit mr-1"></i></button>
                              </form>
                              <form class="crudform">
                                <button type="button" class="btn btn-delete-crud btn-crud-table newbox-crud btn-sm ml-2 vasco" data-toggle="modal" data-target="#exampleModalCenter <?= $i; ?>" ><i class="far fa-trash-alt"></i></button>
                              </form>
                              </div>
                            </td>
                            
                            <div class="modal fade" id="exampleModalCenter <?= $i; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                                    <form method="POST" action="/categorias/delete">
                                      <input type="hidden" name="id" value="<?= $categoria->id ?>">
                                      <button type="submit" class="btn ">Sim</button>
                                    </form>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Não</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                        </tr>
                      <?php endforeach; ?>
                    </tbody>
                </table>
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
    

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	</body>


</html>