<?php require 'header.php'; ?>
          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Data Jenis Penilaian /</span> Tabel Data Jenis Penilaian</h4>

              <!-- Basic Bootstrap Table -->
              <div class="card">
                <h5 class="card-header">Tabel Data Jenis Penilaian <a style="max-width: 200px;" class="card-header badge bg-label-primary me-1" href="tJp.php">Tambah</a></h5>
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Kode</th>
                        <th>Jenis Penilaian</th>
                        <th>Persentase</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
<?php 
$no=1;
$data = query("SELECT * FROM jenis_p");
foreach ($data as $row) :
 ?>
                    <tbody class="table-border-bottom-0">
                      <tr>
                        <td>
                        	<i class="fab fa-angular fa-lg text-danger me-3"></i> <strong><?= $no++;  ?></strong>
                        </td>
                        <td><?= $row['kd_jp'] ?></td>
                        <td><?= $row['jp'] ?></td>
                        <td><?= $row['persen'] ?>%</td>
                        <td>
                          	<a class="btn btn-sm btn-primary" href="eJp.php?id=<?= $row['id'] ?>">Edit</a>
                        </td>
                      </tr>
                    </tbody>
<?php endforeach; ?>
                  </table>
                </div>
              </div>
              <!--/ Basic Bootstrap Table -->
            </div>
            <!-- / Content -->
<?php require 'footer.php'; ?>