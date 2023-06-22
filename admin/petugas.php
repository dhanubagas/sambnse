<?php require 'header.php'; ?>
          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Data Petugas /</span> Tabel Data Petugas</h4>

              <!-- Basic Bootstrap Table -->
              <div class="card">
                <h5 class="card-header">Tabel Data Petugas <a style="max-width: 200px;" class="card-header badge bg-label-primary me-1" href="tPet.php">Tambah</a></h5>
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>NIK</th>
                        <th>Nama Petugas</th>
                        <th>Jabatan</th>
                        <th>Unit Kerja</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
<?php 
$no=1;
$data = query("SELECT * FROM petugas");
foreach ($data as $row) :
$cab = query("SELECT * FROM cabang WHERE kd_k = '$row[cab]'")[0];
 ?>
                    <tbody class="table-border-bottom-0">
                      <tr>
                        <td>
                        	<i class="fab fa-angular fa-lg text-danger me-3"></i> <strong><?= $no++;  ?></strong>
                        </td>
                        <td><?= $row['nik'] ?></td>
                        <td><?= $row['nama'] ?></td>
                        <td><?= $row['jabatan'] ?></td>
                        <td><?= $cab['k'] ?></td>
                        <td>
                          	<a class="btn btn-sm btn-primary" href="ePet.php?id=<?= $row['id'] ?>">Edit</a>
                          	<a class="btn btn-sm btn-danger" href="hPet.php?nik=<?= $row['nik'] ?>">Hapus</a>
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