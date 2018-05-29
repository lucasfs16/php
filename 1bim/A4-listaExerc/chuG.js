function ajaxcall(){
    const xhr = new XMLHttpRequest();
    xhr.open("POST", "chuG.php");
    xhr.onreadystatechange = function() {
        if (xhr.readyState == XMLHttpRequest.DONE &&  xhr.status == 200) {
               var resp = xhr.responseText;
               var h1 = document.createElement("h1");
               h1.innerHTML=resp; 
               document.body.appendChild(h1);
        }
    }
    
    var fd = new FormData();
    fd.append('name', document.forms.form.name.value);
    fd.append('sexo', document.forms.form.sexo.value);
    fd.append('idade', document.forms.form.idade.value);
    fd.append('vege', document.forms.form.vege.value);
    xhr.send(fd);
}

function main(){
    document.getElementById("consumo").addEventListener("click", function(){
        ajaxcall();
    });
}

window.onload=main;