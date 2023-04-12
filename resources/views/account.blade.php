    @extends('master')

    @section('content')
    <!-- Account Start -->
    <div class="container-xl px-4 mt-4">
        <!-- Account page navigation-->
        <nav class="nav nav-borders">
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
                    >Profile</a
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
                    >Security</a
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
                    >History</a
                >
                </li>
                <li class="nav-item" role="presentation">
                    <a
                        class="nav-link"
                        id="ex1-tab-4"
                        data-mdb-toggle="pill"
                        href="#ex1-pills-4"
                        role="tab"
                        aria-controls="ex1-pills-4"
                        aria-selected="false"
                        >Ordered</a
                    >
                </li>
                <li class="nav-item" role="presentation">
                    <a
                        class="nav-link"
                        id="ex1-tab-5"
                        data-mdb-toggle="pill"
                        href="#ex1-pills-5"
                        role="tab"
                        aria-controls="ex1-pills-5"
                        aria-selected="false"
                        >Liked</a
                    >
                </li>
            </ul>
            <!-- Pills navs -->
        </nav>
        <hr class="mt-0 mb-4">
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
                            <div class="container-xl px-4 mt-4">
                                <div class="row">
                                    <div class="col-xl-4">
                                        <!-- Profile picture card-->
                                        <div class="card mb-4 mb-xl-0">
                                            <div class="card-header">Profile Picture</div>
                                            <div class="card-body text-center">
                                                <!-- Profile picture image-->
                                                <img class="img-account-profile rounded-circle mb-sm-3" src="img/<?php $data = Session::get('account'); echo($data['Photo']);?>" alt="">
                                                <!-- Profile picture help block-->
                                                <p><?php 
                                                    $data = Session::get('account');
                                                    echo($data['Email']);
                                                ?></p>
                                                <div class="small font-italic text-muted mb-4">JPG or PNG no larger than 5 MB</div>
                                                <!-- Profile picture upload button-->

                                                <form action="{{route('image.upload.post')}}" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="row">
                                            
                                                        <div class="col-md-6">
                                                            <input type="file" name="image" class="form-control">
                                                        </div>
                                            
                                                        <div class="col-md-6">
                                                            <button type="submit" class="btn btn-success">Upload</button>
                                                        </div>
                                            
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-8">
                                        <!-- Account details card-->
                                        <div class="card mb-4">
                                            <div class="card-header">Account Details</div>
                                            <div class="card-body">
                                                <form>
                                                    <!-- Form Group (name)-->
                                                    <div class="mb-3">
                                                        <label class="small mb-1" for="inputname">Name</label>
                                                        <input class="form-control" id="inputname" type="text" placeholder="Enter your name" value="">
                                                    </div>
                                                    <!-- Form Group (email address)-->
                                                    <div class="mb-3">
                                                        <label class="small mb-1" for="inputEmailAddress">Email address</label>
                                                        <input class="form-control" id="inputEmailAddress" type="email" placeholder="Enter your email address" value="">
                                                    </div>
                                                    <!-- Form Group (phone number)-->
                                                    <div class="mb-3">
                                                        <label class="small mb-1" for="inputPhone">Phone number</label>
                                                        <input class="form-control" id="inputPhone" type="tel" placeholder="Enter your phone number" value="">
                                                    </div>
                                                    <!-- Form Group (address)-->
                                                    <div class="mb-3">
                                                        <label class="small mb-1" for="inputAddress">Address</label>
                                                        <input class="form-control" id="inputAddress" type="email" placeholder="Enter your address" value="">
                                                    </div>
                                                    <!-- Save changes button-->
                                                    <button class="btn btn-primary" type="button">Save changes</button>
                                                </form>
                                            </div>
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
                            <div class="container-xl px-4 mt-4">
                                <div class="row">
                                    <div class="col-lg-8">
                                        <!-- Change password card-->
                                        <div class="card mb-4">
                                            <div class="card-header">Change Password</div>
                                            <div class="card-body">
                                                <form>
                                                    <!-- Form Group (current password)-->
                                                    <div class="mb-3">
                                                        <label class="small mb-1" for="currentPassword">Current Password</label>
                                                        <input class="form-control" id="currentPassword" type="password" placeholder="Enter current password">
                                                    </div>
                                                    <!-- Form Group (new password)-->
                                                    <div class="mb-3">
                                                        <label class="small mb-1" for="newPassword">New Password</label>
                                                        <input class="form-control" id="newPassword" type="password" placeholder="Enter new password">
                                                    </div>
                                                    <!-- Form Group (confirm password)-->
                                                    <div class="mb-3">
                                                        <label class="small mb-1" for="confirmPassword">Confirm Password</label>
                                                        <input class="form-control" id="confirmPassword" type="password" placeholder="Confirm new password">
                                                    </div>
                                                    <button class="btn btn-primary" type="button">Save</button>
                                                </form>
                                            </div>
                                        </div>
                                        <!-- Delete account card-->
                                        <div class="card mb-4">
                                            <div class="card-header">Delete Account</div>
                                            <div class="card-body">
                                                <p>Deleting your account is a permanent action and cannot be undone. If you are sure you want to delete your account, select the button below.</p>
                                                <button class="btn btn-danger-soft text-danger" type="button">I understand, delete my account</button>
                                            </div>
                                        </div>
                                    </div>    
                                    <div class="col-lg-4">
                                        <!-- Two factor authentication card-->
                                        <div class="card mb-4">
                                            <div class="card-header">Two-Factor Authentication</div>
                                            <div class="card-body">
                                                <p>Add another level of security to your account by enabling two-factor authentication. We will send you a text message to verify your login attempts on unrecognized devices and browsers.</p>
                                                <form>
                                                    <div class="form-check">
                                                        <input class="form-check-input" id="twoFactorOn" type="radio" name="twoFactor" checked="">
                                                        <label class="form-check-label" for="twoFactorOn">On</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" id="twoFactorOff" type="radio" name="twoFactor">
                                                        <label class="form-check-label" for="twoFactorOff">Off</label>
                                                    </div>
                                                    <div class="mt-3">
                                                        <label class="small mb-1" for="twoFactorSMS">SMS Number</label>
                                                        <input class="form-control" id="twoFactorSMS" type="tel" placeholder="Enter a phone number" value="+62-895-1673-1433">
                                                    </div>
                                                </form>
                                            </div>
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
                            <section>
                                <div class="container py-5">
                                    <div class="row justify-content-center">
                                        <div class="col-md-8 col-lg-6 col-xl-4">
                                            <div class="card text-black">
                                                <img src="img/bengkel.jpg" class="card-img-top" alt="Apple Computer" />
                                                <div class="card-body">
                                                    <div class="text-center">
                                                        <h5 class="card-title">Bengkel ABC</h5>
                                                        <p class="text-muted mb-4">Car Garage</p>
                                                    </div>
                                                    <div>
                                                        <div class="d-flex justify-content-between">
                                                            <span>1 weeks ago</span>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex justify-content-between total font-weight-bold mt-4">
                                                        <span>Total</span><span>Rp180.000</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section>
                                <div class="container py-5">
                                    <div class="row justify-content-center">
                                        <div class="col-md-8 col-lg-6 col-xl-4">
                                            <div class="card text-black">
                                                <img src="img/bengkel4.jpg" class="card-img-top" alt="Apple Computer" />
                                                <div class="card-body">
                                                    <div class="text-center">
                                                        <h5 class="card-title">Bengkel ABC</h5>
                                                        <p class="text-muted mb-4">Motorcycle Garage</p>
                                                    </div>
                                                    <div>
                                                        <div class="d-flex justify-content-between">
                                                            <span>2 weeks ago</span>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex justify-content-between total font-weight-bold mt-4">
                                                        <span>Total</span><span>Rp120.000</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="ex1-pills-4" role="tabpanel" aria-labelledby="ex1-tab-4">
                <div class="container mt-5 mb-5">
                    <div class="d-flex justify-content-center row">
                        <div class="col-md-10">
                            <section>
                                <div class="container py-5">
                                  <div class="row justify-content-center">
                                    <div class="col-md-8 col-lg-6 col-xl-4">
                                      <div class="card" style="border-radius: 15px;">
                                        <div class="bg-image hover-overlay ripple ripple-surface ripple-surface-light"
                                          data-mdb-ripple-color="light">
                                          <img src="img/bengkel.jpg"
                                            style="border-top-left-radius: 15px; border-top-right-radius: 15px;" class="img-fluid"
                                            alt="Laptop" />
                                          <a href="#!">
                                            <div class="mask"></div>
                                          </a>
                                        </div>
                                        <div class="card-body pb-0">
                                          <div class="d-flex justify-content-between">
                                            <div>
                                              <p><a href="#!" class="text-dark">Bengkel ABC</a></p>
                                              <p class="small text-muted">Car Service</p>
                                            </div>
                                            <div>
                                              <div class="d-flex flex-row justify-content-end mt-1 mb-4 text-danger">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fa fa-star-half-alt"></i>
                                              </div>
                                              <p class="small text-muted">Rated 4.5/5</p>
                                            </div>
                                          </div>
                                        </div>
                                        <hr class="my-0" />
                                        <div class="card-body pb-0">
                                          <div class="d-flex justify-content-between">
                                            <p><a href="#!" class="text-dark">Status</a></p>
                                            <p class="text-dark">Paid Off</p>
                                          </div>
                                          <p class="small text-muted">BRI</p>
                                        </div>
                                        <hr class="my-0" />
                                        <div class="card-body">
                                          <div class="d-flex justify-content-between align-items-center pb-2 mb-1">
                                            <a href="#!" class="text-dark fw-bold">Cancel Book</a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                            </section>
                            <section>
                                <div class="container py-5">
                                  <div class="row justify-content-center">
                                    <div class="col-md-8 col-lg-6 col-xl-4">
                                      <div class="card" style="border-radius: 15px;">
                                        <div class="bg-image hover-overlay ripple ripple-surface ripple-surface-light"
                                          data-mdb-ripple-color="light">
                                          <img src="img/bengkel2.jpg"
                                            style="border-top-left-radius: 15px; border-top-right-radius: 15px;" class="img-fluid"
                                            alt="Laptop" />
                                          <a href="#!">
                                            <div class="mask"></div>
                                          </a>
                                        </div>
                                        <div class="card-body pb-0">
                                          <div class="d-flex justify-content-between">
                                            <div>
                                              <p><a href="#!" class="text-dark">Bengkel ABC</a></p>
                                              <p class="small text-muted">Car Service</p>
                                            </div>
                                            <div>
                                              <div class="d-flex flex-row justify-content-end mt-1 mb-4 text-danger">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fa fa-star-half-alt"></i>
                                              </div>
                                              <p class="small text-muted">Rated 4.5/5</p>
                                            </div>
                                          </div>
                                        </div>
                                        <hr class="my-0" />
                                        <div class="card-body pb-0">
                                          <div class="d-flex justify-content-between">
                                            <p><a href="#!" class="text-dark">Status</a></p>
                                            <p class="text-dark">Unpaid</p>
                                          </div>
                                          <p class="small text-muted">Rp180.000</p>
                                        </div>
                                        <hr class="my-0" />
                                        <div class="card-body">
                                          <div class="d-flex justify-content-between align-items-center pb-2 mb-1">
                                            <a href="#!" class="text-dark fw-bold">Cancel Book</a>
                                            <button type="button" class="btn btn-primary">Pay now</button>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="ex1-pills-5" role="tabpanel" aria-labelledby="ex1-tab-5">
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
                                        <div class="d-flex flex-column mt-4"><button onclick="window.location.href='booking.html';" class="btn btn-primary btn-sm" type="button">Book Now</button><button class="btn btn-outline-primary btn-sm mt-2" type="button">Remove from liked</button></div>
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
                                        <div class="d-flex flex-column mt-4"><button onclick="window.location.href='booking.html';" class="btn btn-primary btn-sm" type="button">Book Now</button><button class="btn btn-outline-primary btn-sm mt-2" type="button">Remove from liked</button></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Pills content -->
    </div>
    <!-- Account End -->
    @endsection