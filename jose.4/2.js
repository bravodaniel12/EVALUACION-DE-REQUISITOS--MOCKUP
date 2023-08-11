<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pronóstico de Anemia</title>
</head>
<body>
    <h1>Pronóstico de Anemia</h1>
    <form id="anemiaForm">
        <label for="edad">Edad:</label>
        <input type="number" id="edad" name="edad" required><br>

        <label for="unidadEdad">Unidad de Edad:</label>
        <select id="unidadEdad" name="unidadEdad" required>
            <option value="anos">Años</option>
            <option value="meses">Meses</option>
        </select><br>

        <label for="nivelHemoglobina">Nivel de Hemoglobina:</label>
        <input type="number" id="nivelHemoglobina" name="nivelHemoglobina" step="0.1" required><br>

        <button type="submit">Determinar</button>
    </form>

    <p id="resultado"></p>

    <script>
        document.getElementById("anemiaForm").addEventListener("submit", function(event) {
            event.preventDefault();

            const edad = parseFloat(document.getElementById("edad").value);
            const unidadEdad = document.getElementById("unidadEdad").value;
            const nivelHemoglobina = parseFloat(document.getElementById("nivelHemoglobina").value);

            let resultado = "Negativo";

            if (unidadEdad === "meses") {
                if (edad >= 0 && edad <= 1/12 && nivelHemoglobina >= 13 && nivelHemoglobina <= 26) {
                    resultado = "Negativo";
                } else if (edad > 1/12 && edad <= 0.5 && nivelHemoglobina >= 10 && nivelHemoglobina <= 18) {
                    resultado = "Negativo";
                } else if (edad > 0.5 && edad <= 1 && nivelHemoglobina >= 11 && nivelHemoglobina <= 15) {
                    resultado = "Negativo";
                } else {
                    resultado = "Positivo";
                }
            } else if (unidadEdad === "anos") {
                if (edad > 1 && edad <= 5 && nivelHemoglobina >= 11.5 && nivelHemoglobina <= 15) {
                    resultado = "Negativo";
                } else if (edad > 5 && edad <= 10 && nivelHemoglobina >= 12.6 && nivelHemoglobina <= 15.5) {
                    resultado = "Negativo";
                } else if (edad > 10 && edad <= 15 && nivelHemoglobina >= 13 && nivelHemoglobina <= 15.5) {
                    resultado = "Negativo";
                } else if (edad > 15 && nivelHemoglobina >= 13 && nivelHemoglobina <= 26) {
                    if (sexo === "Femenino") {
                        resultado = "Negativo";
                    } else if (sexo === "Masculino" && nivelHemoglobina >= 14 && nivelHemoglobina <= 18) {
                        resultado = "Negativo";
                    }
                } else {
                    resultado = "Positivo";
                }
            }

            if (resultado === "Positivo") {
                document.getElementById("resultado").textContent = "Resultado: Positivo (Anemia)";
            } else {
                document.getElementById("resultado").textContent = "Resultado: Negativo (No hay anemia)";
            }
        });
    </script>
</body>
</html>