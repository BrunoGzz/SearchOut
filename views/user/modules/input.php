<!DOCTYPE html>
<html lang="en">
<head>
	<?php
	$title = "SearchOut - Search fast";
	?>
	<?php include "suggest.php" ?>
	<title><?php echo $title;?></title>
    <meta name="description" content="SearchOut is a new way to browse the internet faster. You can search Google, Bing, Yahoo, Youtube, Amazon, Twitter, Facebook, Wikipedia, Twitch ...">   
	<link rel="icon" type="image/ico" href="views/user/src/img/icon.ico">
	<link rel="stylesheet" type="text/css" href="views/user/src/css/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
	<meta charset="utf-8">
</head>
<body>
<?php include "main-header.php"?>
<div class="main-content">
	<div class="searchform-container">
	<div class="form" id="searchform">
		<input id="searchbox" type="text" autocapitalize="off" autocomplete="off" autocorrect="off" spellcheck="false" aria-label="Search" title="Search" aria-autocomplete="both" aria-haspopup="false" maxlength="2048" autofocus="" placeholder="
Search faster with SearchOut...">
		<button id="submit-button">
			<i class="bi bi-search"></i>
		</button>
		</div>
	</div>
	<?php include "suggestion.php"?>
	<?php include "searcher.php"?>
</div>
<?php include "footer.php"?>
<div class="modal fade" id="langModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Chose a lenguage / Esocoje un lenguaje</h5>
      </div>
      <div class="modal-body">
	  <button type="button" class="btn btn-dark" data-dismiss="modal" id="langEnglish">English</button>
        <button type="button" class="btn btn-dark" data-dismiss="modal" id="langSpanish">Español</button>
      </div>
    </div>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
<script src="views/user/src/js/lang.js"></script>
<script src="views/user/src/js/script.js"></script>
<script src="views/user/src/js/lang-select.js"></script>
</body>
</html>