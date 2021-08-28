'use strict'
function getDataLS(key){
	var SE = JSON.parse(localStorage.getItem(key));
	var keys_se = Object.keys(SE);
	var values_se = Object.values(SE);
	for(var i = 0; i < keys_se.length; i++){
		var split_data = values_se[i].toString().split(", ");
		document.getElementById('edit-searchers').innerHTML += `
		<div class="p-3 m-3 border">
        	<div class="d-inline">
        	<h5 class="font-weight-bold d-inline text-dark">`+split_data[0]+`</h5>
        	<p class="font-weight-italic d-inline">`+split_data[1]+`</p>
        	</div>
        	<div class="d-inline">
        		<button class="btn btn-danger m-2 p-1 text-right" id=`+keys_se[i]+` onclick="delete_se(this.id);">Delete</button>
        	</div>
        </div>
		`

	}
}

function delete_se(self){
	let se_delete = JSON.parse(localStorage.getItem("se"));
	var se_id = self;
	console.log(se_id);
	delete se_delete[se_id];
	localStorage.setItem("se",JSON.stringify(se_delete));
	window.location.reload();
}

getDataLS("se");