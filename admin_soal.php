<?php
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <script src="https://kit.fontawesome.com/85550cfb5f.js" crossorigin="anonymous"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,600;0,700;0,800;1,400&display=swap');

    * {
        font-family: 'poppins';
        margin: 0;
        padding: 0;
        bottom: 0;
        top: 0;
        left: 0;
        right: 0;
    }
    </style>
</head>

<body>
    <div class="w-full h-[100vh] flex bg-gray-200">
        <div class="w-64 border h-full bg-slate-700 shadow-md text-white">
            <div class="logo w-full h-[40px] border-b border-slate-50"></div>
            <ul class="w-full">
                <li class="w-full"><a href="index.php"
                        class="w-full py-2 flex px-5 space-x-3 items-center hover:bg-slate-500"><i
                            class="fa-regular fa-newspaper"></i>
                        <p>Beranda</p>
                    </a></li>
                <li class="w-full"><a href="dashboard.php"
                        class="w-full py-2 flex px-5 space-x-3 items-center hover:bg-slate-500"><i
                            class="fa-regular fa-newspaper"></i>
                        <p>Berita</p>
                    </a></li>
                <li class="w-full"><a href="#"
                        class="w-full py-2 flex px-5 space-x-3 items-center hover:bg-slate-500"><i
                            class="fa-regular fa-newspaper"></i>
                        <p>Bank Soal</p>
                    </a></li>
                <li class="w-full"><a href="#"
                        class="w-full py-2 flex px-5 space-x-3 items-center hover:bg-slate-500"><i
                            class="fa-regular fa-newspaper"></i>
                        <p>Alumni</p>
                    </a></li>
                <li class="w-full"><a href="#"
                        class="w-full py-2 flex px-5 space-x-3 items-center hover:bg-slate-500"><i
                            class="fa-regular fa-newspaper"></i>
                        <p>Informatic Store</p>
                    </a></li>
            </ul>
        </div>
        <div class="berita w-full">
            <div class="atas h-[40px] border-b-2 border-gray-300"></div>
            <div class="bawah h-full">
                <form method="POST" enctype="multipart/form-data" action="aksi_berita.php"
                    class="w-[98%] bg-white h-[90%] mx-auto my-5 rounded-md border-2 border-gray-300 shadow-md text-slate-600">
                    <div class="w-full border-b-2 border-gray-300 h-[60px] flex px-10 items-center text-xl">
                        <p>Daftar soal (Bank Soal)</p>
                    </div>
                    <div class="w-full px-10 py-10 space-y-5">
                        <div class="relative overflow-y-auto shadow-md sm:rounded-lg">
                            <table class="w-full text-sm text-left">
                                <thead class="text-xs  uppercase bg-gray-50 ">
                                    <tr>
                                        <th scope="col" class="px-6 py-3">
                                            No
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            MATKUL
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Tahun Ajaran
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Semester
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            File
                                        </th>
                                        <th scope="col" class="px-6 py-3 space-x-3">
                                            <span class="sr-only">Action</span>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!--  PHP Untuk memanggil data soal pada database  -->
                                    <?php
                                    
                                    $sql = 'SELECT * FROM soal';
                                    $index = 1;
                                    $query = mysqli_query($koneksi, $sql);
                                    if ($query->num_rows > 0) {
                                        while ($row = mysqli_fetch_array($query)) {

                                            ?>

                                    <tr class="bg-white border-b  hover:bg-gray-50 dark:hover:bg-gray-200">
                                        <th scope="row" class="px-6 py-4 font-medium  whitespace-nowrap">
                                            <?=$index++?>
                                        </th>
                                        <td class="px-6 py-4">
                                            <?=$row['matkul']?>
                                        </td>
                                        <td class="px-6 py-4 max-w-[500px]">
                                            <?=$row['tahun']?>
                                        </td>
                                        <td class="px-6 py-4">
                                            <?=$row['semester']?>
                                        </td>
                                        <td class="px-6 py-4">
                                            <a href="<?=$row['gambar']?>"
                                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Lihat
                                                soal</a>
                                        </td>
                                        <td class="px-6 py-4 text-right">
                                            <a href="#"
                                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                            <a href="hapus_soal.php?soal=<?=$row['id_soal']?>"
                                                class="font-medium text-red-600 dark:text-red-500 hover:underline">Hapus</a>

                                            <a href="verif_soal.php?berita=<?=$row['id_soal']?>&status=<?=$row['verifikasi']?>"
                                                class="font-medium text-green-600 dark:text-green-500 hover:underline"><?php if($row['verifikasi'] == 0){echo "Verifikasi"; }?></a>
                                        </td>
                                    </tr>

                                    <?php
                                        }
                                    }
                                    ?>

                                </tbody>
                            </table>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>