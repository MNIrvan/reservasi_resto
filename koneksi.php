<?php
//Koneksi ke database
$server="localhost";
$usernames="root";
$password="";
$database="restoran";
$conn=mysqli_connect($server, $usernames, $password, $database);
//check error, jikalau error tutup koneksi dengan sql
if(mysqli_connect_errno()){
    echo 'Koneksi gagal, ada masalah pada : '.mysqli_connect_error();
    exit();
    mysqli_close($conn);
}
?> 