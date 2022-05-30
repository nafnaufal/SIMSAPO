<?php
    require_once "../SIMSAPO/db/config.php";
    $ni = mysqli_real_escape_string(Koneksi::getKoneksi(),$_POST['no']);
    $pas = mysqli_real_escape_string(Koneksi::getKoneksi(),$_POST['password']);
    $sql = "SELECT * FROM akun WHERE nomor_induk = $ni";
    $query = mysqli_query(Koneksi::getKoneksi(),$sql);
    $data = mysqli_fetch_assoc($query);
    if(mysqli_num_rows($query)){
        if(password_verify($pas, $data['password'])){
            session_start();
            $_SESSION["no"] = $_POST['no'];
            $_SESSION["role"] = $data["role"];
            header("Refresh:0; url=./home.html", true, 303);
        }else{
            echo "Password Salah";
            header("Refresh:1; url=./login.html", true, 303);
        }
    }else{
        echo "NO induk tidak ditemukan";
        header("Refresh:1; url=./login.html", true, 303);
    }
?>