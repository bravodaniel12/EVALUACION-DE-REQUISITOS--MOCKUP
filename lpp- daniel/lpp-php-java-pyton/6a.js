function Mostrar(){
    let euro, pesos

    pesos = document.getElementById("pesos").value 
    euro = pesos*4444

    document.getElementById("euro").innerHTML = "la cantidad de euros son: "+ euro
}