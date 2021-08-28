<?php 
include "suggest.php";
$value = $_POST["value"];
$lang = $_POST["lang"];
$suggest = new Suggest("$value", "$lang"); 
$suggest_decode = json_encode($suggest->data);
print_r($suggest_decode);
?>