<?php
// cara include file dompdf
require '../vendor/autoload.php';


// memanggil file koneksi
include '../koneksi.php';

// // perintah sql query
// $sql = mysqli_query($conn, "SELECT * FROM nilai_hafalan WHERE id_hafalan");
// $user = mysqli_fetch_array($sql);

// // membuat variable penampung
// $id_santri = $user['id_santri'];
// $surat_hafalan = $user['surat_hafalan'];

// $html =
//     '<html><body>' .
//     '<center>Data Pribadi</center><br>' .
//     'Nama : ' . $id_santri . '<br>' .
//     'Gender : ' . $surat_hafalan .
//     '</body></html>';

// $pdf = new dompdf();
// $pdf->load_html($html);

// // untuk mengconvert ke PDF
// $pdf->render();

// // menyimpan ke file pdf dan fungsi attachment agar bisa ditampilkan kedalam pdf apabila nilai nol(0)
// $pdf->stream('File.pdf', array("Attachemnt" => 0));

// reference the Dompdf namespace


// instantiate and use the dompdf class
// reference the Dompdf namespace
// use Dompdf\Dompdf;

// // instantiate and use the dompdf class
// $dompdf = new Dompdf();
// $html = file_get_contents("cetak.html");
// $dompdf->loadHtml($html);

// // (Optional) Setup the paper size and orientation
// $dompdf->setPaper('A4', 'landscape');

// // Render the HTML as PDF
// $dompdf->render();

// // Output the generated PDF to Browser
// $dompdf->stream();



use Dompdf\Dompdf;

$dompdf = new Dompdf();
$query = mysqli_query($conn, "SELECT * FROM nilai_hafalan INNER JOIN santri ON 
nilai_hafalan.id_santri = santri.id_santri");
$html = '<center><h3>DATA HAFALAN SANTRI <br>YAYASAN MUSHLIHUN</h3>
<p style="font-size: 12px;">Jl.Masjid Al-Irfan RT. 001 RW.001 PEMAGARSARI KEC.PARUNG KAB.BOGOR PROV JAWABARAT</p>
</center><hr/><br/>';
$html .= '<table border="1px" width="100%">

    <tr style="text-align: center;">
        <th  style="background-color:grey; color:white;">No</th>
        <th  style="background-color:grey; color:white;">Nama</th>
        <th  style="background-color:grey; color:white;">Surat Hafalan</th>
        <th  style="background-color:grey; color:white;">Keterangan</th>
        <th  style="background-color:grey; color:white;">Tanggal</th>
    </tr>
';
$no = 1;
while ($row = mysqli_fetch_array($query)) {
    $html .= "<tr>
 <td>" . $no . "</td>
 <td>" . $row['nama'] . "</td>
 <td>" . $row['surat_hafalan'] . "</td>
 <td>" . $row['keterangan'] . "</td>
 <td>" . $row['tanggal'] . "</td>
 </tr>";
    $no++;
}
$html .= "</html>";
$dompdf->loadHtml($html);
// Setting ukuran dan orientasi kertas
$dompdf->setPaper('A4', 'potrait');
// Rendering dari HTML Ke PDF
$dompdf->render();
// Melakukan output file Pdf
$dompdf->stream('laporan-hafalan-santri.pdf');
