<?php

include "koneksi.php";

if(isset($_POST['submit'])){
    $tahun_ajaran = $_POST['tahun_ajaran'];
    $mata_kuliah = $_POST['mata_kuliah'];
    $semester = $_POST['semester'];
    
    $targetDir = "assets/soal/";
    $targetFile = $targetDir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));


    // Batasan ukuran file
    if ($_FILES["fileToUpload"]["size"] > 1000000) {
        $pesan_error = "Maaf, ukuran file anda terlalu besar";
        $uploadOk = 0;
    }

    // Memeriksa tipe file yang diizinkan
    $allowedTypes = array('pdf');
    if (!in_array($imageFileType, $allowedTypes)) {
        $pesan_error = "Maaf, hanya bisa mengirim file format pdf";
        $uploadOk = 0;
    }

    // Memeriksa apakah $uploadOk bernilai 0 (terjadi kesalahan) atau 1 (berhasil)
    if ($uploadOk == 1){
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
            $pesan_error = "Berhasil upload soal, tunggu selama 3-5 hari untuk di verifikasi.";
            $gambar = "assets/soal/".basename($_FILES["fileToUpload"]["name"]);
            $sql = "INSERT INTO soal (tahun, gambar, matkul, semester) VALUES ('$tahun_ajaran', '$gambar', '$mata_kuliah', '$semester')";
            $query = mysqli_query($koneksi, $sql);
            if ($query) {
                header("location:upload_soal.php?pesan=".$pesan_error);
            } else {
                header("location:upload_soal.php?pesan=Gagal Upload Ke Database");
            }
        }
    }else{
        header("location:upload_soal.php?pesan=".$pesan_error);
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
                    <li class="font-bold"><button class="dropbtn">Bank Soal</li>
                    <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-content">
                    <a href="bank_soal.php">Lihat</a></li>
                    <li class="font-bold"><a href="upload_soal.php">Upload</a></li>
                    </div>
                </div> 
                <div class="dropdown">
                        <li><button class="dropbtn">Alumni</li>
                        <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="dropdown-content">
                        <li><a href="alumni.php">Alumni</a></li>
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
            <p>Upload Bank Soal</p>
            <?php if(isset($_GET['pesan'])){
                ?>
                
                <p class="px-32 py-4 bg-yellow-400"><?=($_GET['pesan'])?></p>
                
                <?php
            } ?>
            <form action=""  method="post" class="w-[60%] mt-10 space-y-4" enctype="multipart/form-data">
                <input required type="text" name="tahun_ajaran" class="w-full border border-gray-600 px-3 py-2" placeholder="Tahun Ajaran">
                <input required type="text" name="mata_kuliah" class="w-full border border-gray-600 px-3 py-2" placeholder="Matkul">
                <input required type="number" name="semester" class="w-full border border-gray-600 px-3 py-2" placeholder="Semester">
                <p>Masukkan file soal : </p>
                <input required type="file" name="fileToUpload" id="fileToUpload" class="w-full border border-gray-600 px-3 py-2" placeholder="Periode Wisuda">
                <input type="submit" value="Upload" name="submit" class="float-right border px-3 py-2 bg-slate-400 hover:bg-slate-500 text-white font-bold cursor-pointer">
            </form>
        </div>
    </section>


</body>

</html>
