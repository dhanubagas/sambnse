<?php require 'header.php'; ?>
<?php 

if(isset($_POST["btn_tambah"])){
    if(ePet($_POST) > 0){
      echo "
        <script>
          alert('Data Berhasil Diedit');
          document.location.href = 'petugas.php';
        </script>
      ";
    }else {
      echo "
        <script>
          alert('Data Gagal Diedit');
          document.location.href = 'petugas.php';
        </script>
      ";
    }
  }

$id = $_GET['id'];

$data = query("SELECT * FROM petugas WHERE id = $id")[0];

 ?>
          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Edit/</span> Edit Data Petugas</h4>

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
                            <input style="cursor: not-allowed;" type="text" class="form-control" value="<?= $data['nik'] ?>" name="nik" readonly />
                            <input type="text" name="id" value="<?= $id ?>" hidden>
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
                              value="<?= $data['nama'] ?>"
                              required
                            />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-company">Jabatan</label>
                          <div class="col-sm-10">
                            <input
                              type="text"
                              class="form-control"
                              id="basic-default-company"
                              name="jabatan"
                              value="<?= $data['jabatan'] ?>"
                              required
                            />
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