<?php
// 5x2 +2x -20 =0
// retornar los valores positivos y negativos

function ecuGeneralPosi(int $a, int $b, int $c) {
    $xPlus = (($b*-1) + sqrt(num:$b**2 - (4*$a*$c)))/(2*$a);
    return $xPlus;
}

function ecuGeneralNeg(int $a, int $b, int $c) {
    $xNeg = (($b*-1) - sqrt(num:$b**2 - (4*$a*$c)))/(2*$a);
    return $xNeg;
}

echo "X+ = ".ecuGeneralPosi(a:5, b:2,c:-20)."<br> X- =".ecuGeneralNeg (a:5, b:2,c:-20);
