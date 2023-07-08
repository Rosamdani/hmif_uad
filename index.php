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
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,600;0,700;0,800;1,400&display=swap');

        * {
            font-family: 'poppins';
        }
	
    .logo-container {
      width: 80px; /* Ukuran lebar container */
      height: 80px; /* Ukuran tinggi container */
    }
    
    .logo-container img {
      width: 100%; /* Ukuran lebar logo sesuai dengan container */
      height: auto; /* Tinggi logo akan disesuaikan secara proporsional */
    }
    </style>
</head>

<body class="bg-gray-200">
    <nav class="w-full h-28 shadow-lg fixed z-10 bg-white">
        <div class="flex justify-between h-full px-10 items-center text-xl">
			<div class="logo-container">
							<img src="assets/logo.jpeg" alt="Logo">
				</div>
			<ul class="flex space-x-5">
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

    <section class="w-full py-36 max-h-fit">
        <div class="w-[90%] h-20 border mx-auto grid grid-cols-2 gap-5">
            <!--  PHP Untuk memanggil data news pada database  -->
            <?php

            $sql = "SELECT * FROM berita";
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
