<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SearchOut Developers - Widget</title>
    <link rel="icon" type="image/ico" href="../../views/user/src/img/icon.ico">
	<link rel="stylesheet" type="text/css" href="../../views/user/src/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <style type="text/css">
    body{
      background-image: none;
    }
  </style>
</head>
<body>
<?php include "../../views/user/modules/header.php"?>
<div class="container pl-1 text-center">
    <div class="p-5">
    <h1 class="display-4">Add our search engine to your website.</h1>
    <h2 class="text-muted font-weight-normal mt-4">Add the SearchOut search engine to your website only with a iframe.</h3>
    </div>
    <div class="mt-5 p-3 text-left">
    <h4 class="mb-3">Search engines.</h4>
    <div class="row border-top pt-2">
          <div class="col-md-6 mb-3">
            <label for="firstName">Web Name</label>
            <input type="text" class="form-control" id="webN1" placeholder="Google">
          </div>
          <div class="col-md-6 mb-2">
            <label for="lastName">Web URL</label>
            <input type="text" class="form-control" id="webU1" placeholder="https://www.google.com/search?q=">
          </div>
          <p class="text-danger p-2" id="webUN1"></p>
        </div>
        <div class="row pt-2">
          <div class="col-md-6 mb-3">
            <label for="firstName">Web Name (optional)</label>
            <input type="text" class="form-control" id="webN2" placeholder="Google">
          </div>
          <div class="col-md-6 mb-2">
            <label for="lastName">Web URL (optional)</label>
            <input type="text" class="form-control" id="webU2" placeholder="https://www.google.com/search?q=">
          </div>
        </div>
        <div class="row pt-2">
          <div class="col-md-6 mb-3">
            <label for="firstName">Width</label>
            <input type="number" class="form-control" id="width-widget" placeholder="400 (default) 350 (min)">
          </div>
          <div class="col-md-6 mb-2">
            <label for="lastName">Height</label>
            <input type="number" class="form-control" id="height-widget" placeholder="55 (default) 35 (min)">
          </div>
        </div>
    </div>
    <div class="mt-4 p-3 text-left">
    <h4 class="mb-3">Theme.</h4>
    <div class="row border-top pt-2">
    <div class="d-block my-3 col-md-6">
    <select class="custom-select d-block w-100" id="themeSelector">
              <option value="light">Light</option>
              <option value="dark">Dark</option>
            </select>
        </div>
        </div>
    </div>
    <h5 class="mt-5 pt-4 font-weight-normal">Next, the last thing you have to do is hit the 'generate' button and add the following <code>&lt;iframe&gt;</code> to your HTML.</h5>
    <button class="btn btn-danger m-5" id="generate-code">Generate</button>
    <textarea class="p-3 border rounded bg-light m-3 mb-5" id="textarea-code" style="width: 80%;"></textarea>
    <div>
    <h1>Preview</h1>
    <div class="m-2" id="preview-container"><p class="m-5">Press the 'generate' button to generate a widget</p></div>
  </div>
    <p class="p-5 border-top">This widget could cause errors if the fields related to the web URL are misspelled or if the iframe code has been modified. To search, you will have to press the button with the icon (the function related to detecting the ENTER key is not available). If you write a very long text in the Web Name fields and set a very low width, the text could be choppy.</p>
  </div>
<div class="m-5"></div>
<?php
    include "../../views/user/modules/big-footer.php";
?>
<script src="../../views/user/src/js/widget-generator.js"></script>
</body>
</html>