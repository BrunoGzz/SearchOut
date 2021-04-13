<!DOCTYPE html>
<html>
<head>
	<?php
	$title = "Collaborators - SearchOut";
	?>
	<title><?php echo $title; ?></title>
	<script src="../views/user/src/js/icons.js"></script>
	<meta charset="utf-8">
	<link rel="icon" type="image/ico" href="../views/user/src/img/icon.ico">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<style type="text/css">
		@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap');

		body{
			padding: 0;
			margin: 0;
			height: 100%;
			width: 100%;
		}

		#list-collaborators{
			color: #408fec;
			font-size: 40px;
			font-family: arial;
			padding: 20px;
			margin-top: 10px;
		}
		.name-collaborator{
			text-decoration: none;
			color: black;
			list-style: none;
			font-family: arial;
			font-size: 18px;
			padding: 10px;
			display: inline;
		}
		footer{
			position: fixed !important;
		}

		.lupa{
			display: inline;
			font-size:15px;
			color: #FFD700;
		}

		.div-name-list{
			padding: 10px;
		}
	</style>
</head>
<body>
	<div>
		<h1 id="list-collaborators">List of collaborators</h1>
		<ul>
			<div class="div-name-list"><i class="fas fa-search lupa"></i><li class="name-collaborator">Bruno Rodríguez - Creator and developer</li></div>
			<div class="div-name-list"><i class="fas fa-search lupa"></i><li class="name-collaborator">Rebeca Ramos - Correction and translation</li></div>
		</ul>
	</div>
	<?php
	include "../views/user/modules/big-footer.php";
	?>
</body>
</html>