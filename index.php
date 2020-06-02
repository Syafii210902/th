<?php
session_start();
require 'functions.php';
if (isset($_POST["signup"])) {
    if (registrasi($_POST) > 0) {
        echo "<script>
        alert('Signup Berhasil');
        </script>";
    }
    else {
        echo mysqli_error($conn);
    }
}

if (isset($_POST["signin"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE email = '$email'");

    //cek email
    if (mysqli_num_rows($result) === 1) {
        //cek password
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"])) {
            //set session
            $_SESSION["login"] = true;
            $_SESSION["iduser"] = $row["iduser"];
            header("Location: Home.php");
            exit;
        }else {
            echo "<script>
        alert('Password salah');
        </script>";
        }
    } else{
        echo "<script>
        alert('Email atau password salah');
        </script>";
    }

}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Dolen Skuyy</title>
    <link rel="stylesheet" type="text/css" href="loginstyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <div class="container" id="container">
        <div class="form-container sign-up-container">

            <form action="" method="post">
                <h1>Create Account</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fa fa-facebook"></i></a>
                    <a href="#" class="social"><i class="fa fa-google"></i></a>
                    <a href="#" class="social"><i class="fa fa-instagram"></i></a>
                </div>
                <span>or use your email for registration</span>
                <input type="text" name="username" placeholder="Enter Username">
                <input type="email" name="email" placeholder="Enter Email">
                <input type="password" name="password" placeholder="Enter Password">
                <input type="password" name="password2" placeholder="Repeat Password">
                <button type="submit" name="signup">SignUp</button>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form action="" method="post">
                <h1>Sign In</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fa fa-facebook"></i></a>
                    <a href="#" class="social"><i class="fa fa-google"></i></a>
                    <a href="#" class="social"><i class="fa fa-instagram"></i></a>
                </div>
                <span>or use your account</span>
                <input type="email" name="email" placeholder="Enter Email">
                <input type="password" name="password" placeholder="Enter Password">
                <a href="#">Forgot Your Password</a>

                <button type="submit" name="signin">Sign In</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Halo Sobat Baru!</h1>
                    <p>Segera Buat Akun Dolenmu dan Dolen Skuyy</p>
                    <button class="ghost" id="signIn">Sign In</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Halo Doleners!</h1>
                    <p>Yuk Segera Login dan Temukan Tujuan Dolenmu</p>
                    <button class="ghost" id="signUp">Sign Up</button>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        const signUpButton = document.getElementById('signUp');
        const signInButton = document.getElementById('signIn');
        const container = document.getElementById('container');

        signUpButton.addEventListener('click', () => {
            container.classList.add("right-panel-active");
        });
        signInButton.addEventListener('click', () => {
            container.classList.remove("right-panel-active");
        });
    </script>


</body>

</html>