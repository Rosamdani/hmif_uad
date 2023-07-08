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
    <link rel="stylesheet" href="css.css">
</head>

<body class="bg-gray-200">
    <nav class="w-full h-28 shadow-lg fixed z-10 bg-white">
        <div class="flex justify-between h-full px-10 items-center text-xl">
        <div class="logo-container">
				<img src="assets/logo.jpeg" alt="Logo">
			</div>    
        
            <div class="navbar">
            <ul class="flex space-x-5">
                <li><a href="index.php">Home</a></li>
                <div class="dropdown">
                    <li><button class="dropbtn">Bank Soal</li>
                    <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-content">
                    <a href="bank_soal.php">Lihat</a></li>
                    <li class=""><a href="upload_soal.php">Upload</a></li>
                    </div>
                </div> 
                <div class="dropdown">
                        <li  class="font-bold"><button class="dropbtn">Alumni</li>
                        <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="dropdown-content">
                        <li  class="font-bold"><a href="alumni.php">Alumni</a></li>
                        <a href="demis.php">Demisioner</a>
                        </div>
                    </div> 
                <li><a href="#">Aspirasi</a></li>
                <div class="dropdown">
                        <li><button class="dropbtn">Informatics Store</li>
                        <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="dropdown-content">
                        <li><a href="produk.php">Produk</a></li>
                        <a href="promo.php">Promo</a>
                        </div>
                    </div> 
                <li><a href="#">Tentang Kami</a></li>
            </ul>              
         </div>

            <a href="">Login</a>
        </div>
    </nav>

    <section class="w-full py-36 h-[100vh] flex items-center">
        <div class="w-[85%] mx-auto max-h-fit py-10 flex flex-col bg-white items-center">
            <p>Pendataan Alumni</p>
            <?php if(isset($pesan)){
                ?>
                
                <p class="px-32 py-4 bg-yellow-400"><?=$pesan?></p>
                
                <?php
            } ?>
            <form action="" method="post" class="w-[60%] mt-10 space-y-4">
                <input required type="number" name="tahun" class="w-full border border-gray-600 px-3 py-2" placeholder="Tahun Lulus">
                <input required type="text" name="nama" class="w-full border border-gray-600 px-3 py-2" placeholder="Nama">
                <input required type="text" name="no_hp" class="w-full border border-gray-600 px-3 py-2" placeholder="No HP">
                <input required type="text" name="alamat" class="w-full border border-gray-600 px-3 py-2" placeholder="Alamat">
                <input required type="text" name="email" class="w-full border border-gray-600 px-3 py-2" placeholder="Email">
                <input required type="text" name="periode" class="w-full border border-gray-600 px-3 py-2" placeholder="Periode Wisuda">
                <input type="submit" value="SUBMIT" name="submit" class="float-right border px-3 py-2 bg-slate-400 hover:bg-slate-500 text-white font-bold cursor-pointer">
            </form>
        </div>
    </section>


</body>

</html>