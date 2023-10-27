<?php
$dsn = 'mysql:dbname=dbpos2;host=localhost';
$user = 'root';
$password = '';

try{
    $dbh = New PDO($dsn, $user, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// echo "Sukses Koneksi ".$user;
} catch (PDOException $e){
    echo 'Koneksi Gagal ' .$e->getMessage();
}

?>