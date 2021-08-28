<?php 
class Suggest {
	var $xml;
	var $data = array();
	var $cache_path; 
	var $cache_file;

	function __construct($query, $locale) {
		
		$this->query = urlencode($query);
		$this->locale = $locale;
		$this->Query();
	}

	function Query(){
	 	
	 	$agent = "AAPP Application/1.0 (Windows; U; Windows NT 5.1; de; rv:1.8.0.4)";
	    $host = "http://suggestqueries.google.com/complete/search?output=toolbar&hl=".$this->locale."&q=".$this->query;
	    $ch = curl_init();
	    
	    curl_setopt($ch, CURLOPT_URL, $host);
	    curl_setopt($ch, CURLOPT_USERAGENT, $agent);
	    curl_setopt($ch, CURLOPT_HEADER, 0);
	    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	    curl_setopt($ch, CURLOPT_TIMEOUT, 5);
	 
	    $this->xml = curl_exec($ch);
	    curl_close($ch);

	    $this->Parse();
	}

	function Parse() {
		
		$dom = new DOMDocument();
		$dom->loadxml(utf8_encode($this->xml));

		$toplevel = $dom->getElementsByTagName('toplevel');
		$suggestions = $dom->getElementsByTagName('suggestion');

		foreach ($suggestions as $suggestion) {
			$this->data[] = $suggestion->getAttribute('data');
		}
		$json = json_encode($this->data);
	}
} ?>