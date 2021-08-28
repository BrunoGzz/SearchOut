var firebaseConfig = {
    apiKey: "AIzaSyCGqpOkiaVySUeVEx-wNrQEGEYhnOOD0r0",
    authDomain: "searchout-e86d4.firebaseapp.com",
    projectId: "searchout-e86d4",
    storageBucket: "searchout-e86d4.appspot.com",
    messagingSenderId: "111232706097",
    appId: "1:111232706097:web:e0ad68e82650d24b081710",
    measurementId: "G-TRZ53ZBPYT"
};
firebase.initializeApp(firebaseConfig);
firebase.analytics();
firebase.database();

document.getElementById('publicate-button').addEventListener('click',function(){
	var by = document.getElementById('by-input').value;
    var name = document.getElementById('name-input').value;
    var url = document.getElementById('url-input').value;
    if(name.trim() == "" || url.trim() == ""){
        $('#errorModal').modal('show');
    }
    else{
    if(by.trim() == ""){
        by = "SearchOut";
    }
    firebase.database().ref("searcher").push().set({
        "by": by,
        "name": name,
        "url" : url 
      });
    }
});

function add_se(self){
    let se_add = JSON.parse(localStorage.getItem("se"));
    let se_name = self.getAttribute("data-name");
    let se_url = self.getAttribute("data-url");
    let se_name_key = se_name.replace(/ /g, "");
    se_name_key = se_name_key.toLowerCase();
    se_add[se_name_key] = se_name+", "+se_url;
    localStorage.setItem("se", JSON.stringify(se_add));
}

firebase.database().ref("searcher").on("child_added", (snapshot)  => {
        var html = "";
        html += "<div class='card m-5'>";
        html += "<h5 class='card-header'>";
        html += snapshot.val().name+"</h5>";
        html += "<div class='card-body'>"
        html += "<h5 class='card-title'>";
        html += snapshot.val().url;
        html += "</h5>";
        html += "<p class='card-text'>By: "+snapshot.val().by+"</p>";
        html += "<button class='btn btn-primary' data-url="+snapshot.val().url+" data-name="+snapshot.val().name+" onclick='add_se(this)'>Add to home</button>";
        html += "</div>";
        html += "</div>";
        document.getElementById("searchers").innerHTML += html;
});

$("#search-se").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#searchers div").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });