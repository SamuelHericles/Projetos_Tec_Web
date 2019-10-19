//Crio um elemento
var div = document.createElement("div");
div.setAttribute("id", "app");//(atributo, valor)

var btn = document.createElement("button");
var elem_txt = document.createTextNode("novo Ok");



btn.appendChild(elem_txt);

btn.onclick = click;

var txt = document.createElement("input");
txt.setAttribute("type", "text");

//adidicona na div
div.appendChild(btn);
div.appendChild(txt);

//Pego o body
var body = document.querySelector("body");
//adiciono um elemento no body
body.appendChild(div);

function click(){
    div.innerHTML = "";
}