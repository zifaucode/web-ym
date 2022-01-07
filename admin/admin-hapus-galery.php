<?php
session_start();
include '../koneksi.php';
?>

<?php
if (isset($_GET['id'])) {
    $delete = mysqli_query($conn, "DELETE FROM galery WHERE id = '" . $_GET['id'] . "' ");
    echo "<script>window.location = './admin-galery.php?msg= Berhasil Menghapus Data'</script>";
}

?>

