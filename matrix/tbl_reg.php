<?php

$new_array = array();
foreach ($array as $line) {
    $line_array = explode(" ", $line);
    $wp1[] = $line_array[0];
    $wp2[] = $line_array[1];
    $wp3[] = $line_array[2];
    $wp4[] = $line_array[3];
    $wp5[] = $line_array[4];
    $pball[] = $line_array[5];
}

foreach(range(1, 69) as $key => $number) {
$number = sprintf('%02d', $number);

echo "<tr class='mdl-data-table__cell--non-numeric''>";
if( is_numeric($key) ) {
    echo "<td class='rowone'>".substr_count($qwe,$number)."</td>";
    echo "<td class='matrix'>".$number."</td>";
    }

echo "<td>";

$pbp = implode(',', $wp1);
echo substr_count($pbp,$number);

echo "</td><td>";

$pbp = implode(',', $wp2);
echo substr_count($pbp,$number);

echo "</td><td>";

$pbp = implode(',', $wp3);
echo substr_count($pbp,$number);

echo "</td><td>";

$pbp = implode(',', $wp4);
echo substr_count($pbp,$number);

echo "</td><td>";

$pbp = implode(',', $wp5);
echo substr_count($pbp,$number);

echo "</td><td>";

$pbp = implode(',', $pball);
echo substr_count($pbp,$number);

echo "</td></tr>";
}

?>