<?php
$n1 = intval(readline(prompt:"primer numero \n"));
$n2 = intval(readline(prompt:"segundo numero \n"));
$n3 = intval(readline(prompt:"tercer numero \n"));

if($n1 > $n2 ){
    echo "usted APROBO"$n1;
}

if ( $n2 > $n3){
    echo "usted NO APROBO".$n2;
}
if ( $n3 > $n1 ){
    echo "el numero mayor es:".$n3;
}