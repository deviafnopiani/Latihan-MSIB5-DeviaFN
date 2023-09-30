<?php
require 'gempa.php';

$g1 = new Gempa ('Banten', 1);
$g2 = new Gempa ('Banten2', 3);
$g3 = new Gempa ('Banten3', 5);
$g4 = new Gempa ('Banten4', 6);
$g5 = new Gempa ('Banten5', 8);

$g1->cetak();
$g2->cetak();
$g3->cetak();
$g4->cetak();
$g5->cetak();
?>