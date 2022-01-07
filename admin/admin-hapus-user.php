<?php
session_start();
include '../koneksi.php';
?>

<?php
if (isset($_GET['idortu'])) {
    $delete = mysqli_query($conn, "DELETE FROM user_akun WHERE id_ortu = '" . $_GET['idortu'] . "' ");
    echo "<script>window.location = './admin-akun.php?msg= Berhasil Menghapus Data'</script>";
}

?>

