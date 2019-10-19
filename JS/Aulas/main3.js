//objeto obtido pela biblioteca
axios.get('https://api.github.com/users/cosmonautd')
    .then(function(response){//Caso seja positivo
        console.log(response)
        console.log("qqq");
        renderElemento(response);
    })
    .catch(function(erro){//Caso seja negativo
        console.log(erro);
    });

var app = document.querySelector('#app');

function renderElemento(json){
    //Cria a div do card
    var div = document.createElement('div');
    div.id = "card";
    div.style= "border:4px solid #234567;"+
                "position:relative;"+
                "left:30px;"+
                "width:300px;"+
                "margin-right:auto;"+
                "margin-left:auto;"+
                "padding:10px;"+
                "border-radius:10px;";

    //criar os elementos
    var img = document.createElement('img');
    img.src=json.data.avatar_url;
    img.style = "display:block;"+
                "margin-left:auto;"+
                "margin-right:auto;";
    img.width = 200;
    img.height = 200;

    //link do github
    var link = document.createElement('a');
    link.href = json.data.html_url;
    link.innerHTML = "<p>GitHub</p>";

    //pega as informações de texto
    var p1 = document.createElement('p');
    p1.innerHTML = "<b>Nome:</b> "+json.data.name;

    var p2 = document.createElement('p');
    p2.innerHTML = "<b>Usuário:</b> "+json.data.login;

    var p3 = document.createElement('p');
    p3.innerHTML = "<b>Bio:</b> "+json.data.bio;

    div.appendChild(img);
    div.appendChild(link);
    div.appendChild(p1);
    div.appendChild(p2);
    div.appendChild(p3);

    app.appendChild(div);

}

