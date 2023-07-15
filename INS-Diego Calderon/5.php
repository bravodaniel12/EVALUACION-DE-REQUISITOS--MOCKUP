<?php
function FierroAlv()
{
    for ($i = 1; $i <= 100; $i++) {
        if ($i % 3 == 0 && $i % 5 == 0) {
            echo "peso pluma ";
        } elseif ($i % 3 == 0) {
            echo "peso ";
        } elseif ($i % 5 == 0) {
            echo "pluma ";
        } else {
            echo $i . " ";
        }
    }
}

FierroAlv();

?>