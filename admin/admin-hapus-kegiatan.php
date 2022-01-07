<?php
session_start();
include '../koneksi.php';
?>

<?php
if (isset($_GET['id_kegiatan'])) {
    $delete = mysqli_query($conn, "DELETE FROM kegiatan_santri WHERE id_kegiatan = '" . $_GET['id_kegiatan'] . "' ");
    echo "<script>window.location = './admin-kegiatan-santri.php?msg= Berhasil Menghapus Data'</script>";
}

?>

