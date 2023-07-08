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
                <li><a href="index.php">Home</a></li>
                <div class="dropdown">
                    <li><button class="dropbtn">Bank Soal</li>
                    <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-content">
                    <a href="bank_soal.php">Lihat</a></li>
                    <li><a href="upload_soal.php">Upload</a></li>
                    </div>
                </div> 
                <div class="dropdown">
                        <li><button class="dropbtn">Alumni</li>
                        <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="dropdown-content">
                        <li><a href="alumni.php">Alumni</a></li>
                        <li><a href="demis.php">Demisioner</a></li>
                        </div>
                    </div> 
                <li><a href="#">Aspirasi</a></li>
                <div class="dropdown">
                        <li class="font-bold"><button class="dropbtn">Informatics Store</li>
                        <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="dropdown-content">
                        <li><a href="produk.php">Produk</a></li>
                        <li class="font-bold"><a href="promo.php">Promo</a></li>
                        </div>
                    </div> 
                <li><a href="#">Tentang Kami</a></li>
            </ul>              
         </div>
            <a href="">Login</a>
        </div>
    </nav>

    
	<section class="w-full py-36 max-h-fit">
    <div class="container mx-auto mt-10">
        <h1 class="text-3xl font-bold mb-6">Promo: 50% Off on All Products!</h1>
        <div class="grid grid-cols-3 gap-8">
            <div class="bg-white p-6 rounded-lg shadow-md">
                <div class="flex justify-between items-center mb-4">
                    <h2 class="text-gray-900 text-lg font-bold">Baju</h2>
                    <button onclick="togglePopup('popup1')" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded">
                        Ketentuan
                    </button>
                </div>
                <img src="assets/baju.jpg" alt="Produk 1" class="mb-4">
                <p class="text-gray-700 mt-2">Harga: <span class="line-through">190.000</span> 95.000</p>
                <button class="mt-4 bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded">
                    Detail
                </button>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md">
                <div class="flex justify-between items-center mb-4">
                    <h2 class="text-gray-900 text-lg font-bold">Produk 2</h2>
                    <button onclick="togglePopup('popup2')" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded">
                        Ketentuan
                    </button>
                </div>
                <img src="assets/baju.jpg" alt="Produk 2" class="mb-4">
                <p class="text-gray-700 mt-2">Harga: <span class="line-through">150.000</span> 75.000</p>
                <button class="mt-4 bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded">
                    Detail
                </button>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md">
                <div class="flex justify-between items-center mb-4">
                    <h2 class="text-gray-900 text-lg font-bold">Produk 3</h2>
                    <button onclick="togglePopup('popup3')" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded">
                        Ketentuan
                    </button>
                </div>
                <img src="assets/baju.jpg" alt="Produk 3" class="mb-4">
                <p class="text-gray-700 mt-2">Harga: <span class="line-through">200.000</span> 100.000</p>
                <button class="mt-4 bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded">
                    Detail
                </button>
            </div>
            <!-- Tambahkan produk lainnya di sini -->
        </div>
    </div>

    <!-- Popup Box -->
    <div id="popup1" class="popup-overlay">
        <div class="popup-content">
            <h2>Ketentuan Baju</h2>
            <p>Untuk Ketentuan Pemesanan Produk Promo <br>
			
			1. Hubungi No Berikut <br>
			2. <br>
			3 <br>
			4 <br>
			5 <br>
			
			Terima Kasih sudah berminat untuk melakukan pemesanan
			</p>
            <button onclick="togglePopup('popup1')" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded mt-4">
                Close
            </button>
        </div>
    </div>

    <div id="popup2" class="popup-overlay">
        <div class="popup-content">
            <h2>Ketentuan Produk 2</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed malesuada convallis neque eget ultrices. Donec fringilla rutrum risus, id aliquet nunc iaculis ut. Sed finibus semper sagittis.</p>
            <button onclick="togglePopup('popup2')" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded mt-4">
                Close
            </button>
        </div>
    </div>

    <div id="popup3" class="popup-overlay">
        <div class="popup-content">
            <h2>Ketentuan Produk 3</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed malesuada convallis neque eget ultrices. Donec fringilla rutrum risus, id aliquet nunc iaculis ut. Sed finibus semper sagittis.</p>
            <button onclick="togglePopup('popup3')" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded mt-4">
                Close
            </button>
        </div>
    </div>

    <script>
        function togglePopup(popupId) {
            var popup = document.getElementById(popupId);
            popup.classList.toggle("active");
        }
    </script>
</body>

</html>
