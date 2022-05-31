<?php
include "./connection.php";

$target_dir = "../../assets/img/";
$title = $_POST["title"];
$sinopsis = $_POST["sinopsis"];
$isi = $_POST["isi"];
$file_name = basename($_FILES["file-upload"]["name"]);
$target_file = $target_dir . $file_name;
$file = "assets/img/".$file_name;
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check file type
if(isset($_POST["submit"])) {
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
        echo "<script>window.alert(\"Hanya dapat mengupload file JPG, PNG, atau JPEG\")</script>";
        $uploadOk = 0;
    }

    if ($uploadOk == 0) {
        echo "<script>window.alert(\"Upload Gagal\")</script>";
        // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["file-upload"]["tmp_name"], $target_file)) {
            $result = mysqli_query($conn, "INSERT INTO `berita`(`id_berita`, `title`, `sinop`, `isi`, `image`) VALUES (NULL,'$title','$sinopsis','$isi','$file');");

            if($result){
                echo "<script>window.alert(\"Input Sukses\")</script>";
            }else{
                echo "<script>window.alert(\"Input Gagal\")</script>";
                unlink($target_file);
            }
        } else {
            echo "<script>window.alert(\"Upload Gagal\")</script>";
        }
    }

    header("refresh:0;url=../input-berita.php");
}
?>