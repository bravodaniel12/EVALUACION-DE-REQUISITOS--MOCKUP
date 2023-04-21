/* funtion siempre va primero */
function verficha(){

let n1,cubo         /* con let declaro una variable */
    /* guardando datos del HTML en la respectiva variable */
n1 = document.getElementById("numero1").value

cubo = n1*n1*n1   //para hacer l aoperacion

//enviar la variable al html
document.getElementById("respuesta").innerHTML =
"<div>el valor es " +cubo+ "</div>"

}



