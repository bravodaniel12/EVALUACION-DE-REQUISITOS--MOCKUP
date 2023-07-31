// Solicitar el turno de trabajo y el número de horas trabajadas al usuario
var turno = prompt("Ingrese el turno de trabajo (dia/noche):");
var horasTrabajadas = parseInt(prompt("Ingrese el número de horas trabajadas:"));

turno = turno.toLowerCase()
var tarifaHora = 0;

if (turno === "dia") {
  tarifaHora = 10;
} else if (turno === "noche") {
  tarifaHora = 15;
} else {
  console.log("Turno no válido. Por favor, ingrese 'dia' o 'noche'.");
}

// Calcular el valor a pagar
var valorPagar = tarifaHora * horasTrabajadas;


console.log("El valor a pagar es: $" + valorPagar);
