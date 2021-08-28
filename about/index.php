<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="./about/style.css">
	<?php
	$title = "About - SearchOut";
	?>
	<title><?php echo $title;?></title>
	<meta charset="utf-8">
	<link rel="icon" type="image/ico" href="../views/user/src/img/icon.ico">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>
<?php include "../views/user/modules/header.php"?>
	<div id="content">
		<svg id="take-back-control" xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 180 40">
            <defs>
                <radialGradient id="grad1">
                    <stop offset="30%" stop-color="#2f80ff"></stop>
                    <stop offset="95%" stop-color="#392dd1"></stop>
                </radialGradient>
            </defs>
            <text fill="url(#grad1)" text-anchor="middle" x="50%" y="25%" id="principal-text">
                <tspan x="50%" dy="0">Browse faster with</tspan>
                <tspan x="50%" dy="1.2em">SearchOut.</tspan>
            </text>
        </svg>
        <div style="text-align: center;">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/xa2qEnHPbZU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" style="margin-bottom: 5%;"></iframe>
        <div id="how-work2">
        	<h1 style="display: inline;" id="title42"><p style="color: #4c54d2; display: inline;">Why?</p></h1>
        	<p id="text42">We believe that people deserve a new and better way to search. That is why we have created SearchOut, the most efficient way to find information on the web.</p>
        </div>
        <div id="how-work">
        	<h1 style="display: inline;" id="title4"><p style="color: #2BBD52; display: inline;">How</p> does it <p style="color: #ea4335; display: inline;">work</p>?</h1>
        	<p id="text4">When you give "ENTER" we take care of redirecting directly to the chosen website. This way you can save time and browse the web more comfortably.</p>
        </div>
        <div style="text-align: center;">
        <div id="pages">
        	<h2 id="pages-text" style="display:inline;">What <p style="color: #FEBF33; display: inline;">pages</p> can I <p style="display: inline; color: #408fec;">search</p> on?</h2>
        	<ul>
        		<li class="li-commin-soon"><img src="../views/user/src/img/google.png" width="240" style="padding: 30px;"></li>
        		<li class="li-commin-soon"><img src="../views/user/src/img/youtube.png" width="240" style="padding: 30px;"></li>
        		<li class="li-commin-soon"><img src="../views/user/src/img/bing.png" width="240" style="padding: 30px;"></li>
        		<li class="li-commin-soon"><img src="../views/user/src/img/yahoo.png" width="240" style="padding: 30px;"></li>
        		<li class="li-commin-soon"><img src="../views/user/src/img/duckduckgo.png" width="240" style="padding: 30px;"></li>
        		<li class="li-commin-soon"><img src="../views/user/src/img/amazon.png" width="240" style="padding: 30px;"></li>
        		<li class="li-commin-soon"><img src="../views/user/src/img/google-scholar.png" width="240" style="padding: 30px;"></li>
        		<li class="li-commin-soon"><img src="../views/user/src/img/twitch.png" width="240" style="padding: 30px;"></li>
        		<li class="li-commin-soon"><img src="../views/user/src/img/twitter.png" width="240" style="padding: 30px;"></li>
        		<li class="li-commin-soon"><img src="../views/user/src/img/facebook.png" width="240" style="padding: 30px;"></li>
        		<li class="li-commin-soon"><img src="../views/user/src/img/pinterest.png" width="240" style="padding: 30px;"></li>
        		<li class="li-commin-soon"><img src="../views/user/src/img/wikipedia.png" width="240" style="padding: 30px;"></li>
        	</ul>
        </div>
        </div>
        <div style="text-align: center;">
        <div id="comming-soon">
        	<h2 id="comming-soon-text">Coming soon :</h2>
        	<ul>
        		<li class="li-comming-soon">Create your own search engine.</li>
                <li class="li-comming-soon">Change language.</li>
        		<li class="li-comming-soon">Blog. (Complete)</li>
        		<li class="li-comming-soon">Responsive web design. (Complete)</li>
        		<li class="li-comming-soon">Autocomplete suggestions.</li>
        	</ul>
        </div>
        </div>
        </div>
	</div>
    <?php
    include "../views/user/modules/big-footer.php";
    ?>
</body>
</html>