const n = document.querySelector("#datoNombre")
const a = document.querySelector("#datoApellido")
const c = document.querySelector("#datoCorreo") 
const f = document.querySelector("#datoFnacimiento")

function almacenarData(){
let nom,ape,fna,cor
nom = document.getElementById("nombre").value
ape = document.getElementById("apellido").value
cor = document.getElementById("correo").value
fna = document.getElementById("fnacimiento").value

//almacenamiento local con localstorege
localStorage.setItem("Nombre",nom);
localStorage.setItem("Apellido",ape);
localStorage.setItem("Correo",cor);
localStorage.setItem("Fnacimiento",fna);
//limpiando los campos o inputs
document.getElementById("nombre").value ="";
document.getElementById("apellido").value ="";
document.getElementById("correo").value ="";
document.getElementById("fnacimiento").value ="";
/* con este al colocar 
el nombre y apellido y darle click se va a borrar */
}

function cargarData(){
    let Nombre, Apellido, Fecha, Correo

    Nombre = localStorage.getItem("Nombre");
    Apellido = localStorage.getItem("Apellido");
    Correo = localStorage.getItem("Correo");
    Fecha = localStorage.getItem("Fnacimiento");
    //mostrar datos almacenados
    n.innerHTML = "<b>"+Nombre+"</b>";
    a.innerHTML = Apellido; 
    c.innerHTML = Correo;
    f.innerHTML = Fecha;
}