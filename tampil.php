<?php
    include './koneksi.php';
    echo "<a href= 'formulir.php'>Tambah data</a><br>";

    $sql = "SELECT* FROM buku";
    $result = $conn-> query($sql);
    $a= 1;

    while($baris = mysqli_fetch_array($result)){
        echo "<br>";
        echo "$a";
        echo "<br>";
        echo "Judul Buku: " . $baris[1] . "<br>";
        echo "Penulis: " . $baris[2] . "<br>";
        echo "ID Jenis: " . $baris[3] . "<br>";
        echo "Gambar Buku: " . $baris[4] . "<br>";
        echo "<a href= 'ubah_data.php?id_buku=$baris[0]'> Ubah &nbsp</a><br>";
        echo "<a href= 'hapus.php?id_buku=$baris[0]'> Hapus</a><br>";
        echo "<a href= 'carian.php?id_buku=$baris[0]'> Cari buku</a>";
        $a++;
    }
    $conn-> close();
?>