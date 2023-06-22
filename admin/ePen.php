<?php require 'header.php'; ?>
<?php 

if(isset($_POST["btn_tambah"])){
    if(ePen($_POST) > 0){
      echo "
        <script>
          alert('Data Berhasil Diedit');
          document.location.href = 'Penilaian.php';
        </script>
      ";
    }else {
      echo "
        <script>
          alert('Data Gagal Diedit');
          document.location.href = 'Penilaian.php';
        </script>
      ";
    }
  }

$id = $_GET['id'];

$data = query("SELECT * FROM Penilaian WHERE id = $id")[0];

 ?>
          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Edit/</span> Edit Data Penilaian</h4>

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
                          <label class="col-sm-2 col-form-label" for="basic-default-name">NIK Penilaian</label>
                          <div class="col-sm-10">
                            <input style="cursor: not-allowed;" type="text" class="form-control" value="<?= $data['kode'] ?>" name="nik" readonly />
                            <input type="text" name="id" value="<?= $id ?>" hidden>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-company">Penilaian</label>
                          <div class="col-sm-10">
                            <input
                              type="text"
                              class="form-control"
                              id="basic-default-company"
                              name="penilaian"
                              value="<?= $data['penilaian'] ?>"
                              required
                            />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-company">Bobot Penilaian</label>
                          <div class="col-sm-10">
                            <input
                              type="text"
                              class="form-control"
                              id="basic-default-company"
                              name="bobot"
                              value="<?= $data['bobot'] ?>"
                              onkeypress="return event.charCode >= 48 && event.charCode <=57"
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
                            ><?= $data['ket'] ?></textarea>
                          </div>
                        </div>
                        <div class="row justify-content-end">
                          <div class="col-sm-10">
                            <button name="btn_tambah" type="submit" class="btn btn-primary">Send</button>
                            <a href="Penilaian.php" class="btn btn-danger">Back</a>
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