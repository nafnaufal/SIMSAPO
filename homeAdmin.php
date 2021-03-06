<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
</head>
<body>
    <div class="container-fluid" style="min-height: 100vh;">
        <div class="row">
        <div class="d-flex flex-column flex-shrink-0 p-3 bg-light col-lg-5" style="width: 280px;">
            <a href="./homeAdmin.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
            <svg class="bi pe-none me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
            <img class="me-3" src="./assets/logo.png" height="50">
            <span class="fs-4">Simsapo</span>
            </a>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
            <li>
                <a href="./admin/input-berita.php" class="nav-link link-dark">
                    <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
                    Input Berita
                </a>
            </li>
            <li>
                <a href="./admin/input-galery.php" class="nav-link link-dark">
                    <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
                    Input Galery
                </a>
            </li>
            <li>
                <a href="./admin/input-jadwal.php" class="nav-link link-dark" aria-current="page">
                    <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
                    Input Jadwal
                </a>
            </li>
            <li>
                <a href="./admin/input-user.php" class="nav-link link-dark">
                    <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
                    Input User
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
                <div class="container h-100 d-flex">
                    <div class="card w-50 h-50 align-self-center">
                        <div class="card-body w-100 d-flex flex-column">
                            <h5 class="card-title h2">Berita</h5>
                            <p class="card-text w-75 mt-2">Baca berita terbaru seputar prestasi, kegiatan kesiswaan, dan kegiatan akademik yang ada di MTs Negeri 1 Pontianak</p>
                            <a href="./berita.php" class="btn btn-primary align-self-end mt-auto">Baca Berita!</a>
                        </div>
                    </div>
                    <div class="card w-50 h-50 ms-4 align-self-center">
                        <div class="card-body w-100 d-flex flex-column">
                            <h5 class="card-title h2">Galeri</h5>
                            <p class="card-text w-75 mt-2">Lihat dokumentasi kegiatan yang ada di MTs Negeri 1 Pontianak</p>
                            <a href="./galery.php" class="btn btn-primary align-self-end mt-auto">Lihat Galeri!</a>
                        </div>
                    </div>
                    <div class="card w-50 h-50 ms-4 align-self-center">
                        <div class="card-body w-100 d-flex flex-column">
                            <h5 class="card-title h2">Profil Sekolah</h5>
                            <p class="card-text w-75 mt-2">Lihat Profil MTs Negeri 1 Pontianak</p>
                            <a href="./profileSekolah.html" class="btn btn-primary align-self-end mt-auto">Lihat Profil!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
        crossorigin="anonymous"></script>
    </div>
</body>
</html>