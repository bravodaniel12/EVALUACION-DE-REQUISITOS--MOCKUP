
function Mostrar() {
    let segundos = parseInt(document.getElementById("segundos").value);
    let Dms = document.getElementById("dms");
    let errorMessage = document.getElementById("error-message");
    
    if (segundos < 0) {
        errorMessage.innerHTML = "Error: Ingrese un número positivo";
        Dms.innerHTML = ""; // Clear any previous results
    } else {
        let segundosday = segundos / 86400;
        let segundoshour = segundos / 3600;
        let segundosminutes = segundos / 60;

        errorMessage.innerHTML = ""; // Clear error message
        Dms.innerHTML =  "La cantidad de días que hay en los segundos ingresados son:  " + segundosday +
            "<br>La cantidad de horas que hay en los segundos ingresados son:  " + segundoshour +
            "<br>La cantidad de minutos que hay en los segundos ingresados son:  " + segundosminutes +
            "<br>La cantidad de segundos son:  " + segundos;
    }
}
