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
	<style type="text/css">
		body.themeDark #sub-header{
			border-bottom: 0px solid transparent !important;
		}
		body.themeDark div h1.display-3{
			color: var(--light);
		}
		body.themeDark div h2{
			color: var(--light);
		}
	</style>
</head>
<body>
<?php include "./views/user/modules/header.php"?>
<div class="main-content">
<button id="submit-button" style="display:none">dsf</button>
<div class="text-center">
	<h1 class="display-3">404 error, page not found.</h1>
	<h2 class="p-3 font-weight-normal">Back to <a href="../" style="color:inherit;">SearchOut</a></h2>
</div>
</div>
<footer class="footer">
  <strong class="copyright text-sm mr-4">SearchOut - CC by-sa</strong> 
  <p class="links text-sm">
	  <a href="./es/about" target="_blank" rel="noopener noreferrer">Sobre Nosotros</a>
	  <span class="v-divider">|</span>
	  <a href="./store">Tienda</a>
  </p>
</footer>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="views/user/src/js/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>