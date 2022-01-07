<?php
session_start();
include '../koneksi.php';
?>

<?php
if (isset($_GET['id_info'])) {
    $delete = mysqli_query($conn, "DELETE FROM informasi WHERE id_info = '" . $_GET['id_info'] . "' ");
    echo "<script>window.location = './admin-informasi.php?msg= Berhasil Menghapus Data'</script>";
}

?>

