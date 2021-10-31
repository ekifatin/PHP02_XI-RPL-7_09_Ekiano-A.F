<?php
    include './koneksi.php';

    $id= $_GET ['id_buku'];

    $sql= "DELETE FROM BUKU WHERE id_buku= '$id'";

    if($conn->query($sql) === TRUE){
        echo "data berhasil dihapus <br>";
        echo "<a href= 'tampil.php'>Kembali</a><br>";
    }
    else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>