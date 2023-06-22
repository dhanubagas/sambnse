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
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Data Target Petugas /</span> Tabel Data Target Petugas</h4>
<?php
$no_pet = 1; 
$pet = query("SELECT * FROM petugas");
foreach ($pet as $row) :
 ?>
              <!-- Basic Bootstrap Table -->
              <div class="card">
                <h5 class="card-header"><?= $no_pet++ ?>. <?= $row['nama'] ?></h5>
<?php 
$jp = query("SELECT * FROM jenis_p");
foreach ($jp as $row2) :
 ?>
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead>
                      <tr>
                        <th style="text-align: center;" colspan="6">TARGET <?= $row2['jp'] ?> <?= $bln; ?>-<?= $thn; ?></th>
                      </tr>
                      <tr>
                        <th>No</th>
                        <th>Penilaian</th>
                        <th>Target</th>
                        <!-- <th width="30px">Keterangan</th> -->
                        <th>Aksi</th>
                      </tr>
                    </thead>
<?php 
$no=1;
$data = query("SELECT * FROM penilaian WHERE kd_jp = '$row2[kd_jp]'");
foreach ($data as $row3) :

$target = query("SELECT * FROM target WHERE bln = '$bln' AND thn = '$thn' AND nik = '$row[nik]' AND kd_p = '$row3[kode]' AND kd_jp = '$row2[kd_jp]'")[0];
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
                        	?>
                        <td>
                        	<?php 
                        	if ($target['t'] == 0) {
                        		
                        	 ?>
                          		<a class="btn btn-sm btn-primary" href="tTar.php?bln=<?= $bln ?>&&thn=<?= $thn ?>&&nik=<?= $row['nik'] ?>&&kd_jp=<?= $row2['kd_jp'] ?>&&kd_p=<?= $row3['kode'] ?>">Input</a>
                        	<?php }else{ ?>
                          		<a class="btn btn-sm btn-info" href="eTar.php?id=<?= $target['id']; ?>">Edit</a>
                          	<?php } ?>
                        </td>
                      </tr>
                    </tbody>
<?php endforeach; ?>
                  </table>
                </div>
<?php endforeach; ?>
              </div>
              <!--/ Basic Bootstrap Table -->
<br>
<?php endforeach; ?>
            </div>
            <!-- / Content -->
<?php require 'footer.php'; ?>