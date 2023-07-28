
function pow() {
    let nombre, genero, sueldo, tiempo, aumen15, aumen20
    
    nombre = parseInt(document.getElementById("nombre").value)
    genero = parseInt(document.getElementById("genero").value)
    sueldo = parseInt(document.getElementById("sueldob").value)
    tiempo = parseInt(document.getElementById("tiempo").value)
    
    aumen15 = sueldo*0.15+sueldo
  aumen20= sueldo*0.20+sueldo

    if(genero=="masculino" && tiempo > 6){
        mensajes = document.getElementById("res");
        mensajes.innerHTML = "su bonificacion es de un 20% su sueldo base ahora queda en: "+aumen20
      }if(genero=="masculino" && tiempo <= 6){
        mensaje = document.getElementById("res");
        mensaje.innerHTML = "su bonificacion es de un 15% de su sueldo base ahora queda en: "+aumen15
      }

      if(genero=="femenino" && tiempo > 5){
        mensajes = document.getElementById("res");
        mensajes.innerHTML = "su bonificacion es de un 20% su sueldo base ahora queda en: "+aumen20
      }if(genero=="femenino" && tiempo <= 5){
        mensaje = document.getElementById("res");
        mensaje.innerHTML = "su bonificacion es de un 15% de su sueldo base ahora queda en: "+aumen15
      }

    }

