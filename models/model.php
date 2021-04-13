<?php 
class EnlacesPaginas{
	public static function enlacesPaginasModel($enlaces, $s){
		if(isset($enlaces) and $enlaces != null){
			if(isset($s) and $s != null){
				if($s == "Google"){
					header("Location: https://www.google.com/search?q=".$enlaces);
					exit();
				}
				if($s == "Youtube"){
					header("Location: https://www.youtube.com/results?search_query=".$enlaces);
					exit();
				}
				if($s == "Bing"){
					header("Location: https://www.bing.com/search?q=".$enlaces);
					exit();
				}
				if($s == "Yahoo"){
					header("Location: https://es.search.yahoo.com/search?p==".$enlaces);
					exit();
				}
				if($s == "Google Scholar"){
					header("Location: https://scholar.google.com/scholar?hl=ca&as_sdt=0%2C5&q=".$enlaces);
					exit();
				}
				if($s == "Wikipedia"){
					header("Location: https://es.wikipedia.org/w/index.php?search=".$enlaces);
					exit();
				}
				if($s == "Amazon"){
					header("Location: https://www.amazon.com/s?k=".$enlaces);
					exit();
				}
				if($s == "Twitch"){
					header("Location: https://www.twitch.tv/search?term=".$enlaces);
					exit();
				}
				if($s == "Pinterest"){
					header("Location: https://www.pinterest.com/search/pins/?q=".$enlaces);
					exit();
				}
				if($s == "Twitter"){
					header("Location: https://twitter.com/search?q=".$enlaces);
					exit();
				}
				if($s == "Facebook"){
					header("Location: https://www.facebook.com/search/top?q=".$enlaces);
					exit();
				}
				if($s == "Duck Duck Go"){
					header("Location: https://duckduckgo.com/?q=".$enlaces);
					exit();
				}
				
			}else{
				$module = "views/user/modules/input.php";
			}
		}
		else{
			$module = "views/user/modules/input.php";
		} 
		return $module;
	}	
}
?>