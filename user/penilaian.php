<?php 

error_reporting(0);

$bln = date('F');
$thn = date('Y');

require 'header.php';

 ?>
          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Input Penilaian /</span> Tabel Input Penilaian</h4>
<?php
$no_pet = 1; 
$pet = query("SELECT * FROM petugas WHERE nik = '$user[username]'")[0];
 ?>
              <!-- Basic Bootstrap Table -->
              <div class="card">
                <h5 class="card-header"><?= $no_pet++ ?>. <?= $pet['nama'] ?></h5>
<?php 
$jp = query("SELECT * FROM jenis_p WHERE kd_jp = 'KDJP-01'")[0];
 ?>
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead>
                      <tr>
                        <th style="text-align: center;" colspan="6">PENILAIAN <?= $jp['jp'] ?> <?= $bln; ?>-<?= $thn; ?></th>
                      </tr>
                      <tr>
                        <th>No</th>
                        <th>Penilaian</th>
                        <th>Target</th>
                        <th>Realisasi</th>
                        <!-- <th width="30px">Keterangan</th> -->
                        <th>Aksi</th>
                      </tr>
                    </thead>
<?php 
$no=1;
$data = query("SELECT * FROM penilaian WHERE kd_jp = '$jp[kd_jp]'");
foreach ($data as $row3) :

$target = query("SELECT * FROM target WHERE bln = '$bln' AND thn = '$thn' AND nik = '$pet[nik]' AND kd_p = '$row3[kode]' AND kd_jp = '$jp[kd_jp]'")[0];
 ?>
                    <tbody class="table-border-bottom-0">
                      <tr>
                        <td>
                        	<i class="fab fa-angular fa-lg text-danger me-3"></i> <strong><?= $no++;  ?></strong>
                        </td>
                        <td><?= $row3['penilaian'] ?></td>
                        	<?php 
                        	if ($target['t'] == 0) {
                        	?>
                        	  <td>0</td>
                        	<?php
                        	}else{
                        	?>
                        <td>
                        	  <?= number_format($target['t']); ?>
                        </td>
                        	<?php
                        	}
                        	$real = mysqli_query($conn, "SELECT * FROM kuali WHERE nik = '$pet[nik]' AND j_pen = '$row3[kode]' AND status = 'Approved'");
                            //Jumlah Realisasi
                            $jml_r = mysqli_num_rows($real);

                        	?>
                        <td><?= $jml_r ?></td>
                        <td>
                        	<a class="btn btn-sm btn-primary" href="tKual.php?bln=<?= $bln ?>&&thn=<?= $thn ?>&&nik=<?= $pet['nik'] ?>&&kd_jp=<?= $jp['kd_jp'] ?>&&kd_p=<?= $row3['kode'] ?>">Input</a>
                        </td>
                      </tr>
                    </tbody>
<?php endforeach; ?>
                  </table>
                </div>

                <?php 
$jp = query("SELECT * FROM jenis_p WHERE kd_jp = 'KDJP-02'")[0];
 ?>
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead>
                      <tr>
                        <th style="text-align: center;" colspan="6">PENILAIAN <?= $jp['jp'] ?> <?= $bln; ?>-<?= $thn; ?></th>
                      </tr>
                      <tr>
                        <th>No</th>
                        <th>Penilaian</th>
                        <th>Target</th>
                        <th>Realisasi</th>
                        <!-- <th width="30px">Keterangan</th> -->
                        <th>Aksi</th>
                      </tr>
                    </thead>
<?php 
$no=1;
$data = query("SELECT * FROM penilaian WHERE kd_jp = '$jp[kd_jp]'");
foreach ($data as $row3) :

$target = query("SELECT * FROM target WHERE bln = '$bln' AND thn = '$thn' AND nik = '$pet[nik]' AND kd_p = '$row3[kode]' AND kd_jp = '$jp[kd_jp]'")[0];
 ?>
                    <tbody class="table-border-bottom-0">
                      <tr>
                        <td>
                        	<i class="fab fa-angular fa-lg text-danger me-3"></i> <strong><?= $no++;  ?></strong>
                        </td>
                        <td><?= $row3['penilaian'] ?></td>
                        	<?php 
                        	if ($target['t'] == 0) {
                        	?>
                        	  <td>0</td>
                        	<?php
                        	}else{
                        	?>
                        <td>
                        	  <?= number_format($target['t']); ?>
                        </td>
                        	<?php
                        	}
                        	//Total Realisasi
                        	$t_real = query("SELECT sum(realisasi) as t_real FROM kuanti WHERE nik = '$pet[nik]' AND j_pen = '$row3[kode]' AND status = 'Approved'")[0];
                        	if ($t_real['t_real'] == 0) {
                        		$jml_real = 0;
                        	}else{
                        		$jml_real = $t_real['t_real'];
                        	}
                        	?>
                        <td><?= number_format($jml_real) ?></td>
                        <td>
                        	<a class="btn btn-sm btn-primary" href="tKuan.php?bln=<?= $bln ?>&&thn=<?= $thn ?>&&nik=<?= $pet['nik'] ?>&&kd_jp=<?= $jp['kd_jp'] ?>&&kd_p=<?= $row3['kode'] ?>">Input</a>
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