<!DOCTYPE html>
<html lang="en">
<head>
	<?php
	$title = "SearchOut - Busca más rápido";
	?>
	<title><?php echo $title;?></title>
    <meta name="description" content="SearchOut es un buscador que te deja elegir la página de resultados. SearchOut te permite buscar entres Google, Bing, Yahoo, Youtube, Amazon, Twitter, Facebook, Wikipedia, Twitch ...">   
	<link rel="icon" type="image/ico" href="../views/user/src/img/icon.ico">
	<link rel="stylesheet" type="text/css" href="../views/user/src/css/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
	<meta charset="utf-8">
</head>
<body>
<div class="d-flex flex-row align-items-center p-1 mb-3 container">
  <h4 class="my-0 mr-auto font-weight-normal poppins"><span>Search </span><span style="color: #007bff">Out</span></h4>
  <nav class="my-0">
	<div>
	<i class="bi bi-list text-dark p-2 h2 icon-button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
		<div class="dropdown-menu dropdown-menu-right">
			<h6 class="dropdown-header">Lenguajes</h6>
			<a class="dropdown-item" href="../" id="lang-item-selector" data-lang="en">English</a>
			<div class="dropdown-divider"></div>
			<h6 class="dropdown-header">Tema</h6>
			<div class="pl-3">
				<button class="btn btn-dark text-light ml-2" id="themeSelector" style="border-radius:10px;">Cambiar</button>
			</div>
		</div>
	</div>
  </nav>
</div>
<div class="main-content">
	<div class="searchform-container">
	<div class="form" id="searchform">
		<input id="searchbox" type="text" autocapitalize="off" autocomplete="off" autocorrect="off" spellcheck="false" aria-label="Buscar" title="Buscar" aria-autocomplete="both" aria-haspopup="false" maxlength="2048" autofocus="" placeholder="
Busca más rápido con SearchOut...">
		<button id="submit-button">
			<i class="bi bi-search"></i>
		</button>
		</div>
	</div>
	<?php include "../views/user/modules/suggestion.php"?>
	<?php include "../views/user/modules/searcher.php"?>
</div>
<footer class="footer">
  <strong class="copyright text-sm mr-4">SearchOut - CC by-sa</strong> 
  <p class="links text-sm">
	  <a href="./es/about" target="_blank" rel="noopener noreferrer">Sobre Nosotros</a>
	  <span class="v-divider">|</span>
	  <a href="./es/store">Tienda</a>
  </p>
</footer>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="views/user/src/js/script.js"></script>
<script src="views/user/src/js/lang-select.js"></script>
<script src="views/user/src/js/lang-es.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>