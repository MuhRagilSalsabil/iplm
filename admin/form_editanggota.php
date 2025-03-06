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
          <img src="img/logo.jpg">
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
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="logout.php">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>
          </ul>
        </nav>
        <!-- Topbar -->
        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit Data Anggota</h1>
          </div>

          <div class="row">
            <div class="col-lg-12 mb-4">
              <!-- Tabel iplm -->

              <?php
              include 'koneksi.php';
              $id = $_GET['id'];
              $sql = "SELECT * FROM anggota where id_anggota=$id";
              $hasil = mysqli_query($koneksi, $sql);
              if (!$hasil) {
                echo "query salah";
              }

              ?>

              <?php
              while ($data = mysqli_fetch_array($hasil)) {
              ?>
                <div class="card mt-3">
                  <div class="card-body">
                    <form method="post" action="update_anggota.php">
                      <div>
                        <input type="hidden" name="id_anggota" value="<?php echo $data['id_anggota'] ?>">
                      </div>
                      <div class="form-group">
                        <label>ID IPLM</label>
                        <input type="text" name="id_iplm" class="form-control" disabled value="<?php echo $data['id_iplm'] ?>">
                      </div>
                      <div class="form-group">
                        <label>UPLM1 </label>
                        <input type="text" name="uplm1" class="form-control" placeholder="Input jumalah uplm 1" value="<?php echo $data['uplm1'] ?>" required>
                      </div>
                      <div class="form-group">
                        <label>UPLM2 </label>
                        <input type="text" name="uplm2" class="form-control" placeholder="Input jumalah uplm 2" value="<?php echo $data['uplm2'] ?>" required>
                      </div>
                      <div class="form-group">
                        <label>UPLM3 </label>
                        <input type="text" name="uplm3" class="form-control" placeholder="Input jumalah uplm 3" value="<?php echo $data['uplm3'] ?>" required>
                      </div>
                      <div class="form-group">
                        <label>UPLM4 </label>
                        <input type="text" name="uplm4" class="form-control" placeholder="Input jumalah uplm 4" value="<?php echo $data['uplm4'] ?>" required>
                      </div>
                      <div class="form-group">
                        <label>UPLM5 </label>
                        <input type="text" name="uplm5" class="form-control" placeholder="Input jumalah uplm 5" value="<?php echo $data['uplm5'] ?>" required>
                      </div>
                      <div class="form-group">
                        <label>UPLM6 </label>
                        <input type="text" name="uplm6" class="form-control" placeholder="Input jumalah uplm 6" value="<?php echo $data['uplm6'] ?>" required>
                      </div>
                      <div class="form-group">
                        <label>UPLM7</label>
                        <input type="text" name="uplm7" class="form-control" placeholder="Input jumalah uplm 7" value="<?php echo $data['uplm7'] ?>" required>
                      </div>
                      <br>
                      <button type="submit" class="btn btn-success" name="kirim">Tambahkan</button>

                    </form>
                  </div>
                </div>
            </div>
          <?php } ?>


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