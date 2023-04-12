    @extends('master')

    @section('content')
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
                                    <div class="d-flex flex-column mt-4">
                                        <button onclick="window.location.href='/booking';" class="btn btn-primary btn-sm" type="button">Book Now</button>
                                        <button class="btn btn-outline-primary btn-sm mt-2" type="button">Like</button>
                                    </div>
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
                                    <div class="d-flex flex-column mt-4">
                                        <button onclick="window.location.href='/booking';" class="btn btn-primary btn-sm" type="button">Book Now</button>
                                        <button class="btn btn-outline-primary btn-sm mt-2" type="button">Like</button>
                                    </div>
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
                                    <div class="d-flex flex-column mt-4">
                                        <button onclick="window.location.href='/booking';" class="btn btn-primary btn-sm" type="button">Book Now</button>
                                        <button class="btn btn-outline-primary btn-sm mt-2" type="button">Like</button>
                                    </div>
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
                                    <div class="d-flex flex-column mt-4">
                                        <button onclick="window.location.href='/booking';" class="btn btn-primary btn-sm" type="button">Book Now</button>
                                        <button class="btn btn-outline-primary btn-sm mt-2" type="button">Like</button>
                                    </div>
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
                                    <div class="d-flex flex-column mt-4">
                                        <button onclick="window.location.href='/booking';" class="btn btn-primary btn-sm" type="button">Book Now</button>
                                        <button class="btn btn-outline-primary btn-sm mt-2" type="button">Like</button>
                                    </div>
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
                                    <div class="d-flex flex-column mt-4">
                                        <button onclick="window.location.href='/booking';" class="btn btn-primary btn-sm" type="button">Book Now</button>
                                        <button class="btn btn-outline-primary btn-sm mt-2" type="button">Like</button>
                                    </div>
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
                                    <div class="d-flex flex-column mt-4">
                                        <button onclick="window.location.href='/booking';" class="btn btn-primary btn-sm" type="button">Book Now</button>
                                        <button class="btn btn-outline-primary btn-sm mt-2" type="button">Like</button>
                                    </div>
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
                                    <div class="d-flex flex-column mt-4">
                                        <button onclick="window.location.href='/booking';" class="btn btn-primary btn-sm" type="button">Book Now</button>
                                        <button class="btn btn-outline-primary btn-sm mt-2" type="button">Like</button>
                                    </div>
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
                                    <div class="d-flex flex-column mt-4">
                                        <button onclick="window.location.href='/booking';" class="btn btn-primary btn-sm" type="button">Book Now</button>
                                        <button class="btn btn-outline-primary btn-sm mt-2" type="button">Like</button>
                                    </div>
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
                                    <div class="d-flex flex-column mt-4">
                                        <button onclick="window.location.href='/booking';" class="btn btn-primary btn-sm" type="button">Book Now</button>
                                        <button class="btn btn-outline-primary btn-sm mt-2" type="button">Like</button>
                                    </div>
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
                                    <div class="d-flex flex-column mt-4">
                                        <button onclick="window.location.href='/booking';" class="btn btn-primary btn-sm" type="button">Book Now</button>
                                        <button class="btn btn-outline-primary btn-sm mt-2" type="button">Like</button>
                                    </div>
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
                                    <div class="d-flex flex-column mt-4">
                                        <button onclick="window.location.href='/booking';" class="btn btn-primary btn-sm" type="button">Book Now</button>
                                        <button class="btn btn-outline-primary btn-sm mt-2" type="button">Like</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pills content -->
    @endsection
