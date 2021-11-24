<!DOCTYPE html>
<html>
    <head>
        <title>Beli Tiket</title>
    </head>
    <body>
    <center>
        <h1>Pembelian tiket</h1><br>
        <?php 
        include "database.php";
        
        if(isset($_POST['beli'])){
			$judul = $_POST['judul'];
            $jumlah = $_POST['jumlah'];

            $query = "SELECT * FROM list_film WHERE judul = '$judul'";
            $execute = mysqli_query($connect,$query);
        ?>
        <table border="1" width="100%">
        <tr>
            <th>ID</th>
            <th>Judul</th>
            <th>Genre</th>
            <th>Produser</th>
            <th>Tanggal Tayang</th>
            <th>Waktu Tayang</th>
            <th>Harga Tiket</th>
        </tr>
        <?php while($row=$execute->fetch_object()){ ?>
        <tr>
            <td><?= $row->id ?></td>
            <td><?= $row->judul ?></td>
            <td><?= $row->genre ?></td>
            <td><?= $row->produser ?></td>
            <td><?= $row->tanggal_tayang ?></td>
            <td><?= $row->waktu_tayang ?></td>
            <td><?= $row->harga_tiket ?></td>
        </tr>
        </table>
        <?php
            $harga = $row->harga_tiket; 
            }
            $total = $jumlah*$harga;
            echo "<h3>Total</h3><br>";
            echo "<h3>".$total."</h3>";
            echo "<h3>Pembelian Dikonfirmasi</h3>";
            echo "<h3>Silahkan Screenshot dan tunjukan ke kasir bioskop</h3>";
        }
        ?>
        <h2><a href="beranda.php">Klik untuk Kembali Ke Beranda</a></h2>
    </center>
    </body>
</html>