<?php
echo "<h3>Soal 1.</h3> Implementasi Array 1 Dimensi <br>
Perintah :
Tampilkan daftar 5 nama buah menggunakan perulangan for."
?>

<?php 
$buah= ["Apel","Jeruk","Mangga","Pisang","Anggur"]; 

echo "<h3>Daftar Buah:</h3>";

    for($i=0; $i<count($buah); $i++){ 
       echo ($i+1) . "." . " " . $buah[$i] . "<br>";
    } ?>

