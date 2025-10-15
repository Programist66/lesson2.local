<?php
function generateCalendar($m) {
    if ($m < 1 || $m > 12) return "Неверный номер месяца";
    
    $year = date('Y');
    $daysInMonth = date('t', mktime(0, 0, 0, $m, 1, $year));
    $firstDay = date('N', mktime(0, 0, 0, $m, 1, $year));
    
    echo '<table border="1" cellpadding="5" style="border-collapse: collapse; text-align: center;">';
    echo '<tr><th>Пн</th><th>Вт</th><th>Ср</th><th>Чт</th><th>Пт</th><th>Сб</th><th>Вс</th></tr>';
    
    echo '<tr>';
    for ($i = 1; $i < $firstDay; $i++) {
        echo '<td></td>';
    }
    for ($day = 1; $day <= $daysInMonth; $day++) {
        echo "<td>$day</td>";
        if (($firstDay + $day - 1) % 7 == 0) {
            echo '</tr><tr>';
        }
    }
    
    $lastCell = ($firstDay + $daysInMonth - 1) % 7;
    if ($lastCell > 0) {
        for ($i = $lastCell; $i < 7; $i++) {
            echo '<td></td>';
        }
    }
    
    echo '</tr></table>';
}

generateCalendar(4); // Календарь на март
?>