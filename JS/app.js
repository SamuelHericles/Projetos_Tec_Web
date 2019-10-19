var lista_html = document.querySelector("#app ul")
var campo = document.querySelector("#texto")
var botao = document.querySelector("#app button")

var lista = []

function renderLista(){
    lista_html.innerHTML = ""
    for(item of lista){
        var li = document.createElement('li')
        li.innerHTML = item

        //pegar posição
        var pos = lista.indexOf(campo.value)

        var excluir = document.createElement("a")
        excluir.setAttribute("href","#")
        excluir.onclick = () => {
            remover(pos);
        }

        excluir.innerHTML = "Excluir"

        lista_html.appendChild(li)
        li.appendChild(excluir)
    }
}

//Remover um elemento da lista
function remover(pos){
    lista.splice(pos,1)//remove um elemento na posição pos
    renderLista();
}

renderLista()
function addLista(){
    var valor_texto = campo.value
    lista.push(valor_texto)

    renderLista()
}

botao.onclick = addLista;

campo.onkeypress = (evt) => {
    if(evt.key=="Enter"){
        addLista()
    }
}

renderLista()