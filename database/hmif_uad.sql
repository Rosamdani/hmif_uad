-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2023 at 10:34 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hmif_uad`
--

-- --------------------------------------------------------

--
-- Table structure for table `alumni`
--

CREATE TABLE `alumni` (
  `tahun` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `periode` varchar(255) NOT NULL,
  `id_alumni` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `alumni`
--

INSERT INTO `alumni` (`tahun`, `nama`, `no_hp`, `alamat`, `email`, `periode`, `id_alumni`) VALUES
('2024', 'Rosyamdani', '0847548343', 'Jl. Maju mundur no 29 ', 'rosam@gmail.com', 'Gatau Kapan', 1),
('2024', 'Rosyamdani', '0847548343', 'Kerumut', 'rosamdai91@gmail.com', 'Insyaallah periode juli 2024', 2);

-- --------------------------------------------------------

--
-- Table structure for table `aspirasi`
--

CREATE TABLE `aspirasi` (
  `judul` varchar(255) NOT NULL,
  `hasil` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `aspirasi`
--

INSERT INTO `aspirasi` (`judul`, `hasil`) VALUES
('Lorem Ipsum', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Exercitationem a iste, numquam sint non autem, eos repudiandae asperiores accusamus tempore dolorum sunt itaque in aut illo eius? Dolor, assumenda dicta hic maxime enim nihil iusto porro exercitationem aliquam cumque fugit debitis dolorem quo repudiandae iure quam at deleniti. Laboriosam sunt reiciendis necessitatibus eveniet unde, optio nesciunt modi perferendis aliquam debitis iure, nulla, sit a inventore qui quidem? Dignissimos tempora repellendus adipisci accusamus quasi consequuntur quos quibusdam a omnis, vero autem vitae, eius hic natus minima rerum sit voluptate repudiandae consectetur aliquid nulla ab! Exercitationem vel, eveniet nostrum nulla aliquam perferendis voluptates, molestias, quos quae corrupti odio id facilis eius nesciunt quasi. Corrupti magni ex libero quidem iste suscipit tenetur sequi excepturi reiciendis dolor dolorem voluptate sed expedita nemo dicta perspiciatis quae quod praesentium, quos alias! Quod sapiente id molestias reprehenderit recusandae. Quos obcaecati beatae unde officia minima eligendi at quia!'),
('Facilis eius', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Exercitationem a iste, numquam sint non autem, eos repudiandae asperiores accusamus tempore dolorum sunt itaque in aut illo eius? Dolor, assumenda dicta hic maxime enim nihil iusto porro exercitationem aliquam cumque fugit debitis dolorem quo repudiandae iure quam at deleniti. Laboriosam sunt reiciendis necessitatibus eveniet unde, optio nesciunt modi perferendis aliquam debitis iure, nulla, sit a inventore qui quidem? Dignissimos tempora repellendus adipisci accusamus quasi consequuntur quos quibusdam a omnis, vero autem vitae, eius hic natus minima rerum sit voluptate repudiandae consectetur aliquid nulla ab! Exercitationem vel, eveniet nostrum nulla aliquam perferendis voluptates, molestias, quos quae corrupti odio id facilis eius nesciunt quasi. Corrupti magni ex libero quidem iste suscipit tenetur sequi excepturi reiciendis dolor dolorem voluptate sed expedita nemo dicta perspiciatis quae quod praesentium, quos alias! Quod Lorem ipsum, dolor sit amet consectetur adipisicing elit. Exercitationem a iste, numquam sint non autem, eos repudiandae asperiores accusamus tempore dolorum sunt itaque in aut illo eius? Dolor, assumenda dicta hic maxime enim nihil iusto porro exercitationem aliquam cumque fugit debitis dolorem quo repudiandae iure quam at deleniti. Laboriosam sunt reiciendis necessitatibus eveniet unde, optio nesciunt modi perferendis aliquam debitis iure, nulla, sit a inventore qui quidem? Dignissimos tempora repellendus adipisci accusamus quasi consequuntur quos quibusdam a omnis, vero autem vitae, eius hic natus minima rerum sit voluptate repudiandae consectetur aliquid nulla ab! Exercitationem vel, eveniet nostrum nulla aliquam perferendis voluptates, molestias, quos quae corrupti odio id facilis eius nesciunt quasi. Corrupti magni ex libero quidem iste suscipit tenetur sequi excepturi reiciendis dolor dolorem voluptate sed expedita nemo dicta perspiciatis quae quod praesentium, quos alias! Quod sapiente id molestias reprehenderit recusandae. Quos obcaecati beatae unde officia minima eligendi at quia! sapiente id molestias reprehenderit recusandae. Quos obcaecati beatae unde officia minima eligendi at quia!.');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `tanggal` date NOT NULL,
  `tampil` int(11) NOT NULL,
  `tgl_buat` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `judul`, `gambar`, `deskripsi`, `tanggal`, `tampil`, `tgl_buat`) VALUES
(1, 'Deklarasi calon ketua angkatan 2022', 'assets/IMG_3904-1024x683.png', 'kegiatan ini dilakukan setiap tahunnya untuk mencari Seorang ketua yg dimana dia siap untuk menjadi tameng bagi Mahasiswa FTI dan siap untuk mengatur serta menjaga kesejahteraan dari Mahasiswa FTI UAD lewat prnjabaran Visi dan Misi yang dimilikinya, yang dihadiri dan dipilih langsung oleh KBM 2023 dan beberapa Kating yg dipantau oleh Kahim dan Wakahim HMIF UAD 2022. Kegiatan ini kami lakukan pada 19 Maret 2023\r\n\r\nCATU 1 (Calon ketua pertama) atas nama Sholahuddin Jauhari\r\n\r\nCATU 2 (Calon Ketua kedua) atas nama Farras Fernanda\r\n\r\nCATU 3 (Calon ketua ketiga) atas nama Tutus Ilyas. ', '2023-07-12', 0, '2023-07-08 18:19:03');

-- --------------------------------------------------------

--
-- Table structure for table `demis`
--

CREATE TABLE `demis` (
  `id_demis` int(11) NOT NULL,
  `periode` varchar(255) NOT NULL,
  `kabinet` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `soal`
--

CREATE TABLE `soal` (
  `id_soal` int(11) NOT NULL,
  `tahun` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `matkul` varchar(255) NOT NULL,
  `semester` int(11) NOT NULL,
  `verifikasi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `soal`
--

INSERT INTO `soal` (`id_soal`, `tahun`, `gambar`, `matkul`, `semester`, `verifikasi`) VALUES
(1, '2022/2023', 'assets/soal/2000018114_Rosyamdani_UIUX.pdf', 'PWEB', 2, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alumni`
--
ALTER TABLE `alumni`
  ADD PRIMARY KEY (`id_alumni`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `demis`
--
ALTER TABLE `demis`
  ADD PRIMARY KEY (`id_demis`);

--
-- Indexes for table `soal`
--
ALTER TABLE `soal`
  ADD PRIMARY KEY (`id_soal`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alumni`
--
ALTER TABLE `alumni`
  MODIFY `id_alumni` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `demis`
--
ALTER TABLE `demis`
  MODIFY `id_demis` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `soal`
--
ALTER TABLE `soal`
  MODIFY `id_soal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
