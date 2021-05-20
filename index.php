<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Login Facebook</title>
		<meta charset="utf-8" />
		<meta name="description" content="Descrição do meu site." />
		<meta name="keywords" content="palvras,separadas,por,virgula" />
		<meta name="author" content="Junior" /> 
		<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0" />
		<link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;700&display=swap" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/style.css" />

	</head>

	<body>

		<header>
			<div class="center">
				<div class="logo">
					<h2>facebook</h2>
				</div><!--logo-->

				<form method="post" class="form-login"> 
					<div class="form-element">
						<p>E-mail ou telefone:</p>
						<input type="email" name="email">
					</div><!--form-element-->

					<div class="form-element">
						<p>Senha:</p>
						<input type="password" name="password">
					</div><!--form-element-->

					<div class="form-element">						
						<input type="submit" name="acao" value="Entrar">
					</div><!--form-element-->

				</form><!--form-login-->

				<div class="clear"></div><!--clear-->

			</div><!--center-->
		</header>

		<section class="maim">

			<div class="center">

				<div class="img-pessoas">

					<img src="imagens/img1.png">

				</div><!--img-pessoas-->

				<div class="abrir-conta">
					<h2>Abra sua conta</h2>
					<h3>É gratuito e sempre será</h3>

					<form class="criar-conta">
						<div class="w50">
							<input placeholder="Nome" type="text" name="nome">
						</div><!--w-50-->

						<div class="w50">
							<input placeholder="Sobrenome" type="text" name="sobrenome">
						</div><!--w50-->

						<div class="w100">
							<input placeholder="E-mail" type="email" name="email">
						</div><!--w100-->

						<div class="w100">
							<input placeholder="Senha" type="password" name="password">
						</div><!--w100-->

						<div class="w100">
							<h2>Data de Nascimento</h2>
							<select name="nascimento-dia" class="nascimento">
								<?php
									for($i = 1; $i <= 31; $i++){
								?>
								<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
								<?php } ?>
							</select>
							<select name="nascimento-mes" class="nascimento">
								<option value="1">Janeiro</option>
								<option value="2">Fevereiro</option>
								<option value="3">Março</option>
								<option value="4">Abril</option>
								<option value="5">Maio</option>
								<option value="6">Junho</option>
								<option value="7">Julho</option>
								<option value="8">Agosto</option>
								<option value="9">Setembro</option>
								<option value="10">Outubro</option>
								<option value="11">Novembro</option>
								<option value="12">Dezembro</option>
							</select>
							<select name="nascimento-ano" class="nascimento">
								<?php
									for($i = 1960; $i <= 2021; $i++){
								?>
								<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
								<?php } ?>
							</select>
							<div class="clear"></div>
						</div> <!--w100-->

						<div class="w100">
							<div class="input-radio">
								<input type="radio" value="masculino" name="sexo">
								<h2>Masculino</h2>
							</div><!--radio-->
							<div class="input-radio">
								<input type="radio" value="feminino" name="sexo">
								<h2>Feminino</h2>
							</div><!--radio-->
							<div class="clear"></div>
						</div>

						<div class="w100">
							<input type="submit" name="acao" value="Cadastrar!">
						</div><!--w100-->

						<div class="clear"></div><!--clear-->
					</form><!--criar-conta-->

				</div><!--abrir-conta-->

				<div class="clear"></div><!--clear-->

			</div><!--center-->

		</section><!--maim-->

		<section class="linguas">
			<div class="center">
				<a class="selected-lingua" href="#">Português (BR)</a>
				<a  href="#">English (US)</a>
				<a  href="#">Español </a>
				<a  href="#">Français (France)</a>
				<a  href="#">Italiano </a>
				<a  href="#">Deutsch </a>				
			</div><!--center-->

			<div style="border:0;padding-top:10px " class="center">
				<a  href="#">Cadastre-se</a>
				<a  href="#">Entrar</a>
				<a  href="#">Messenger </a>
				<a  href="#">Facebook Lite</a>
				<a  href="#">Celular</a>
				<a  href="#">Encontrar amigos </a>
				<a  href="#">Pessoas </a>
				<a  href="#">Páginas </a>
				<a  href="#">Locais </a>
				<a  href="#">Jogos </a>
				<a  href="#">Marketplace </a>
				<a  href="#">Vídeos </a>
				<a  href="#">Grupos </a>
				<a  href="#">Receitas </a>
				<a  href="#">Esportes </a>
				<a  href="#">Look </a>
				<a  href="#">moments </a>
				<a  href="#">Instagram </a>
				<a  href="#">Local </a>
				<a  href="#">Sobre </a>
				<a  href="#">Criar anuncio </a>
				<a  href="#">Criar página </a>
				<a  href="#">Desenvolvedores </a>
				<a  href="#">Carreiras </a>
				<a  href="#">Privacidade </a>
				<a  href="#">Cookies </a>
				<a  href="#">Opções de anuncio </a>
				<a  href="#">Termos </a>
				<a  href="#">Ajuda </a>				
			</div><!--center-->
		</section><!--linguas-->

	</body>
</html>