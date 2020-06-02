<?php
session_start();
require 'functions.php';
$iduser = $_SESSION["iduser"];
if (isset($_POST["upload"])) {
    if (tambah($_POST) > 0) {
        echo "<script>
        alert('Upload Berhasil');
        </script>";
    }
    else {
        echo mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style3.css">


</head>
<title>Dolen Skuyy</title>

<body>

    <div class="navbar">
        <div class="menu">
            <a href="Home.php" class="logo"><img src="img\logo.png" alt="Dolenskuyy"></a>
            <a href="Home.php" class="home">Home</a>
            <div class="dropdown">
                <button class="dropbtn">Service 
      <i class="fa fa-caret-down"></i>
    </button>
                <div class="dropdown-content">
                    <a href="Destinasi.php">Destinasi</a>
                    <a href="Makanankhas.php">Makanan Khas</a>
                    <a href="Budaya.php">Budaya</a>
                </div>
            </div>
            <a href="Gallery.php" class="gallery">Gallery</a>
            <a href="About.php" class="about">About</a>
        </div>
        <div class="logout-container">
        <a href="index.php"><button style="width:auto;">Log Out</button></a>
        </div>
        <div class="profile"><a href="Profile.php"><i class="fa fa-user-circle-o" style="font-size:48px;color: white;"></i></a></div>
    </div>
    <div class="galeri">
        <h1>Galeri</h1>
    </div>
    <div class="v1"></div>
    <?php
    $result = mysqli_query($conn, "SELECT gambar FROM fotogallery");
    global $j;
    $j = 0;
    $row2 = mysqli_fetch_all($result);
    $jumlahgambar = mysqli_num_rows($result);
    global $i;
    ?>
    <?php
    $result = mysqli_query($conn, "SELECT idfotogallery,jumlahlike FROM fotogallery WHERE iduser = '$iduser'");
    $row3 = mysqli_fetch_all($result);
    ?>
    <?php
    $result = mysqli_query($conn, "SELECT user.username FROM fotogallery INNER JOIN user on user.iduser = fotogallery.iduser ORDER BY idfotogallery");
    $row = mysqli_fetch_all($result, MYSQLI_ASSOC);
    ?>

    
        <?php if ($jumlahgambar > 0 and $jumlahgambar < 5) { ?>
            <div class="grup">
            <?php for ($i=0; $i < $jumlahgambar; $i++) : ?>
                <div class="animasi">
                    <img src="img\<?php echo $row2[$j][0] ?>" alt="Avatar" class="image">
                    <div class="top-left">
                        <img src="img\iconprofile2.png" alt="Profile">
                        <div class="iconprofile"><?php echo ucwords($row[$j]['username']) ?></div>
                        <a class="iconlike"><i class="fa fa-heart"></i></a>
                    </div>
                </div>
            <?php $j++; endfor; ?>
            </div>
        <?php } else { ?>
            <div class="nextbaris">
            <?php for ($k=$i; $k < $jumlahgambar; $k++) : ?> 
                <div class="animasi">
                    <img src="img\<?php echo $row2[$j][0] ?>" alt="Avatar" class="image">
                    <div class="top-left">
                        <img src="img\iconprofile2.png" alt="Profile">
                        <div class="iconprofile"><?php echo ucwords($row[$j]['username']) ?></div>
                        <a class="iconlike"><i class="fa fa-heart"></i></a>
                    </div>
                </div>
            <?php $j++; endfor; ?>
            </div>
        <?php } ?>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script>
        $(document).ready(function(){
            $(".iconlike").click(function(){
                $(this).toggleClass("clicked");
            })
        })
        </script>
        <div class="previousnext" id="pagination">
        <a href="#" class="previous">&laquo; Previous</a>
        <a href="#" class="next">Next &raquo;</a>
    </div>
    <div class="footer">
        <footer>
            <div class="copyright-box">
                <p class="copyright">&copy; Copyright <strong>Syafi'i</strong>. All Rights Reserved</p>
                <div class="credits">
                    Designed by <a href="https://www.instagram.com/syafii_0921">Syafii</a>
                </div>
            </div>
        </footer>
    </div>

</body>

</html>