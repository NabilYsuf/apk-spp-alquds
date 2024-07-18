<?php
include 'koneksi.php';

if (isset($_GET['idspp'])) {
    $idspp = $_GET['idspp'];

    // Query untuk menghapus data pembayaran SPP
    $query = "DELETE FROM tb_spp WHERE id_spp = $idspp";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        echo '<script language="javascript" type="text/javascript">
            alert("Data pembayaran SPP berhasil dihapus!");</script>';
        echo "<meta http-equiv='refresh' content='0; url=pembayaran_spp.php'>"; // Ganti 'pembayaran_spp.php' dengan halaman yang sesuai
    } else {
        echo '<script language="javascript" type="text/javascript">
            alert("Terjadi kesalahan saat menghapus data pembayaran SPP!");</script>';
        echo "<meta http-equiv='refresh' content='0; url=pembayaran_spp.php'>"; // Ganti 'pembayaran_spp.php' dengan halaman yang sesuai
    }
}
?>
