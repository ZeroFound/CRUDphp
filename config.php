<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "mahasiswa";

// membuat koneksi
$koneksi = mysqli_connect("$server", "$username", "$password", "$database");

if(!$koneksi){
    die("<script>alert('Gagal Tersambung dengan database'</script>");
}

?>