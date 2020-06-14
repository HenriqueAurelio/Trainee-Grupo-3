<!DOCTYPE html> 

<html lang="pt-br"> 
	<head> 
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />  
        <title>Contato</title>
		<link rel="stylesheet" href="../../../public/css/styles.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<script src="https://kit.fontawesome.com/9c2b80ca1e.js" crossorigin="anonymous"></script>
		<link href="https://fonts.googleapis.com/css2?family=Carrois+Gothic+SC&display=swap" rel="stylesheet">
	</head> 
	
	<body> 

		<?php include 'includes/navbar.view.php' ?>		
		
		<!-- Início do Contatos -->
		<div class="container text-center fontcontato">
			<div class="row">
				<div class="col-lg-6 col-md-12 mt-3"><h1 class= "mb-5 mt-5"><span class="title">Fale Conosco!</span></h1>
					<form class = "text-left mt-5 mb-5 form-contato">
						<label for="exampleFormControlInput2"><h3 class="formtitles-contato">Nome:</h3></label>
						<div class="input-group mb-3">
							<div class="input-group-prepend">
							  <span class="input-group-text formicobg-contato" id="inputGroup-sizing-default"><i class="fas fa-user formico-contato"></i></span>
							</div>
							<input type="text" class="form-control newbox-contato" aria-label="Default" aria-describedby="inputGroup-sizing-default" placeholder="e.x.: Marco Aurelio" autofocus required>
						</div>
						<div class="form-group">
							<label for="exampleFormControlInput1"><h3 class="formtitles-contato">Endereço de e-mail:</h3></label>
							<div class="input-group mb-3">
								<div class="input-group-prepend">
								  <span class="input-group-text formicobg-contato" id="inputGroup-sizing-default"><i class="fas fa-envelope formico-contato"></i></span>
								</div>
								<input type="email" class="form-control newbox-contato" aria-label="Default" aria-describedby="inputGroup-sizing-default" placeholder="nome@exemplo.com" required>
							</div>
						</div>
						<div class="form-group">
							<label for="txttelefone"><h3 class="formtitles-contato">Telefone:</h3></label>
							<div class="input-group mb-3">
								<div class="input-group-prepend">
								  <span class="input-group-text formicobg-contato" id="inputGroup-sizing-default"><i class="fas fa-phone-alt formico-contato"></i></span>
								</div>
								<input type="text" class="form-control -contato" id="telefonecontato" aria-label="Default" aria-describedby="inputGroup-sizing-default" placeholder="(xx) xxxxx-xxxx" required>
							</div>
						</div>
						<div class="form-group">
							<label for="exampleFormControlInput1"><h3 class="formtitles-contato">Assunto:</h3></label>
							<div class="input-group mb-3">
								<div class="input-group-prepend">
								  <span class="input-group-text formicobg-contato" id="inputGroup-sizing-default"><i class="fas fa-comment-alt formico-contato"></i></span>
								</div>
								<input type="text" class="form-control newbox-contato" aria-label="Default" aria-describedby="inputGroup-sizing-default" placeholder="Entrega atrasada, Produto errado..." required>
							</div>
						</div>
						<div class="form-group">
						  <label for="exampleFormControlTextarea1"><h3 class="formtitles-contato">Mensagem:</h3></label>
						  <textarea class="form-control newbox-contato" id="exampleFormControlTextarea1" rows="6" style="resize: none;" placeholder="Descreva detalhadamente o que você quer nos dizer aqui!" required></textarea>
						</div>
						<input class="btn btnContato" type="submit" value="Enviar">
					</form>
				</div>
				<div class="col-lg-5 col-md-12 mt-3 pt-5 text-center">
					<h1>Você pode nos encontrar aqui!</h1>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3705.060923775951!2d-43.37582168522312!3d-21.777902985597326!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x989ba3efae5fab%3A0x4354e65ba9224890!2sRestaurante%20Universit%C3%A1rio%20da%20UFJF%20(RU)%20%7C%20Unidade%20Campus!5e0!3m2!1spt-BR!2sbr!4v1589836960482!5m2!1spt-BR!2sbr" width="350" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" class="mt-5 mapcontact"></iframe>
					<div class="row social-contato">
						<ul class="redes-sociais-contato pr-5">
							<div class="row social-contato">
								<li class="mt-1 mb-3 mr-2 ml-1 responsive-contato"><br><a href="https://www.facebook.com/aurelio.tentei.7" target="_blank"><i class="fab fa-facebook-f fa-3x icoredesocial-contato"></i></a><br><br><p class="icodes-contato"></p>Livra Aurelio</li>					
								<li class="mt-1 mb-3 ml-5"><br><a href="https://www.instagram.com/liv.aurelio/" target="_blank"><i class="fab fa-instagram fa-3x icoredesocial-contato"></i></a><br><br><p class="icodes-contato"></p>@liv.aurelio</li>
							</div>
							<div class="row social-contato">
								<li class="mt-1 mb-3 mr-3 responsive-contato"><i class="fas fa-phone-alt fa-3x mt-3 icoredesocial-contato"></i></a><br><br><p class="icodes-contato"></p>(xx)xxxxx-xxxx</li>
								<li class="mt-1 mb-3"><i class="far fa-envelope envelop fa-3x mt-3 icoredesocial-contato"></i></a><br><br><p class="icodes-contato"></p>livaurelio@gmail.com</li>
							</div>
						</ul>		
					</div>
				</div>
			</div>
		</div>
		<!-- Fim do Contato -->

		<?php include 'includes/footer2.view.php' ?>		
				
				
		
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script type="text/javascript" src="../../../public/js/jquery.mask.min.js"></script>
		<script type="text/javascript">
		$(document).ready(function() {
			$("#telefonecontato").mask("(00) 00000-0000")
		})	
		</script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	</body>

</html>