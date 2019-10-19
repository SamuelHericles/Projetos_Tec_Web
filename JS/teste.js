//var div = document.querySelector('#app')

//Crio um elemento
var div  = document.createElement("div")
div.setAttribute("id","app")

var btn = document.createElement("button")
var elem_txt = document.createTextNode("novo Ok")

//btn.innerHTML = "OK"

btn.appendChild(elem_txt)

btn.onclick = click
var txt = document.createElement("input")
txt.setAttribute("type","text")

//Adiciona na div
div.appendChild(btn)
div.appendChild(txt)

//Pego o body
var body = document.querySelector("body")

//Adiciono um elemento no body
body.appendChild(div)

function click(){
    //var nome = prompt("Diga seu nome: ")
    //txt.value = nome
    //txt.setAttribute("value",nome)

    var r = prompt("Clike")
    if(r == true){
        txt.setAttribute("value","teste")
    }else{
        txt.value = r
    }


    /*
    var r = confirm("Você têm mais de 18 anos?")    
    var txt = document.createAttribute("input")
    
    if(r){
        txt.setAttribute("type","text")
        txt.setAttribute("value","Filme de morte")
    }else{
        txt.setAttribute("value","Galinha pintadinha")
    }*/
}
