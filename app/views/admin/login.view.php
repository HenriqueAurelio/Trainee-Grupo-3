<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="../../../../public/img/aurelio_transparent.png"/>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/307d809775.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Carrois+Gothic&display=swap" rel="stylesheet">

    <title>Login</title>
  </head>
  <body>
  <?php require($_SERVER['DOCUMENT_ROOT'].'/app/views/site/includes/navbar.php'); ?>
    <div class="container">
      <form method="POST" action="/login">
        <div class="row justify-content-center">
            <div class="emailsenha loginarea">
              <h1 class="logintexto"><img class="loginimagem" src="../../../public/img/aurelio_transparent.png"></h1>
              <?php 
                  if(!empty($message)) {
                    ?><div class="alert alert-danger" role="alert">
                    <?= $message[0]; ?>
                  </div> <?php
                  } 
              ?>
              <label for="validationCustomUsername" class="emailarea">Endereço de email:</label>
              <div class="input-group emailarea">
                <div class="input-group-prepend">
                  <span class="input-group-text userlogin" id="inputGroupPrepend"><i class="fas fa-user"></i></span>
                </div>
                <input name="email" type="email" class="form-control" id="validationCustomUsername" placeholder="Ex. livrariaaurelio@gmail.com" aria-describedby="inputGroupPrepend" required>
                <div class="invalid-feedback">
                  Por favor, insira um endereço de email valido.
                </div>
              </div>
              <label for="inputPassword">Senha:</label>
              <div class="input-group senhaarea">
                <div class="input-group-prepend">
                  <span class="input-group-text senicon" id="inputGroupPrepend"><i class="fas fa-key"></i></span>
                </div>
                <input id="input-password" name="senha" type="password" class="form-control border-right-0 " id="validationCustomUsername" placeholder="Senha" aria-describedby="inputGroupPrepend" required>
                <div class="input-group-append senhi">
                  <span class="input-group-text senhaicon border-left-0" onclick="passview()"><i id="senhaicon" class="fas fa-eye-slash"></i></span>
                </div>
                <!--<div class="input-group-append senhi">
                  <button onclick="passview()" class="btn btn-outline-secondary senhaicon" type="button" id="button-addon2"><i id="senhaicon" class="fas fa-eye"></i></button>
                </div> -->
                <div class="invalid-feedback">
                  Senha incoreta por favor tente novamente.
                </div>
              </div>
              <div class="form-check mb-2 custom-checkbox checkpass" >
                <input class="form-check-input" type="checkbox" checked id="autoSizingCheck">
                <label class="form-check-label" for="autoSizingCheck">
                  Lembrar de mim
                </label> 
              </div>              
              <button type="submit" class="btn btn-product btn-block">Enviar</button>
            </div>  
        </div>
      </form>
    </div>
    <?php require($_SERVER['DOCUMENT_ROOT'].'/app/views/site/includes/footer.php'); ?>

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="../../../../public/js/scripts.js"></script>
  </body>
</html>