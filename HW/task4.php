<?php
$num1 = 15;
$num2 = 5;

if ($num2 == 0) {
    echo "Деление на ноль!";
} elseif ($num1 % $num2 == 0) {
    echo "$num1 делится на $num2 без остатка";
} else {
    echo "$num1 НЕ делится на $num2 без остатка";
}
?>