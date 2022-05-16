<?php
session_start();
include '../koneksi.php';
?>

<?php
if (isset($_GET['id'])) {
    $delete = mysqli_query($conn, "DELETE FROM nilai_raport WHERE id = '" . $_GET['id'] . "' ");
    echo "<script>window.location = './admin-nilai-raport.php?msg= Berhasil Menghapus Data'</script>";
}

?>

