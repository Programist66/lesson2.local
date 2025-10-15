<?php
$number = 456;
$sum = 0;
$temp = $number;

while ($temp > 0) {
    $sum += $temp % 10;
    $temp = (int)($temp / 10);
}

echo "Сумма цифр числа $number = $sum";
?>