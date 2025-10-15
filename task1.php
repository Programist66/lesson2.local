<?php
$numbers = [2, 5, 10, 15];
foreach ($numbers as &$value) {
    $value = $value ** 2;
    echo $value.' ';
}
?>