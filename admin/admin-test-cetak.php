<?php

// include '../libs/fpdf/fpdf.php';


// class Index
// {
//     public function GetData()
//     {
//         $pdf = new FPDF();
//         $pdf->AddPage();
//         $pdf->SetFont('Arial', 'B', 14);
//         $pdf->Cell(40, 10, 'Hello World!');
//         $pdf->Output();
//     }
// }

// $index = new Index();

// $index->GetData();

//menyertakan file fpdf
include '../libs/fpdf/fpdf.php';

//membuat objek baru bernama pdf dari class FPDF
//dan melakukan setting kertas l : landscape, A5 : ukuran kertas
$pdf = new FPDF('l', 'mm', 'A5');
// membuat halaman baru
$pdf->AddPage();
// menyetel font yang digunakan, font yang digunakan adalah arial, bold dengan ukuran 16
$pdf->SetFont('Arial', 'B', 16);
// judul

$pdf->Cell(190, 7, 'LAPORAN HASIL HAFALAN SANTRI', 0, 1, 'C');
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(190, 7, 'YAYASAN MUSHLIHUN', 0, 1, 'C');

// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10, 7, '', 0, 1);

$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(20, 6, 'NO', 1, 0);
$pdf->Cell(65, 6, 'NAMA SANTRI', 1, 0);
$pdf->Cell(40, 6, 'SURAT HAFALAN', 1, 0);
$pdf->Cell(30, 6, 'KETERANGAN', 1, 0);
$pdf->Cell(35, 6, 'TANGGAL', 1, 1);

$pdf->SetFont('Arial', '', 10);

//koneksi ke database
//koneksi ke database
//koneksi ke database
$mysqli = new mysqli("localhost", "root", "", "ym_db");
$no = 1;
$tampil = mysqli_query($mysqli, "SELECT * FROM nilai_hafalan");
while ($hasil = mysqli_fetch_array($tampil)) {
    $pdf->Cell(20, 6, $no++, 1, 0);
    $pdf->Cell(65, 6, $hasil['id_santri'], 1, 0);
    $pdf->Cell(40, 6, $hasil['surat_hafalan'], 1, 0);
    $pdf->Cell(30, 6, $hasil['keterangan'], 1, 0);
    $pdf->Cell(35, 6, $hasil['tanggal'], 1, 1);
}

$pdf->Output();
