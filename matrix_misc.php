<?php
$pbm = ' : ';
$title_pbm = 'Winning Numbers &amp; Miscellaneous';
require 'head.php';
?>

<div class="mdl-layout__tab-panel is-active" id="matrix_misc">
          <section class="section mdl-grid mdl-grid--no-spacing">
            <div class="mdl-cell mdl-cell--12-col">
            <h4><?php echo $title_pbm; ?></h4>

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

    <th>TOTALS</th>
    <th>DAY #</th>
    <th>WEEK #</th>
    <th>DAYS BETWEEN</th>
    <th>DAY OF WEEK</th>
    <th><a alt="DAYS REMAINING IN YR FROM DRAW DATE" title="DAYS REMAINING IN YR FROM DRAW DATE" style="color:#000;">DAYS REMAIN</a></th>
    <!-- <th><a alt="MONTHS REMAINING IN YR FROM DRAW DATE" title="MONTHS REMAINING IN YR FROM DRAW DATE">MONTHS REMAINING</a></th> -->
</tr> 
</thead> 
<tbody id="target">
<?php
date_default_timezone_set('America/New_York');

function getDayNum($date) {
    return date('z', strtotime($date));
}
function getWeekNum($date) {
    return date('W', strtotime($date));
}
function getWeekday($date) {
    return date('l', strtotime($date));
}
function getDaysRemaining($date) {
	$date = date('m/d', strtotime($date));
	$date_2 = date('12/31');
	return number_format($date_diff=(strtotime($date_2)-strtotime($date)) / 86400);
}

$readfile = file("csv/powerball.csv");
for ($k=0; $k<count($readfile); $k++) {
if($k == 0 ) continue;
$lines = preg_split('/[,\s]+/', $readfile[$k], 8);

echo "<tr class='mdl-data-table__cell--non-numeric''>";
foreach($lines as $line) {
echo "<td>".$line."</td>";
}


$uno = array_sum($lines);
$dos = $lines[0];
$asdf = $uno - $dos;
echo "<td>".$asdf."</td>";


echo "<td>".getDayNum($lines[0])."</td>";
echo "<td>".getWeekNum($lines[0])."</td>";

echo "<td>";

if (getWeekday($lines[0]) === 'Monday') {
	echo 2;
} elseif (getWeekday($lines[0]) === 'Wednesday') {
	echo 4;
} elseif (getWeekday($lines[0]) === 'Saturday') {
	echo 3;
}

echo "</td>";

echo "<td>".getWeekday($lines[0])."</td>";
echo "<td>".getDaysRemaining($lines[0])."</td>";
//echo "<td>".getMonthsRemaining($lines[0])."</td>";

echo "</tr>";
}

?>

</tbody> 
</table>

            </div>
          </section>
        </div>

<?php require 'footer.php'; ?>