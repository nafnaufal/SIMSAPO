<?php

include './connection.php';

$success = true;

if(isset($_GET["submit"])){
    $kode = $_GET['id-jadwal'];
    $hari = $_GET['hari'];
    $kelas = $_GET['kode-kelas'];
    $waktu = $_GET['waktu'];
    $mapel = $_GET['kode-mapel'];

    // Input Kelas Jika Belum Ada
    if($kelas == "other"){
        $kelas_other = $_GET["kelas-other"];

        if($kelas_other == ""){
            $success = false;
        }else{
            $result = mysqli_query($conn, "INSERT INTO `kelas` (`kode`) VALUES ('$kelas_other');");
            
            if(!$result){
                $success = false;
            }else{
                $kelas = $kelas_other;
            }
        }
    }

    if($mapel == "other"){
        $kode_other = $_GET["kode-mapel-other"];
        $nama_other = $_GET["nama-mapel-other"];
        $nip_other = $_GET["nip-other"];

        if($kode_other == "" || $nama_other == "" || $nip_other == "blank"){
            $success = false;
        }else{
            $result = mysqli_query($conn, "INSERT INTO `mapel`(`kode`, `nama`, `nip`) VALUES ('$kode_other','$nama_other','$nip_other');");
            
            if(!$result){
                $success = false;
            }else{
                $mapel = $kode_other;
            }
        }
    }

    if($kode === "" || $kelas === "blank" || $waktu === "" || $mapel === "blank"){
        $success = false;
    }

    if($success){
        $result = mysqli_query($conn, "INSERT INTO `jadwal`(`id`, `hari`, `jam`, `kode_mapel`, `kode_kelas`) VALUES ('$kode','$hari','$waktu','$mapel','$kelas');");

        if($result){
            echo "<script>window.alert(\"Input Sukses\")</script>";
        }else{
            echo "<script>window.alert(\"Input Gagal\")</script>";
        }
    }else{
        echo "<script>window.alert(\"Input Gagal\")</script>";
    }

    header("refresh:0;url=../input-jadwal.php");
}

?>