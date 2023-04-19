    @extends('master')

    @section('content')
    <!-- Booking Start -->
    <div class="container-fluid bg-secondary booking my-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-4 py-5">
                    <div class="py-5">
                    </div>
                </div>
                <div class="col-lg-6">
                    <h1>&nbsp;</h1>
                    <div class="row">
                        <div class="col-md-8 mb-4">
                          <div class="card mb-4">
                            <div class="card-header py-3" style="text-align: center">
                                <img src="img/qris.png" alt="QRIS" class="center" style="height: 300px;">
                            </div>
                            
                          </div>
                        </div>
                      
                        <div class="col-md-8 mb-4">
                            <div class="card mb-4">
                                <div class="card-body">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                                    How to pay?
                                    </li>
                                    <p>&nbsp;</p>
                                    <i class='far fa-hand-point-down' style='font-size:16px;color:red'></i>
                                    <p>QRIS</p>
                                    <p>Buka aplikasi QRIS di ponsel Anda dan pilih tombol “Scan QR”. Kemudian, taruh ponsel Anda di depan kode QR yang ditampilkan di atas.</p> 
                                    <p>Setelah terdeteksi, aplikasi QRIS akan menampilkan informasi tentang merchant dan jumlah pembayaran yang akan dibayar, masukkan nominal sesuai dengan tagihan pada laman sebelumnya.</p> 
                                    <p>Jika sudah benar, tekan tombol “Bayar” untuk menyelesaikan transaksi. Tunggu hingga proses pembayaran selesai, dan Anda akan menerima notifikasi bahwa pembayaran telah berhasil dilakukan.</p>
                                </ul>
                        
                                <button type="button" class="btn btn-primary btn-lg btn-block" data-mdb-toggle="modal" data-mdb-target="#staticBackdrop">
                                    Sudah Membayar
                                </button>
                                <!-- Modal -->
                                    <div
                                        class="modal fade"
                                        id="staticBackdrop"
                                        data-mdb-backdrop="static"
                                        data-mdb-keyboard="false"
                                        tabindex="-1"
                                        aria-labelledby="staticBackdropLabel"
                                        aria-hidden="true"
                                        >
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="staticBackdropLabel"><i class='far fa-clock' style='font-size:36px'></i></h5>
                                                    <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">Pembayaran anda sedang diproses, slahkan menunggu beberapa saat (estimasi waktu : 2 menit) </div>
                                                <div class="modal-footer">
                                                    <button action='/home' class="btn btn-primary" data-mdb-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Booking End -->
    @endsection