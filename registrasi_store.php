<?php
include_once('koneksi.php');

//tangkap data dari url

$id = $_GET['id'];



//queryinsert
$query = "DELETE FROM registrasi WHERE id='$id'";


//eksekusi query
if ($dbh->query($query)){
    header('location: registrasi.php');
} else {
    echo "Gagal menyimpan database";
}