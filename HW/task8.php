<?php
$numbers = [2, -5, 10, -3, 8, -1];
$positive = array_filter($numbers, function($num) {
    return $num > 0;
});

foreach($positive as $num)
{
    echo "$num ";
}
?>