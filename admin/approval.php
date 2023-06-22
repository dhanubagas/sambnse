<?php require 'header.php'; ?>
          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Data Approved /</span> Tabel Data Approved</h4>
<?php 
$pet = query("SELECT * FROM users WHERE username != 'admin'");
foreach ($pet as $row) :
 ?>
              <!-- Basic Bootstrap Table -->
              <div class="card">
                <div class="table-responsive text-nowrap">
                	<h5 class="card-header"><?= $row['nama'] ?> <a class="btn btn-sm btn-info" href="bobot.php?nama=<?= $row['nama'] ?>&&nik=<?= $row['username'] ?>">BOBOT</a></h5>
                  <table class="table">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Jenis Penilaian</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
<?php 
$no=1;
$data = query("SELECT * FROM kuali WHERE nik = '$row[username]' AND status = 'Approved'");
foreach ($data as $row2) :
$p = query("SELECT * FROM penilaian WHERE kode = '$row2[j_pen]'")[0];
 ?>
                      <tr>
                        <td>
                        	<i class="fab fa-angular fa-lg text-danger me-3"></i> <strong><?= $no++;  ?></strong>
                        </td>
                        <td><?= $row2['tgl'] ?></td>
                        <td><?= $p['penilaian'] ?></td>
                        <td>
                          	<a class="btn btn-sm btn-primary" href="lihat-approved.php?id=<?= $row2['id'] ?>">Lihat</a>
                        </td>
                      </tr>
<?php endforeach; ?>
<?php 
$data = query("SELECT * FROM kuanti WHERE nik = '$row[username]' AND status = 'Approved'");
foreach ($data as $row3) :
$p = query("SELECT * FROM penilaian WHERE kode = '$row3[j_pen]'")[0];
 ?>
                      <tr>
                        <td>
                          <i class="fab fa-angular fa-lg text-danger me-3"></i> <strong><?= $no++;  ?></strong>
                        </td>
                        <td><?= $row3['tgl'] ?></td>
                        <td><?= $p['penilaian'] ?></td>
                        <td>
                            <a class="btn btn-sm btn-primary" href="lihat-approved-kuanti.php?id=<?= $row3['id'] ?>">Lihat</a>
                        </td>
                      </tr>
<?php endforeach; ?>
                    </tbody>
                  </table>
                </div>
              </div>
              <!--/ Basic Bootstrap Table -->
<br>
<?php endforeach; ?>
            </div>
            <!-- / Content -->
        </div>
<?php require 'footer.php'; ?>