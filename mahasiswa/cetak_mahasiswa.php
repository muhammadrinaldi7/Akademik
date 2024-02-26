<?php
    include '../fpdf/fpdf.php';
    include '../setting/koneksi.php';
    $pdf = new FPDF('P', 'cm', 'A4');
    $pdf->AddPage();
    $pdf->SetTitle('Laporan Data Mahasiswa FTI');
    $pdf->SetFont('Arial', 'B' , 14);
    $pdf->Cell(19, 1, 'UNIVERSITAS ISLAM KALIMANTAN MAB', 0, 1, 'C');
    $pdf->SetFont('Arial', '', 11);
    $pdf->Cell(19, 1, 'Jl. Adhyaksa Kayu Tangi No.02 Banjarmasin', 0, 1, 'C');
    $pdf->SetLineWidth(0.1);
    $pdf->Line(1, 3, 20, 3);
    $pdf->Ln();
    $pdf->Cell(19, 1, 'Laporan Data Mahasiswa FTI 2020', 0, 1, 'C');
    $pdf->Ln();
    $pdf->Image('../img/logo.png',1,1,1.8,1.8);
    $pdf->SetLineWidth(0.05);
    $pdf->SetFont('Arial','B',11);
    $pdf->SetFillColor(40,120,170);
    $pdf->Cell(0.5,1,'',0,0,'');
    $pdf->Cell(4,1,'NPM',1,0,'C',true);
    $pdf->Cell(5,1,'Nama Mahasiswa',1,0,'C',true);
    $pdf->Cell(5,1,'Tempat Lahir',1,0,'C',true);
    $pdf->Cell(4,1,'Tanggal Lahir',1,1,'C',true);
    $pdf->SetFont('Arial','',11);
    $pdf->SetFillColor(40, 200, 170);
    $q  = mysqli_query($koneksi, "Select * from mahasiswa");
    while($row = mysqli_fetch_array($q)){
        $pdf->Cell(0.5,1,'',0,0,'');
        $pdf->Cell(4, 0.7, $row[0], 1, 0, 'C', true);
        $pdf->Cell(5, 0.7, $row[1], 1, 0, 'C', true);
        $pdf->Cell(5, 0.7, $row[2], 1, 0, 'C', true);
        $pdf->Cell(4, 0.7, date("d M Y", strtotime($row[3])), 1, 1, 'C', true);
    }
    $pdf->Ln(2);
    $pdf->Cell(17.5, 0.5, 'Banjarmasin, '.date("d M Y"), 0, 1, 'R');
    $pdf->Cell(16.5, 0.5, 'Mengetahui', 0, 1, 'R');
    $pdf->Cell(16.4, 0.5, 'Dekan FTI', 0, 1, 'R');
    $pdf->Ln(2);
    $pdf->SetFont('Arial', 'BU', 11);
    $pdf->Cell(19, 0.5, 'Dr. Hj. Silvia Ratna, S.Kom, M.kom', 0, 1, 'R');
    $pdf->SetFont('Arial', '', 11);
    $pdf->Cell(18, 0.5, 'NIP. 19212131 299912 2000', 0, 1, 'R');
    $pdf->Output();
?>