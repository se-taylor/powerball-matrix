<?php
$pbm = ' : ';
$title_pbm = 'The Matrix';
require 'head.php';
?>

<div class="mdl-layout__tab-panel is-active" id="matrix">
          <section class="section mdl-grid mdl-grid--no-spacing">
            <div class="mdl-cell mdl-cell--12-col">
            <h4><?php echo $title_pbm; ?></h4>

<?php require 'matrix/tbl_hdr.php'; ?>

<?php
$qwe = file_get_contents("csv/powerball_clean.csv");
$array = file('csv/powerball_clean.csv');
?>

<?php
require 'matrix/tbl_reg.php';
require 'matrix/tbl_ftr.php';
require 'matrix/heatmap.php';
require 'footer.php';
?>