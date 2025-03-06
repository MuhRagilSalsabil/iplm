<?php
include('sesi_admin.php');
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
            <!-- <h6 class="collapse-header">Data IPLM</h6> -->
            <h6 class="collapse-header">Menu</h6>
            <a class="collapse-item" href="dashboard.php">Dashboard</a>
            <a class="collapse-item " href="data_iplm.php">IPLM</a>
            <a class="collapse-item active" href="data_anggota.php">Data UPLM</a>
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
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  LogOut
                </a>
              </div>
            </li>
          </ul>
        </nav>
        <!-- Topbar -->
        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tambah Data IPLM</h1>
          </div>

          <div class="row">
            <div class="col-lg-12 mb-4">
              <!-- Form uplm -->

              <div class="card mt-3">
                <div class="card-body">
                  <form method="POST" action="action_anggota.php">
                    <div>
                      <label>ID IPLM</label>
                      <select id="inputState" class="form-control" name="id_iplm">
                        <option>--</option>
                        <option><?php
                                require("koneksi.php");
                                $sql = "SELECT * FROM iplminduk WHERE id_iplm NOT IN (SELECT iplminduk.id_iplm FROM iplminduk JOIN anggota USING (id_iplm)) ORDER BY iplminduk.tahun ASC";
                                $data = mysqli_query($koneksi, $sql);
                                while ($query = mysqli_fetch_assoc($data)) {
                                  echo "<option value='" . $query['id_iplm'] . "'>" . $query['tahun'] . "</option>";
                                }
                                ?></option>

                      </select>
                    </div>
                    <div class="form-group">
                      <label>UPLM 1</label> <br>
                      <font style="font-size: 12px;">
                        <i>UPLM1/AM = 50%(Jumlah Unit Perpustakaan umum/Jumlah Populasi Penduduk) + 20%(Jumlah unit Perpustakaan Sekolah/Jumlah Civitas Sekolah) + 20%(Jumlah unit Perpustakaan perg.tinggi/jumlah Civitas Akademik) x 2,5(angka koreksi berdasarkan angka kepadatan)</i>
                      </font>
                      <input type="number" id="totalAmt" step="any" name="uplm1" class="form-control" placeholder="Input uplm 1" required>
                    </div>
                    <div class="form-group">
                      <label>UPLM 2 </label> <br>
                      <font style="font-size: 12px;">
                        <i>UPLM2/AM = 50%(Jumlah koleksi perpustakaan umum/jumlah populasi penduduk) + 20%(Jumlah koleksi perpustakaan sekolah/jumlah civitas sekolah) + 20%(Jumlah koleksi perpustakaan perg.tinggi/jumlah civitas akademika) x 2,5(Angka koreksi berdasarkan angka kepadatan)</i>
                      </font>
                      <input type="number" id="totalAmt" step="any" name="uplm2" class="form-control" placeholder="Input uplm 2" required>
                    </div>
                    <div class="form-group">
                      <label>UPLM 3 </label> <br>
                      <font style="font-size: 12px;">
                        <i>UPLM3/AM = 50%(Jumlah tenaga perpustakaan umum/jumlah populasi penduduk) + 20%(Jumlah Tenaga perpustakaan sekolah/jumlah civitas sekolah) + 20%(Jumlah tenaga perpustakaan perg.tinggi/jumlah civitas akademika) x 2,5(angka koreksi berdasarkan angka kepadatan)</i>
                      </font>
                      <input type="number" id="totalAmt" step="any" name="uplm3" class="form-control" placeholder="Input uplm 3" required>
                    </div>
                    <div class="form-group">
                      <label>UPLM 4 </label> <br>
                      <font style="font-size: 12px;">
                        <i>UPLM1/AM = 50%(Jumlah kunjungan perpustakaan umum/jumlah populasi penduduk) + 20%(Jumlah kunjungan perpustakaan sekolah/jumlah civitas sekolah) + 20%(Jumlah kunjungan perpustakaan perg.tinggi/jumlah civitas akademika) x 2,5(Angka koreksi berdasarkan angka kepadatan)</i>
                      </font>
                      <input type="number" id="totalAmt" step="any" name="uplm4" class="form-control" placeholder="Input uplm 4" required>
                    </div>
                    <div class="form-group">
                      <label>UPLM 5 </label>
                      <input type="number" id="totalAmt" step="any" name="uplm5" class="form-control" placeholder="Input uplm 5" required>
                    </div>
                    <div class="form-group">
                      <label>UPLM 6 </label>
                      <input type="number" id="totalAmt" step="any" name="uplm6" class="form-control" placeholder="Input uplm 6" required>
                    </div>
                    <div class="form-group">
                      <label>UPLM7 </label>
                      <input type="number" id="totalAmt" step="any" name="uplm7" class="form-control" placeholder="Input uplm 7" required>
                    </div>

                    <br>
                    <button type="submit" class="btn btn-success" name="kirim">Tambahkan</button>

                  </form>
                </div>
              </div>


            </div>
            <div class="card-footer"></div>
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