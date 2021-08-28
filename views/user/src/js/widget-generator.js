document.getElementById('generate-code').addEventListener('click', function(){
    var textarea = document.getElementById('textarea-code');
    var code;
    var webN1 = document.getElementById('webN1').value;
    var webU1 = document.getElementById('webU1').value;
    var webN2 = document.getElementById('webN2').value;
    var webU2 = document.getElementById('webU2').value;
    var width = document.getElementById('width-widget').value;
    var height = document.getElementById('height-widget').value;
    var theme = document.getElementById('themeSelector').value;
    if(webN1.trim() || webU1.trim() != ""){
        document.getElementById('webUN1').innerHTML = "";
        if(webN2.trim() == ""){
            webN2 = "none";
        }
        if(webU2.trim() == ""){
            webU2 = "none";
        }
        if(width.trim() == ""){
            width = "400";
        }
        if(Number(width) < 350){
            width = "350";
        }
        if(Number(height) < 35){
            height = "35";
        }
        if(height.trim() == ""){
            height = "56";
        }
        var height_i = Number(height)+20;
        code = "<iframe frameBorder='0' scrolling='no' width='"+width+"' height='"+height_i+"' allowtransparency='0' src='http://searchout.tk/developers/widget/widget.php?theme="+theme+"&webN1="+encodeURIComponent(webN1)+"&webU1="+encodeURIComponent(webU1)+"&webN2="+encodeURIComponent(webN2)+"&webU2="+encodeURIComponent(webU2)+"&height="+height+"'></iframe>";
        textarea.value = code;
        document.getElementById('preview-container').innerHTML = code;
    }else{
        document.getElementById('webUN1').innerHTML = "The first web is mandatory";
    }
});
