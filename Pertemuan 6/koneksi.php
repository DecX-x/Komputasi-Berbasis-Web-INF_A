<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "websenin";

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try{
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    echo "Koneksi Berhasil";
}
catch(mysqli_sql_exception $error){
    echo "Koneksi Gagal";
}
?>x