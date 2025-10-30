<?php
echo "<h3>Soal 3.</h3> Implementasi Array 2 Dimensi + Associative Array <br>
Perintah :
Tampilkan daftar 5 nama buah menggunakan perulangan for."
?>

<br>
<br>

<?php
$nilai= [
    ["nama"=>"Jaka", "tugas"=>80, "uts"=>75,"uas"=>85],
    ["nama"=>"Sinta", "tugas"=>90, "uts"=>88,"uas"=>92],
    ["nama"=>"Budi", "tugas"=>70, "uts"=>65,"uas"=>78]
];

foreach($nilai as $data) {
            echo "Nama: " . $data["nama"] . "<br>"; 
            echo "Nilai Tugas: " . $data["tugas"] . "<br>";echo "Nilai UTS: " . $data["uts"] . "<br>";echo "Nilai UAS: " . $data["uas"] . "<br>";
            echo "--------------------------" . "<br>";
        }
?>
