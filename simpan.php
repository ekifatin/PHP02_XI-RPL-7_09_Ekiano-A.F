<?php
    include './koneksi.php';

    $jb= $_POST['judul_buku'];
    $ps= $_POST['penulis'];
    $ij= $_POST['id_jenis'];
    $gb= $_POST['gambar_buku'];

    $sql= "INSERT INTO buku (judul_buku, penulis, id_jenis, gambar_buku) VALUES ('$jb','$ps','$ij','$gb')";
    if($conn->query($sql) === TRUE){
        echo "Simpan berhasil <br>";
        echo "<a href= 'formulir.php'>Kembali</a><br>";
    }
    else{
        echo "Error" .$sql . "<br>" . $conn->error;
    }

    $conn-> close();
?>