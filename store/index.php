<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SearchOut Store</title>
    <link rel="icon" type="image/ico" href="../views/user/src/img/icon.ico">
	<link rel="stylesheet" type="text/css" href="../views/user/src/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <style type="text/css">
    body{
      background-image: none;
    }
  </style>
</head>
<body>
<?php include "../views/user/modules/header.php"?>
<div class="container pl-1 text-center">
    <h1 class="display-4">Can't find a search engine?</h1>
    <h2 class="text-muted font-weight-normal mt-4">Here you can find search engines added by the community and then add them to your home page.</h3>
    <button class="btn btn-danger p-3 m-5" data-target="#addModal" data-toggle="modal">Add a search engine</button>
    <a href="./store/edit"><button class="btn btn-primary p-3 m-5">Edit my search engines</button></a>
    <p class="h3">Or</p>
    <div class="text-center p-5">
    <input type="text" placeholder="Search a search engine..." class="p-2 rounded-pill form-control text-center" id="search-se">
    </div>
    <div class="container" id="searchers">
    </div>
    <div class="modal fade" tabindex="-1" aria-hidden="true" id="addModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Add a search engine.</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label class="col-form-label">By:</label>
            <input type="text" class="form-control" id="by-input" placeholder="SearchOut (default)">
          </div>
          <div class="form-group">
            <label class="col-form-label">Web Name:</label>
            <input type="text" class="form-control" id="name-input" placeholder="ex: Google"></input>
          </div>
          <div class="form-group">
            <label class="col-form-label">Web Url:</label>
            <input type="text" class="form-control" id="url-input" placeholder="ex: https://www.google.com/search?q="></input>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="publicate-button" data-dismiss="modal">Publicate</button>
      </div>
    </div>
  </div>
</div>
</div>
<div class="modal fade" id="errorModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Error</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      You have to fill in all the fields to publish your search engine!
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<?php include "../views/user/modules/big-footer.php"?>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
<script src="https://www.gstatic.com/firebasejs/8.8.1/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.8.1/firebase-database.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.8.1/firebase-analytics.js"></script>
<script src="../../views/user/src/js/store.js"></script>
</body>
</html>