<?php
echo "<h3>Soal 2.</h3> Implementasi Array 2 Dimensi <br>
Perintah :
Tampilkan daftar 5 nama buah menggunakan perulangan for."
?>

<table border="1" cellspacing="0" cellpadding="5">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>NIM</th>
        <th>Jurusan</th>
    </tr>
    
    <?php 
    echo "<h3>Data Mahasiswa:</h3>";

    $mahasiswa= [
        ["Jaka", "22001", "Informatika"],
        ["Sinta", "22002", "Sistem Informasi"],
        ["Budi", "2203", "Teknik Komputer"]
    ];
    
    $no= 1;
    foreach ($mahasiswa as $mhs) {
        echo "<tr>";
            echo "<td>" . $no++ . "</td>";
            echo "<td>" . $mhs[0] . "</td>"; 
            echo "<td>" . $mhs[1] . "</td>"; 
            echo "<td>" . $mhs[2] . "</td>"; 
        echo "</tr>";
        }
    ?>
</table>