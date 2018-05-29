function ajaxCall(oper){
    const xhr = new XMLHttpRequest();
    xhr.open("POST", "https://php-anajuliabl.c9users.io/A3/resp.php");
    xhr.onreadystatechange = function() {
        if (xhr.readyState == XMLHttpRequest.DONE &&  xhr.status == 200) {
           var resp = xhr.responseText;
           var div = document.createElement("div");
           div.innerHTML = resp;
           document.body.appendChild(div);
        }
    }
//obj FormData: serve para pegar dados do formulario: lado
    var fd = new FormData();    
    fd.append( 'lado', document.forms.myForm.lado.value);
    fd.append('operacao', oper);
    xhr.send(fd);

}

function processar(){
    //document.querySelector("button").onclick = ajaxCall;
    document.querySelector("#a").onclick = function(e){
      ajaxCall(e.target.name);  
    }
    
    document.querySelector("#p").onclick = function(e){
      ajaxCall(e.target.name);  
    }
}



window.onload = processar;