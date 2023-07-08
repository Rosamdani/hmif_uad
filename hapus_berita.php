<?php
include 'koneksi.php';

if(isset($_GET['berita'])){
    $id_berita = $_GET['berita'];
    $query = mysqli_query($koneksi, "DELETE FROM berita WHERE id_berita='$id_berita'");
    if($query){
        header('Location:daftar_berita.php?pesan=berhasil');
    }
}else{
    exit;
}