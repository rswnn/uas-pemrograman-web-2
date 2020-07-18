<?php
// $server   = "localhost";
// $username = "root";
// $password = "";
// $database = "covid";

// $db = mysqli_connect($server, $username, $password, $database);

// if (!$db) {
//     die('Koneksi Database Gagal : ' . mysqli_connect_error());
// }


//production config

$server   = "localhost";
$username = "id14365706_rswn";
$password = "rswn_12345678Poi";
$database = "id14365706_covid";

$db = mysqli_connect($server, $username, $password, $database);

if (!$db) {
    die('Koneksi Database Gagal : ' . mysqli_connect_error());
}
?>