<?php
function Tinh($month, $year)
{
    switch ($month) {
        case 1:
        case 3:
        case 5:
        case 7:
        case 8:
        case 10:
        case 12:
            echo ("Thang $month co 31 ngay");
            break;

        case 2:
            if ($year % 4 == 0 || $year % 400 == 0) {
                echo "Tháng $month năm $year có 29 ngày.";
            } else {
                echo "Tháng $month năm $year có 28 ngày.";
            }

        case 4:
        case 6:
        case 9:
        case 11:
            echo "Tháng $month có 30 ngày.";
    }
}
