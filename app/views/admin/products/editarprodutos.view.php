<?php

use App\Core\App;

?>

<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="../../../public/css/all.css">
        <link rel="stylesheet" href="../../../public/css/admin-styles.css">
        <link rel="icon" type="image/png" href="../../../../public/img/aurelio_transparent.png"/>
        <title>Aurelio Livraria - Admin</title>    
    </head>
    <body>
        <?php require($_SERVER['DOCUMENT_ROOT'].'/app/views/admin/includes/head.php'); ?>
        <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-2 col-md-3"></div>
                    <div class="col-lg-10 col-md-9">
                        <h2>Editar livro</h2>
                    </div>
                </div>
                <form method="POST" action="/produtos/editar">
                    <div class="row">
                        <div class="col-lg-2 col-md-3"></div>
                        <div class="col-lg-10 col-md-9 form-group">
                            <label for="exampleFormControlInput1">Nome</label>
                            <input required type="text" value="<?= $produto->nome; ?>" name="nome" class="form-control" id="exampleFormControlInput1" placeholder="Nome do livro">
                            <input type="hidden" value="<?= $produto->id; ?>" name="id">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2 col-md-3"></div>
                        <div class="col-lg-5 col-md-4 form-group">
                            <label for="categoria">Categoria</label>
                            <select required class="custom-select" id="categoria" name="categoria_id">
                                <?php foreach ($categorias as $categoria) : ?>
                                    <?php if ($categoria->id == $produto->categoria_id) : ?>
                                        <option selected value="<?= $categoria->id ?>"><?= $categoria->nome ?></option>
                                    <?php else : ?>
                                        <option value="<?= $categoria->id ?>"><?= $categoria->nome ?></option>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="col-lg-5 col-md-5 form-group">
                            <label for="exampleFormControlInput2">Preço</label>
                            <input required value="<?= $produto->preco; ?>" type="text" name="preco" class="form-control" id="exampleFormControlInput2" placeholder="Preço do livro">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2 col-md-3"></div>
                        <div class="col-lg-10 col-md-9 form-group">
                            <label for="exampleFormControlTextarea1">Descrição</label>
                            <textarea required class="form-control" name="descricao" id="exampleFormControlTextarea1"><?php echo trim($produto->descricao); ?></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2 col-md-3"></div>
                        <div class="col-lg-10 col-md-9 form-group">
                            <div class="form-group">
                                <label for="exampleFormControlFile1">Foto</label>
                                <input required type="file" name="foto" class="form-control-file" id="exampleFormControlFile1">
                            </div>
                            <div>
                                <img alt="Capa do livro" src="../../../public/img/<?= $produto->foto; ?>" height="200" width="150">
                            </div>      
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
        </div>    
        <script src="https://igorescobar.github.io/jQuery-Mask-Plugin/js/jquery.mask.min.js"></script>
        <script src="../../../public/js/admin-script.js"></script>
    </body>
</html>