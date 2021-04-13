v<!DOCTYPE html>
<html lang="en">
<head>
	<?php
	$title = "SearchOut";
	?>
	<title><?php echo $title;?></title>
	<meta name="description" content="SearchOut is a new way to browse the internet faster. You can search Google, Bing, Yahoo, Youtube, Amazon, Twitter, Facebook, Wikipedia, Twitch ...">   
	<link rel="icon" type="image/ico" href="views/user/src/img/icon.ico">
	<link rel="stylesheet" type="text/css" href="views/user/src/css/style.css">
	<link rel="stylesheet" type="text/css" href="views/user/src/css/responsive.css">
	<script src="views/user/src/js/script.js"></script>
	<script src="views/user/src/js/icons.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta charset="utf-8">
</head>
<body>
<div id="container">
<?php 
include "header.php";
?>
<?php 
include "logo.php";
?>
<div id="main-content">
	<div id="search-wrapper">
		<input type="text" id="search" autocomplete="off" autofocus="true" maxlength="1500">
		<button type="submit" class="btn btn-success" id="send" onclick="upgrade();" data-title="Buscar">
    		<i class="fas fa-search" aria-hidden="true"></i>
		</button>
	</div>
	<?php  
include "searcher.php"
?>
</div>
<?php  
include "footer.php"
?>
</body>
</html>