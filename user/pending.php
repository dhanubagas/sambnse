<?php require 'header.php'; ?>
          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Input Data Pending /</span> Tabel Input Data Pending</h4>

              <!-- Basic Bootstrap Table -->
              <div class="card">
                <div class="table-responsive text-nowrap">
                	<h5 class="card-header">Januari <a style="max-width: 200px;" class="card-header badge bg-label-primary me-1" href="penilaian.php">Tambah</a></h5>
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
$data = query("SELECT * FROM kuali WHERE nik = '$user[username]' AND tgl LIKE '%2023-01%' AND status = 'Pending'");
foreach ($data as $row) :
$p = query("SELECT * FROM penilaian WHERE kode = '$row[j_pen]'")[0];
 ?>
                      <tr>
                        <td>
                        	<i class="fab fa-angular fa-lg text-danger me-3"></i> <strong><?= $no++;  ?></strong>
                        </td>
                        <td><?= $row['tgl'] ?></td>
                        <td><?= $p['penilaian'] ?></td>
                        <td>
                          	<a class="btn btn-sm btn-primary" href="lihat-pending.php?id=<?= $row['id'] ?>">Lihat</a>
                          	<a class="btn btn-sm btn-danger" href="hNas.php?id=<?= $row['id'] ?>">Hapus</a>
                        </td>
                      </tr>
<?php endforeach; ?>
<?php
$data = query("SELECT * FROM kuanti WHERE nik = '$user[username]' AND tgl LIKE '%2023-01%' AND status = 'Pending'");
foreach ($data as $row) :
$p = query("SELECT * FROM penilaian WHERE kode = '$row[j_pen]'")[0];
 ?>
                      <tr>
                        <td>
                          <i class="fab fa-angular fa-lg text-danger me-3"></i> <strong><?= $no++;  ?></strong>
                        </td>
                        <td><?= $row['tgl'] ?></td>
                        <td><?= $p['penilaian'] ?></td>
                        <td>
                            <a class="btn btn-sm btn-primary" href="lihat-pending-kuan.php?id=<?= $row['id'] ?>">Lihat</a>
                            <a class="btn btn-sm btn-danger" href="hNas.php?id=<?= $row['id'] ?>">Hapus</a>
                        </td>
                      </tr>
<?php endforeach; ?>
                    </tbody>
                  </table>
                </div>
              </div>
              <!--/ Basic Bootstrap Table -->
<br>
              <!-- Basic Bootstrap Table -->
              <div class="card">
                <div class="table-responsive text-nowrap">
                	<h5 class="card-header">Februari <a style="max-width: 200px;" class="card-header badge bg-label-primary me-1" href="penilaian.php">Tambah</a></h5>
                  <table class="table">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Jenis Penilaian</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                      <tr>
<?php 
$no=1;
$data = query("SELECT * FROM kuali WHERE nik = '$user[username]' AND tgl LIKE '%2023-02%' AND status = 'Pending'");
foreach ($data as $row) :
$p = query("SELECT * FROM penilaian WHERE kode = '$row[j_pen]'")[0];
 ?>
                    <tbody class="table-border-bottom-0">
                        <td>
                        	<i class="fab fa-angular fa-lg text-danger me-3"></i> <strong><?= $no++;  ?></strong>
                        </td>
                        <td><?= $row['tgl'] ?></td>
                        <td><?= $p['penilaian'] ?></td>
                        <td>
                          	<a class="btn btn-sm btn-primary" href="lihat-pending-kuan.php?id=<?= $row['id'] ?>">Lihat</a>
                          	<a class="btn btn-sm btn-danger" href="hNas.php?id=<?= $row['id'] ?>">Hapus</a>
                        </td>
                      </tr>
