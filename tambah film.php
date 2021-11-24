<?php
include "database.php";
?>
<DOCTYPE html>
    <head>
        <title>Tambah film</title>
    </head>
    <body>
        <h1>Tambah Film</h1>
        <h2>Silahkan Masukan kelengkapan film</h2><br>
        <form method="POST">
        
            <label>ID : </label>
            <input type="number" name="id"> <br>
            
            <label>Judul : </label>
            <input type="text" name="judul"> <br>

            <label>Genre : </label>
            <input type="text" name="genre"> <br>

            <label>Produser : </label>
            <input type="text" name="produser"> <br>

            <label>Harga Tiket : </label>
            <input type="number" name="ht"> <br>

            <label>Tanggal Tayang : </label>
            <input type="date" name="tt"> <br>

            <label>Waktu Tayang : </label>
            <input type="time" name="wt"> <br>

            <label>Link Poster : </label>
            <input type="text" name="poster"> <br><br>

            <input type="submit" name="submit"> <br>

        </form>
        <?php 
            session_start();
            if(isset($_POST['submit'])){
                $id = $_POST['id'];
                $judul = $_POST['judul'];
                $genre = $_POST['genre'];
                $produser = $_POST['produser'];
                $hargatiket = $_POST['ht'];
                $tanggaltayang = $_POST['tt'];
                $waktutayang = $_POST['wt'];
                $linkposter = $_POST['poster'];

                $query = "INSERT INTO list_film (id,judul,genre,produser,harga_tiket,tanggal_tayang,waktu_tayang,link_gambar) VALUES ('$id','$judul','$genre','$produser','$hargatiket','$tanggaltayang','$waktutayang','$linkposter')";
                $execute = mysqli_query($connect,$query);

                if($execute){
                    echo "Data Berhasil Ditambahkan<br>";
                    echo "<a href='beranda.php'>Tekan untuk kembali ke Beranda</a>";
                } else {
                    echo "Data Gagal Ditambahkan<br>";
                    echo "<a href='beranda.php'>Tekan untuk kembali ke Beranda</a>";
                }
            }
	    ?>
    </body>
</html>
