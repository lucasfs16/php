//atualizar

function ajaxCall(){
    const xhr = new XMLHttpRequest();
    xhr.open("POST", "1chu-resp.php");
    //xhr.open("POST", "https://php-anajuliabl.c9users.io/A4-listaExerc/1chu-resp.php");
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
    fd.append( 'nome', document.forms.pessoa.nome.value);
    fd.append( 'idade', document.forms.pessoa.idade.value);
    fd.append( 'veg', document.forms.pessoa.veg.value);
    
    xhr.send(fd);

}

function processar(){
    
    //document.querySelector("#a").onclick = ajaxCall;
  
    //document.getElementById("a").onclick = ajaxCall();
  
    document.getElementById("a").addEventListener("click", function(){
        ajaxCall()});
  
  
}


window.onload = processar;