<?php endforeach; ?>
<?php
$data = query("SELECT * FROM kuanti WHERE nik = '$user[username]' AND tgl LIKE '%2023-02%' AND status = 'Pending'");
foreach ($data as $row) :
$p = query("SELECT * FROM penilaian WHERE kode = '$row[j_pen]'")[0];
 ?>
                      <tr>
                        <td>
                          <i class="fab fa-angular fa-lg text-danger me-3"></i> <strong><?= $no++;  ?></strong>
                        </td>
                        <td><?= $row['tgl'] ?></td>
                        <td><?= $p['penilaian'] ?></td>
                        <td>
                            <a class="btn btn-sm btn-primary" href="lihat-pending-kuan.php?id=<?= $row['id'] ?>">Lihat</a>
                            <a class="btn btn-sm btn-danger" href="hNas.php?id=<?= $row['id'] ?>">Hapus</a>
                        </td>
                      </tr>
<?php endforeach; ?>
                    </tbody>
                  </table>
                </div>
              </div>
              <!--/ Basic Bootstrap Table -->
<br>
			  <!-- Basic Bootstrap Table -->
              <div class="card">
                <div class="table-responsive text-nowrap">
                	<h5 class="card-header">Maret <a style="max-width: 200px;" class="card-header badge bg-label-primary me-1" href="penilaian.php">Tambah</a></h5>
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
$data = query("SELECT * FROM kuali WHERE nik = '$user[username]' AND tgl LIKE '%2023-03%' AND status = 'Pending'");
foreach ($data as $row) :
$p = query("SELECT * FROM penilaian WHERE kode = '$row[j_pen]'")[0];
 ?>
                      <tr>
                        <td>
                        	<i class="fab fa-angular fa-lg text-danger me-3"></i> <strong><?= $no++;  ?></strong>
                        </td>
                        <td><?= $row['tgl'] ?></td>
                        <td><?= $p['penilaian'] ?></td>
                        <td>
                          	<a class="btn btn-sm btn-primary" href="lihat-pending.php?id=<?= $row['id'] ?>">Lihat</a>
                          	<a class="btn btn-sm btn-danger" href="hNas.php?id=<?= $row['id'] ?>">Hapus</a>
                        </td>
                      </tr>
<?php endforeach; ?>
<?php
$data = query("SELECT * FROM kuanti WHERE nik = '$user[username]' AND tgl LIKE '%2023-03%' AND status = 'Pending'");
foreach ($data as $row) :
$p = query("SELECT * FROM penilaian WHERE kode = '$row[j_pen]'")[0];
 ?>
                      <tr>
                        <td>
                          <i class="fab fa-angular fa-lg text-danger me-3"></i> <strong><?= $no++;  ?></strong>
                        </td>
                        <td><?= $row['tgl'] ?></td>
                        <td><?= $p['penilaian'] ?></td>
                        <td>
                            <a class="btn btn-sm btn-primary" href="lihat-pending-kuan.php?id=<?= $row['id'] ?>">Lihat</a>
                            <a class="btn btn-sm btn-danger" href="hNas.php?id=<?= $row['id'] ?>">Hapus</a>
                        </td>
                      </tr>
<?php endforeach; ?>
                    </tbody>
                  </table>
                </div>
              </div>
              <!--/ Basic Bootstrap Table -->
<br>
<br>
			  <!-- Basic Bootstrap Table -->
              <div class="card">
                <div class="table-responsive text-nowrap">
                	<h5 class="card-header">April <a style="max-width: 200px;" class="card-header badge bg-label-primary me-1" href="penilaian.php">Tambah</a></h5>
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
$data = query("SELECT * FROM kuali WHERE nik = '$user[username]' AND tgl LIKE '%2023-04%' AND status = 'Pending'");
foreach ($data as $row) :
$p = query("SELECT * FROM penilaian WHERE kode = '$row[j_pen]'")[0];
 ?>
                      <tr>
                        <td>
                        	<i class="fab fa-angular fa-lg text-danger me-3"></i> <strong><?= $no++;  ?></strong>
                        </td>
                        <td><?= $row['tgl'] ?></td>
                        <td><?= $p['penilaian'] ?></td>
                        <td>
                          	<a class="btn btn-sm btn-primary" href="lihat-pending.php?id=<?= $row['id'] ?>">Lihat</a>
                          	<a class="btn btn-sm btn-danger" href="hNas.php?id=<?= $row['id'] ?>">Hapus</a>
                        </td>
                      </tr>
