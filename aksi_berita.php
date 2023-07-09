<?php

include "koneksi.php";

if (isset($_POST['submit-berita'])) {
    $judul = $_POST['judul'];
    $deskripsi = $_POST['deskripsi'];
    $tanggal = $_POST['tanggal'];


    $targetDir = "assets/";
    $targetFile = $targetDir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Memeriksa apakah file adalah name
    if (isset($_POST["submit-berita"])) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if ($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }

    // Memeriksa apakah file sudah ada sebelumnya
    if (file_exists($targetFile)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }

    // Batasan ukuran file
    if ($_FILES["fileToUpload"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Memeriksa tipe file yang diizinkan
    $allowedTypes = array('jpg', 'jpeg', 'png', 'gif');
    if (!in_array($imageFileType, $allowedTypes)) {
        echo "Sorry, only JPG, JPEG, PNG, GIF files are allowed.";
        $uploadOk = 0;
    }

    // Memeriksa apakah $uploadOk bernilai 0 (terjadi kesalahan) atau 1 (berhasil)
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
            echo "The file " . basename($_FILES["fileToUpload"]["name"]) . " has been uploaded.";
            $gambar = "assets/" . basename($_FILES["fileToUpload"]["name"]);
            $sql = "INSERT INTO berita (judul, gambar, deskripsi, tanggal) VALUES ('$judul', '$gambar', '$deskripsi', '$tanggal')";
            $query = mysqli_query($koneksi, $sql);
            if ($query) {
                header("location:dashboard.php?pesan=1");
            } else {
                header("location:dashboard.php?pesan=2");
            }
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
} else if (isset($_POST['submit-edit'])) {
    $judul = $_POST['judul'];
    $deskripsi = $_POST['deskripsi'];
    $tanggal = $_POST['tanggal'];
    $id_berita = $_POST['id_berita'];

    $sql = "UPDATE berita SET judul = '$judul', deskripsi = '$deskripsi', tanggal = '$tanggal' WHERE id_berita = '$id_berita'";
    $query = mysqli_query($koneksi, $sql);
    if ($query) {
        header("location:daftar_berita.php?pesan=Berhasil mengedit berita");
    } else {
        header("location:daftar_berita.php?pesan=Gagal Mengedit Berita karena ".$koneksi->error);
    }
}else{
    echo '<div style="width: 100%; height: 100vh; display: flex; justify-content: center; align-items: center;">Halaman tidak ditemukan!</div>';
}