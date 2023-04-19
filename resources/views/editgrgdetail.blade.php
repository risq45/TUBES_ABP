<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>MechanicMaster - Home</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/logo.jpg" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@600;700&family=Ubuntu:wght@400;500&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
</head>

<body>
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="/admin" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-primary"><img src="{{asset('img/logo.jpg')}}"></i>MechanicMaster</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="/admin" class="nav-item nav-link ">Home</a>
                <a href="/addgarage" class="nav-item nav-link">Add Garage</a>
                <a href="/editgarage" class="nav-item nav-link active">Edit Garage</a>
                <a href="/deletegarage" class="nav-item nav-link">Delete Garage</a>
            </div>
            <form action="/logout" method="POST">
                @csrf
                <button type="submit" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Logout<i class="fa fa-arrow-right ms-3"></i></button>
            </form>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Body Start -->
    <div class="container-xxl py-5">
        <div class="row">
            <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
                <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="tm-block-title d-inline-block">Add Garage</h2>
                        </div>
                    </div>
                    <div class="row tm-edit-product-row">
                        <div class="col-xl-6 col-lg-6 col-md-12">
                            <form action="/editgrg" method="post" class="tm-edit-product-form">
                                @csrf
                                <div class="form-group mb-3">
                                    <label for="nama">Nama</label>
                                    <select class="custom-select tm-select-accounts" id="category" name="NamaOld">
                                        <option value={{$grg2->Nama}} > {{$grg2->Nama}} </option>
                                    </select>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="name">Nama baru </label>
                                    <input id="name" name="Nama" type="text" placeholder="Masukkan nama baru" class="form-control validate"/>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="alamat">Alamat</label>
                                    <textarea class="form-control validate tm-small" rows="5" required name="Address">{{$grg2->Address}}</textarea>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="category">Jenis kendaraan yang ditangani</label>
                                    <select class="custom-select" id="category" name="JenisKendaraan">
                                        <option selected="">Select category</option>
                                        <option value="Mobil">Mobil</option>
                                        <option value="Motor">Motor</option>
                                        <option value="MobilMotor">Mobil & Motor</option>
                                    </select>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="durasi">Biaya perbaikan yang dibutuhkan</label>
                                    <input id="durasi" name="Biaya" type="text" class="form-control" required="">
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary btn-block text-uppercase">Update Now</button>
                                </div>                          
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-12 mx-auto mb-4">
                                <div class="tm-product-img-edit mx-auto">
                                    <img src="{{asset('img/bengkel.jpg')}}" alt="Product image" class="img-fluid d-block mx-auto">
                                </div>
                                <div class="custom-file mt-3 mb-3">
                                    <input id="fileInput" type="file" style="display:none;" />
                                    <input type="button"class="btn btn-primary btn-block mx-auto" value="CHANGE IMAGE NOW" onclick="document.getElementById('fileInput').click();"/>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Body End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>