<?php endforeach; ?>
<?php
$data = query("SELECT * FROM kuanti WHERE nik = '$user[username]' AND tgl LIKE '%2023-04%' AND status = 'Pending'");
foreach ($data as $row) :
$p = query("SELECT * FROM penilaian WHERE kode = '$row[j_pen]'")[0];
 ?>
                      <tr>
                        <td>
                          <i class="fab fa-angular fa-lg text-danger me-3"></i> <strong><?= $no++;  ?></strong>
                        </td>
                        <td><?= $row['tgl'] ?></td>
                        <td><?= $p['penilaian'] ?></td>
                        <td>
                            <a class="btn btn-sm btn-primary" href="lihat-pending-kuan.php?id=<?= $row['id'] ?>">Lihat</a>
                            <a class="btn btn-sm btn-danger" href="hNas.php?id=<?= $row['id'] ?>">Hapus</a>
                        </td>
                      </tr>
<?php endforeach; ?>
                    </tbody>
                  </table>
                </div>
              </div>
              <!--/ Basic Bootstrap Table -->
<br>
<br>
			  <!-- Basic Bootstrap Table -->
              <div class="card">
                <div class="table-responsive text-nowrap">
                	<h5 class="card-header">Mei <a style="max-width: 200px;" class="card-header badge bg-label-primary me-1" href="penilaian.php">Tambah</a></h5>
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
$data = query("SELECT * FROM kuali WHERE nik = '$user[username]' AND tgl LIKE '%2023-05%' AND status = 'Pending'");
foreach ($data as $row) :
$p = query("SELECT * FROM penilaian WHERE kode = '$row[j_pen]'")[0];
 ?>
                      <tr>
                        <td>
                        	<i class="fab fa-angular fa-lg text-danger me-3"></i> <strong><?= $no++;  ?></strong>
                        </td>
                        <td><?= $row['tgl'] ?></td>
                        <td><?= $p['penilaian'] ?></td>
                        <td>
                          	<a class="btn btn-sm btn-primary" href="lihat-pending.php?id=<?= $row['id'] ?>">Lihat</a>
                          	<a class="btn btn-sm btn-danger" href="hNas.php?id=<?= $row['id'] ?>">Hapus</a>
                        </td>
                      </tr>
<?php endforeach; ?>
<?php
$data = query("SELECT * FROM kuanti WHERE nik = '$user[username]' AND tgl LIKE '%2023-05%' AND status = 'Pending'");
foreach ($data as $row) :
$p = query("SELECT * FROM penilaian WHERE kode = '$row[j_pen]'")[0];
 ?>
                      <tr>
                        <td>
                          <i class="fab fa-angular fa-lg text-danger me-3"></i> <strong><?= $no++;  ?></strong>
                        </td>
                        <td><?= $row['tgl'] ?></td>
                        <td><?= $p['penilaian'] ?></td>
                        <td>
                            <a class="btn btn-sm btn-primary" href="lihat-pending-kuan.php?id=<?= $row['id'] ?>">Lihat</a>
                            <a class="btn btn-sm btn-danger" href="hNas.php?id=<?= $row['id'] ?>">Hapus</a>
                        </td>
                      </tr>
<?php endforeach; ?>
                    </tbody>
                  </table>
                </div>
              </div>
              <!--/ Basic Bootstrap Table -->
