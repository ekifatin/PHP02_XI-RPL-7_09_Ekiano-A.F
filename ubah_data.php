<?php
    include "./koneksi.php";
    $id_buku = $_GET["id_buku"];

    $sql = "SELECT * FROM buku where id_buku=" . $id_buku;
    $result = $conn-> query($sql);
    
    $result= $result-> fetch_assoc();
?>

<form action = "ubah.php" method = "post">
    <input type = "hidden" name = "id_buku" value = "<?php echo $result ['id_buku']?>">;
    <table>
        <tr>
            <td>Judul Buku</td>
            <td>:</td>
            <td><input  type = "text" name = "judul_buku" value= "<?php echo $result['judul_buku']?>"></td>
        </tr>
        <tr>
            <td>Penulis</td>
            <td>:</td>
            <td><input type = "text" name = "penulis" value= "<?php echo $result['penulis']?>"></td>
        </tr>
        <tr>
            <td>ID Jenis</td>
            <td>:</td>
            <td><input type = "text" name = "id_jenis" value= "<?php echo $result['id_jenis']?>"></td>
        </tr>
        <tr>
            <td> Gambar Buku</td>
            <td>:</td>
            <td><input type = "text" name = "gambar_buku" value= "<?php echo $result['gambar_buku']?>"></td>
        </tr>
    </table>
    <input type = "submit" name = "simpan" value = "UBAH">
</form>