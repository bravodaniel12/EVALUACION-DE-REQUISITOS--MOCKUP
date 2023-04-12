alert(
    "canacue"
    )

/* function siempre va a ir y sirve para indicar una tarea*/
function getficha(){
    let producto = document.getElementById("nom_producto").value
    document.getElementById("res-producto").innerText = producto

}
function getlinea(){
    let producto = document.getElementById("li_producto").value
    document.getElementById("lo-producto").innerText = producto
}
function getterior(){
    let producto = document.getElementById("te_producto").value
    document.getElementById("to-producto").innerText = producto
}
function getctual(){
    let producto = document.getElementById("pi_producto").value
    document.getElementById("tu-producto").innerText = producto
}
function getmodulo(){
    let producto = document.getElementById("cu_producto").value
    document.getElementById("ca-producto").innerText = producto
}