<br>
<br>
			  <!-- Basic Bootstrap Table -->
              <div class="card">
                <div class="table-responsive text-nowrap">
                	<h5 class="card-header">Juni <a style="max-width: 200px;" class="card-header badge bg-label-primary me-1" href="penilaian.php">Tambah</a></h5>
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
$data = query("SELECT * FROM kuali WHERE nik = '$user[username]' AND tgl LIKE '%2023-06%' AND status = 'Pending'");
foreach ($data as $row) :
$p = query("SELECT * FROM penilaian WHERE kode = '$row[j_pen]'")[0];
 ?>
                      <tr>
                        <td>
                        	<i class="fab fa-angular fa-lg text-danger me-3"></i> <strong><?= $no++;  ?></strong>
                        </td>
                        <td><?= $row['tgl'] ?></td>
                        <td><?= $p['penilaian'] ?></td>
                        <td>
                          	<a class="btn btn-sm btn-primary" href="lihat-pending.php?id=<?= $row['id'] ?>">Lihat</a>
                          	<a class="btn btn-sm btn-danger" href="hNas.php?id=<?= $row['id'] ?>">Hapus</a>
                        </td>
                      </tr>
<?php endforeach; ?>
<?php
$data = query("SELECT * FROM kuanti WHERE nik = '$user[username]' AND tgl LIKE '%2023-06%' AND status = 'Pending'");
foreach ($data as $row) :
$p = query("SELECT * FROM penilaian WHERE kode = '$row[j_pen]'")[0];
 ?>
                      <tr>
                        <td>
                          <i class="fab fa-angular fa-lg text-danger me-3"></i> <strong><?= $no++;  ?></strong>
                        </td>
                        <td><?= $row['tgl'] ?></td>
                        <td><?= $p['penilaian'] ?></td>
                        <td>
                            <a class="btn btn-sm btn-primary" href="lihat-pending-kuan.php?id=<?= $row['id'] ?>">Lihat</a>
                            <a class="btn btn-sm btn-danger" href="hNas.php?id=<?= $row['id'] ?>">Hapus</a>
                        </td>
                      </tr>
<?php endforeach; ?>
                    </tbody>
                  </table>
                </div>
              </div>
              <!--/ Basic Bootstrap Table -->
<br>
<br>
			  <!-- Basic Bootstrap Table -->
              <div class="card">
                <div class="table-responsive text-nowrap">
                	<h5 class="card-header">Juli <a style="max-width: 200px;" class="card-header badge bg-label-primary me-1" href="penilaian.php">Tambah</a></h5>
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
$data = query("SELECT * FROM kuali WHERE nik = '$user[username]' AND tgl LIKE '%2023-07%' AND status = 'Pending'");
foreach ($data as $row) :
$p = query("SELECT * FROM penilaian WHERE kode = '$row[j_pen]'")[0];
 ?>
                      <tr>
                        <td>
                        	<i class="fab fa-angular fa-lg text-danger me-3"></i> <strong><?= $no++;  ?></strong>
                        </td>
                        <td><?= $row['tgl'] ?></td>
                        <td><?= $p['penilaian'] ?></td>
                        <td>
                          	<a class="btn btn-sm btn-primary" href="lihat-pending.php?id=<?= $row['id'] ?>">Lihat</a>
                          	<a class="btn btn-sm btn-danger" href="hNas.php?id=<?= $row['id'] ?>">Hapus</a>
                        </td>
                      </tr>
<?php endforeach; ?>
<?php
$data = query("SELECT * FROM kuanti WHERE nik = '$user[username]' AND tgl LIKE '%2023-07%' AND status = 'Pending'");
foreach ($data as $row) :
$p = query("SELECT * FROM penilaian WHERE kode = '$row[j_pen]'")[0];
 ?>
                      <tr>
                        <td>
                          <i class="fab fa-angular fa-lg text-danger me-3"></i> <strong><?= $no++;  ?></strong>
                        </td>
                        <td><?= $row['tgl'] ?></td>
                        <td><?= $p['penilaian'] ?></td>
                        <td>
                            <a class="btn btn-sm btn-primary" href="lihat-pending-kuan.php?id=<?= $row['id'] ?>">Lihat</a>
                            <a class="btn btn-sm btn-danger" href="hNas.php?id=<?= $row['id'] ?>">Hapus</a>
                        </td>
                      </tr>
