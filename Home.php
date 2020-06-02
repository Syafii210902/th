<?php
session_start();
require 'functions.php';
$iduser = $_SESSION["iduser"];
if ( !isset($_SESSION["login"])) {
    echo "<script>
    alert('Login terlebih dahulu');
    </script>";
    header("Location : index.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">


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
    </div>

    <!-- Slideshow -->
    <div class="slideshow-container">

        <div class="mySlides fade">
            <img src="img\bg.jpg" style="width:100%">
            <div class="text">
                <p class="text1">2020</p>
                <p class="text2">Destinasi Terbaik</p>
                <p class="text3">Liburan dan Nikmati Indahnya Lumajang</p>
                <a href="Destinasi.php" class="buttontext">Lihat Destinasi</a>
            </div>
        </div>

        <div class="mySlides fade">
            <img src="img\1.png" style="width:100%">
            <div class="text">
                <p class="text1">2020</p>
                <p class="text2">Destinasi Terbaik</p>
                <p class="text3">Liburan dan Nikmati Indahnya Lumajang</p>
                <a href="Destinasi.php" class="buttontext">Lihat Destinasi</a>
            </div>
        </div>

        <div class="mySlides fade">
            <img src="img\2.png" style="width:100%">
            <div class="text">
                <p class="text1">2020</p>
                <p class="text2">Destinasi Terbaik</p>
                <p class="text3">Liburan dan Nikmati Indahnya Lumajang</p>
                <a href="Destinasi.php" class="buttontext">Lihat Destinasi</a>
            </div>
        </div>
    </div>
    <script>
        var slideIndex = 0;
        showSlides();

        function showSlides() {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) {
                slideIndex = 1
            }
            slides[slideIndex - 1].style.display = "block";
            setTimeout(showSlides, 5000); // Change image every 2 seconds
        }
    </script>

    <!-- Akhir Slideshow -->

    <!-- Wisata Populer -->
    <div class="wisatapopuler">
        <h1>Wisata Populer</h1>
    </div>
    <div class="v1"></div>
    <div class="grup">
        <div class="animasi">
            <img src="img\img8.jpg" alt="Avatar" class="image">
            <div class="top-left">Ranu Kumbolo</div>
            <div class="overlay">

            </div>
            <a href="Destinasi.php">
                <div class="textbox">Check Detail</div>
            </a>
        </div>
        <div class="animasi">
            <img src="img\img10.jpg" alt="Avatar" class="image">
            <div class="top-left">Air Terjun Kapas Biru</div>
            <div class="overlay">

            </div>
            <a href="Destinasi.php">
                <div class="textbox">Check Detail</div>
            </a>
        </div>
        <div class="animasi">
            <img src="img\img14.jpg" alt="Avatar" class="image">
            <div class="top-left">Air Terjun Tumpak Sewu</div>
            <div class="overlay">

            </div>
            <a href="Destinasi.php">
                <div class="textbox">Check Detail</div>
            </a>
        </div>
        <div class="animasi">
            <img src="img\img16.jpg" alt="Avatar" class="image">
            <div class="top-left">Ranu Regulo</div>
            <div class="overlay">
            </div>
            <a href="Destinasi.php">
                <div class="textbox">Check Detail</div>
            </a>
        </div>
    </div>


    <!-- AKhir Wisata Populer -->
    <div class="tentanglumajang">
        <h1>Tentang Lumajang</h1>
    </div>
    <div class="v2"></div>
    <div class="animasi2">
        <img src="img\24.png" alt="Avatar" class="image">
    </div>
    <div class="animasi3">
        <p>Lumajang merupakan sebuah Kabupaten di Jawa Timur, Kabupaten ini memiliki sejuta pesona dan panaroma alam yang menakjubkan dan masih banyak yang tersembunyi, sehingga masih banyak orang yang belum mengetahui akan keindahan dan tempat keren yang
            ada di Lumajang tersebut. Lumajang punya banyak Spot objek wisata keren, mulai dari Situs budaya, situs bersejarah, spot foto foto kekinian, Pantai, Gunung, sampai Air Terjun yang sangat memanjakan mata dan harus segera kalian explore.
            <br><br> Jika Anda punya rencana untuk berlibur ke Lumajang, Jangan khawatir akan keindahannya, Kabupaten ini menawarkan cukup banyak wisata pilihan untuk Anda dikunjungi. Selama ini jika Lumajang jarang terdengar tempat yang keren untuk berlibur,
            namun ternyata Lumajang ini juga memiliki banyak tempat - tempat wisata alam yang keren yang tak kalah dengan wisata di Semarang, Jogja ataupun Kabupaten besar lainnya.</p>
    </div>

    <div class="makanankhas">
        <h1>Makanan Khas</h1>
    </div>
    <div class="v3"></div>
    <div class="grup">
        <div class="animasi">
            <img src="img\35.jpg" alt="Avatar" class="image">
            <div class="top-left2">Ayam Geprek Tuan Manis</div>
            <div class="overlay">

            </div>
            <a href="">
                <div class="textbox">Check Detail</div>
            </a>
        </div>
        <div class="animasi">
            <img src="img\36.jpg" alt="Avatar" class="image">
            <div class="top-left2">Banana Prince</div>
            <div class="overlay">

            </div>
            <a href="">
                <div class="textbox">Check Detail</div>
            </a>
        </div>
        <div class="animasi">
            <img src="img\38.jpg" alt="Avatar" class="image">
            <div class="top-left2">Mie Iblis</div>
            <div class="overlay">

            </div>
            <a href="">
                <div class="textbox">Check Detail</div>
            </a>
        </div>
        <div class="animasi">
            <img src="img\37.jpg" alt="Avatar" class="image">
            <div class="top-left2">Kupang Lontong</div>
            <div class="overlay">
            </div>
            <a href="">
                <div class="textbox">Check Detail</div>
            </a>
        </div>
    </div>



    <div class="budaya">
        <h1>Budaya</h1>
    </div>
    <div class="v4"></div>
    <div class="grup">
        <div class="animasi">
            <img src="img\39.jpg" alt="Avatar" class="image3">
            <div class="top-left">Jaran Kenchak</div>
            <div class="overlay">

            </div>
            <a href="">
                <div class="textbox">Check Detail</div>
            </a>
        </div>
        <div class="animasi">
            <img src="img\40.jpg" alt="Avatar" class="image3">
            <div class="top-left">Tari Topen Kaliwungu</div>
            <div class="overlay">

            </div>
            <a href="">
                <div class="textbox">Check Detail</div>
            </a>
        </div>
        <div class="animasi">
            <img src="img\41.jpg" alt="Avatar" class="image3">
            <div class="top-left">Putri Kirana</div>
            <div class="overlay">

            </div>
            <a href="">
                <div class="textbox">Check Detail</div>
            </a>
        </div>
        <div class="animasi">
            <img src="img\43.jpg" alt="Avatar" class="image3">
            <div class="top-left">Karnaval Pasirian</div>
            <div class="overlay">
            </div>
            <a href="">
                <div class="textbox">Check Detail</div>
            </a>
        </div>
    </div>

    <div class="pemenang">
        <h1>Foto Terbaik Mei 2020</h1>
    </div>
    <div class="v5"></div>
    <div class="grup">
        <div class="animasi4">
            <a class="zoomimage"><img src="img\img8.jpg" alt="Avatar" class="image"></a>
            <a href="#" class="fa fa-facebook"></a>
            <a href="#" class="fa fa-twitter"></a>
            <a href="https://www.instagram.com/syafii_0921" class="fa fa-instagram"></a>
        </div>
        <div class="animasi4">
            <a class="zoomimage"><img src="img\img10.jpg" alt="Avatar" class="image"></a>
            <a href="#" class="fa fa-facebook"></a>
            <a href="#" class="fa fa-twitter"></a>
            <a href="https://www.instagram.com/syafii_0921" class="fa fa-instagram"></a>
        </div>
        <div class="animasi4">
            <a class="zoomimage"><img src="img\img14.jpg" alt="Avatar" class="image"></a>
            <a href="#" class="fa fa-facebook"></a>
            <a href="#" class="fa fa-twitter"></a>
            <a href="https://www.instagram.com/syafii_0921" class="fa fa-instagram"></a>
        </div>
    </div>


    <div class="promosi">
        <h1>Yukk Ikutan Upload Foto Kalian!</h1>
        <p>Login dan upload foto wisata di Lumajang milikmu.<br>Foto terbaik akan ditampilkan di Home Page tiap Bulannya.
        </p>
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