<?php
// code with love by Nuzul
$format_array = array(20,10,100,30,15,5);
sort($format_array);
$jumlaharray = count($format_array);

// menampilkan dengan metode sort //
for($x = 0; $x < $jumlaharray; $x++) {
    echo "$x => ".$format_array[$x];
    echo "<br>";
}

echo "====================================</br>";

// menampilkan dengan metode sort lalu ditambahkan nilai 120
$format_arrays = array(20,10,100,30,15,5);
sort($format_arrays);
array_push($format_arrays,120);
$jumlaharrays = count($format_arrays);

for($x = 0; $x < $jumlaharrays; $x++) {
    echo "$x => ".$format_arrays[$x];
    echo "<br>";
}

echo "====================================</br>";

// menampilkan dengan metode sort lalu menghapus salah satu value
$format_arrays = array(20,10,100,30,15,5);
sort($format_arrays);
array_push($format_arrays,120);
$jumlaharrays = count($format_arrays);

for($x = 0; $x < $jumlaharrays; $x++) {
    if($format_arrays[$x] == 10) {
        continue;
    }
    echo "$x => ".$format_arrays[$x];
    echo "<br>";
}
?>