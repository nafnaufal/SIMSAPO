<?php
    session_start();
    require_once "../db/config.php";
    if($_SESSION["no"] == NULL){
        header("location: ../login.html", true, 303);
    }
    $nisn = $_SESSION["no"];
    $tanggal = $_POST["tanggal"];
    $jumlah = $_POST["jumlah"];

    $qin = "INSERT INTO `keuangan`(`tanggal_pembayaran`, `jumlah_bayar`, `nisn`, `status_pembayaran`) VALUES ('$tanggal','$jumlah','$nisn', 'Menunggu Verifikasi')";
    
    mysqli_query(Koneksi::getKoneksi(), $qin);
    ?>

<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="1; url=./keuangan.php" />
    <title>Terima</title>
</head>
<body>
    Data berhasil diinput!
</body>
</html>