function ajaxCall(){
    const xhr = new XMLHttpRequest();
    xhr.open("POST", "https://php-anajuliabl.c9users.io/A2-Contador-Calc/Aula3.php");
    xhr.onreadystatechange = function() {
        if (xhr.readyState == XMLHttpRequest.DONE &&  xhr.status == 200) {
           var resp = xhr.responseText;
           var div = document.createElement("div");
           div.innerHTML = resp;
           document.body.appendChild(div);
        }
    }
//obj FormData: serve para pegar dados do formulario: munição e qtMax
    var fd = new FormData();    
    fd.append( 'municao', document.forms.myForm.municao.value );
    fd.append( 'maxima', document.forms.myForm.maxima.value );
    xhr.send(fd);
}

function processar(){
    document.querySelector("button").onclick = ajaxCall;
}

window.onload = processar;