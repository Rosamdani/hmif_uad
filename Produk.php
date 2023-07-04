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
    <div class="container mx-auto mt-10">
        <div class="grid grid-cols-3 gap-8">
            <div class="bg-white p-6 rounded-lg shadow-md">
                <img src="assets/baju.jpg" alt="Produk 1" class="mb-4">
                <h2 class="text-gray-900 text-lg font-bold">Baju</h2>
                <p class="text-gray-700 mt-2">Harga: 190.000</p>
                <button class="mt-4 bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded">
                    Detail
                </button>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md">
                <img src="assets/baju.jpg" alt="Produk 2" class="mb-4">
                <h2 class="text-gray-900 text-lg font-bold">Produk 2</h2>
                <p class="text-gray-700 mt-2">Harga: 150.000</p>
                <button class="mt-4 bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded">
                    Detail
                </button>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md">
                <img src="assets/baju.jpg" alt="Produk 3" class="mb-4">
                <h2 class="text-gray-900 text-lg font-bold">Produk 3</h2>
                <p class="text-gray-700 mt-2">Harga: 200.000</p>
                <button class="mt-4 bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded">
                    Detail
                </button>
            </div>
            <!-- Tambahkan produk lainnya di sini -->
        </div>
    </div>
	</section>

</body>

</html>
