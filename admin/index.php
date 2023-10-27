<?php
session_start();
include_once 'koneksi.php';
include_once 'models/Jenis_produk.php';
include_once 'models/Kartu.php';
include_once 'models/Produk.php';
$sesi = $_SESSION['MEMBER'];
if(isset($sesi)){
include_once 'top.php';
include_once 'menu.php';


?>

<div>
   <div class="container-fluid px-4">
    <!-- <h1>Selamat Datang di Halaman Admin</h1> --
    //yang mempunyai extension .php -->
    <?php
    $url = $_GET['url'];
    if($url == 'dashboard'){
        include_once 'dashboard.php';
    }else if(!empty($url)){
        include_once ''.$url.'.php';
    }else{
        'dashboard.php';
    }
    ?>
</div>
</div>

<?php
include_once 'bottom.php';
}else{
    echo '<script> alert("anda tidak boleh masuk");history.back();</script>';
}
?>