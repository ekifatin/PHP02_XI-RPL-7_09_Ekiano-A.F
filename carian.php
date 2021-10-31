<form action = "carian.php" method = "post">
    <input type = "search" name = "cari" placeholder= "Judul Buku" autofocus autocomplete= "off">
    <input type = "submit" name = "submit" value="CARI">
    
    <?php

        include './koneksi.php';

        if(isset($_POST['cari'])){
            $cari = $_POST['cari'];
            $sql = "SELECT * FROM buku WHERE judul_buku LIKE '%" .$cari."%'";
            
            $result = $conn->query($sql);
            while($baris = mysqli_fetch_array($result)){
                echo "<br>";
                echo "<br>";
                echo "Judul buku:" . $baris[1] . "<br>";
                echo "Penulis buku: " . $baris[2] . "<br>";
                echo "ID jenis: " . $baris[3] . "<br>";
                echo "Gambar buku: " . $baris[4] . "<br>";
                echo "<a href = 'formulir.php?id_buku= $baris[0]'>Kembali</a>";   
            }
        }
    ?>
</form>