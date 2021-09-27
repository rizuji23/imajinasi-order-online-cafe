<?php 
    require 'config/modelvi.php';
  if (empty($_SESSION['username_admin']) || $_SESSION['level'] == "Kasir"){
    echo "<script> document.location.href = '404.html' </script>";
  } else {



    $nama = mysqli_query($koneksi, "SELECT * FROM admin WHERE username = '". $_SESSION['username_admin'] ."'");
    $n = mysqli_fetch_assoc($nama);

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <title>Data Produk | Imajinasi Management System</title>
    <!-- Favicon -->
    <link rel="icon" href="assets/img/brand/favicon.png" type="image/png">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- Icons -->
    <link rel="stylesheet" href="assets/vendor/nucleo/css/nucleo.css" type="text/css">
    <link rel="stylesheet" href="assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
    <!-- Page plugins -->
    <!-- Argon CSS -->
    <link rel="stylesheet" href="assets/css/argon.css?v=1.2.0" type="text/css">
    <link rel="stylesheet" href="assets/css/fileinput.min.css">
</head>

<body>
    <!-- Sidenav -->
    <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
        <div class="scrollbar-inner">
            <!-- Brand -->
            <div class="sidenav-header  align-items-center">
                <a class="navbar-brand" href="javascript:void(0)">
                    <h2>IMAJINASI</h2>
                </a>
            </div>
            <div class="navbar-inner">
                <!-- Collapse -->
                <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                    <!-- Nav items -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link " href="dashboard.php">
                                <i class="ni ni-tv-2 text-primary"></i>
                                <span class="nav-link-text">Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="dataproduk.php">
                                <i class="ni ni-box-2 text-orange"></i>
                                <span class="nav-link-text">Data Produk</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="datapenjualan.php">
                                <i class="ni ni-cart text-primary"></i>
                                <span class="nav-link-text">Data Penjualan</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="datauser.php">
                                <i class="ni ni-single-02 text-yellow"></i>
                                <span class="nav-link-text">Data User</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="kasir.php">
                                <i class="ni ni-shop text-default"></i>
                                <span class="nav-link-text">Kasir</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pengaturan.php">
                                <i class="ni ni-settings-gear-65 text-default"></i>
                                <span class="nav-link-text">Pengaturan</span>
                            </a>
                        </li>
                    </ul>
                    <!-- Divider -->

                    <!-- Heading -->

                    <!-- Navigation -->
                    <ul class="navbar-nav mb-md-3">
                        <li class="nav-item">
                            <a class="nav-link active active-pro" href="upgrade.php">
                                <i class="ni ni-check-bold text-dark"></i>
                                <span class="nav-link-text">Version app v.1.0</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- Main content -->
    <div class="main-content" id="panel">
        <!-- Topnav -->
        <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Search form -->

                    <!-- Navbar links -->
                    <ul class="navbar-nav align-items-center  ml-md-auto ">
                        <li class="nav-item d-xl-none">
                            <!-- Sidenav toggler -->
                            <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin"
                                data-target="#sidenav-main">
                                <div class="sidenav-toggler-inner">
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item d-sm-none">
                            <a class="nav-link" href="#" data-action="search-show" data-target="#navbar-search-main">
                                <i class="ni ni-zoom-split-in"></i>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="ni ni-bell-55"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-xl  dropdown-menu-right  py-0 overflow-hidden">
                                <!-- Dropdown header -->
                                <div class="px-3 py-3">
                                    <h6 class="text-sm text-muted m-0">You have <strong class="text-primary">13</strong>
                                        notifications.
                                    </h6>
                                </div>
                                <!-- List group -->
                                <div class="list-group list-group-flush">
                                    <a href="#!" class="list-group-item list-group-item-action">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <!-- Avatar -->
                                                <img alt="Image placeholder" src="assets/img/theme/team-1.jpg"
                                                    class="avatar rounded-circle">
                                            </div>
                                            <div class="col ml--2">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div>
                                                        <h4 class="mb-0 text-sm">John Snow</h4>
                                                    </div>
                                                    <div class="text-right text-muted">
                                                        <small>2 hrs ago</small>
                                                    </div>
                                                </div>
                                                <p class="text-sm mb-0">Let's meet at Starbucks at 11:30. Wdyt?</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#!" class="list-group-item list-group-item-action">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <!-- Avatar -->
                                                <img alt="Image placeholder" src="assets/img/theme/team-2.jpg"
                                                    class="avatar rounded-circle">
                                            </div>
                                            <div class="col ml--2">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div>
                                                        <h4 class="mb-0 text-sm">John Snow</h4>
                                                    </div>
                                                    <div class="text-right text-muted">
                                                        <small>3 hrs ago</small>
                                                    </div>
                                                </div>
                                                <p class="text-sm mb-0">A new issue has been reported for Argon.</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#!" class="list-group-item list-group-item-action">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <!-- Avatar -->
                                                <img alt="Image placeholder" src="assets/img/theme/team-3.jpg"
                                                    class="avatar rounded-circle">
                                            </div>
                                            <div class="col ml--2">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div>
                                                        <h4 class="mb-0 text-sm">John Snow</h4>
                                                    </div>
                                                    <div class="text-right text-muted">
                                                        <small>5 hrs ago</small>
                                                    </div>
                                                </div>
                                                <p class="text-sm mb-0">Your posts have been liked a lot.</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#!" class="list-group-item list-group-item-action">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <!-- Avatar -->
                                                <img alt="Image placeholder" src="assets/img/theme/team-4.jpg"
                                                    class="avatar rounded-circle">
                                            </div>
                                            <div class="col ml--2">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div>
                                                        <h4 class="mb-0 text-sm">John Snow</h4>
                                                    </div>
                                                    <div class="text-right text-muted">
                                                        <small>2 hrs ago</small>
                                                    </div>
                                                </div>
                                                <p class="text-sm mb-0">Let's meet at Starbucks at 11:30. Wdyt?</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#!" class="list-group-item list-group-item-action">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <!-- Avatar -->
                                                <img alt="Image placeholder" src="assets/img/theme/team-5.jpg"
                                                    class="avatar rounded-circle">
                                            </div>
                                            <div class="col ml--2">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div>
                                                        <h4 class="mb-0 text-sm">John Snow</h4>
                                                    </div>
                                                    <div class="text-right text-muted">
                                                        <small>3 hrs ago</small>
                                                    </div>
                                                </div>
                                                <p class="text-sm mb-0">A new issue has been reported for Argon.</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <!-- View all -->
                                <a href="#!" class="dropdown-item text-center text-primary font-weight-bold py-3">View
                                    all</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="ni ni-ungroup"></i>
                            </a>
                            <div
                                class="dropdown-menu dropdown-menu-lg dropdown-menu-dark bg-default  dropdown-menu-right ">
                                <div class="row shortcuts px-4">
                                    <a href="#!" class="col-4 shortcut-item">
                                        <span class="shortcut-media avatar rounded-circle bg-gradient-red">
                                            <i class="ni ni-calendar-grid-58"></i>
                                        </span>
                                        <small>Calendar</small>
                                    </a>
                                    <a href="#!" class="col-4 shortcut-item">
                                        <span class="shortcut-media avatar rounded-circle bg-gradient-orange">
                                            <i class="ni ni-email-83"></i>
                                        </span>
                                        <small>Email</small>
                                    </a>
                                    <a href="#!" class="col-4 shortcut-item">
                                        <span class="shortcut-media avatar rounded-circle bg-gradient-info">
                                            <i class="ni ni-credit-card"></i>
                                        </span>
                                        <small>Payments</small>
                                    </a>
                                    <a href="#!" class="col-4 shortcut-item">
                                        <span class="shortcut-media avatar rounded-circle bg-gradient-green">
                                            <i class="ni ni-books"></i>
                                        </span>
                                        <small>Reports</small>
                                    </a>
                                    <a href="#!" class="col-4 shortcut-item">
                                        <span class="shortcut-media avatar rounded-circle bg-gradient-purple">
                                            <i class="ni ni-pin-3"></i>
                                        </span>
                                        <small>Maps</small>
                                    </a>
                                    <a href="#!" class="col-4 shortcut-item">
                                        <span class="shortcut-media avatar rounded-circle bg-gradient-yellow">
                                            <i class="ni ni-basket"></i>
                                        </span>
                                        <small>Shop</small>
                                    </a>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
                        <li class="nav-item dropdown">
                        <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <div class="media align-items-center">
                            <span class="avatar avatar-sm rounded-circle">
                                <img alt="Image placeholder" src="assets/img/theme/team-4.jpg">
                            </span>
                            <div class="media-body  ml-2  d-none d-lg-block">
                                <span class="mb-0 text-sm  font-weight-bold"><?php echo $n['nama_admin'] ?></span>
                            </div>
                            </div>
                        </a>
                        <div class="dropdown-menu  dropdown-menu-right ">
                            <div class="dropdown-header noti-title">
                            <h6 class="text-overflow m-0">Welcome!</h6>
                            </div>

                            <a href="logout.php" class="dropdown-item">
                            <i class="ni ni-user-run"></i>
                            <span>Logout</span>
                            </a>
                        </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header -->
        <!-- Header -->
        <div class="header bg-primary pb-6">
            <div class="container-fluid">
                <div class="header-body">
                    <div class="row align-items-center py-4">
                        <div class="col-lg-6 col-7">
                            <h6 class="h2 text-white d-inline-block mb-0">Data Produk</h6>
                            <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                    <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                                    <li class="breadcrumb-item active">Data Produk</li>
                                </ol>
                            </nav>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <?php 

            if (isset($_POST['simpan_produk'])){
                simpan_produk($_POST);
            }
        
        ?>
        <!-- Page content -->
        <div class="container-fluid mt--6">
            <div class="row">
                <div class="col-xl-4 order-xl-2">
                    <div class="card card-profile">

                        <div class="card-body pt-3">
                            <h2>Menu</h2>
                            <a href="#" class="btn btn-primary btn-block">Tambah Produk</a>
                            <a href="kelolaproduk.php" class="btn btn-primary btn-block">Kelola Produk</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 order-xl-1">
                    <div class="card">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h3 class="mb-0">Data Produk</h3>
                                </div>

                            </div>
                        </div>
                        <div class="card-body">
                            <form method="POST" enctype="multipart/form-data">
                                <h6 class="heading-small text-muted mb-4">Identitas Produk</h6>
                                <div class="pl-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label">Nama Produk</label>
                                        <input type="text" name="nama_produk" required class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label">Deskripsi Pendek Produk
                                        </label>
                                        <input type="text" name="desk_produk" required class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label">Harga Produk</label>
                                        <input type="text" id="hargaproduk" name="harga" required class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label">Volume Cup/Botol</label>
                                        <input type="text" name="vol" required class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label">Tentang Produk</label>
                                        <textarea type="text" name="tentang" rows="10" class="form-control"
                                            required></textarea>
                                    </div>

                                </div>
                                <hr class="my-4" />
                                <!-- Address -->
                                <h6 class="heading-small text-muted mb-4">Thumbnail Foto Produk</h6>
                                <div class="pl-lg-4">

                                    <div class="form-group">
                                        <label for="">Upload Thumbnail Foto Produk </label>
                                        <div class="file-loading">
                                            <input id="thumb_foto" name="thumb_foto" class="file" type="file"
                                                 data-theme="fas" required>
                                        </div>

                                    </div>
                                </div>
                                <hr class="my-4" />
                                <!-- Address -->
                                <h6 class="heading-small text-muted mb-4">Foto Produk</h6>
                                <div class="pl-lg-4">

                                    <div class="form-group">
                                        <label for="">Upload Foto Produk </label>
                                        <div class="file-loading">
                                            <input id="foto_produk" name="foto_produk[]" class="file" type="file"
                                                multiple data-theme="fas" required>
                                        </div>

                                    </div>
                                </div>
                                <hr>
                                <div class="pl-lg-4">

                                    <div class="form-group">
                                        <label for="">Kategori</label>
                                       
                                           <select name="kategori" class="form-control" id="">
                                               <option value="">--- Pilih Kategori ---</option>
                                                <?php 
                                                    $kategori = mysqli_query($koneksi, "SELECT * FROM kategori");

                                                    foreach($kategori as $k){

                                                ?>  

                                                    <option value="<?php echo $k['id_kategori'] ?>"><?php echo $k['kategori'] ?> => <?php echo $k['jenis_kategori'] ?></option>

                                                <?php } ?>
                                           </select>
                                        

                                    </div>
                                </div>
                                <hr class="my-4" />
                                <?php 

                                    if ($_SESSION['level'] == "Management" || $_SESSION['level'] == "Keuangan" || $_SESSION['level'] == "Kasir" || $_SESSION['level'] == "Marketing") {
                                        echo "<p class='text-danger text-right'></p>";
                                    } elseif ($_SESSION['level'] == "Super Admin") {
                                
                                ?>
                                <div class="form-group float-right">
                                    <button type="submit" name="simpan_produk" class="btn btn-primary">Simpan</button>
                                </div>
                                <?php } ?>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer -->
            <footer class="footer pt-0">
                <div class="row align-items-center justify-content-lg-between">
                    <div class="col-lg-6">
                        <div class="copyright text-center text-xl-left text-muted">
                            &copy; 2021 Template by <a href="https://www.creative-tim.com" class="font-weight-bold ml-1"
                                target="_blank">Creative
                                Tim</a> and Development by <a href="https://www.instagram.com/rizuji23"
                                class="font-weight-bold ml-1" target="_blank">Rizki Fauzi</a>
                        </div>
                    </div>

                </div>
            </footer>
        </div>
    </div>
    <!-- Argon Scripts -->
    <!-- Core -->
    <script src="assets/vendor/jquery/dist/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/js-cookie/js.cookie.js"></script>
    <script src="assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
    <script src="assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
    <!-- Optional JS -->
    <script src="assets/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="assets/vendor/chart.js/dist/Chart.extension.js"></script>
    <!-- Argon JS -->
    <script src="assets/js/argon.js?v=1.2.0"></script>
    <script src="assets/js/fileinput.min.js"></script>
    <script src="assets/js/jquery.mask.min.js"></script>
    <script src="assets/js/scripts.js"></script>
</body>

</html>
<?php } ?>