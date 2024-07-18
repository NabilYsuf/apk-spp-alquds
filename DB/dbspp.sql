-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Jul 2024 pada 00.59
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbspp`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_tagihan`
--

CREATE TABLE `detail_tagihan` (
  `id_detail` int(11) NOT NULL,
  `idsiswa` int(11) NOT NULL,
  `idtagihan` int(11) NOT NULL,
  `idtahun` int(11) NOT NULL,
  `status_tagihan` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `detail_tagihan`
--

INSERT INTO `detail_tagihan` (`id_detail`, `idsiswa`, `idtagihan`, `idtahun`, `status_tagihan`) VALUES
(1, 1, 14, 1, 'Lunas'),
(2, 1, 15, 1, 'Lunas'),
(3, 2, 14, 1, 'Lunas'),
(4, 1, 16, 1, 'Lunas'),
(5, 2, 15, 1, 'Lunas'),
(6, 1, 17, 1, 'Lunas'),
(9, 7, 25, 2, 'Lunas'),
(10, 7, 26, 2, 'Lunas'),
(11, 7, 27, 2, 'Lunas'),
(12, 2, 16, 1, 'Lunas'),
(13, 4, 26, 2, 'Lunas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_ba`
--

CREATE TABLE `tb_ba` (
  `id_ba` int(11) NOT NULL,
  `ba` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_ba`
--

INSERT INTO `tb_ba` (`id_ba`, `ba`) VALUES
(1, 'Januari'),
(2, 'Februari'),
(3, 'Maret'),
(4, 'April'),
(5, 'Mei'),
(6, 'Juni'),
(7, 'Juli'),
(8, 'Agustus'),
(9, 'September'),
(10, 'Oktober'),
(11, 'November'),
(12, 'Desember');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kelas`
--

CREATE TABLE `tb_kelas` (
  `id_kelas` int(11) NOT NULL,
  `nama_kelas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_kelas`
--

INSERT INTO `tb_kelas` (`id_kelas`, `nama_kelas`) VALUES
(1, 'I'),
(2, 'II'),
(3, 'III'),
(5, 'IV'),
(6, 'V'),
(8, 'VI');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `id_siswa` int(11) NOT NULL,
  `ta_id` int(11) NOT NULL,
  `ba_id` int(11) NOT NULL,
  `nama_siswa` varchar(50) NOT NULL,
  `nisn` varchar(30) NOT NULL,
  `kelas` int(11) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `nohp` varchar(15) NOT NULL,
  `email` text NOT NULL,
  `foto_siswa` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_siswa`
--

INSERT INTO `tb_siswa` (`id_siswa`, `ta_id`, `ba_id`, `nama_siswa`, `nisn`, `kelas`, `tanggal_lahir`, `alamat`, `nohp`, `email`, `foto_siswa`) VALUES
(1, 1, 0, 'Dodi Alfa', '13345', 7, '2016-05-11', 'Empat Negeri', '+6283877654098', 'dodi20@gmail.com', 'siswa/anak sd.webp'),
(2, 1, 0, 'Reza', '22334', 1, '2016-06-11', 'lima puluh', '+6282274568095', 'reza@gmail.com', 'siswa/d3.jpg'),
(3, 1, 0, 'SASA', '14567', 2, '2016-06-09', 'Empat Negeri', '+6282361676990', 'sasa@gmail.com', 'siswa/agent2.jpg'),
(4, 2, 0, 'Gilang', '13367', 3, '2016-07-12', 'Empat Negeri', '+6283877654098', 'gilang20@gmail.com', 'siswa/2.jpg'),
(5, 2, 0, 'Vivi', '24545', 2, '2016-06-15', 'Lima Puluh', '+6282245607980', 'vivi@gmail.com', 'siswa/2.png'),
(8, 1, 0, 'Nabil Maulana', '0064260633', 8, '2012-10-17', 'A. W . Syahranie', '+6282103802112', 'nabiltampan@gmail.com', 'siswa/anak sd.webp');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_spp`
--

CREATE TABLE `tb_spp` (
  `id_spp` int(11) NOT NULL,
  `siswa_id` int(11) NOT NULL,
  `taid` int(11) NOT NULL,
  `baid` int(11) NOT NULL,
  `tgl_bayar` date NOT NULL,
  `bulan_bayar` varchar(30) NOT NULL,
  `tahun_bayar` year(4) NOT NULL,
  `jumlah_bayar` int(11) NOT NULL,
  `metode_bayar` varchar(50) NOT NULL,
  `status_bayar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_spp`
--

INSERT INTO `tb_spp` (`id_spp`, `siswa_id`, `taid`, `baid`, `tgl_bayar`, `bulan_bayar`, `tahun_bayar`, `jumlah_bayar`, `metode_bayar`, `status_bayar`) VALUES
(25, 1, 1, 0, '2023-07-31', '2023-07', '2023', 20000, 'Tunai', 1),
(26, 1, 1, 0, '2023-08-31', '2023-08', '2023', 20000, 'Tunai', 1),
(27, 2, 1, 0, '2023-07-31', '2023-07', '2023', 20000, 'Tunai', 1),
(28, 1, 1, 0, '2024-07-15', '2023-09', '2023', 20000, '', 1),
(29, 2, 1, 0, '2024-07-02', '2023-08', '2023', 20000, 'Tunai', 1),
(30, 1, 1, 0, '2024-07-20', '2023-10', '2023', 20000, 'Kredit', 1),
(31, 6, 2, 0, '2024-01-24', '2024-01', '2024', 20000, 'Tunai', 1),
(32, 6, 2, 0, '2024-07-10', '2024-01', '2024', 20000, 'Tunai', 1),
(35, 7, 2, 0, '2024-02-24', '2024-02', '2024', 150000, 'Kredit', 1),
(36, 2, 1, 0, '2024-07-04', '2023-09', '2023', 150000, 'Tunai', 1),
(37, 4, 2, 0, '2024-02-09', '2024-01', '2024', 150000, 'Kredit', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_ta`
--

CREATE TABLE `tb_ta` (
  `id_ta` int(11) NOT NULL,
  `ta` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_ta`
--

INSERT INTO `tb_ta` (`id_ta`, `ta`) VALUES
(1, '2023/2024'),
(2, '2024/2025'),
(3, '2025/2026'),
(4, '2026/2027');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_tagihan`
--

CREATE TABLE `tb_tagihan` (
  `id_tagihan` int(11) NOT NULL,
  `idta` int(11) NOT NULL,
  `idba` int(11) NOT NULL,
  `bulan_tagihan` varchar(30) NOT NULL,
  `tahun_tagihan` year(4) NOT NULL,
  `jumlah_tagihan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_tagihan`
--

INSERT INTO `tb_tagihan` (`id_tagihan`, `idta`, `idba`, `bulan_tagihan`, `tahun_tagihan`, `jumlah_tagihan`) VALUES
(14, 1, 0, '2023-07', '2023', 150000),
(15, 1, 0, '2023-08', '2023', 150000),
(16, 1, 0, '2023-09', '2023', 150000),
(17, 1, 0, '2023-10', '2023', 150000),
(18, 1, 0, '2023-11', '2023', 150000),
(19, 1, 0, '2023-12', '2023', 150000),
(24, 1, 0, '2024-01', '2024', 200000),
(26, 2, 0, '2024-01', '2024', 150000),
(27, 1, 0, '2024-02', '2024', 150000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(80) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `peran` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `username`, `password`, `nama_lengkap`, `peran`) VALUES
(1, 'admin', '734026fcb88d3538969b04b00fbfbdd2', 'ADMIN', 'admin'),
(2, 'bu marni', '21232f297a57a5a743894a0e4a801fc3', 'Bu Marni', 'pemegang uang'),
(4, 'ysuf', '734026fcb88d3538969b04b00fbfbdd2', 'ysuf cerdas', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `detail_tagihan`
--
ALTER TABLE `detail_tagihan`
  ADD PRIMARY KEY (`id_detail`);

--
-- Indeks untuk tabel `tb_ba`
--
ALTER TABLE `tb_ba`
  ADD PRIMARY KEY (`id_ba`);

--
-- Indeks untuk tabel `tb_kelas`
--
ALTER TABLE `tb_kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indeks untuk tabel `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indeks untuk tabel `tb_spp`
--
ALTER TABLE `tb_spp`
  ADD PRIMARY KEY (`id_spp`);

--
-- Indeks untuk tabel `tb_ta`
--
ALTER TABLE `tb_ta`
  ADD PRIMARY KEY (`id_ta`);

--
-- Indeks untuk tabel `tb_tagihan`
--
ALTER TABLE `tb_tagihan`
  ADD PRIMARY KEY (`id_tagihan`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `detail_tagihan`
--
ALTER TABLE `detail_tagihan`
  MODIFY `id_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `tb_ba`
--
ALTER TABLE `tb_ba`
  MODIFY `id_ba` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tb_kelas`
--
ALTER TABLE `tb_kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tb_siswa`
--
ALTER TABLE `tb_siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tb_spp`
--
ALTER TABLE `tb_spp`
  MODIFY `id_spp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT untuk tabel `tb_ta`
--
ALTER TABLE `tb_ta`
  MODIFY `id_ta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_tagihan`
--
ALTER TABLE `tb_tagihan`
  MODIFY `id_tagihan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
