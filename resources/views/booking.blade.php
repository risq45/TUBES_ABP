    @extends('master')

    @section('content')
    <!-- Booking Start -->
    <div class="container-fluid bg-secondary booking my-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-4 py-5">
                    <div class="py-5">
                        <h1 class="text-white mb-4">Certified and Award Winning Car Repair Service Provider</h1>
                        <p class="text-white mb-0">Eirmod sed tempor lorem ut dolores. Aliquyam sit sadipscing kasd ipsum. Dolor ea et dolore et at sea ea at dolor, justo ipsum duo rebum sea invidunt voluptua. Eos vero eos vero ea et dolore eirmod et. Dolores diam duo invidunt lorem. Elitr ut dolores magna sit. Sea dolore sanctus sed et. Takimata takimata sanctus sed.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h1>&nbsp;</h1>
                    <div class="row">
                        <div class="col-md-8 mb-4">
                          <div class="card mb-4">
                            <div class="card-header py-3">
                              <h5 class="mb-0" style="color: red; text-align: center;">Let’s Finish Your Order</h5>
                              <h6 class="mb-0" style="color: red; text-align: center;">Fill This Form To Make Us Access Your Location Easier</h6>
                            </div>
                            <div class="card-body">
                              <form>                      
                                <!-- Name input -->
                                <div class="form-outline mb-4">
                                  <input type="text" id="form7Example3" class="form-control" />
                                  <label class="form-label" for="form7Example3">Name</label>
                                </div>
                      
                                <!-- Address input -->
                                <div class="form-outline mb-4">
                                  <input type="text" id="form7Example4" class="form-control" />
                                  <label class="form-label" for="form7Example4">Address</label>
                                </div>
                      
                                <!-- Service input -->
                                <div class="form-outline mb-4">
                                    <select class="form-select border-0" style="height: 55px;">
                                        <option selected>Select A Service</option>
                                        <option value="1">Service 1</option>
                                        <option value="2">Service 2</option>
                                        <option value="3">Service 3</option>
                                    </select>
                                </div>
                      
                                <!-- Vehicle input -->
                                <div class="form-outline mb-4">
                                    <select class="form-select border-0" style="height: 55px;">
                                        <option selected>Select A Vehicle</option>
                                        <option value="1">Motorcycle</option>
                                        <option value="2">Car</option>
                                        <option value="3">Truck</option>
                                    </select>                                  
                                </div>
                      
                                <!-- Message input -->
                                <div class="form-outline mb-4">
                                  <textarea class="form-control" id="form7Example7" rows="2"></textarea>
                                  <label class="form-label" for="form7Example7">Additional information</label>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>
                      
                        <div class="col-md-8 mb-4">
                          <div class="card mb-4">
                            <div class="card-body">
                              <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                                  Biaya Servis
                                  <span>Rp150.000</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                                    Biaya Servis
                                    <span>Rp10.000</span>
                                </li>                                
                                <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                    Biaya perjalanan
                                  <span>Rp20.000</span>
                                </li>

                                <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                                  <div>
                                    <strong>Total</strong>
                                  </div>
                                  <span><strong>Rp180.000</strong></span>
                                </li>
                              </ul>
                      
                              <button type="button" class="btn btn-primary btn-lg btn-block" onclick="window.location.href='paymentoption.html';">
                                SUBMIT
                              </button>
                              <a href="paymentoption.html">Metode pembayaran</a>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Booking End -->


    <!-- Call To Action Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-8 col-md-6">
                    <h6 class="text-primary text-uppercase">// Call To Action //</h6>
                    <h1 class="mb-4">Have Any Pre Booking Question?</h1>
                    <p class="mb-0">Lorem diam ea sit dolor labore. Clita et dolor erat sed est lorem sed et sit. Diam sed duo magna erat et stet clita ea magna ea sed, sit labore magna lorem tempor justo rebum dolores. Eos dolor sea erat amet et, lorem labore lorem at dolores. Stet ea ut justo et, clita et et ipsum diam.</p>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="bg-primary d-flex flex-column justify-content-center text-center h-100 p-4">
                        <h3 class="text-white mb-4"><i class="fa fa-phone-alt me-3"></i>+012 345 6789</h3>
                        <a href="/contact" class="btn btn-secondary py-3 px-5">Contact Us<i class="fa fa-arrow-right ms-3"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Call To Action End -->
    @endsection