<?php require 'header.php'; ?>
          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Data Indeks Penilaian Petugas /</span> Tabel Data Indeks Penilaian Petugas</h4>
<?php 
$jp = query("SELECT * FROM jenis_p");
foreach ($jp as $row) :
 ?>
              <!-- Basic Bootstrap Table -->
              <div class="card">
                <h5 class="card-header">TABEL PENILAIAN <?= $row['jp'] ?> <a style="max-width: 200px;" class="card-header badge bg-label-primary me-1" href="tPen.php?kd_jp=<?= $row['kd_jp'] ?>">Tambah</a></h5>
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Kode</th>
                        <th>Penilaian</th>
                        <th>Bobot Penilaian</th>
                        <!-- <th width="30px">Keterangan</th> -->
                        <th>Aksi</th>
                      </tr>
                    </thead>
<?php 
$no=1;
$data = query("SELECT * FROM penilaian WHERE kd_jp = '$row[kd_jp]'");
foreach ($data as $row2) :
 ?>
                    <tbody class="table-border-bottom-0">
                      <tr>
                        <td>
                        	<i class="fab fa-angular fa-lg text-danger me-3"></i> <strong><?= $no++;  ?></strong>
                        </td>
                        <td><?= $row2['kode'] ?></td>
                        <td><?= $row2['penilaian'] ?></td>
                        <td><?= $row2['bobot'] ?></td>
                        <!-- <td width="30px" style="text-align: justify;"><?= $row2['ket'] ?></td> -->
                        <td>
                          	<a class="btn btn-sm btn-primary" href="ePen.php?id=<?= $row2['id'] ?>">Edit</a>
                          	<a class="btn btn-sm btn-danger" href="hPen.php?kode=<?= $row2['kode'] ?>">Hapus</a>
                        </td>
                      </tr>
                    </tbody>
<?php endforeach; ?>
                  </table>
                </div>
              </div>
              <!--/ Basic Bootstrap Table -->
<br>
<?php endforeach; ?>
            </div>
            <!-- / Content -->
<?php require 'footer.php'; ?>