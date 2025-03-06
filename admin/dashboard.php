<?php
include('sesi_admin.php');
include('koneksi.php');
$produk = mysqli_query($koneksi, "select * from iplminduk ORDER BY tahun ASC");
while ($row = mysqli_fetch_array($produk)) {
    $nama_produk[] = $row['tahun'];

    $query = mysqli_query($koneksi, "select ket from iplminduk where id_iplm='" . $row['id_iplm'] . "'");
    $row = $query->fetch_array();
    $jumlah_produk[] = $row['ket'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Website IPLM - Data IPLM</title>
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/ruang-admin.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body id="page-top">
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="dashboard.php">
                <div class="sidebar-brand-icon">
                    <img src="img/logo.png">
                </div>
            </a>
            <hr class="sidebar-divider my-0 ">
            <li class="nav-item bg-success">
                <a class="nav-link text-white" href="../Dispusip/index-iplm.php">
                    <span>Home</span></a>
            </li>
            <hr class="sidebar-divider">
            <div class="sidebar-heading">
                Data-data
            </div>
            <li class="nav-item active">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTable" aria-expanded="true" aria-controls="collapseTable">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Data IPLM</span>
                </a>
                <div id="collapseTable" class="collapse show" aria-labelledby="headingTable" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Menu</h6>
                        <!-- <h6 class="collapse-header">Data IPLM</h6> -->
                        <a class="collapse-item active" href="dashboard.php">Dashboard</a>
                        <a class="collapse-item" href="data_iplm.php">IPLM</a>
                        <a class="collapse-item" href="data_anggota.php">Data UPLM</a>
                    </div>
                </div>
            </li>
        </ul>
        <!-- Sidebar -->
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <!-- TopBar -->
                <nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top">
                    <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    <ul class="navbar-nav ml-auto">
                        <div class="topbar-divider d-none d-sm-block"></div>
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="img-profile rounded-circle" src="img/boy.png" style="max-width: 60px">
                                <span class="ml-2 d-none d-lg-inline text-success small">Admin</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="logout.php">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Log Out
                                </a>
                            </div>
                        </li>
                    </ul>
                </nav>
                <!-- Topbar -->
                <!-- Container Fluid-->
                <div class="container-fluid" id="container-wrapper">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Grafik IPLM / Tahun</h1>
                    </div>

                    <div class="row">
                        <div class="col-lg-12 mb-4">
                            <!-- Tabel keluarga -->
                            <!-- <div class="card">
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary"><a href="form_tambahanggota.php" class="btn btn-success">Tambah Data UPLM</a></h6>
                                </div> -->
                            <div style="width: 800px;height: 800px; margin: auto; position: relative; height:40vh; width:80vw">
                                <canvas id="myChart"></canvas>
                            </div>


                            <script>
                                var ctx = document.getElementById("myChart").getContext('2d');
                                var myChart = new Chart(ctx, {
                                    type: 'line',
                                    data: {
                                        labels: <?php echo json_encode($nama_produk); ?>,
                                        datasets: [{
                                            label: 'Grafik IPLM/Tahun',
                                            data: <?php echo json_encode($jumlah_produk); ?>,
                                            backgroundColor: 'rgb(75, 192, 192)',
                                            borderColor: 'rgb(75, 192, 192)',
                                            borderWidth: 1,
                                            tension: 0.1
                                        }]
                                    },
                                    options: {
                                        scales: {
                                            yAxes: [{
                                                ticks: {
                                                    beginAtZero: true
                                                }
                                            }]
                                        }
                                    }
                                });
                            </script>
                            <div class="card-footer">
                                <p>Grafik diatas menunjukkan tingkat Indeks Pembangunan Literasi Masyarakat (IPLM) <br> yang ada pada Dinas Perpustakaan dan Kearsipan Kabupaten Bojenegoro setiap tahunnya.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Row-->


            </div>

        </div>
        <!---Container Fluid-->
    </div>
    </div>
    </div>

    <!-- Scroll to top -->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="js/ruang-admin.min.js"></script>

</body>

</html>