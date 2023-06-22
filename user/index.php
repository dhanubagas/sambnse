<?php require 'header.php'; ?>
          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row">
                <div class="col-lg-8 mb-4 order-0">
                  <div class="card">
                    <div class="d-flex align-items-end row">
                      <div class="col-sm-7">
                        <div class="card-body">
                          <h5 class="card-title text-primary">Selamat Datang, <?= $user['nama'] ?>! 🎉</h5>
                          <p class="mb-4" style="text-align: justify;">
                            Istilah self-marketing merupakan konstruk yang baru-baru ini mulai marak di dunia industri 4.0. Self-marketing merupakan pemasaran mandiri yang membantu individu untuk dapat meningkatkan citra dan reputasi mereka untuk dapat memajukan karir mereka. Pemasaran diri sendiri seringkali disebut dengan istilah personal branding karena menggunakan alat branding untuk membuat citra di sekitar karyawan. Personal branding akan memberikan individu lebih banyak peluang untuk mengkomunikasikan nilai-nilai ketrampilan, pengalaman, dan visi mereka secara efektif kepada para calon manajer di lokasi kerja yang mereka inginkan. Self-marketing yang sukses akan membantu karyawan memisahkan diri dari ratusan pelamar lain yang mungkin sama-sama bersaing untuk mendapatkan pekerjaan yang sama dengan Anda.
                          </p>
                        </div>
                      </div>
                      <div class="col-sm-5 text-center text-sm-left">
                        <div class="card-body pb-0 px-0 px-md-4">
                          <img
                            src="../assets/img/illustrations/girl-doing-yoga-light.png"
                            height="140"
                            alt="View Badge User"
                            data-app-dark-img="illustrations/man-with-laptop-dark.png"
                            data-app-light-img="illustrations/man-with-laptop-light.png"
                          />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 order-1">
                  <div class="row">
                    <div class="col-lg-6 col-md-12 col-6 mb-4">
                      <div class="card">
                        <div class="card-body">
                          <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                              <a href="barang.php"><img
                                src="../assets/img/icons/unicons/chart-success.png"
                                alt="chart success"
                                class="rounded"
                              /></a>
                            </div>
                          </div>
<?php 

$barang = mysqli_query($conn, "SELECT * FROM barang");

 ?>
                          <span class="fw-semibold d-block mb-1">Nilai Asset Saat Ini</span>
                          <h5 class="card-title mb-2">Rp. <?= $user['nama'] ?></h5>
                          <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i></small>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-6 mb-4">
                      <div class="card">
                        <div class="card-body">
                          <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                              <img
                                src="../assets/img/icons/unicons/wallet-info.png"
                                alt="Credit Card"
                                class="rounded"
                              />
                            </div>
                            <div class="dropdown">
                              <button
                                class="btn p-0"
                                type="button"
                                id="cardOpt6"
                                data-bs-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                              >
                                <i class="bx bx-dots-vertical-rounded"></i>
                              </button>
                              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt6">
                                <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                              </div>
                            </div>
                          </div>
                          <span>Sales</span>
                          <h3 class="card-title text-nowrap mb-1">$4,679</h3>
                          <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +28.42%</small>
                        </div>
                      </div>
                    </div>
                    
                  </div>
                </div>

              </div>
            </div>
            <!-- / Content -->
<?php require 'footer.php'; ?>