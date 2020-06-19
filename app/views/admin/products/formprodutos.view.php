<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="../../../public/css/all.css">
        <link rel="stylesheet" href="../../../public/css/admin-styles.css">
        <title>Aurelio Livraria - Admin</title>    
    </head>
    <body>
    <?php require($_SERVER['DOCUMENT_ROOT'].'/app/views/admin/includes/head.php'); ?>
                <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-2 col-md-3"></div>
                    <div class="col-lg-10 col-md-9">
                        <h2>Cadastrar novo livro</h2>
                    </div>
                </div>
                <form method="POST" action="/produtos">
                    <div class="row">
                        <div class="col-lg-2 col-md-3"></div>
                        <div class="col-lg-10 col-md-9 form-group">
                            <label for="exampleFormControlInput1">Nome</label>
                            <input required type="text" name="nome" class="form-control" id="exampleFormControlInput1" placeholder="Nome do livro">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2 col-md-3"></div>
                        <div class="col-lg-5 col-md-4 form-group">
                            <label for="categoria">Categoria</label>
                            <br>
                            <select required class="custom-select" id="categoria" name="categoria_id">
                                <option selected disabled>Selecione a categoria</option>
                                <?php foreach ($categorias as $categoria) : ?>
                                    <option value="<?= $categoria->id ?>"><?= utf8_encode($categoria->nome) ?></option>
                                <?php endforeach; ?>    
                            </select>
                        </div>
                        <div class="col-lg-5 col-md-5 form-group">
                            <label for="exampleFormControlNumber1">Preço</label>
                            <input required type="text" name="preco" class="form-control" id="exampleFormControlInput2" placeholder="Preço do livro">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2 col-md-3"></div>
                        <div class="col-lg-10 col-md-9 form-group">
                            <label for="exampleFormControlTextarea1">Descrição</label>
                            <textarea required class="form-control" name="descricao" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2 col-md-3"></div>
                        <div class="col-lg-10 col-md-9 form-group">
                            <div class="form-group">
                                <label for="exampleFormControlFile1">Foto</label>
                                <input required type="file" name="foto" class="form-control-file" id="exampleFormControlFile1">
                            </div>    
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-11 col-8"></div>
                        <div class="col-lg-1 col-4">
                            <button id="btnClick" type="submit" class="btn admin-submit-button">Cadastrar</button>
                        </div>    
                    </div>    
                </form>    
            </div>   
        </div>     
        <script src="../../../public/js/jquery.maskMoney.js"></script>  
        <script src="../../../public/js/admin-script.js"></script>
    </body>
</html>