<?php endforeach; ?>
                    </tbody>
                  </table>
                </div>
              </div>
              <!--/ Basic Bootstrap Table -->
<br>
<br>
			  <!-- Basic Bootstrap Table -->
              <div class="card">
                <div class="table-responsive text-nowrap">
                	<h5 class="card-header">Agustus <a style="max-width: 200px;" class="card-header badge bg-label-primary me-1" href="penilaian.php">Tambah</a></h5>
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
$data = query("SELECT * FROM kuali WHERE nik = '$user[username]' AND tgl LIKE '%2023-08%' AND status = 'Pending'");
foreach ($data as $row) :
$p = query("SELECT * FROM penilaian WHERE kode = '$row[j_pen]'")[0];
 ?>
                      <tr>
                        <td>
                        	<i class="fab fa-angular fa-lg text-danger me-3"></i> <strong><?= $no++;  ?></strong>
                        </td>
                        <td><?= $row['tgl'] ?></td>
                        <td><?= $p['penilaian'] ?></td>
                        <td>
                          	<a class="btn btn-sm btn-primary" href="lihat-pending.php?id=<?= $row['id'] ?>">Lihat</a>
                          	<a class="btn btn-sm btn-danger" href="hNas.php?id=<?= $row['id'] ?>">Hapus</a>
                        </td>
                      </tr>
<?php endforeach; ?>
<?php
$data = query("SELECT * FROM kuanti WHERE nik = '$user[username]' AND tgl LIKE '%2023-08%' AND status = 'Pending'");
foreach ($data as $row) :
$p = query("SELECT * FROM penilaian WHERE kode = '$row[j_pen]'")[0];
 ?>
                      <tr>
                        <td>
                          <i class="fab fa-angular fa-lg text-danger me-3"></i> <strong><?= $no++;  ?></strong>
                        </td>
                        <td><?= $row['tgl'] ?></td>
                        <td><?= $p['penilaian'] ?></td>
                        <td>
                            <a class="btn btn-sm btn-primary" href="lihat-pending-kuan.php?id=<?= $row['id'] ?>">Lihat</a>
                            <a class="btn btn-sm btn-danger" href="hNas.php?id=<?= $row['id'] ?>">Hapus</a>
                        </td>
                      </tr>
<?php endforeach; ?>
                    </tbody>
                  </table>
                </div>
              </div>
              <!--/ Basic Bootstrap Table -->
<br>
<br>
			  <!-- Basic Bootstrap Table -->
              <div class="card">
                <div class="table-responsive text-nowrap">
                	<h5 class="card-header">September <a style="max-width: 200px;" class="card-header badge bg-label-primary me-1" href="penilaian.php">Tambah</a></h5>
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
$data = query("SELECT * FROM kuali WHERE nik = '$user[username]' AND tgl LIKE '%2023-09%' AND status = 'Pending'");
foreach ($data as $row) :
$p = query("SELECT * FROM penilaian WHERE kode = '$row[j_pen]'")[0];
 ?>
                      <tr>
                        <td>
                        	<i class="fab fa-angular fa-lg text-danger me-3"></i> <strong><?= $no++;  ?></strong>
                        </td>
                        <td><?= $row['tgl'] ?></td>
                        <td><?= $p['penilaian'] ?></td>
                        <td>
                          	<a class="btn btn-sm btn-primary" href="lihat-pending.php?id=<?= $row['id'] ?>">Lihat</a>
                          	<a class="btn btn-sm btn-danger" href="hNas.php?id=<?= $row['id'] ?>">Hapus</a>
                        </td>
                      </tr>
