<?php
// code with love by Nuzul
$format_tanggal = "2020-11-23";
$umurmu = "24-12-1999";
$diparsing = date_diff(date_create($format_tanggal), date_create($umurmu));
echo "Direverse lalu diubah format tahun menjadi 2 digit: ".date('m-y-d', strtotime($format_tanggal))."</br>";
echo "Direverse lalu ditambah jumlah 6 bulan: ".date('m-y-d', strtotime("+6 months",strtotime($format_tanggal)))."</br>";
echo 'Direverse lalu dihitung dengan tanggal lahirmu: '.$diparsing->format('%y');
?>