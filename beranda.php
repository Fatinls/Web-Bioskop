<!DOCTYPE html>
<html>
    <head>
        <title>Laman Beranda</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <center>
        <div class="full">
            <div class="navbar">
                <div class="navbarleft">
                    <h1>Bioskopxxx</h1>
                </div>
                <div class="navbarright">
                    <i class="fa fa-search">
                    <form action='detailfilm.php' method="POST">
                    <input type="text" name="judul"><input type="submit" name="cari" value="Cari Judul"> <br>
                    </form>
                        
                    </i>

                </div>
            
            </div>
       
        </div>
        <img src="gambar1.jpg">

        <?php
            include "database.php";
            $sql = "SELECT * FROM list_film";
            $film = $connect ->query($sql);
        ?>

        

        <h2 class="tulisanputih">Sedang Tayang<h2>

        <?php
            while($row=$film->fetch_object()){
                print "<br>";
                print "<a href='listfilm.php'><div class=judul>".$row->judul."</div></a>";
                $link=$row->link_gambar;
                print "<br>";
                print "<a href='listfilm.php'><img src=$link width='450px' height='650px'></a>";
                print "<br>";
            }
        ?>
        
        <h4>contact<h4>
        <h2><a href='login.php'>Akses Admin</a></h2>
        </center>
    </body>
</html>