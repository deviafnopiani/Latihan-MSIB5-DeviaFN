<?php
/*contoh fungsi void atau yang tidak mengembalikan nilai
dan kita buat sendiri
*/
//deklarasi fungsi salam
function salam(){
    echo '<br> Selamat Pagi Teman-Teman';
}
function sapa($kawan){
    echo '<br> Selamat Pagi '.$kawan;
}
function kabar($kawan='Budi'){
    echo '<br> Hai apa kabar '.$kawan;
}
//eksekusi atau output fungsi salam()
salam();

$nama = 'Deden';
sapa($nama); //ini pemanggilan variable baru
sapa('Andi'); // pemanggilan value dari parameter $kawan
kabar(); //menampilkan parameter dan value $kawan
kabar('Ahmad'); //mengubah value $kawan

echo '<hr>';

//fungsi mengecek bilangan prima
function prima($bilangan){
    $prima = true;
    for($i=2; $i<$bilangan; $i++){
        if($bilangan % $i == 0){
            $prima = false;
            break;
        }
    }
    return $prima;
}
if(prima(12)){
    echo 'Bilangan Prima';
}else{
    echo "Bukan bilangan prima";
}
?>