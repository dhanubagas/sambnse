<?php require 'header.php'; ?>
<?php 

if(isset($_POST["btn_tambah"])){
    if(tPet($_POST) > 0){
      echo "
        <script>
          alert('Data Berhasil Ditambahkan');
          document.location.href = 'petugas.php';
        </script>
      ";
    }else {
      echo "
        <script>
          alert('Data Gagal Ditambahkan');
          document.location.href = 'tPet.php';
        </script>
      ";
    }
  }


 ?>
          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Input/</span> Input Data Petugas</h4>

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
                          <label class="col-sm-2 col-form-label" for="basic-default-name">NIK Petugas</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" name="nik" required />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-company">Nama Petugas</label>
                          <div class="col-sm-10">
                            <input
                              type="text"
                              class="form-control"
                              id="basic-default-company"
                              name="nama"
                              required
                            />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-message">Jabatan</label>
                          <div class="col-sm-10">
                            <input
                              type="text"
                              class="form-control"
                              id="basic-default-company"
                              name="jabatan"
                              required
                            />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-message">Unit Kerja</label>
                          <div class="col-sm-10">
                            <select name="cab" class="form-control">
                              <?php 
                              $cab = query("SELECT * FROM cabang");
                              foreach ($cab as $row) :
                               ?>
                              <option value="<?= $row['kd_k'] ?>"><?= $row['kd_k'] ?>/<?= $row['k'] ?></option>
                            <?php endforeach; ?>
                            </select>
                          </div>
                        </div>
                        <div class="row justify-content-end">
                          <div class="col-sm-10">
                            <button name="btn_tambah" type="submit" class="btn btn-primary">Send</button>
                            <a href="Petugas.php" class="btn btn-danger">Back</a>
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