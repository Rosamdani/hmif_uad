<?php
include 'koneksi.php';

if(isset($_GET['berita'])){
    $id_berita = $_GET['berita'];
    $status = $_GET['status'];

    if($status == 0){
        $status = 1;
    }else{
        $status = 0;
    }

    $query = mysqli_query($koneksi, "UPDATE berita SET tampil = '$status' WHERE id_berita = '$id_berita'");
    if($query){
        header('Location:daftar_berita.php?pesan=berhasil');
    }
}else{
    exit;
}