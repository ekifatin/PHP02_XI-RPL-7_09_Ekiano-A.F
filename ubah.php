<?php
    include './koneksi.php';
    $id = $_POST['id_buku'];
    $jb= $_POST['judul_buku'];
    $ps= $_POST['penulis'];
    $ij= $_POST['id_jenis'];
    $gb= $_POST['gambar_buku'];

    $sql = "UPDATE buku SET judul_buku= '$jb', penulis= '$ps', id_jenis= '$ij', gambar_buku= '$gb' WHERE id_buku= '$id'";
    if($conn-> query($sql) === TRUE){
        echo "ubah data berhasil <br>";
        echo "<a href='tampil.php'>Kembali</a><br>";
    }
    else {
        echo "Error:" . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>