<?php require 'header.php'; ?>
<?php 

if(isset($_POST["btn_tambah"])){
    if(eTar($_POST) > 0){
      echo "
        <script>
          alert('Target Berhasil Diedit');
          document.location.href = 'target.php';
        </script>
      ";
    }else {
      echo "
        <script>
          alert('Target Gagal Diedit');
          document.location.href = 'target.php';
        </script>
      ";
    }
  }

error_reporting(0);

$id = $_GET['id'];

$data = query("SELECT * FROM target WHERE id = '$id'")[0];
$jp = query("SELECT * FROM penilaian WHERE kode = '$data[kd_p]'")[0];
$pet = query("SELECT * FROM petugas WHERE nik = '$data[nik]'")[0];

 ?>
          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"><?= $pet['nama'] ?>/</span>Edit Target <?= $jp['penilaian']; ?></h4>

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
                            <input style="cursor: not-allowed;" type="text" class="form-control" value="<?= $data['nik'] ?>" name="nik" readonly />
                            <input type="text" name="id" value="<?= $id ?>" hidden>
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
                              value="<?= $data['t'] ?>"
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