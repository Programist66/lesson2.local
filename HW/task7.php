<?php
$str = "Hello0123World";
$pos = strpos($str, '0');

if ($pos !== false) {
    echo "Первый ноль на позиции: $pos";
} else {
    echo "Ноль не найден";
}
?>