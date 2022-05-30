<?php
    session_start();
    require_once "../db/config.php";
    if($_SESSION["no"] == NULL){
        header("location: ../login.html", true, 303);
    }
    $nisn = $_SESSION["no"];
    $qget = "SELECT * FROM keuangan WHERE nisn = '$nisn'";
    $hasil = mysqli_query(Koneksi::getKoneksi(),$qget);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <title>Hasil</title>
    </head>
    
    <body>
        <div class="container-fluid" style="min-height: 100vh;">
                <div class="row">
        <div class="d-flex flex-column flex-shrink-0 p-3 bg-light col-lg-5" style="width: 280px;">
            <a href="../homeSiswa.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
            <svg class="bi pe-none me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
            <img class="me-3" src="../assets/logo.png" height="50">
            <span class="fs-4">Simsapo</span>
            </a>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
            <li>
                <a href="./progress.php" class="nav-link link-dark">
                    <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
                    Progress
                </a>
            </li>
            <li>
                <a href="./jadwal.php" class="nav-link link-dark" aria-current="page">
                    <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
                    Jadwal
                </a>
            </li>
            <li>
                <a href="./keuangan.php" class="nav-link active">
                    <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
                    Keuangan
                </a>
            </li>
            </ul>
            <hr>
            <div class="dropdown">
            <a href="#" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
                <strong>mdo</strong>
            </a>
            <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2">
                <li><a class="dropdown-item" href="../profile.php">Profile</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="../logout.php">Sign out</a></li>
            </ul>
            </div>
        </div>

        <div class="col-lg-7" style="min-height: 100vh;">

        <div class="container text-center">
        <h4>Data Keuangan</h4>
        </div>
        <div class="container">
            <table class = "table table-striped table-bordered mt-5">
                <tr>
                    <th>Tanggal Pembayaran</th>
                    <th>Jumlah Pembayaran</th>
                    <th>Status Pembayaran</th>
                </tr>
                <?php foreach ($hasil as $i) { ?>
                    <tr>
                        <td> <?= $i["tanggal_pembayaran"] ?> </td>
                        <td> <?= $i["jumlah_bayar"] ?> </td>
                        <td> <?= $i["status_pembayaran"] ?> </td>
                    </tr>
                <?php } ?>
            </table>

            <button class = "btn btn-primary" onclick="location.href='./upload_transfer.php'">
                Upload bukti Transfer
            </button>
        </div>
        </div>
        </body>
        
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    </body>
</html>