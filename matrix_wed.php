<?php
$pbm = ' : ';
$title_pbm = 'Wednesday + Averages';
require 'head.php';
?>

<div class="mdl-layout__tab-panel is-active" id="matrix_wed">
          <section class="section mdl-grid mdl-grid--no-spacing">
            <div class="mdl-cell mdl-cell--12-col">
            <h4><?php echo $title_pbm; ?></h4>
            <div class="mdl-components__information">The Wednesday page is showing a matrix of winning numbers and their averages restricted to Wednesday only.</div>

<?php require 'matrix/tbl_mws_hdr.php'; ?>

<?php
$qwe = file_get_contents("csv/powerball_wednesday_clean.csv");
$array = file('csv/powerball_wednesday_clean.csv');
?>

<?php
require 'matrix/tbl_mws_avg.php';
require 'matrix/tbl_ftr.php';
require 'matrix/heatmap.php';
require 'footer.php';
?>