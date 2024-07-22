<?php 
session_start();
include 'koneksi.php';
if (!isset($_SESSION["login_type"])) {
    echo '<script language="javascript" type="text/javascript">
        alert("Anda Tidak Berhak Memasuki Halaman Ini.!");</script>';
    echo "<meta http-equiv='refresh' content='0; url=../index.php'>"; // Redirect ke halaman login jika tidak ada sesi
    exit();
}
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta
      name="keywords"
      content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Matrix lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Matrix admin lite design, Matrix admin lite dashboard bootstrap 5 dashboard template"
    />
    <meta
      name="description"
      content="Matrix Admin Lite Free Version is powerful and clean admin dashboard template, inpired from Bootstrap Framework"
    />
    <meta name="robots" content="noindex,nofollow" />
    <title><?php echo $title; ?></title>
    <!-- Favicon icon -->
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="assets/images/logo1.png"
    />
    <!-- Custom CSS -->
    <link
      rel="stylesheet"
      type="text/css"
      href="../assets/extra-libs/multicheck/multicheck.css"
    />
    <link
      href="../assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css"
      rel="stylesheet"
    />
    <link href="../dist/css/style.min.css" rel="stylesheet" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
      <div class="lds-ripple">
        <div class="lds-pos"></div>
        <div class="lds-pos"></div>
      </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div
      id="main-wrapper"
      data-layout="vertical"
      data-navbarbg="skin5"
      data-sidebartype="full"
      data-sidebar-position="absolute"
      data-header-position="absolute"
      data-boxed-layout="full"
    >
      <!-- ============================================================== -->
      <!-- Topbar header - style you can find in pages.scss -->
      <!-- ============================================================== -->
      <header class="topbar" data-navbarbg="skin5">
        <nav class="navbar top-navbar navbar-expand-md navbar-dark">
          <div class="navbar-header" data-logobg="skin5">
            <!-- ============================================================== -->
            <!-- Logo -->
            <!-- ============================================================== -->
            <a class="navbar-brand" href="index.php">
              <!-- Logo icon -->
              <b class="logo-icon ps-2">
                <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                <!-- Dark Logo icon -->
                <!--<img
                  src="assets/images/logo1.png"
                  alt="homepage"
                  class="light-logo"
                  width="25"
                />-->
              </b>
              <!--End Logo icon -->
              <!-- Logo text -->
              <span class="logo-text ms-4">
                <!-- dark Logo text -->
                SD Islam Al Quds
              </span>
              <!-- Logo icon -->
              <!-- <b class="logo-icon"> -->
              <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
              <!-- Dark Logo icon -->
              <!-- <img src="../assets/images/logo-text.png" alt="homepage" class="light-logo" /> -->

              <!-- </b> -->
              <!--End Logo icon -->
            </a>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Toggle which is visible on mobile only -->
            <!-- ============================================================== -->
            <a
              class="nav-toggler waves-effect waves-light d-block d-md-none"
              href="javascript:void(0)"
              ><i class="ti-menu ti-close"></i
            ></a>
          </div>
          <!-- ============================================================== -->
          <!-- End Logo -->
          <!-- ============================================================== -->
          <div
            class="navbar-collapse collapse"
            id="navbarSupportedContent"
            data-navbarbg="skin5"
          >
            <!-- ============================================================== -->
            <!-- toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav float-start me-auto">
              <li class="nav-item d-none d-lg-block">
                <a
                  class="nav-link sidebartoggler waves-effect waves-light"
                  href="javascript:void(0)"
                  data-sidebartype="mini-sidebar"
                  ><i class="mdi mdi-menu font-24"></i
                ></a>
              </li>
              
              <!-- ============================================================== -->
              <!-- Search -->
              <!-- ============================================================== -->
              <li class="nav-item search-box">
                <a
                  class="nav-link waves-effect waves-dark"
                  href="javascript:void(0)"
                  ><i class="mdi mdi-magnify fs-4"></i
                ></a>
                <form class="app-search position-absolute">
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Search &amp; enter"
                  />
                  <a class="srh-btn"><i class="mdi mdi-window-close"></i></a>
                </form>
              </li>
            </ul>
            <!-- ============================================================== -->
            <!-- Right side toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav float-end">                            

              <!-- ============================================================== -->
              <!-- User profile and search -->
              <!-- ============================================================== -->
              <li class="nav-item dropdown">
                <a
                  class="
                    nav-link
                    dropdown-toggle
                    text-muted
                    waves-effect waves-dark
                    pro-pic
                  "
                  href="#"
                  id="navbarDropdown"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  <img
                    src="assets/images/sd_al_quds.png"
                    alt="user"
                    class="rounded-circle"
                    width="31"
                  />
                </a>
                <ul
                  class="dropdown-menu dropdown-menu-end user-dd animated"
                  aria-labelledby="navbarDropdown"ss
                >
                  <a class="dropdown-item" href="keluar.php"
                    ><i class="fa fa-power-off me-1 ms-1"></i> Logout</a
                  >
                </ul>
              </li>
              <!-- ============================================================== -->
              <!-- User profile and search -->
              <!-- ============================================================== -->
            </ul>
          </div>
        </nav>
      </header>
      <!-- ============================================================== -->
      <!-- End Topbar header -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Left Sidebar - style you can find in sidebar.scss  -->
      <!-- ============================================================== -->
      <aside class="left-sidebar" data-sidebarbg="skin5">
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar">
          <!-- Sidebar navigation-->
          <?php include 'menu.php'; ?>
          <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
      </aside>
      <!-- ============================================================== -->
      <!-- End Left Sidebar - style you can find in sidebar.scss  -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Page wrapper  -->
      <!-- ============================================================== -->
      <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
          <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
              <h4 class="page-title">Tabel Siswa</h4>
              <div class="ms-auto text-end">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                      Tabel Siswa
                    </li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
          <!-- ============================================================== -->
          <!-- Start Page Content -->
          <!-- ============================================================== -->
          <div class="row">
            <div class="col-12">
              <!--<div class="card">
                <div class="card-body">
                  <h5 class="card-title mb-0">Static Table</h5>
                </div>
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">First</th>
                      <th scope="col">Last</th>
                      <th scope="col">Handle</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Mark</td>
                      <td>Otto</td>
                      <td>@mdo</td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Jacob</td>
                      <td>Thornton</td>
                      <td>@fat</td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td>Larry</td>
                      <td>the Bird</td>
                      <td>@twitter</td>
                    </tr>
                  </tbody>
                </table>
              </div>-->

              <div class="card">
                <div class="card-body">
                  <div class="card-title" style="display: grid; justify-content: end;">
                    <a class="btn btn-sm btn-primary" href="" data-bs-toggle="modal" data-bs-target="#tagihanModal"><i class="mdi mdi-plus"></i> Tambah Data</a>
                  </div>
                  <div class="table-responsive">
                    <table
                      id="zero_config"
                      class="table table-striped table-bordered"
                    >
                      <thead>
                        <tr>
                          <th>No.</th>
                          <th>Tahun Ajaran</th>
                          <th>Bulan Tagihan</th>
                          <th>Tahun Tagihan</th>
                          <th>Jumlah Tag  ihan</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $no=1; 
                        $data = mysqli_query($koneksi, "SELECT * FROM tb_tagihan, tb_ta, tb_ba WHERE id_ta=idta AND id_ba=idba ORDER BY id_tagihan ASC");
                        while ($row = mysqli_fetch_assoc($data)) {
                          // $bulan = $row['bulan_tagihan'];

                          // //bulan
                          // setlocale(LC_TIME, 'id_ID');
                          // $bulan_format = strftime('%B %Y', strtotime($bulan));
                        ?>
                        <tr>
                          <td><?php echo $no++; ?>.</td>
                          <td><?php echo $row['ta']; ?></td>
                          <td><?php echo $row['ba']; ?></td>
                          <td><?php echo $row['tahun_tagihan']; ?></td>
                          <td><?php echo "Rp. " .number_format($row['jumlah_tagihan']). ",-"; ?></td>
                          <td>
                            <a class="btn btn-sm btn-warning" href="" data-bs-toggle="modal" data-bs-target="#tagihaneditModal<?php echo $row['id_tagihan']; ?>"><i class="mdi mdi-pencil"></i></a>
                            <a class="btn btn-sm btn-danger" href="hapustagihan.php?id=<?php echo $row['id_tagihan']; ?>"><i class="mdi mdi-delete"></i></a>
                          </td>
                        </tr>
                        <?php } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

              <!-- Modal Tambah-->
              <div class="modal fade" id="tagihanModal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                      <div class="modal-content">
                          <div class="modal-header">
                              <h5 class="modal-title" id="modalLabel">Tambah Data Tagihan</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                              <form method="POST" action="proses_tagihan.php">
                                <div class="mb-3">
                                    <label for="" class="form-label">Tahun Ajaran</label>
                                    <select class="form-select" id="nama" name="ta">
                                      <option selected disabled>Pilih Tahun Ajaran</option>
                                      <?php 
                                      $s = mysqli_query($koneksi, "SELECT * FROM tb_ta");
                                      while ($rs = mysqli_fetch_assoc($s)){
                                      ?>
                                      <option value="<?php echo $rs['id_ta']; ?>"><?php echo $rs['ta']; ?></option>
                                      <?php } ?>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="" class="form-label">Bulan Tagihan</label>
                                    <select class="form-select" id="nama" name="ba">
                                      <option selected disabled>Pilih Bulan Tagihan</option>
                                      <?php 
                                      $s = mysqli_query($koneksi, "SELECT * FROM tb_ba");
                                      while ($rs = mysqli_fetch_assoc($s)){
                                      ?>
                                      <option value="<?php echo $rs['id_ba']; ?>"><?php echo $rs['ba']; ?></option>
                                      <?php } ?>
                                    </select>
                                </div>

                                <!-- <div class="mb-3">
                                      <label for="bulanTagihan" class="form-label">Bulan Tagihan</label>
                                      <input type="month" class="form-control" id="bulanTagihan" name="bulan">
                                  </div> -->

                                  <div class="mb-3">
                                      <label for="tahunTagihan" class="form-label">Tahun Tagihan</label>
                                      <select class="form-select" id="tahun" name="tahun">
                                        <option selected disabled>Pilih Tahun</option>
                                        <?php
                                        $tahunSekarang = date("Y"); // Mengambil tahun saat ini
                                        for ($tahun = $tahunSekarang; $tahun >= 1900; $tahun--) {
                                          echo "<option value='$tahun'>$tahun</option>";
                                        }
                                        ?>
                                      </select>
                                  </div>
                                  <div class="mb-3">
                                      <label for="jumlahTagihan" class="form-label">Jumlah Tagihan</label>
                                      <input type="text" class="form-control" id="jumlahTagihan" name="jumlah">
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                  </div>
                              </form>
                          </div>
                      </div>
                  </div>
              </div>

              <!-- Modal Edit -->
              <?php 
              $t = mysqli_query($koneksi, "SELECT * FROM tb_tagihan");
              while ($rt = mysqli_fetch_assoc($t)){
                $tahuntagih = $rt['tahun_tagihan'];
              ?>
              <div class="modal fade" id="tagihaneditModal<?php echo $rt['id_tagihan']; ?>" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                      <div class="modal-content">
                          <div class="modal-header">
                              <h5 class="modal-title" id="modalLabel">Edit Data Tagihan</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                              <form method="POST" action="update_tagihan.php">
                                <input type="hidden" name="idt" value="<?php echo $rt['id_tagihan']; ?>">
                                  <div class="mb-3">
                                      <label for="" class="form-label">Tahun Ajaran</label>
                                      <select class="form-select" id="ta" name="ta">
                                        <option selected disabled>Pilih Tahun Ajaran</option>
                                        <?php 
                                        $s = mysqli_query($koneksi, "SELECT * FROM tb_ta");
                                        while ($rs = mysqli_fetch_assoc($s)){
                                        ?>
                                        <option <?php if($rs['id_ta'] == $rt['idta']){echo "selected='selected'";} ?> value="<?php echo $rs['id_ta']; ?>"><?php echo $rs['ta']; ?></option>
                                        <?php } ?>
                                      </select>
                                  </div>
                                  <div class="mb-3">
                                    <label for="" class="form-label">Bulan Tagihan</label>
                                    <select class="form-select" id="nama" name="ba">
                                      <option selected disabled>Pilih Bulan Tagihan</option>
                                      <?php 
                                      $s = mysqli_query($koneksi, "SELECT * FROM tb_ba");
                                      while ($rs = mysqli_fetch_assoc($s)){
                                      ?>
                                      <option value="<?php echo $rs['id_ba']; ?>"><?php echo $rs['ba']; ?></option>
                                      <?php } ?>
                                    </select>
                                </div>

                                  <div class="mb-3">
                                      <label for="tahunTagihan" class="form-label">Tahun Tagihan</label>
                                      <select class="form-select" id="tahun" name="tahun">
                                        <option selected disabled>Pilih Tahun</option>
                                        <?php
                                        $tahunSekarang = date("Y");
                                        for ($tahun = $tahunSekarang; $tahun >= 1900; $tahun--) {
                                          $selected = ($tahun == $tahuntagih) ? "selected" : "";
                                            echo "<option value='$tahun' $selected>$tahun</option>";
                                        }
                                        ?>
                                      </select>
                                  </div>
                                  <div class="mb-3">
                                      <label for="jumlahTagihan" class="form-label">Jumlah Tagihan</label>
                                      <input type="text" class="form-control" id="jumlahTagihan" name="jumlah" value="<?php echo $rt['jumlah_tagihan']; ?>">
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                  </div>
                              </form>
                          </div>
                      </div>
                  </div>
              </div>
              <?php } ?>

            </div>
          </div>
          <!-- ============================================================== -->
          <!-- End PAge Content -->
          <!-- ============================================================== -->
          <!-- ============================================================== -->
          <!-- Right sidebar -->
          <!-- ============================================================== -->
          <!-- .right-sidebar -->
          <!-- ============================================================== -->
          <!-- End Right sidebar -->
          <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <footer class="footer text-center">
          Designed and Developed by
          <a href="#">ysuf</a>.
        </footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
      </div>
      <!-- ============================================================== -->
      <!-- End Page wrapper  -->
      <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="../assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="../dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="../dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="../dist/js/custom.min.js"></script>
    <!-- this page js -->
    <script src="../assets/extra-libs/multicheck/datatable-checkbox-init.js"></script>
    <script src="../assets/extra-libs/multicheck/jquery.multicheck.js"></script>
    <script src="../assets/extra-libs/DataTables/datatables.min.js"></script>
    <script>
      /****************************************
       *       Basic Table                   *
       ****************************************/
      $("#zero_config").DataTable();
    </script>

    <script>
    document.getElementById("hapusButton").addEventListener("click", function() {
      // Gantilah dengan logika penghapusan yang sesuai dengan kebutuhan Anda.
      // Misalnya, menghapus elemen dari DOM.
      var elemenYangAkanDihapus = document.getElementById("elemenYangDihapus");
      elemenYangAkanDihapus.parentNode.removeChild(elemenYangAkanDihapus);
    });
    </script>
  </body>
</html>
