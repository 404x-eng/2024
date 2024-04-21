<?php
    include "koneksi.php";
    ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Perpustakaan</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap Icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- SimpleLightbox plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styless.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#page-top">Perpustakaan</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto my-2 my-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                        <li class="nav-item"><a class="nav-link" href="#portfolio">Buku</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Daftar</a></li>
                        <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container px-4 px-lg-5 h-100">
                <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-8 align-self-end">
                        <h1 class="text-white font-weight-bold">Membuka Cakrawala Baru, Lewat Layar Digital</h1>
                        <hr class="divider" />
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                        <p class="text-white-75 mb-5">Layar digital, seperti smartphone, tablet, dan komputer, membuka pintu ke dunia informasi yang tak terbatas. Perpustakaan digital memungkinkan pengguna untuk mengakses berbagai macam buku, artikel, dan sumber daya lainnya dengan mudah dan cepat.

</p>
                        <a class="btn btn-primary btn-xl" href="#about">Lanjut</a>
                    </div>
                </div>
            </div>
        </header>
        <!-- About-->
        <section class="page-section bg-primary" id="about">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="text-white mt-0">Kami punya yang Anda butuhkan!</h2>
                        <hr class="divider divider-light" />
                        <p class="text-white-75 mb-4">Kami menawarkan berbagai layanan yang dapat membantu meningkatkan literasi dan akses informasi bagi semua orang. Dengan teknologi yang terus berkembang, perpustakaan digital akan terus berkembang dan menjadi sumber daya yang penting bagi masyarakat.</p>
                        <a class="btn btn-light btn-xl" href="#services">Get Started!</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container px-4 px-lg-5">
                <h2 class="text-center mt-0">Service</h2>
                <hr class="divider" />
                <div class="row gx-4 gx-lg-5">
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            
                            <h3 class="h4 mb-2">24/7</h3>
                            <p class="text-muted mb-0"> Anda dapat mengakses koleksi perpustakaan digital kapan saja, bahkan di tengah malam atau saat liburan, tanpa terbatas oleh waktu operasional perpustakaan fisik.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            
                            <h3 class="h4 mb-2">Up to Date</h3>
                            <p class="text-muted mb-0">Kami akan selalu memberitahu anda jika kami memiliki koleksi baru yang cocok dengan selera Anda!</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <h3 class="h4 mb-2">Membaca Dimana Saja dan Kapan Saja</h3>
                            <p class="text-muted mb-0">Anda tidak perlu membuang waktu untuk pergi ke perpustakaan fisik atau menunggu salinan fisik dari buku yang dipinjam.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <h3 class="h4 mb-2">Gampang Digunakan</h3>
                            <p class="text-muted mb-0">Proses membaca menjadi lebih sederhana dan mudah dilakukan. Dengan hanya satu klik.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <h2 class="text-center mt-0">Buku</h2>
        <hr class="divider"/>
        <!-- Portfolio-->
        <div id="portfolio">
            <div class="container-fluid p-0">
                <div class="row g-0">
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="1.jpg" title="THE M">
                            <img class="img-fluid" src="1.jpg" alt="..." />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">THE</div>
                                <div class="project-name">M</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="2.jpg" title="THE FLOWERS">
                            <img class="img-fluid" src="2.jpg" alt="..." />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">The</div>
                                <div class="project-name">Flowers</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="3.jpg" title="FALLEN LEAVES">
                            <img class="img-fluid" src="3.jpg" alt="..." />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Fallen</div>
                                <div class="project-name">Leaves</div>
                            </div>
                        </a>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- Call to action-->
        <section class="page-section bg-dark text-white">
            <div class="container px-4 px-lg-5 text-center">
                <h2 class="mb-4">Ayo Daftar Sekarang</h2>
                <a class="btn btn-light btn-xl" href="#contact">Get Started!</a>
            </div>
        </section>
        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6 text-center">
                        <h2 class="mt-0">Ayo Daftar!</h2>
                        <hr class="divider" />
                        <p class="text-muted mb-5">Mari perbanyak ilmu dengan daftar di Pepustakaan Digital!</p>
                    </div>
                </div>
                <div class="card-body">
                    <?php
                    if(isset($_POST['register'])) {
                        $nama     = $_POST['nama'];
                        $email    = $_POST['email'];
                        $alamat   = $_POST['alamat'];
                        $no_telepon = $_POST['no_telepon'];
                        $username = $_POST['username']; 
                        $level    = $_POST['level'];
                        $password = md5($_POST['password']);
                            
                        $insert = mysqli_query($koneksi, "INSERT INTO user(nama,email,alamat,no_telepon,username,password,level) VALUES('$nama','$email','$alamat','$no_telepon','$username','$password','$level')");

                        if($insert){
                            echo '<script>alert("Register berhasil"); location.href="index2/index.php";</script>';
                        } else {
                            echo '<script>alert("Gagal,silahkan ulangi kembali");</script>';
                        
                        }
                    }



                    ?>
                    <form method="post">
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input class="form-control" type="text" required name="nama" placeholder="Masukkan Nama Lengkap" />
                                    <label>Nama Lengkap</label>
                                </div>
                            </div>      
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input class="form-control" type="text" required name="email" placeholder="Masukkan Email" />
                                    <label>Email</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input class="form-control" type="text" required name="no_telepon" placeholder="Masukkan No. Telepon" />
                                    <label>No. Telepon</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <textarea required name="alamat" rows="5" class="form-control" placeholder="Masukkan Alamat"></textarea>
                                    <label>Alamat</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">  
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input class="form-control" type="username" required name="username" placeholder="Masukkan Username" />
                                    <label>Username</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input class="form-control" id="inputPassword" type="password" required name="password" placeholder="Masukkan Password" />
                                    <label for="inputPassword">Password</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group text-center">
                            <label class="small mb-1">Sebagai</label>
                            <select name="level" class="form-select">
                                <option value="peminjam">Peminjam</option>
                            
                            </select>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                            <button class="btn btn-primary" type="submit" name="register" value="register">Register</button>
                            <a class="btn btn-danger" href="login.php">Login</a>
                        </div>
                    </form>
                </div>
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-4 text-center mb-5 mb-lg-0">
                        <i class="bi-phone fs-2 mb-3 text-muted"></i>
                        <div>+99 (999) 999-9999</div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="bg-light py-5">
            <div class="container px-4 px-lg-5"><div class="small text-center text-muted">Copyright &copy; 2024 - Perpustakaan Digital</div></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- SimpleLightbox plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
