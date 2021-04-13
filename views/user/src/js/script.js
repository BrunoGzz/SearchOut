function update(){
	var txt = document.getElementById("search").value;
	var s = document.getElementById("searcher-select").value;
	window.location.href = "?q="+txt+"&s="+s;
}
addEventListener("keypress", function(event) {
	var tx = document.getElementById("search").value.trim();
	if(event.keyCode == 13 && tx != ""){
		update();
 	}
})

function upgrade(){
	var tx = document.getElementById("search").value.trim();
	if(tx != ""){
		update();
 	}
}

function create(){
	window.location.href = "create/";
}