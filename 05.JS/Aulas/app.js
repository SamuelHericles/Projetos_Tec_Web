for(var j=0; j < 3 ; j++){
    p4.innerHTML = "R$"+json.data[i].price[j]+",00";
    div.appendChild(p4)
}



var lista_html = document.querySelector("#app ul");
var campo = document.querySelector("#texto");
var botao = document.querySelector("#app button");

var lista = JSON.parse(localStorage.getItem('lista')) || [];

function renderLista(){
    lista_html.innerHTML = "";
  
    for(item of lista){
        //Criar elemento li
        var li = document.createElement('li');
        li.innerHTML = item;

        //pegar posição
        var pos = lista.indexOf(item);

        //criar elemento a
        var excluir = document.createElement("a");
        excluir.setAttribute("href", "#");
        excluir.setAttribute("onclick", "remover("+pos+")");
        excluir.innerHTML = " Excluir";
        //insere dentro do ul
        lista_html.appendChild(li);
        li.appendChild(excluir);
    }
    salvarStorage();
}

//remover um elemento da lista
function remover(pos){
    
    lista.splice(pos, 1);//remove um elemento na posição pos
    console.log(pos);
    console.log(lista);
    renderLista();
}

//adiciona um elemento na lista
function addLista(){
    //pega o texto do campo
    var valor_texto = campo.value;
    //insere o valor do campo no final da lista
    lista.push(valor_texto);

    //mostra os valores da lista
    renderLista();
    campo.value="";
}

//adiciona a função click no botão
botao.onclick = addLista;
//Para iniciar renderizando os elementos
renderLista();

//adiciona evento de digitar
campo.onkeypress = (evt) => {
    //verifico a tecla enter
    if(evt.key=="Enter"){
        addLista();
    }
}

//salvar no Storage
function salvarStorage(){
    //('referencia do local a armazenar', dados em JSON)
    localStorage.setItem('lista', JSON.stringify(lista));
}