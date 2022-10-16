<?php

require_once("dompdf/dompdf_config.inc.php");

function tgl_indo($tanggal){
  $bulan = array (
    1 =>   'Januari',
    'Februari',
    'Maret',
    'April',
    'Mei',
    'Juni',
    'Juli',
    'Agustus',
    'September',
    'Oktober',
    'November',
    'Desember'
  );
  $pecahkan = explode('-', $tanggal);
  
  // variabel pecahkan 0 = tanggal
  // variabel pecahkan 1 = bulan
  // variabel pecahkan 2 = tahun
 
  return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
}

function rupiah($angka){
  $hasil_rupiah = "Rp " . number_format($angka,2,',','.');
  return $hasil_rupiah;
}


/////deklarasi variable
                                
// $kondisi = '<center><h3>Pembagian Harta Warisan</h3></center><hr>';
$html = '';
$str = '';
                               
$html .= ' <html>

<head>
<style>
@page { margin: 2cm 2cm 2cm 3cm; }
.style1{
  font-size: 21px;
  font-family:Arial;
}
</style>
</head>
<body>
';

                                

                                $str .= "<center><h3>Pembagian Harta Warisan</h3></center><hr>";
          
                                $html .= $str;
$html .= '
</body>
        ';

   
$html .= '</html>';
$dompdf = new Dompdf();


$dompdf->load_Html($html);
// // Setting ukuran dan orientasi kertas
$dompdf->set_Paper('A4', 'potrait');
// // Rendering dari HTML Ke PDF
$dompdf->render();
// // Melakukan output file Pdf
$dompdf->stream('Sk Penelitian.pdf', array("Attachment"=>0));

?>