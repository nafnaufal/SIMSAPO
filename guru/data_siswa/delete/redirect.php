<?php
    session_start();
    require_once "../../../db/config.php";
    if($_SESSION["no"] == NULL){
        header("location: ../../../login.html", true, 303);
    }
    $id = $_POST["id"];
    $qdel = "DELETE FROM nilai WHERE id = $id";
    mysqli_query(Koneksi::getKoneksi(), $qdel);
    ?>

<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="1; url=../guru.php" />
    <title>Delete</title>
</head>
<body>
    Data berhasil dihapus!
</body>
</html>