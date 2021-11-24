<!DOCTYPE html>
<html>
    <head>
        <title>Detail Film</title>
        <style>
            body{
                
            }
        </style>
    </head>
    <body>
    <center>
        <h1>Detail Film</h1>
        <?php 
        include "database.php";
                if(isset($_POST['cari'])){
                    $judul = $_POST['judul'];

                    $query = "SELECT * FROM list_film WHERE judul = '$judul'";
                    $execute = mysqli_query($connect,$query);

                    while($row=$execute->fetch_object()){
                        
        ?>
                        <table >
                        <tr>
                            <td>ID</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><?= $row->id ?></td>
                        </tr>
                        <tr>
                            <td>Judul</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><?= $row->judul ?></td>
                        </tr>
                        <tr>
                            <td>Genre</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><?= $row->genre ?></td>
                        </tr>
                        <tr>
                            <td>Produser</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><?= $row->produser ?></td>
                        </tr>
                        <tr>
                            <td>Tanggal tayang</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><?= $row->tanggal_tayang ?></td>
                        </tr>
                        <tr>
                            <td>Waktu Tayang</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><?= $row->waktu_tayang ?></td>
                        </tr>
                        <tr>
                            <td>Harga Tiket</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><?= $row->harga_tiket ?></td>
                        </tr>
                        </table>
        <?php
                        $poster=$row->link_gambar;
                        print "<br>";
                        print "<img src=$poster><br>";
                    }
                }
        ?>
        <form action='belitiket.php' method="POST">
            <h3>Silahkan Masukan Judul film dan jumlah tiket untuk Membeli</h3>
            <label>Judul : </label>
            <input type="text" name="judul"> <br>
            <label>Jumlah : </label>
            <input type="number" name="jumlah"> <br>
            <input type="submit" name="beli" value="Beli Tiket"> <br>
        </form>
    </center>
</body>
</html>