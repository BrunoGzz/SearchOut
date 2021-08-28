function update(){
	var txt = document.getElementById("searchbox").value;
	var s = document.getElementById("searcher-select").value;
	if(window.location.pathname == "/es"){
		window.location.href = "../?q="+encodeURIComponent(txt)+"&s="+s;
	}else{
	window.location.href = "?q="+encodeURIComponent(txt)+"&s="+s;
	}
}
addEventListener("keypress", function(event) {
	var tx = document.getElementById("searchbox").value.trim();
	if(event.keyCode == 13 && tx != ""){
		update();
 	}
});

addEventListener("click", function(){
	if($("#searchbox").is(":focus")){
		if(document.getElementById("searchbox").value.trim() != ""){
			$("#suggestions").show(200);
		}
	}else{
		$("#suggestions").hide(200);
	}
});

$("#searchbox").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    if(value.trim() != ""){
    	$("#suggestions").show();
    	if(window.location.pathname == "/es"){
			$.post('views/user/modules/autocomplete.php', {
            "value": value,
    		"lang": "es"
    		},function(data) {
    			data = JSON.parse(data);
        		for(var i = 0; i < data.length; i++){
    				document.getElementById("su-"+(i+1)).innerHTML = data[i];
       				document.getElementById("si-"+(i+1)).dataset.value = data[i];
				}	
    		});    		
		}
		else{
            $.post('views/user/modules/autocomplete.php', {
            "value": value,
    		"lang": "en"
    		},function(data) {
    			data = JSON.parse(data);
        		for(var i = 0; i < data.length; i++){
    				document.getElementById("su-"+(i+1)).innerHTML = data[i];
    				document.getElementById("si-"+(i+1)).dataset.value = data[i];
    			}	
    		});
    	}
    }else{
    	$("#suggestions").hide();
    	for(var i = 0; i < 10; i++){
    		document.getElementById("su-"+(i+1)).innerHTML = "";
    	}	
    }
});

function autosearch(information){
	if(information.dataset.value.trim() != ""){
		var s = document.getElementById("searcher-select").value;
		if(window.location.pathname == "/es"){
			window.location.href = "../?q="+encodeURIComponent(information.dataset.value)+"&s="+s;
		}else{
			window.location.href = "?q="+encodeURIComponent(information.dataset.value)+"&s="+s;
		}
	}
}

document.getElementById('submit-button').addEventListener('click', function(){
	var tx = document.getElementById("searchbox").value.trim();
	if(tx != ""){
		update();
 	}
});

function setDefaultSE(){
	if(!localStorage.getItem('se')){
		var SE = new Object();
		SE.google = "Google, Google";
		SE.youtube = "Youtube, Youtube";
		SE.bing = "Bing, Bing";
		SE.yahoo = "Yahoo, Yahoo";
		SE.duckduckgo = "Duck-Duck-Go, Duck-Duck-Go";
		SE.wikipedia = "Wikipedia, Wikipedia";
		SE.googlescholar = "Google-Scholar, Google-Scholar";
		SE.amazon = "Amazon, Amazon";
		SE.twitch = "Twitch, Twitch";
		SE.pinterest = "Pinterest, Pinterest";
		SE.facebook = "Facebook, Facebook";
		SE.twitter = "Twitter, Twitter";

		localStorage.setItem('se',JSON.stringify(SE));

		getDataLS('se');
		window.location.reload();
	}else{
		getDataLS('se');
	}
}

function getDataLS(key){
	var SE = JSON.parse(localStorage.getItem(key));
}

const theme = document.querySelector("#themeSelector");
const body = document.querySelector("body");

load();

theme.addEventListener('click', e => {
	body.classList.toggle('themeDark');
	store(body.classList.contains('themeDark'));
	load();	
});

function load(){
	const themeDark = localStorage.getItem('themeDark');

	if(!themeDark){
		store('false');
	}else if(themeDark == 'true'){
		body.classList.add('themeDark');
	}
}

function store(value){
	localStorage.setItem('themeDark', value);
}

function setSearchEngines(){
	if(localStorage.getItem('se')){
		var searcher_select = document.getElementById("searcher-select");
		var SE = JSON.parse(localStorage.getItem("se"));
		var keys_se = Object.keys(SE);
		var values_se = Object.values(SE);
		for(var i = 0; i < keys_se.length; i++){
			var split_data = values_se[i].toString().split(", ");
			searcher_select.innerHTML += `
			<option value=`+encodeURIComponent(split_data[1])+`>`+split_data[0]+`</option>
			`
		}
	}
}

setSearchEngines();
setDefaultSE();