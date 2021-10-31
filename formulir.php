<form action = "simpan.php" method = "post">
<head>

    <title>Isi Formulir Buku</title>


<link href="bootstrap.min.css" rel="stylesheet">

    <link href="signin.css" rel="stylesheet">
  </head>
  <body class="text-center">


<main class="form-signin">
    <form>
    <h1 class="h3 mb-3 fw-normal">Masukkan Data</h1>

        <div class="form-floating">
            <input type="text" name = "judul_buku"  placeholder= "Judul Buku">
        </div>    

        <div class="form-floating">
            <input type="text" name = "penulis"  placeholder= "Penulis">
        </div>

        <div class="form-floating">
            <input type="text" name = "id_jenis"  placeholder= "ID Jenis">
        </div>

        <div class="form-floating">
            <input type="text" name = "gambar_buku"  placeholder= "Gambar Buku">
        </div>

        <button class="w-100 btn btn-lg btn-primary" type="submit">Simpan</button>

    <?php
        include './koneksi.php';
        $sql = "SELECT* FROM buku";
        $result = $conn-> query($sql);

    while($baris = mysqli_fetch_array($result)){
    echo "<a href= 'carian.php?id_buku=$baris[0]'> Cari buku</a>";
    }
    ?>

    </form>

</main>
</body>