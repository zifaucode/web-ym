<?php
session_start();
include '../koneksi.php';
?>

<?php
if (isset($_GET['idsantri'])) {
    $delete = mysqli_query($conn, "DELETE FROM santri WHERE id_santri = '" . $_GET['idsantri'] . "' ");
    echo "<script>window.location = './admin-santri.php?msg= Berhasil Menghapus Data'</script>";
}

?>

