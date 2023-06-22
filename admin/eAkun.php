<?php require 'header.php'; ?>
<?php 

if(isset($_POST["btn_tambah"])){
    if(eAkun($_POST) > 0){
      echo "
        <script>
          alert('Data Berhasil Diedit');
          document.location.href = 'eAkun.php';
        </script>
      ";
    }else {
      echo "
        <script>
          alert('Data Gagal Diedit');
          document.location.href = 'eAkun.php';
        </script>
      ";
    }
  }

$data = query("SELECT * FROM users WHERE id = '$user[id]'")[0];

 ?>
          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Settings/</span> Edit Akun</h4>

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
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Username</label>
                          <div class="col-sm-10">
                            <input style="cursor: not-allowed;" type="text" class="form-control" value="<?= $data['username'] ?>" name="username" readonly />
                            <input type="text" name="id" value="<?= $user['id'] ?>" hidden>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-company">Password</label>
                          <div class="col-sm-10">
                            <input
                              type="password"
                              class="form-control"
                              id="basic-default-company"
                              name="password"
                              required
                            />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-message">Nama</label>
                          <div class="col-sm-10">
                            <input
                              type="text"
                              class="form-control"
                              id="basic-default-company"
                              name="nama"
                              value="<?= $user['nama'] ?>"
                              required
                            />
                          </div>
                        </div>
                        <div class="row justify-content-end">
                          <div class="col-sm-10">
                            <button name="btn_tambah" type="submit" class="btn btn-primary">Send</button>
                            <a href="index.php" class="btn btn-danger">Back</a>
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