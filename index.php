<?php

include "koneksi.php";

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
                <li class="font-bold"><a href="index.php">Home</a></li>
                <div class="dropdown">
                    <li><button class="dropbtn">Bank Soal</li>
                    <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-content">
                    <a href="bank_soal.php">Lihat</a>
                    <a href="upload_soal.php">Upload</a>
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

    <section class="w-full py-36 max-h-fit">
        <div class="w-[90%] h-20 border mx-auto grid grid-cols-2 gap-5">
            <!--  PHP Untuk memanggil data news pada database  -->
            <?php

            $sql = "SELECT * FROM berita WHERE tampil = 0";
            $index = 0;
            $query = mysqli_query($koneksi, $sql);
            if ($query->num_rows > 0) {
                while ($row = mysqli_fetch_array($query)) {
                    if ($index == 0) {
                    ?>

                        <form class="col-span-2 bg-white relative h-[400px]">
                            <input type="hidden" value="<?= $row['id_berita'] ?>" name="id">
                            <img src="<?= $row['gambar'] ?>" class="w-full h-full bg-cover" alt="News">
                            <div class="absolute top-0 left-0 text-white max-w-fit px-10 bg-gradient-to-br from-black to-transparent">
                                <p class="text-2xl max-w-[90%] py-2"><?= $row['judul'] ?></p>
                            </div>
                            <div class="absolute max-w-fit left-10 bottom-7 flex space-x-5">
                                <button name="komen" class="px-3 py-2 bg-gray-300">Komen</button>
                                <button name="detail" class="px-3 py-2 bg-gray-300">Selengkapnya</button>
                            </div>

                        </form>

                    <?php
                    } else {
                    ?>

                        <form class="bg-white relative h-[400px]">
                            <input type="hidden" value="<?= $row['id_berita'] ?>" name="id">
                            <img src="<?= $row['gambar'] ?>" class="w-full h-full bg-cover" alt="News">
                            <div class="absolute top-0 left-0 text-white max-w-fit px-10 bg-gradient-to-br from-black to-transparent">
                                <p class="text-2xl max-w-[90%] py-2"><?= $row['judul'] ?></p>
                            </div>
                            <div class="absolute max-w-fit left-10 bottom-7 flex space-x-5">
                                <button name="komen" type="submit" class="px-3 py-2 bg-gray-300">Komen</button>
                                <button name="detail" type="submit" class="px-3 py-2 bg-gray-300">Selengkapnya</button>
                            </div>

                        </form>

                    <?php
                    }
                    $index++;
                }
            }

            ?>

        </div>
    </section>


</body>

</html>
