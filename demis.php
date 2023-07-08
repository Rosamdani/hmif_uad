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
                    <li class="font-bold"><a href="upload_soal.php">Upload</a></li>
                    </div>
                </div> 
                <div class="dropdown">
                        <li  class="font-bold"><button class="dropbtn">Alumni</li>
                        <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="dropdown-content">
                        <li><a href="alumni.php">Alumni</a></li>
                        <li  class="font-bold"><a href="demis.php">Demisioner</a></li>
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

    <section class="w-full py-36 flex items-center">
        <div class="w-[85%] mx-auto max-h-fit py-10 flex flex-col bg-white items-center">
            <p>Demisioner HMIF</p>
            <div class="space-y-10 mx-auto w-[80%] mt-32">
                <?php 
                
                $sql = "SELECT * FROM demis";
                $query = mysqli_query($koneksi, $sql);
                if($query){
                    if($query->num_rows > 0){

                        while($row = mysqli_fetch_array($query)){
                            
                            ?>
                            
                            <div class="card-demis w-full border shadow-md hover:shadow-lg">
                                <p class="w-full py-4 px-2 bg-gray-200"><?=$row['periode']?></p>
                                <div class="relative h-[500px]">
                                    <img src="<?=$row['gambar']?>" class="w-full h-full bg-cover" alt="belum">
                                    <button class="absolute right-5 bottom-5 py-2 px-3 bg-gray-400">
                                        Selengkapnya
                                    </button>
                                </div>
                            </div>

                            <?php

                        }

                    }else{
                        echo '<p class="px-32 py-4 bg-yellow-400">Belum ada data!</p>';
                    }
                }else{
                    echo '<p class="px-32 py-4 bg-yellow-400">Gagal memuat data!</p>';
                }

                ?>                
            </div>
        </div>
    </section>


</body>

</html>