<?php endforeach; ?>
<?php
$data = query("SELECT * FROM kuanti WHERE nik = '$user[username]' AND tgl LIKE '%2023-09%' AND status = 'Pending'");
foreach ($data as $row) :
$p = query("SELECT * FROM penilaian WHERE kode = '$row[j_pen]'")[0];
 ?>
                      <tr>
                        <td>
                          <i class="fab fa-angular fa-lg text-danger me-3"></i> <strong><?= $no++;  ?></strong>
                        </td>
                        <td><?= $row['tgl'] ?></td>
                        <td><?= $p['penilaian'] ?></td>
                        <td>
                            <a class="btn btn-sm btn-primary" href="lihat-pending-kuan.php?id=<?= $row['id'] ?>">Lihat</a>
                            <a class="btn btn-sm btn-danger" href="hNas.php?id=<?= $row['id'] ?>">Hapus</a>
                        </td>
                      </tr>
<?php endforeach; ?>
                    </tbody>
                  </table>
                </div>
              </div>
              <!--/ Basic Bootstrap Table -->
<br>
<br>
			  <!-- Basic Bootstrap Table -->
              <div class="card">
                <div class="table-responsive text-nowrap">
                	<h5 class="card-header">Oktober <a style="max-width: 200px;" class="card-header badge bg-label-primary me-1" href="penilaian.php">Tambah</a></h5>
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
$data = query("SELECT * FROM kuali WHERE nik = '$user[username]' AND tgl LIKE '%2023-10%' AND status = 'Pending'");
foreach ($data as $row) :
$p = query("SELECT * FROM penilaian WHERE kode = '$row[j_pen]'")[0];
 ?>
                      <tr>
                        <td>
                        	<i class="fab fa-angular fa-lg text-danger me-3"></i> <strong><?= $no++;  ?></strong>
                        </td>
                        <td><?= $row['tgl'] ?></td>
                        <td><?= $p['penilaian'] ?></td>
                        <td>
                          	<a class="btn btn-sm btn-primary" href="lihat-pending.php?id=<?= $row['id'] ?>">Lihat</a>
                          	<a class="btn btn-sm btn-danger" href="hNas.php?id=<?= $row['id'] ?>">Hapus</a>
                        </td>
                      </tr>
<?php endforeach; ?>
<?php
$data = query("SELECT * FROM kuanti WHERE nik = '$user[username]' AND tgl LIKE '%2023-10%' AND status = 'Pending'");
foreach ($data as $row) :
$p = query("SELECT * FROM penilaian WHERE kode = '$row[j_pen]'")[0];
 ?>
                      <tr>
                        <td>
                          <i class="fab fa-angular fa-lg text-danger me-3"></i> <strong><?= $no++;  ?></strong>
                        </td>
                        <td><?= $row['tgl'] ?></td>
                        <td><?= $p['penilaian'] ?></td>
                        <td>
                            <a class="btn btn-sm btn-primary" href="lihat-pending-kuan.php?id=<?= $row['id'] ?>">Lihat</a>
                            <a class="btn btn-sm btn-danger" href="hNas.php?id=<?= $row['id'] ?>">Hapus</a>
                        </td>
                      </tr>
<?php endforeach; ?>
                    </tbody>
                  </table>
                </div>
              </div>
              <!--/ Basic Bootstrap Table -->
<br>
<br>
			  <!-- Basic Bootstrap Table -->
              <div class="card">
                <div class="table-responsive text-nowrap">
                	<h5 class="card-header">November <a style="max-width: 200px;" class="card-header badge bg-label-primary me-1" href="penilaian.php">Tambah</a></h5>
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
$data = query("SELECT * FROM kuali WHERE nik = '$user[username]' AND tgl LIKE '%2023-11%' AND status = 'Pending'");
foreach ($data as $row) :
$p = query("SELECT * FROM penilaian WHERE kode = '$row[j_pen]'")[0];
 ?>
                      <tr>
                        <td>
                        	<i class="fab fa-angular fa-lg text-danger me-3"></i> <strong><?= $no++;  ?></strong>
                        </td>
                        <td><?= $row['tgl'] ?></td>
                        <td><?= $p['penilaian'] ?></td>
                        <td>
                          	<a class="btn btn-sm btn-primary" href="lihat-pending.php?id=<?= $row['id'] ?>">Lihat</a>
                          	<a class="btn btn-sm btn-danger" href="hNas.php?id=<?= $row['id'] ?>">Hapus</a>
                        </td>
                      </tr>
