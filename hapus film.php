<DOCTYPE html>
    <head>
        <title>Hapus film</title>
    </head>
    <body>
        <h1>Hapus Film</h1>
        <h2>Silahkan Masukan Judul Film yang akan Dihapus</h2>
        <form method="POST">
            
            <label>Judul : </label>
            <input type="text" name="judul"> <br>

            <input type="submit" name="submit"> <br>

        </form>
        <?php
            include "database.php"; 
            session_start();
            if(isset($_POST['submit'])){
                $judul = $_POST['judul'];

                $query = "DELETE FROM list_film WHERE judul = '$judul'";
                $execute = mysqli_query($connect,$query);

                if($execute){
                    echo "Data Berhasil Dihapus<br>";
                    echo "<a href='beranda.php'>Klik untuk kembali ke beranda</a>";
                } else {
                    echo "Data Gagal Dihapus<br>";
                    echo "<a href='beranda.php'>Klik untuk kembali ke beranda</a>";
                }
            }
	    ?>
    </body>
</html>
