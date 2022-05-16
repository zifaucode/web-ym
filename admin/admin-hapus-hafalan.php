<?php
session_start();
include '../koneksi.php';
?>

<?php
if (isset($_GET['id_hafalan'])) {
    $delete = mysqli_query($conn, "DELETE FROM nilai_hafalan WHERE id_hafalan = '" . $_GET['id_hafalan'] . "' ");
    echo "<script>window.location = './admin-nilai-hafalan.php?msg= Berhasil Menghapus Data'</script>";
}

?>

