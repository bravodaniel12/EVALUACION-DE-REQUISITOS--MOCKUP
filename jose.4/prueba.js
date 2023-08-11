

function calcularDiagnostico() {
            const edad = parseFloat(document.getElementById("edad").value);
            const sexo = document.getElementById("sexo").value;
            const meses = document.getElementById("meses").value;
            const hemoglobina = parseFloat(document.getElementById("hemoglobina").value);
            
            let resultado = "";

            if ((edad <= 1 && meses === "meses" && hemoglobina >= 13 && hemoglobina <= 26) ||
                (edad > 1 && edad <= 6 && meses === "meses" && hemoglobina >= 10 && hemoglobina <= 18) ||
                (edad > 6 && edad <= 12 && meses === "meses" && hemoglobina >= 11 && hemoglobina <= 15) ||
                (edad > 12 && edad <= 60 && sexo === "mujer" && hemoglobina >= 13 && hemoglobina <= 26) ||
                (edad > 12 && edad <= 60 && sexo === "hombre" && hemoglobina >= 14 && hemoglobina <= 18)) {
                resultado = "Negativo: No tiene anemia.";
            } else {
                resultado = "Positivo: Tiene anemia.";
            }

            document.getElementById("resultado").textContent = "Resultado: " + resultado;
        }
