<?php require 'header.php'; ?>
<?php 

if(isset($_POST["btn_tambah"])){
    if(tNas($_POST) > 0){
      echo "
        <script>
          alert('Data Berhasil Ditambahkan');
          document.location.href = 'pending.php';
        </script>
      ";
    }else {
      echo "
        <script>
          alert('Data Gagal Ditambahkan');
          document.location.href = 'penilaian.php';
        </script>
      ";
    }
  }

error_reporting(0);

$kd_p = $_GET['kd_p'];
$jp = query("SELECT * FROM penilaian WHERE kode = '$kd_p'")[0];

$jml = query("SELECT * FROM kuali ORDER BY id DESC LIMIT 1")[0];

if ($jml['id'] < 1) {
    $kode = 1;
}else{
    $kode = $jml['id'] + 1;
}


 ?>
          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Input Kualitatif/<?= $jp['penilaian'] ?></h4>

              <!-- Basic Layout & Basic with Icons -->
              <div class="row">
                <!-- Basic Layout -->
                <div class="col-xxl">
                  <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                    </div>
                    <div class="card-body">
                      <form action="" method="post" enctype="multipart/form-data">
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Kode</label>
                          <div class="col-sm-10">
                            <input style="cursor: not-allowed;" type="text" class="form-control" value="KDN-0<?= $kode ?>" name="kd_nas" readonly />
                            <input type="text" name="nik" value="<?= $user['username'] ?>" hidden>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-company">Tanggal</label>
                          <div class="col-sm-10">
                            <input
                              type="date"
                              class="form-control"
                              id="basic-default-company"
                              name="tgl"
                              required
                            />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-company">No Rekening</label>
                          <div class="col-sm-10">
                            <input
                              type="text"
                              class="form-control"
                              id="basic-default-company"
                              onkeypress="return event.charCode >= 48 && event.charCode <=57"
                              name="norek"
                              required
                            />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-company">Jenis Penilaian</label>
                          <div class="col-sm-10">
                            <input style="cursor: not-allowed;" type="text" class="form-control" value="<?= $jp['penilaian'] ?>"readonly />
                            <input type="text" name="j_pen" value="<?= $jp['kode'] ?>" hidden>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-message">Nama Nasabah</label>
                          <div class="col-sm-10">
                            <input
                              type="text"
                              class="form-control"
                              id="basic-default-company"
                              name="nm_nas"
                              required
                            />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-company">Unggah Screenshoot</label>
                          <div class="col-sm-10">
                            <input
                              type="file"
                              class="form-control"
                              id="basic-default-company"
                              name="ss"
                              required
                            />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-message">Keterangan</label>
                          <div class="col-sm-10">
                            <textarea
                              id="basic-default-message"
                              class="form-control"
                              aria-describedby="basic-icon-default-message2"
                              name="ket"
                              required
                            ></textarea>
                          </div>
                        </div>
                        <div class="row justify-content-end">
                          <div class="col-sm-10">
                            <button name="btn_tambah" type="submit" class="btn btn-primary">Send</button>
                            <a href="penilaian.php" class="btn btn-danger">Back</a>
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