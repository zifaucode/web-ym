<?php
//Jika download plugin mpdf tanpa composer (versi lama)
define('_MPDF_PATH','../mpdf/src/');
include(_MPDF_PATH . "Mpdf.php");
$mpdf=new mPDF('utf-8', 'A4', 11, 'Georgia');

//Jika download plugin mpdf dengan composer (versi baru)
//require_once __DIR__ . '../mpdf/vendor/autoload.php';
//$mpdf = new \Mpdf\Mpdf();

//Menggabungkan dengan file koneksi yang telah kita buat
include '../koneksi.php';

$nama_dokumen='hasil-ekspor';
ob_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv=\"Content-Type\" content=\"text/html; charset=Windows-1252\">
</head>
<body>
	<div>
		<h2>Cara Ekspor Data/Laporan ke PDF Dengan Mudah Menggunakan Mpdf pada PHP</h2>

		<div class="box-body">
        <table id="example" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Surat Hafalan</th>
                    <th>Keterangan</th>
                    <th>Tanggal</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>

                <?php
                $no = 1;
                $santri = mysqli_query($conn, "SELECT * FROM nilai_hafalan ORDER BY id_hafalan DESC");
                if (mysqli_num_rows($santri) > 0) {
                    while ($s = mysqli_fetch_array($santri)) {

                ?>


                        <tr>
                            <td width="40px"><?= $no++ ?></td>
                            <td><?= $s['id_santri'] ?></td>
                            <td><?= $s['surat_hafalan'] ?></td>
                            <td><?= $s['keterangan'] ?></td>
                            <td><?= $s['tanggal'] ?></td>
                            <td width="90px">
                                <center> <a href="./admin-edit-santri.php?id_santri=<?= $s['id_santri'] ?>"><button type="button" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i></button></a>&nbsp;

                                    <a href="./admin-edit-santri.php?id_santri=<?= $s['id_santri'] ?>"><button type="button" class="btn btn-danger btn-sm"><i class="fa fa-file-pdf-o"></i></button></a>
                                </center>

                            </td>
                        </tr>

                    <?php }
                } else { ?>

                    <tr>
                        <td>Data tidak ada</td>
                    </tr>
                <?php } ?>
            </tbody>

        </table>
    </div>


    </div>

</body>
</html>
<?php
$html = ob_get_contents();
ob_end_clean();

$mpdf->WriteHTML(utf8_encode($html));
$mpdf->Output("".$nama_dokumen.".pdf" ,'D');
$db1->close();
?>