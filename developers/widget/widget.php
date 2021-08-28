<?php
$webN1 = $_GET["webN1"];
$webU1 = $_GET["webU1"];
$webN2 = $_GET["webN2"];
$webU2 = $_GET["webU2"];
$theme = $_GET["theme"];
$height = $_GET["height"];
if ($webN2 != "none"){
    $webN2o = "<option>".$webN2."</option>";
}else{
    $webN2o = null;
}

echo "
<head>
<style>
*{
    box-sizing: border-box;
}
body{
    padding: 0;
    margin: 0;
    display: flex;
}
.main-content {
    width: 100%;
    display: flex;
    z-index: auto;
    margin-left:10px;
    margin-right:10px;
}
.searchform-container {
    margin-left: 0;
    width: 100%;
    margin-right: 15px;
}
#searchform {
    position: relative;
    display: inline-flex;
    margin-bottom: 10px;
    max-width: inherit;
    align-items: center;
    z-index: 3;
    height: ".$height."px !important;
    width: 100%;
    border: 1px solid transparent;
    border-radius: 10px;
    background-color: #fff;
    box-shadow: 0px 1px 4px rgb(37 44 54 / 15%);
}
#searchbox {
    flex-grow: 1;
    width: auto;
    height: 100%;
    border: none;
    outline: none;
    box-shadow: none;
    color: #27292f;
    background-color: transparent;
    border-radius: 0;
    border-top-left-radius: 10px;
    border-bottom-left-radius: 10px;
    padding: 8px 18px;
    padding-left: 1rem !important;
    font-size: 12px;
}
#submit-button {
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    order: 5;
    z-index: 2;
    color: #7c8086;
    background-color: #fff;
    border: none;
    width: 55px;
    border-radius: 0;
    border-top-right-radius: 10px;
    border-bottom-right-radius: 10px;
    padding: 0;
    flex-shrink: 0;
}
#searcher {
    text-align: center;
    height: ".$height."px;
    display: inline;
}
#searcher-select {
    box-shadow: 0px 1px 5px rgb(37 44 54 / 25%);
    width: auto;
    height: ".$height."px;
    border: 1px solid #fff;
    border-radius: 10px;
    outline: none;
    color: #5A626D;
    background-color: #fff;
    padding-left: 5px !important;
}
.dark #searchform-container{
    margin-right: 25px;
}
.dark #searchform {
    box-shadow: 0 0 2 4px #3b3e4f !important;
    border: 1px solid #3b3e4f !important;
    background-color: #242731 !important;
}
.dark #searchbox {
    color: #84889C !important;
}
.dark #submit-button {
    background-color: #242731 !important;
    color: #84889C !important;
}
.dark #searcher-select {
    border: 1px solid #3b3e4f !important;
    background-color: #242731 !important;
    color: #84889C !important;
}
</style>
<script>
function search(){
	var tx = document.getElementById('searchbox').value;
	if(tx.trim() != ''){
        var url = document.getElementById('searcher-select').value;
        if('".$webN1."'==url){
            window.open('".$webU1."'+tx, '_blank');
        }else if('".$webN2."'==url){
            window.open('".$webU2."'+tx, '_blank');
        }else{
            window.open('".$webU1."'+tx, '_blank');
        }
 	}
};
</script>
</head>
<body class='".$theme."'>
<div class='main-content'>
	<div class='searchform-container'>
	<div class='form' id='searchform'>
		<input id='searchbox' type='text' autocapitalize='off' autocomplete='off' autocorrect='off' spellcheck='false' aria-label='Search' title='Search' aria-autocomplete='both' aria-haspopup='false' maxlength='2048' placeholder='Powered by SearchOut'>
		<button id='submit-button' onclick='search();' style='cursor:pointer;'>
        <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-search' viewBox='0 0 16 16'>
        <path d='M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z'/>
        </svg>
		</button>
		</div>
	</div>
	<div id='searcher' class='m-3'>
	<select id='searcher-select'>
		<option>".$webN1."</option>
        ".$webN2o."
	</select>
</div></div>
</body>
"
?>