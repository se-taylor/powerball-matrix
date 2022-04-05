<?php
$pbm = ' : ';
$title_pbm = 'The New 10 + Averages';
require 'head.php';
?>

<div class="mdl-layout__tab-panel is-active" id="matrix_new_ten">
          <section class="section mdl-grid mdl-grid--no-spacing">
            <div class="mdl-cell mdl-cell--12-col">
            <h4><?php echo $title_pbm; ?></h4>
            Data Collection Since 10/07/2015

<table id="myTable" class="mdl-data-table mdl-js-data-table mdl-shadow--2dp">
<thead>
<tr>
    <th class="mdl-data-table__cell--non-numeric"># Count</th>
    <th>#</th>
    <th>P(x)</th>
    <th>pAVG</th>
    <th>O(x)</th>
    <th>oAVG</th>
    <th>W(x)</th>
    <th>wAVG</th>
    <th>E(x)</th>
    <th>eAVG</th>
    <th>R(x)</th>
    <th>rAVG</th>
    <th>BALL(x)</th>
    <th>ballAVG</th>
</tr>
</thead>
<tbody>

<?php

$qwe = file_get_contents("csv/powerball_ten_clean.csv");
$array = file('csv/powerball_ten_clean.csv');

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

foreach(range(60, 69) as $key => $number) {
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

$pbp = implode(',', $wp1);
$average = (substr_count($pbp,$number) / substr_count($qwe,$number))*100;
echo number_format($average, 2).'%';

echo "</td><td>";

$pbp = implode(',', $wp2);
echo substr_count($pbp,$number);

echo "</td><td>";

$pbp = implode(',', $wp2);
$average = (substr_count($pbp,$number) / substr_count($qwe,$number))*100;
echo number_format($average, 2).'%';

echo "</td><td>";

$pbp = implode(',', $wp3);
echo substr_count($pbp,$number);

echo "</td><td>";

$pbp = implode(',', $wp3);
$average = (substr_count($pbp,$number) / substr_count($qwe,$number))*100;
echo number_format($average, 2).'%';

echo "</td><td>";

$pbp = implode(',', $wp4);
echo substr_count($pbp,$number);

echo "</td><td>";

$pbp = implode(',', $wp4);
$average = (substr_count($pbp,$number) / substr_count($qwe,$number))*100;
echo number_format($average, 2).'%';

echo "</td><td>";

$pbp = implode(',', $wp5);
echo substr_count($pbp,$number);

echo "</td><td>";

$pbp = implode(',', $wp5);
$average = (substr_count($pbp,$number) / substr_count($qwe,$number))*100;
echo number_format($average, 2).'%';

echo "</td><td>";

$pbp = implode(',', $pball);
echo substr_count($pbp,$number);

echo "</td><td>";

$pbp = implode(',', $pball);
$average = (substr_count($pbp,$number) / substr_count($qwe,$number))*100;
echo number_format($average, 2).'%';

echo "</td></tr>";

}

?>

<script>
$('.navdrawer-container ul li:nth-child(8) a').addClass("active");
</script>

<?php
require 'matrix/tbl_ftr.php';
require 'matrix/heatmap.php';
require 'footer.php';
?>