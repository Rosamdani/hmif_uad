<?php

include 'koneksi.php';

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
                            <li class="font-bold"><a href="bank_soal.php">Lihat</a></li>
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

    <section class="w-full py-36 h-[100vh] overflow-y-auto flex items-center justify-center">
        <div class="w-[80%]">
            <?php
            $query = mysqli_query($koneksi, "SELECT * FROM soal WHERE verifikasi = 1");
            if ($query && $query->num_rows > 0) {
            ?>

                <form action="" class="mb-20 w-full flex justify-center">
                    <input type="text" name="cari" placeholder="Cari matkul" class="w-80 h-[40px] rounded border px-2 border-black">
                </form>

                <?php
                $kelompokkanData = array();
                while ($row = mysqli_fetch_array($query)) {
                    $tahunAjaran = $row['tahun'];
                    if (!array_key_exists($tahunAjaran, $kelompokkanData)) {
                        $kelompokkanData[$tahunAjaran] = array();
                    }
                    $kelompokkanData[$tahunAjaran][] = $row;
                }

                // Menampilkan data yang telah dikelompokkan
                foreach ($kelompokkanData as $tahunAjaran => $items) {
                ?>
                    <div class="w-full py-5 px-10 h-[300px] bg-white">
                        <p class="mb-10"><?= $tahunAjaran ?></p>
                        <div class="grid grid-cols-6 gap-5 w-[95%] mx-auto">
                            <?php
                            foreach ($items as $item) {
                                if (isset($_GET['cari'])) {
                                    if ($_GET['cari'] == $item['matkul']) {
                            ?>
                                        <a href="<?= $item['gambar'] ?>" class="w-20 h-20 rounded hover:shadow-md border flex items-center justify-center"><?= $item['matkul'] ?></a>
                                    <?php
                                    }
                                } else {
                                    ?>
                                    <a href="<?= $item['gambar'] ?>" class="w-20 h-20 rounded hover:shadow-md border flex items-center justify-center"><?= $item['matkul'] ?></a>
                            <?php

                                }
                            }
                            ?>
                        </div>
                    </div>
                <?php
                }
            } else {
                ?>
                <p class="text-2xl font-bold text-gray-500">Ups..Sepertinya belum ada soal disini</p>
            <?php
            }
            ?>
        </div>
    </section>


</body>

</html>