<?php
$conn = mysqli_connect("localhost", "root", "", "mydb");

function registrasi($data){
    global $conn;
    $username = strtolower(stripcslashes($data["username"]));
    $email = strtolower($data["email"]);
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    //cek apakah username kurang dari 10 karakter
    if (strlen($username) > 10) {
        echo "<script>
            alert('Username harus kurang dari 10 karakter');
        </script>";
        return false;
    }
    //cek username sudah ada apa belum
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
            alert('Username sudah terdaftar');
        </script>";
        return false;
    }

    //cek konfirmasi password
    if ($password !== $password2) {
        echo "<script>
        alert('Password tidak sesuai');
        </script>";
        return false;
    }

    //enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    //tambahkan userbaru ke database
    mysqli_query($conn, "INSERT INTO user VALUES('', '$username', '$email', '$password')");

    return mysqli_affected_rows($conn);
}

function tambah($data){
    global $conn;
    $namawisata = strtolower($data["namawisata"]);
    $gambar = upload();
    if (!$gambar) {
        return false;
    }
    $tglupload = date("Y-m-d");
    $iduser = $_SESSION['iduser'];
    $query = "INSERT INTO fotogallery VALUES ('', '$namawisata', '$iduser', '$gambar', '$tglupload','')";
    mysqli_query($conn, $query);
}

function upload(){
    $namafile = $_FILES['gambar']['name'];
    $error = $_FILES['gambar']['error'];
    $tmpname = $_FILES['gambar']['tmp_name'];

    //memisahkan ekstensi file gambar
    $ekstensigambar = explode('.', $namafile);
    $ekstensigambar = strtolower(end($ekstensigambar));


    //cek apakah tidak ada gambar yg diupload
    if ($error === 4) {
        echo "<script>
        alert('Pilih gambar terlebih dahulu');
        </script>";
        return false;
    }

    //gambar siap diupload
    //generate nama gambar baru
    $namafilebaru = uniqid();
    $namafilebaru .= '.';
    $namafilebaru .= $ekstensigambar;

    move_uploaded_file($tmpname, 'img/' . $namafilebaru);

    return $namafilebaru;
}
?>