//objeto para fazer aquisição a servidor
var req = new XMLHttpRequest();

//abrir a aquisição
req.open('GET', 'https://api.github.com/users/cosmonautd');
req.send(null);

req.onreadystatechange = function(){
    //deu certo a aquisição
    if(req.readyState == 4){
        console.log(JSON.parse(req.responseText));
    }
}