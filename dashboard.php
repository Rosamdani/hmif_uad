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
                <li class="w-full"><a href="index.php" class="w-full py-2 flex px-5 space-x-3 items-center hover:bg-slate-500"><i class="fa-regular fa-newspaper"></i><p>Beranda</p></a></li>
                <li class="w-full"><a href="#" class="w-full py-2 flex px-5 space-x-3 items-center hover:bg-slate-500"><i class="fa-regular fa-newspaper"></i><p>Berita</p></a></li>
                <li class="w-full"><a href="#" class="w-full py-2 flex px-5 space-x-3 items-center hover:bg-slate-500"><i class="fa-regular fa-newspaper"></i><p>Bank Soal</p></a></li>
                <li class="w-full"><a href="#" class="w-full py-2 flex px-5 space-x-3 items-center hover:bg-slate-500"><i class="fa-regular fa-newspaper"></i><p>Alumni</p></a></li>
                <li class="w-full"><a href="#" class="w-full py-2 flex px-5 space-x-3 items-center hover:bg-slate-500"><i class="fa-regular fa-newspaper"></i><p>Informatic Store</p></a></li>
            </ul>
        </div>
        <div class="berita w-full">
            <div class="atas h-[40px] border-b-2 border-gray-300"></div>
            <div class="bawah h-full">
                <form method="POST" enctype="multipart/form-data" action="aksi_berita.php" class="w-[98%] bg-white h-[90%] mx-auto my-5 rounded-md border-2 border-gray-300 shadow-md text-slate-600">
                    <div class="w-full border-b-2 border-gray-300 h-[60px] flex px-10 items-center text-xl">
                        <p>Form penambahan berita</p>
                    </div>
                    <div class="w-full px-10 py-10 space-y-5">
                        <div class="form-input space-y-1">
                            <a href="daftar_berita.php" class="px-5 py-1 rounded bg-gray-400 text-white">Lihat Berita</a>
                        </div>
                        <div class="form-input space-y-1">
                            <p>Judul Berita :</p>
                            <input type="text" name="judul" class="w-full border border-gray-400 h-[30px] px-3 shadow-md rounded outline-slate-600" placeholder="Masukkan judul berita...">
                        </div>
                        <div class="form-input space-y-1">
                            <p>Tanggal Berita :</p>
                            <input type="date" name="tanggal" class="w-full border border-gray-400 h-[30px] px-3 shadow-md rounded outline-slate-600">
                        </div>
                        <div class="form-input space-y-1">
                            <p>Deskripsi :</p>
                            <textarea name="deskripsi" id="" class="w-full border border-gray-400 h-[100px] px-3 shadow-md rounded outline-slate-600"></textarea>
                        </div>
                        <div class="form-input space-y-1">
                            <p>Gambar :</p>
                            <input name="fileToUpload" id="fileToUpload" type="file" class="w-full border border-gray-400 h-[30px] shadow-md rounded outline-slate-600">
                        </div>
                        <div class="form-input space-y-1">
                            <input type="submit" name="submit-berita" class="px-5 py-1 bg-blue-500 hover:bg-blue-600 cursor-pointer text-white font-bold shadow-md rounded">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>