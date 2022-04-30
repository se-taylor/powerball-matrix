<?php
$pbm = ' : ';
$title_pbm = 'Winning Numbers';
require 'head.php';
?>

<div class="mdl-layout__tab-panel is-active" id="matrix_winning_numbers">
          <section class="section mdl-grid mdl-grid--no-spacing">
            <div class="mdl-cell mdl-cell--12-col">
            <h4><?php echo $title_pbm; ?></h4>
            <div class="mdl-components__information">The Powerball Winning Numbers page is a display of all winning numbers in the order they were drawn from every date on Monday, Wednesday &amp; Saturday starting 11/01/1997.</div>

<table id="myTable" class="mdl-data-table mdl-js-data-table mdl-shadow--2dp"> 
<thead> 
<tr> 
    <th class="mdl-data-table__cell--non-numeric">Draw Date</th>
    <th>P(x)</th> 
    <th>O(x)</th> 
    <th>W(x)</th> 
    <th>E(x)</th> 
    <th>R(x)</th> 
    <th>BALL</th> 
    <th>PP</th> 
</tr> 
</thead> 
<tbody id="target">
<?php

function getWeekday($date) {
    return date('l', strtotime($date));
}

$readfile = file("csv/powerball.csv");
for ($k=0; $k<count($readfile); $k++) {
if($k == 0 ) continue;
$lines = preg_split('/[,\s]+/', $readfile[$k], 8);

echo "<tr class='mdl-data-table__cell--non-numeric''>";
foreach($lines as $line) {
echo "<td>".$line."</td>";
}

echo "</tr>";
}

?>

<?php
require 'matrix/tbl_ftr.php';
require 'footer.php';
?>