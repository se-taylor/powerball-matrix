<?php
$pbm = ' : ';
$title_pbm = 'The 9 Less + Averages';
require 'head.php';
?>

<div class="mdl-layout__tab-panel is-active" id="matrix_nine_less">
          <section class="section mdl-grid mdl-grid--no-spacing">
            <div class="mdl-cell mdl-cell--12-col">
            <h4><?php echo $title_pbm; ?></h4>
            <div class="mdl-components__information">The 9 Less page is showing the remaining data from the removal of the Powerballs, 27 through 35. (Data Collection Until 10/07/2015)</div>

<table id="myTable" class="mdl-data-table mdl-js-data-table mdl-shadow--2dp">
<thead>
<tr>
    <th class="mdl-data-table__cell--non-numeric"># Count</th>
    <th>#</th>
    <th>POWERBALL BALL</th>
    <th>POWERBALL BALL AVG</th>
</tr>
</thead>
<tbody>

<?php

$qwe = file_get_contents("csv/powerball_nine_clean.csv");
$array = file('csv/powerball_nine_clean.csv');

$new_array = array();
foreach ($array as $line) {
    $line_array = explode(" ", $line);
    $pball[] = $line_array[5];
}

foreach(range(27, 35) as $key => $number) {
$number = sprintf('%02d', $number);

echo "<tr class='mdl-data-table__cell--non-numeric''>";
if( is_numeric($key) ) {
    echo "<td class='rowone'>".substr_count($qwe,$number)."</td>";
    echo "<td class='matrix'>".$number."</td>";
    }

echo "<td class='reg'>";

$pbp = implode(',', $pball);
echo substr_count($pbp,$number);

echo "</td>";

echo "<td class='avg'>";
$pbp = implode(',', $pball);
$average = (substr_count($pbp,$number) / substr_count($qwe,$number))*100;
echo number_format($average, 2).'%';

echo "</td></tr>";
}

?>

</tbody>
</table>
<br />

<?php require 'footer.php'; ?>