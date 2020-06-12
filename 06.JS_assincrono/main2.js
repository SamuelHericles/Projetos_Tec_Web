//Promise é um objeto para representar uma espera que pose ter conclusão
//positiva ou negativa
var promessa = function (){
    return new Promise(function(resolve, reject){
        var req = new XMLHttpRequest();

        //abrir a aquisição
        req.open('GET', 'https://api.github.com/users/cosmonautd');
        req.send(null);

        req.onreadystatechange = function(){
            //deu certo a aquisição
            if(req.readyState == 4){
               if(req.status == 200){
                   resolve(JSON.parse(req.responseText));
               }else{
                   reject('Erro na aquisição');
               }
            }
        }
    });
}

//Faz a aquisição e aguarda a resposta
promessa()
    .then(function(response){//Caso seja positivo
        console.log(response);
    })
    .catch(function(erro){//Caso seja negativo
        console.log(erro);
    });

