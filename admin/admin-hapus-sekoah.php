<?php
session_start();
include '../koneksi.php';
?>

<?php
if (isset($_GET['id_sekolah'])) {
    $delete = mysqli_query($conn, "DELETE FROM sekolah WHERE id_sekolah = '" . $_GET['id_sekolah'] . "' ");
    echo "<script>window.location = './admin-sekolah.php?msg= Berhasil Menghapus Data'</script>";
}

?>

