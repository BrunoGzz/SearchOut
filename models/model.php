<?php 
class EnlacesPaginas{
	public static function enlacesPaginasModel($enlaces, $s){
		if(isset($enlaces) and $enlaces != null){
			$enlaces = urlencode($enlaces);
			if(isset($s) and $s != null){
				if($s == "Google"){
					header("Location: https://www.google.com/search?q=".$enlaces);
					exit();
				}
				elseif($s == "Youtube"){
					header("Location: https://www.youtube.com/results?search_query=".$enlaces);
					exit();
				}
				elseif($s == "Bing"){
					header("Location: https://www.bing.com/search?q=".$enlaces);
					exit();
				}
				elseif($s == "Yahoo"){
					header("Location: https://es.search.yahoo.com/search?p==".$enlaces);
					exit();
				}
				elseif($s == "Google-Scholar"){
					header("Location: https://scholar.google.com/scholar?as_sdt=0%2C5&q=".$enlaces);
					exit();
				}
				elseif($s == "Wikipedia"){
					header("Location: https://es.wikipedia.org/w/index.php?search=".$enlaces);
					exit();
				}
				elseif($s == "Amazon"){
					header("Location: https://www.amazon.com/s?k=".$enlaces);
					exit();
				}
				elseif($s == "Twitch"){
					header("Location: https://www.twitch.tv/search?term=".$enlaces);
					exit();
				}
				elseif($s == "Pinterest"){
					header("Location: https://www.pinterest.com/search/pins/?q=".$enlaces);
					exit();
				}
				elseif($s == "Twitter"){
					header("Location: https://twitter.com/search?q=".$enlaces);
					exit();
				}
				elseif($s == "Facebook"){
					header("Location: https://www.facebook.com/search/top?q=".$enlaces);
					exit();
				}
				elseif($s == "Duck-Duck-Go"){
					header("Location: https://duckduckgo.com/?q=".$enlaces);
					exit();
				}
				else{
					header("Location: ".$s.$enlaces);
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