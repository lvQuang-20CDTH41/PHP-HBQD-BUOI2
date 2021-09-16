<?php
function giai($a, $b, $c)
{
    if ($a == 0 && $b == 0 && $c == 0) {
        echo "Phương trình: " . $a . "x^2 + " . $b . "x + " . $c . " = 0 <br>";
    }
    if ($a == 0) {
        if ($b == 0) {
            echo "Phuong trinh vo nghiem";
        } else {
            echo "Phuong trinh co nghiem la: x = " . (-$c / $b);
        }
        return;
    }
    $delta = $b * $b - 4 * $a * $c;
    $x1 = $x2 = "";
    if ($delta > 0) {
        $x1 = (-$b - sqrt($delta)) / (2 * $a);
        $x2 = (-$b + sqrt($delta)) / (2 * $a);
        echo "Phuong trinh co 2 nghiem la: x1 = " . $x1 . " va x2 = " . $x2;
    } else if ($delta == 0) {
        $x1 = (-$b / (2 * $a));
        echo "Phuong tinh co nghiem kep la: x1 = x2 = " . $x1;
    } else {
        echo "Phuong trinh vo nghiem";
    }
}