<?php endforeach; ?>
<?php
$data = query("SELECT * FROM kuanti WHERE nik = '$user[username]' AND tgl LIKE '%2023-11%' AND status = 'Pending'");
foreach ($data as $row) :
$p = query("SELECT * FROM penilaian WHERE kode = '$row[j_pen]'")[0];
 ?>
                      <tr>
                        <td>
                          <i class="fab fa-angular fa-lg text-danger me-3"></i> <strong><?= $no++;  ?></strong>
                        </td>
                        <td><?= $row['tgl'] ?></td>
                        <td><?= $p['penilaian'] ?></td>
                        <td>
                            <a class="btn btn-sm btn-primary" href="lihat-pending-kuan.php?id=<?= $row['id'] ?>">Lihat</a>
                            <a class="btn btn-sm btn-danger" href="hNas.php?id=<?= $row['id'] ?>">Hapus</a>
                        </td>
                      </tr>
<?php endforeach; ?>
                    </tbody>
                  </table>
                </div>
              </div>
              <!--/ Basic Bootstrap Table -->
<br>
<br>
			  <!-- Basic Bootstrap Table -->
              <div class="card">
                <div class="table-responsive text-nowrap">
                	<h5 class="card-header">Desember <a style="max-width: 200px;" class="card-header badge bg-label-primary me-1" href="penilaian.php">Tambah</a></h5>
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
$data = query("SELECT * FROM kuali WHERE nik = '$user[username]' AND tgl LIKE '%2023-12%' AND status = 'Pending'");
foreach ($data as $row) :
$p = query("SELECT * FROM penilaian WHERE kode = '$row[j_pen]'")[0];
 ?>
                      <tr>
                        <td>
                        	<i class="fab fa-angular fa-lg text-danger me-3"></i> <strong><?= $no++;  ?></strong>
                        </td>
                        <td><?= $row['tgl'] ?></td>
                        <td><?= $p['penilaian'] ?></td>
                        <td>
                          	<a class="btn btn-sm btn-primary" href="lihat-pending.php?id=<?= $row['id'] ?>">Lihat</a>
                          	<a class="btn btn-sm btn-danger" href="hNas.php?id=<?= $row['id'] ?>">Hapus</a>
                        </td>
                      </tr>
<?php endforeach; ?>
<?php
$data = query("SELECT * FROM kuanti WHERE nik = '$user[username]' AND tgl LIKE '%2023-12%' AND status = 'Pending'");
foreach ($data as $row) :
$p = query("SELECT * FROM penilaian WHERE kode = '$row[j_pen]'")[0];
 ?>
                      <tr>
                        <td>
                          <i class="fab fa-angular fa-lg text-danger me-3"></i> <strong><?= $no++;  ?></strong>
                        </td>
                        <td><?= $row['tgl'] ?></td>
                        <td><?= $p['penilaian'] ?></td>
                        <td>
                            <a class="btn btn-sm btn-primary" href="lihat-pending-kuan.php?id=<?= $row['id'] ?>">Lihat</a>
                            <a class="btn btn-sm btn-danger" href="hNas.php?id=<?= $row['id'] ?>">Hapus</a>
                        </td>
                      </tr>
<?php endforeach; ?>
                    </tbody>
                  </table>
                </div>
              </div>
              <!--/ Basic Bootstrap Table -->
<br>
            </div>
            <!-- / Content -->
        </div>
<?php require 'footer.php'; ?>