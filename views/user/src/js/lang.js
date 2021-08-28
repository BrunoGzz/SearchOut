document.getElementById('langSpanish').addEventListener('click',function(){
	localStorage.setItem('lang','es');
	window.location.href = "./es";
});

document.getElementById('langEnglish').addEventListener('click',function(){
	localStorage.setItem('lang','en');
});

if(localStorage.getItem('lang') == 'es'){
    window.location.href = "./es";
}

if(!localStorage.getItem('lang')){
    $('#langModal').modal('show');
}