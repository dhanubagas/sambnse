<?php require 'header.php'; ?>
<?php 

$id = $_GET['id'];

$data = query("SELECT * FROM kuanti WHERE id = $id")[0];

 ?>
          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Lihat/</span> Lihat Data Input</h4>

              <!-- Basic Layout & Basic with Icons -->
              <div class="row">
                <!-- Basic Layout -->
                <div class="col-xxl">
                  <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                    </div>
                    <div class="card-body">
                      <form action="" method="post">
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Tanggal</label>
                          <div class="col-sm-10">
                            <input style="cursor: not-allowed;" type="text" class="form-control" value="<?= $data['tgl'] ?>" name="nik" readonly />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-company">No Rekening</label>
                          <div class="col-sm-10">
                            <input style="cursor: not-allowed;" type="text" class="form-control" value="<?= $data['norek'] ?>" name="nik" readonly />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-company">Nama Nasabah</label>
                          <div class="col-sm-10">
                            <input style="cursor: not-allowed;" type="text" class="form-control" value="<?= $data['nm_nas'] ?>" name="nik" readonly />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-company">Jenis Penilaian</label>
                          <div class="col-sm-10">
                          	<?php 
                          	$j = query("SELECT * FROM penilaian WHERE kode = '$data[j_pen]'")[0];
                          	 ?>
                            <input style="cursor: not-allowed;" type="text" class="form-control" value="<?= $j['penilaian'] ?>" name="nik" readonly />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-company">Realisasi</label>
                          <div class="col-sm-10">
                            <input style="cursor: not-allowed;" type="text" class="form-control" value="<?= $data['realisasi'] ?>" name="nik" readonly />
                          </div>
                        </div>
                        <div class="row justify-content-end">
                          <div class="col-sm-10">
                            <a href="pending.php" class="btn btn-danger">Back</a>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- / Content -->
<?php require 'footer.php'; ?>