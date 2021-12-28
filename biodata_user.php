<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Data Admin SI ALumni JTI</title>
        <link href="custom/css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="index.html">SIALUMNI JTI POLITEKNIK NEGERI MALANG</a>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#">Settings</a>
                        <a class="dropdown-item" href="#">Activity Log</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="login.html">Logout</a>
                    </div>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                        <a class="nav-link" href="beranda_user.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Beranda
                            </a>
                            <a class="nav-link" href="biodata_user.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-database"></i></div>
                                Biodata
                            </a>
                            <a class="nav-link" href="data_survei.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-poll-h"></i></div>
                                Survei
                            </a>
                            <a class="nav-link" href="review.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Review
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Biodata</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">SiAL    / Biodata</li>
                        </ol>
                        
                    </div>
                    <div class="container">
                        <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0" action="" method= "POST">
                        <div class="mb-3">
                            <p class="card-text">DATA ALUMNI</p>
                    </div>
                        </form>
                    <table border=5 width=50% align=”center”>
                     <tr>
                     <td bgcolor=grey colspan=”2″ align=”center”><font color=white>BIODATA</td>
                    </tr>
                    <tr>
                    <td>Nama</td>
                    <td>Salma Kirana S</td>
                    </tr>
                    <tr>
                    <td>NIK</td>
                    <td>Metu kono belok kiri lurus wae</td>            
                    </tr>
                    <tr>
                    <td>Tempat, tanggal lahir</td>
                    <td>08– —- —-</td>
                    </tr>
                    <tr>
                    <td>Agama</td>
                    <td>iya</td>
                    </tr>
                    <tr>
                    <td>No. Hp</td>
                    <td>iya</td>
                    </tr>
                    <tr>
                    <td>Prodi</td>
                    <td>iya</td>
                    </tr>
                    <tr>
                    <td>Tahun lulus</td>
                    <td>iya</td>
                    </tr>
                    <tr>
                    <td>Alamat</td>
                    <td>iya</td>
                    </tr>
                    <tr>
                    <td>Jenis Kelamin</td>
                    <td>iya</td>
                    </tr>
                    </table>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2020</div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>
    </body>
</html>