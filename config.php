<?php
$servername = "localhost"; 
$username = "root";        
$password = "";            
$dbname = "daur_ulang";


$conn = mysqli_connect($servername, $username, $password, $dbname);


if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
