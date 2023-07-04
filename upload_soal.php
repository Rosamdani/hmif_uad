<?php

include "koneksi.php";

if(isset($_POST['submit'])){
    $tahun = $_POST['tahun'];
    $nama = $_POST['nama'];
    $no_hp = $_POST['no_hp'];
    $alamat = $_POST['alamat'];
    $email = $_POST['email'];
    $periode = $_POST['periode'];

    $sql = "INSERT INTO alumni (tahun, nama, no_hp, alamat, email, periode) VALUES('$tahun', '$nama','$no_hp', '$alamat', '$email', '$periode')";
    $query = mysqli_query($koneksi, $sql);
    if($query){
        $pesan = "Berhasil ditambahkan!";
    }else{
        $pesan = "Gagal ditambahkan!";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,600;0,700;0,800;1,400&display=swap');

        * {
            font-family: 'poppins';
        }
    </style>
</head>

<body class="bg-gray-200">
    <nav class="w-full h-28 shadow-lg fixed z-10 bg-white">
        <div class="flex justify-between h-full px-10 items-center text-xl">
            <ul class="flex space-x-5">
                <div class="logo"></div>
                <li class="font-bold"><a href="#">Home</a></li>
                <li><a href="#">Bank Soal</a></li>
                <li><a href="#">Alumni</a></li>
                <li><a href="#">Aspirasi</a></li>
                <li><a href="#">Informatic Store</a></li>
                <li><a href="#">Tentang Kami</a></li>
            </ul>
            <a href="">Login</a>
        </div>
    </nav>

    <section class="w-full py-36 h-[100vh] flex items-center">
        <div class="w-[85%] mx-auto max-h-fit py-10 flex flex-col bg-white items-center">
            <p>Upload Bank Soal</p>
            <?php if(isset($pesan)){
                ?>
                
                <p class="px-32 py-4 bg-yellow-400"><?=$pesan?></p>
                
                <?php
            } ?>
            <form action="" method="post" class="w-[60%] mt-10 space-y-4">
                <input required type="number" name="tahun" class="w-full border border-gray-600 px-3 py-2" placeholder="Tahun Ajaran">
                <input required type="text" name="nama" class="w-full border border-gray-600 px-3 py-2" placeholder="Matkul">
                <input required type="number" name="no_hp" class="w-full border border-gray-600 px-3 py-2" placeholder="Semester">
                <p>Masukkan file soal : </p>
                <input required type="file" name="periode" class="w-full border border-gray-600 px-3 py-2" placeholder="Periode Wisuda">
                <input type="submit" value="Upload" name="submit" class="float-right border px-3 py-2 bg-slate-400 hover:bg-slate-500 text-white font-bold cursor-pointer">
            </form>
        </div>
    </section>


</body>

</html>
