<?php require 'header.php'; ?>
<?php 

if(isset($_POST["btn_tambah"])){
    if(tTar($_POST) > 0){
      echo "
        <script>
          alert('Data Berhasil Ditambahkan');
          document.location.href = 'target.php';
        </script>
      ";
    }else {
      echo "
        <script>
          alert('Data Gagal Ditambahkan');
          document.location.href = 'target.php';
        </script>
      ";
    }
  }

error_reporting(0);

$bln = $_GET['bln'];
$thn = $_GET['thn'];
$nik = $_GET['nik'];
$kd_jp = $_GET['kd_jp'];
$kd_p = $_GET['kd_p'];

$pet = query("SELECT * FROM petugas WHERE nik = '$nik'")[0];
$pen = query("SELECT * FROM penilaian WHERE kode = '$kd_p'")[0];

 ?>
          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"><?= $pet['nama'] ?>/</span>Input Target <?= $pen['penilaian']; ?></h4>

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
                          <label class="col-sm-2 col-form-label" for="basic-default-name">NIK</label>
                          <div class="col-sm-10">
                            <input style="cursor: not-allowed;" type="text" class="form-control" value="<?= $nik ?>" name="nik" readonly />
                            <input type="text" name="bln" value="<?= $bln ?>" hidden>
                            <input type="text" name="thn" value="<?= $thn ?>" hidden>
                            <input type="text" name="kd_jp" value="<?= $kd_jp ?>" hidden>
                            <input type="text" name="kd_p" value="<?= $kd_p ?>" hidden>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-message">Target</label>
                          <div class="col-sm-10">
                            <input
                              type="text"
                              class="form-control"
                              id="basic-default-company"
                              name="t"
                              onkeypress="return event.charCode >= 48 && event.charCode <=57"
                              required
                            />
                          </div>
                        </div>
                        <div class="row justify-content-end">
                          <div class="col-sm-10">
                            <button name="btn_tambah" type="submit" class="btn btn-primary">Send</button>
                            <a href="target.php" class="btn btn-danger">Back</a>
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