<?php

$dias = [

    0 => "Lunes",
    1 => "Martes",
    2 => "Miércoles",
    3 => "Jueves",
    4 => "Viernes",
    5 => "Sábado",
    6 => "Domingo"

];

$i = 1;
echo'<table>';
do{
$a = rand(0,6);
echo'<tr>';
echo'<td>'.' El dia '.($a+1).' es '. $dias[$a].'</td>';
echo'</tr>';

$i++;
}while($i < 6 );

echo'</table>';