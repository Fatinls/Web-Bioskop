<!DOCTYPE html>
<html>
    <head>
        <title>List Film</title>
    </head>
    <body>
        <h1>List Film</h1>
        <h2>Sedang Tayang<h2>

        <?php 
            include "database.php";
            $query = "SELECT * FROM list_film ";
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
                <?php
            } 
        ?>
            </tr>
            </table>
            <a href='beranda.php'><h3>Klik untuk kembali ke beranda</h3></a>
        
    </body>
</html>