

var validarForm = function(){

    console.log("Funcionando")
    var nomeHabito = document.getElementById('nome').value;
    console.log(nomeHabito)
    if('' == nomeHabito){
        alert('É necessário inserir o nome do hábito!');
        return false;
    }
}


document.getElementById("formularioInsertHabito").onsubmit = validarForm;