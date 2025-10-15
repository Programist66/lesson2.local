<?php
$numbers = [2, -5, 10, -3, 8, -1];
$sum = 0;

foreach ($numbers as $num) {
    if ($num > 0) {
        $sum += $num;
    }
}

echo "Сумма положительных элементов: $sum";
?>