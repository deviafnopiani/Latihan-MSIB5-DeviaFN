<?php
//contoh fungsi bawaan dari PHP
$str = 'Belajar PHP di Kampus Merdeka';
echo $str;

$str = strtoupper($str);
echo '<br>'.$str;
$str = strtolower($str);
echo '<br>'.$str;

$ar_buah = ['Pepaya', 'Mangga', 'Pisang', 'Apel'];
sort($ar_buah);
foreach($ar_buah as $buah){
    echo '<br>' .$buah;
}
echo '<hr>';
arsort($ar_buah); ///mengurutkan atau memilah dari Z - A
foreach($ar_buah as $buah){
    echo '<br>'.$buah;
}

?>