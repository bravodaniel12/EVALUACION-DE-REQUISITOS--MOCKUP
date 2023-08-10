<form action="#" method = "post"> 
    <input type="text" name = "palabras">
    <button type = "submit">Enviar</button>
</form>
<?php 
// str_replace = se utiliza para reemplazar caracteres dentro de una cadena de caracteres.
// strrev = es una función que se utiliza para invertir una cadena de caracteres.
$palabra = $_POST['palabras'];
function esPalindromo($palabra){
    $fraseInvertida = str_replace(" ","", strrev($palabra));

if (str_replace(" ","",$palabra) == $fraseInvertida) {
    $palabra = "es palindromo";
}else {
    $palabra = "no es palindromo";
}
return $palabra;
}
echo esPalindromo($palabra)
?>