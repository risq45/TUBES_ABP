<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>MechanicMaster - Available Garage</title>
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
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">


</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="/" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-primary"><img src="img/logo.jpg"></i>MechanicMaster</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="/" class="nav-item nav-link active">Home</a>
                <a href="/about" class="nav-item nav-link">About Us</a>
                <a href="/service" class="nav-item nav-link">Services</a>
                <div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu fade-up m-0">
                        <a href="/" class="dropdown-item">Available Garage</a>                        
                        <a href="/booking" class="dropdown-item">Booking</a>
                        <a href="/technicians" class="dropdown-item">Technicians</a>
                        <a href="/testimonial" class="dropdown-item">Testimonial</a>
                    </div>
                </div>
                <a href="/contact" class="nav-item nav-link">Contact</a>
            </div>
            <form action="/logout" method="POST">
                @csrf
                <button type="submit" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Logout<i class="fa fa-arrow-right ms-3"></i></button>
            </form>
        </div>
    </nav>
    <!-- Navbar End -->
    
    <!-- Pills navs -->
    <ul class="nav nav-pills mb-3" id="ex1" role="tablist">
        <li class="nav-item" role="presentation">
        <a
            class="nav-link active"
            id="ex1-tab-1"
            data-mdb-toggle="pill"
            href="#ex1-pills-1"
            role="tab"
            aria-controls="ex1-pills-1"
            aria-selected="true"
            >Near You</a
        >
        </li>
        <li class="nav-item" role="presentation">
        <a
            class="nav-link"
            id="ex1-tab-2"
            data-mdb-toggle="pill"
            href="#ex1-pills-2"
            role="tab"
            aria-controls="ex1-pills-2"
            aria-selected="false"
            >Popular</a
        >
        </li>
        <li class="nav-item" role="presentation">
        <a
            class="nav-link"
            id="ex1-tab-3"
            data-mdb-toggle="pill"
            href="#ex1-pills-3"
            role="tab"
            aria-controls="ex1-pills-3"
            aria-selected="false"
            >Cheapest</a
        >
        </li>
    </ul>
    <!-- Pills navs -->
    
    <!-- Pills content -->
    <div class="tab-content" id="ex1-content">
        <div
        class="tab-pane fade show active"
        id="ex1-pills-1"
        role="tabpanel"
        aria-labelledby="ex1-tab-1"
        >
            <div class="container mt-5 mb-5">
                <div class="d-flex justify-content-center row">
                    <div class="col-md-10">
                        <div class="row p-2 bg-white border rounded">
                            <div class="col-md-3 mt-1"><img class="img-fluid img-responsive rounded product-image" src="img/bengkel.jpg"></div>
                            <div class="col-md-6 mt-1">
                                <h5>Bengkel ABC</h5>
                                <div class="d-flex flex-row">
                                    <div class="ratings mr-2"><i class="fa fa-star checked" style="color: red;"></i><i class="fa fa-star checked" style="color: red;"></i><i class="fa fa-star checked" style="color: red;"></i><i class="fa fa-star checked" style="color: red;"></i><i class="fa fa-star"></i></div><span>310</span>
                                </div>
                                <div class="mt-1 mb-1 spec-1"><span><i class='fas fa-car-alt' style='font-size:24px;color:red'></i></span></div>
                                <div class="mt-1 mb-1 spec-1"><span>Lorem ipsum</span></div>
                                <p class="text-justify text-truncate para mb-0">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.<br><br></p>
                            </div>
                            <div class="align-items-center align-content-center col-md-3 border-left mt-1">
                                <h6 class="text-success">Free booking fee</h6>
                                <div class="d-flex flex-column mt-4">
                                    <button onclick="window.location.href='booking.html';" class="btn btn-outline-primary btn-sm mt-2" type="button">Book Now</button>
                                </div>
                            </div>
                        </div>
                        <div class="row p-2 bg-white border rounded mt-2">
                            <div class="col-md-3 mt-1"><img class="img-fluid img-responsive rounded product-image" src="img/bengkel2.jpg"></div>
                            <div class="col-md-6 mt-1">
                                <h5>Bengkel ABC</h5>
                                <div class="d-flex flex-row">
                                    <div class="ratings mr-2"><i class="fa fa-star checked" style="color: red;"></i><i class="fa fa-star checked" style="color: red;"></i><i class="fa fa-star checked" style="color: red;"></i><i class="fa fa-star checked" style="color: red;"></i><i class="fa fa-star"></i></div><span>310</span>
                                </div>
                                <div class="mt-1 mb-1 spec-1"><span><i class='fas fa-car-alt' style='font-size:24px;color:red'></i></span></div>
                                <div class="mt-1 mb-1 spec-1"><span>Lorem ipsum</span></div>
                                <p class="text-justify text-truncate para mb-0">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.<br><br></p>
                            </div>
                            <div class="align-items-center align-content-center col-md-3 border-left mt-1">
                                <h6 class="text-success">Free booking fee</h6>
                                <div class="d-flex flex-column mt-4">
                                    <button onclick="window.location.href='booking.html';" class="btn btn-outline-primary btn-sm mt-2" type="button">Book Now</button>
                                </div>
                            </div>
                        </div>
                        <div class="row p-2 bg-white border rounded mt-2">
                            <div class="col-md-3 mt-1"><img class="img-fluid img-responsive rounded product-image" src="img/bengkel4.jpg"></div>
                            <div class="col-md-6 mt-1">
                                <h5>Bengkel ABC</h5>
                                <div class="d-flex flex-row">
                                    <div class="ratings mr-2"><i class="fa fa-star checked" style="color: red;"></i><i class="fa fa-star checked" style="color: red;"></i><i class="fa fa-star checked" style="color: red;"></i><i class="fa fa-star checked" style="color: red;"></i><i class="fa fa-star"></i></div><span>310</span>
                                </div>
                                <div class="mt-1 mb-1 spec-1"><span><i class='fas fa-motorcycle' style='font-size:24px;color:red'></i></span></div>
                                <div class="mt-1 mb-1 spec-1"><span>Lorem ipsum</span></div>
                                <p class="text-justify text-truncate para mb-0">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.<br><br></p>
                            </div>
                            <div class="align-items-center align-content-center col-md-3 border-left mt-1">
                                <h6 class="text-success">Free booking fee</h6>
                                <div class="d-flex flex-column mt-4">
                                    <button onclick="window.location.href='booking.html';" class="btn btn-outline-primary btn-sm mt-2" type="button">Book Now</button>
                                </div>
                            </div>
                        </div>
                        <div class="row p-2 bg-white border rounded mt-2">
                            <div class="col-md-3 mt-1"><img class="img-fluid img-responsive rounded product-image" src="img/bengkel3.jpg"></div>
                            <div class="col-md-6 mt-1">
                                <h5>Bengkel ABC</h5>
                                <div class="d-flex flex-row">
                                    <div class="ratings mr-2"><i class="fa fa-star checked" style="color: red;"></i><i class="fa fa-star checked" style="color: red;"></i><i class="fa fa-star checked" style="color: red;"></i><i class="fa fa-star checked" style="color: red;"></i><i class="fa fa-star"></i></div><span>310</span>
                                </div>
                                <div class="mt-1 mb-1 spec-1"><span><i class='fas fa-car-alt' style='font-size:24px;color:red'></i></span></div>
                                <div class="mt-1 mb-1 spec-1"><span>Lorem ipsum</span></div>
                                <p class="text-justify text-truncate para mb-0">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.<br><br></p>
                            </div>
                            <div class="align-items-center align-content-center col-md-3 border-left mt-1">
                                <h6 class="text-success">Free booking fee</h6>
                                <div class="d-flex flex-column mt-4">
                                    <button onclick="window.location.href='booking.html';" class="btn btn-outline-primary btn-sm mt-2" type="button">Book Now</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="ex1-pills-2" role="tabpanel" aria-labelledby="ex1-tab-2">
            <div class="container mt-5 mb-5">
                <div class="d-flex justify-content-center row">
                    <div class="col-md-10">
                        <div class="row p-2 bg-white border rounded">
                            <div class="col-md-3 mt-1"><img class="img-fluid img-responsive rounded product-image" src="img/bengkel.jpg"></div>
                            <div class="col-md-6 mt-1">
                                <h5>Bengkel ABC</h5>
                                <div class="d-flex flex-row">
                                    <div class="ratings mr-2"><i class="fa fa-star checked" style="color: red;"></i><i class="fa fa-star checked" style="color: red;"></i><i class="fa fa-star checked" style="color: red;"></i><i class="fa fa-star checked" style="color: red;"></i><i class="fa fa-star checked" style="color: red;"></i></div><span>310</span>
                                </div>
                                <div class="mt-1 mb-1 spec-1"><span><i class='fas fa-car-alt' style='font-size:24px;color:red'></i></span></div>
                                <div class="mt-1 mb-1 spec-1"><span>Lorem ipsum</span></div>
                                <p class="text-justify text-truncate para mb-0">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.<br><br></p>
                            </div>
                            <div class="align-items-center align-content-center col-md-3 border-left mt-1">
                                <h6 class="text-success">Free booking fee</h6>
                                <div class="d-flex flex-column mt-4">
                                    <button onclick="window.location.href='booking.html';" class="btn btn-outline-primary btn-sm mt-2" type="button">Book Now</button>
                                </div>
                            </div>
                        </div>
                        <div class="row p-2 bg-white border rounded mt-2">
                            <div class="col-md-3 mt-1"><img class="img-fluid img-responsive rounded product-image" src="img/bengkel2.jpg"></div>
                            <div class="col-md-6 mt-1">
                                <h5>Bengkel ABC</h5>
                                <div class="d-flex flex-row">
                                    <div class="ratings mr-2"><i class="fa fa-star checked" style="color: red;"></i><i class="fa fa-star checked" style="color: red;"></i><i class="fa fa-star checked" style="color: red;"></i><i class="fa fa-star checked" style="color: red;"></i><i class="fa fa-star checked" style="color: red;"></i></div><span>310</span>
                                </div>
                                <div class="mt-1 mb-1 spec-1"><span><i class='fas fa-car-alt' style='font-size:24px;color:red'></i></span></div>
                                <div class="mt-1 mb-1 spec-1"><span>Lorem ipsum</span></div>
                                <p class="text-justify text-truncate para mb-0">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.<br><br></p>
                            </div>
                            <div class="align-items-center align-content-center col-md-3 border-left mt-1">
                                <h6 class="text-success">Free booking fee</h6>
                                <div class="d-flex flex-column mt-4">
                                    <button onclick="window.location.href='booking.html';" class="btn btn-outline-primary btn-sm mt-2" type="button">Book Now</button>
                                </div>
                            </div>
                        </div>
                        <div class="row p-2 bg-white border rounded mt-2">
                            <div class="col-md-3 mt-1"><img class="img-fluid img-responsive rounded product-image" src="img/bengkel4.jpg"></div>
                            <div class="col-md-6 mt-1">
                                <h5>Bengkel ABC</h5>
                                <div class="d-flex flex-row">
                                    <div class="ratings mr-2"><i class="fa fa-star checked" style="color: red;"></i><i class="fa fa-star checked" style="color: red;"></i><i class="fa fa-star checked" style="color: red;"></i><i class="fa fa-star checked" style="color: red;"></i><i class="fa fa-star"></i></div><span>310</span>
                                </div>
                                <div class="mt-1 mb-1 spec-1"><span><i class='fas fa-motorcycle' style='font-size:24px;color:red'></i></span></div>
                                <div class="mt-1 mb-1 spec-1"><span>Lorem ipsum</span></div>
                                <p class="text-justify text-truncate para mb-0">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.<br><br></p>
                            </div>
                            <div class="align-items-center align-content-center col-md-3 border-left mt-1">
                                <h6 class="text-success">Free booking fee</h6>
                                <div class="d-flex flex-column mt-4">
                                    <button onclick="window.location.href='booking.html';" class="btn btn-outline-primary btn-sm mt-2" type="button">Book Now</button>
                                </div>
                            </div>
                        </div>
                        <div class="row p-2 bg-white border rounded mt-2">
                            <div class="col-md-3 mt-1"><img class="img-fluid img-responsive rounded product-image" src="img/bengkel3.jpg"></div>
                            <div class="col-md-6 mt-1">
                                <h5>Bengkel ABC</h5>
                                <div class="d-flex flex-row">
                                    <div class="ratings mr-2"><i class="fa fa-star checked" style="color: red;"></i><i class="fa fa-star checked" style="color: red;"></i><i class="fa fa-star checked" style="color: red;"></i><i class="fa fa-star checked" style="color: red;"></i><i class="fa fa-star"></i></div><span>310</span>
                                </div>
                                <div class="mt-1 mb-1 spec-1"><span><i class='fas fa-car-alt' style='font-size:24px;color:red'></i></span></div>
                                <div class="mt-1 mb-1 spec-1"><span>Lorem ipsum</span></div>
                                <p class="text-justify text-truncate para mb-0">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.<br><br></p>
                            </div>
                            <div class="align-items-center align-content-center col-md-3 border-left mt-1">
                                <h6 class="text-success">Free booking fee</h6>
                                <div class="d-flex flex-column mt-4">
                                    <button onclick="window.location.href='booking.html';" class="btn btn-outline-primary btn-sm mt-2" type="button">Book Now</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="ex1-pills-3" role="tabpanel" aria-labelledby="ex1-tab-3">
            <div class="container mt-5 mb-5">
                <div class="d-flex justify-content-center row">
                    <div class="col-md-10">
                        <div class="row p-2 bg-white border rounded">
                            <div class="col-md-3 mt-1"><img class="img-fluid img-responsive rounded product-image" src="img/bengkel.jpg"></div>
                            <div class="col-md-6 mt-1">
                                <h5>Bengkel ABC</h5>
                                <div class="d-flex flex-row">
                                    <div class="ratings mr-2"><i class="fa fa-star checked" style="color: red;"></i><i class="fa fa-star checked" style="color: red;"></i><i class="fa fa-star checked" style="color: red;"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div><span>310</span>
                                </div>
                                <div class="mt-1 mb-1 spec-1"><span><i class='fas fa-car-alt' style='font-size:24px;color:red'></i></span></div>
                                <div class="mt-1 mb-1 spec-1"><span>Lorem ipsum</span></div>
                                <p class="text-justify text-truncate para mb-0">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.<br><br></p>
                            </div>
                            <div class="align-items-center align-content-center col-md-3 border-left mt-1">
                                <h6 class="text-success">Free booking fee</h6>
                                <div class="d-flex flex-column mt-4">
                                    <button onclick="window.location.href='booking.html';" class="btn btn-outline-primary btn-sm mt-2" type="button">Book Now</button>
                                </div>
                            </div>
                        </div>
                        <div class="row p-2 bg-white border rounded mt-2">
                            <div class="col-md-3 mt-1"><img class="img-fluid img-responsive rounded product-image" src="img/bengkel2.jpg"></div>
                            <div class="col-md-6 mt-1">
                                <h5>Bengkel ABC</h5>
                                <div class="d-flex flex-row">
                                    <div class="ratings mr-2"><i class="fa fa-star checked" style="color: red;"></i><i class="fa fa-star checked" style="color: red;"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div><span>310</span>
                                </div>
                                <div class="mt-1 mb-1 spec-1"><span><i class='fas fa-car-alt' style='font-size:24px;color:red'></i></span></div>
                                <div class="mt-1 mb-1 spec-1"><span>Lorem ipsum</span></div>
                                <p class="text-justify text-truncate para mb-0">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.<br><br></p>
                            </div>
                            <div class="align-items-center align-content-center col-md-3 border-left mt-1">
                                <h6 class="text-success">Free booking fee</h6>
                                <div class="d-flex flex-column mt-4">
                                    <button onclick="window.location.href='booking.html';" class="btn btn-outline-primary btn-sm mt-2" type="button">Book Now</button>
                                </div>
                            </div>
                        </div>
                        <div class="row p-2 bg-white border rounded mt-2">
                            <div class="col-md-3 mt-1"><img class="img-fluid img-responsive rounded product-image" src="img/bengkel4.jpg"></div>
                            <div class="col-md-6 mt-1">
                                <h5>Bengkel ABC</h5>
                                <div class="d-flex flex-row">
                                    <div class="ratings mr-2"><i class="fa fa-star checked" style="color: red;"></i><i class="fa fa-star checked" style="color: red;"></i><i class="fa fa-star checked" style="color: red;"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div><span>310</span>
                                </div>
                                <div class="mt-1 mb-1 spec-1"><span><i class='fas fa-motorcycle' style='font-size:24px;color:red'></i></span></div>
                                <div class="mt-1 mb-1 spec-1"><span>Lorem ipsum</span></div>
                                <p class="text-justify text-truncate para mb-0">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.<br><br></p>
                            </div>
                            <div class="align-items-center align-content-center col-md-3 border-left mt-1">
                                <h6 class="text-success">Free booking fee</h6>
                                <div class="d-flex flex-column mt-4">
                                    <button onclick="window.location.href='booking.html';" class="btn btn-outline-primary btn-sm mt-2" type="button">Book Now</button>
                                </div>
                            </div>
                        </div>
                        <div class="row p-2 bg-white border rounded mt-2">
                            <div class="col-md-3 mt-1"><img class="img-fluid img-responsive rounded product-image" src="img/bengkel3.jpg"></div>
                            <div class="col-md-6 mt-1">
                                <h5>Bengkel ABC</h5>
                                <div class="d-flex flex-row">
                                    <div class="ratings mr-2"><i class="fa fa-star checked" style="color: red;"></i><i class="fa fa-star checked" style="color: red;"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div><span>310</span>
                                </div>
                                <div class="mt-1 mb-1 spec-1"><span><i class='fas fa-car-alt' style='font-size:24px;color:red'></i></span></div>
                                <div class="mt-1 mb-1 spec-1"><span>Lorem ipsum</span></div>
                                <p class="text-justify text-truncate para mb-0">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.<br><br></p>
                            </div>
                            <div class="align-items-center align-content-center col-md-3 border-left mt-1">
                                <h6 class="text-success">Free booking fee</h6>
                                <div class="d-flex flex-column mt-4">
                                    <button onclick="window.location.href='booking.html';" class="btn btn-outline-primary btn-sm mt-2" type="button">Book Now</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pills content -->

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Address</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Street, Bojongsoang, Bandung</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+62 345 67890</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Opening Hours</h4>
                    <h6 class="text-light">Monday - Friday:</h6>
                    <p class="mb-4">09.00 AM - 09.00 PM</p>
                    <h6 class="text-light">Saturday - Sunday:</h6>
                    <p class="mb-0">09.00 AM - 12.00 PM</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Services</h4>
                    <a class="btn btn-link" href="availablegarage.html">Available Garage</a>
                    <a class="btn btn-link" href="availablegarage.html#ex1-pills-1">Near You</a>
                    <a class="btn btn-link" href="availablegarage.html#ex1-pills-2">Popular</a>
                    <a class="btn btn-link" href="availablegarage.html#ex1-pills-3">Cheapest</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Newsletter</h4>
                    <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                        <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">MechanicMaster</a>, All Right Reserved.
                        Designed By <a class="border-bottom" href="https://github.com/aryafikriii/abp_web_app">aryafikriii</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


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
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script><!-- MDB -->
    <script href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"></script>
    <script href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"></script>
    <script
      type="text/javascript"
      src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"
    ></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
