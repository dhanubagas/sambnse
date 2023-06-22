<?php 

error_reporting(0);

$nik = $_GET['nik'];

$bln = date('F');
$thn = date('Y');

require 'header.php';

 ?>
          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Data Bobot Petugas /</span> Tabel Data Bobot Petugas</h4>
<?php
$pet = query("SELECT * FROM petugas WHERE nik = '$nik'")[0];
 ?>
              <!-- Basic Bootstrap Table -->
              <div class="card">
                <h5 class="card-header"><?= $pet['nama'] ?></h5>
<?php 
$jp = query("SELECT * FROM jenis_p WHERE kd_jp = 'KDJP-01'")[0];
 ?>
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead>
                      <tr>
                        <th style="text-align: center;" colspan="10"><b>BOBOT POINT <?= $jp['jp'] ?> <?= $bln; ?>-<?= $thn; ?></b></th>
                      </tr>
                      <tr>
                        <th>No</th>
                        <th>Penilaian</th>
                        <th>Bobot</th>
                        <th>Target</th>
                        <th>Realisasi</th>
                        <th>(%) Dari target</th>
                        <th>Point</th>
                        <th>Max Point</th>
                        <th>Adj Point</th>
                        <!-- <th width="30px">Keterangan</th> -->
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
                        <td><?= $row3['bobot'] ?></td>
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
                          $real = mysqli_query($conn, "SELECT * FROM kuali WHERE nik = '$pet[nik]' AND j_pen = '$row3[kode]' AND status = 'Approved'");
                            //Jumlah Realisasi
                            $jml_r = mysqli_num_rows($real);

                            //Persen dari target
                            $pdt = ($jml_r/$target['t'])*100;

                            //Point Sebelum Adjust
                            $point = $row3['bobot']*$pdt/100;

                            //Point Maksimal
                            $maxp = $row3['bobot']*120/100;

                            //Point Setelah Adjustment
                            if (number_format($pdt,1) >= 120 ) {
                              $adjp = $maxp;
                            }else{
                              $adjp = $point = $row3['bobot']*$pdt/100;
                            }

                            //Total Bobot
                            $tot_bobot[] = $row3['bobot'];

                            //Total Realisasi
                            $tot_real[] = $jml_r;
                            
                            //Total Point Sblm Adjust
                            $tot_pba[] = $point;

                            //Total Max Point
                            $tot_maxp[] = $maxp;

                            //Total Point Stlh Adjust
                            $tot_psa[] = $adjp;

                            //Persentase pencapaian
                            $ppt = array_sum($tot_psa)/array_sum($tot_bobot)*100;

                            //Nilai Kualitatif
                            $n_kuali = $jp['persen']*($ppt/100);

                           ?>
                          <?= $jml_r ?>
                        </td>
                        <td><?= number_format($pdt,1) ?>%</td>
                        <td><?= number_format($point,1) ?></td>
                        <td><?= number_format($maxp,1) ?></td>
                        <td>
                            <?= number_format($adjp,1) ?>
                        </td>
                      </tr>
                    </tbody>
<?php endforeach; ?>
                      <tr>
                        <td colspan="2"><b>TOTAL</b></td>
                        <td colspan=""><b><?= array_sum($tot_bobot) ?></b></td>
                        <td colspan=""></td>
                        <td colspan=""><b><?= array_sum($tot_real) ?></b></td>
                        <td colspan=""><b></b></td>
                        <td colspan=""><b><?= number_format(array_sum($tot_pba),1) ?></b></td>
                        <td colspan=""><b><?= number_format(array_sum($tot_maxp),1) ?></b></td>
                        <td colspan=""><b><?= number_format(array_sum($tot_psa),1) ?></b></td>
                      </tr>
                      <tr>
                        <td colspan="8"><b>PERSENTASE PENCAPAIAN TARGET</b></td>
                        <td colspan=""><b><?= number_format($ppt)  ?>%</b></td>
                      </tr>
                      <tr>
                        <td colspan="8"><b>PERSENTASE PENILAIAN KUALITATIF</b></td>
                        <td colspan=""><b><?= $jp['persen']  ?>%</b></td>
                      </tr>
                      <tr>
                        <td colspan="8"><b>NILAI KUALITATIF</b></td>
                        <td colspan=""><b><?= number_format($n_kuali,2)  ?></b></td>
                      </tr>
                  </table>
                </div>
<?php //==========================BATAS================================== ?>
                <?php 
$jp = query("SELECT * FROM jenis_p WHERE kd_jp = 'KDJP-02'")[0];
 ?>
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead>
                      <tr>
                        <th style="text-align: center;" colspan="10"><b>BOBOT POINT <?= $jp['jp'] ?> <?= $bln; ?>-<?= $thn; ?></b></th>
                      </tr>
                      <tr>
                        <th>No</th>
                        <th>Penilaian</th>
                        <th>Bobot</th>
                        <th>Target</th>
                        <th>Realisasi</th>
                        <th>(%) Dari target</th>
                        <th>Point</th>
                        <th>Max Point</th>
                        <th>Adj Point</th>
                        <!-- <th width="30px">Keterangan</th> -->
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
                        <td><?= $row3['bobot'] ?></td>
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
                          //Jumlah Realisasi Kuanti
                          $t_real = query("SELECT sum(realisasi) as t_real FROM kuanti WHERE nik = '$pet[nik]' AND j_pen = '$row3[kode]' AND status = 'Approved'")[0];
                          if ($t_real['t_real'] == 0) {
                            $jml_r = 0;
                          }else{
                            $jml_r = $t_real['t_real'];
                          }

                            //Persen dari target
                            $pdt = ($jml_r/$target['t'])*100;

                            //Point Sebelum Adjust
                            $point = $row3['bobot']*$pdt/100;

                            //Point Maksimal
                            $maxp = $row3['bobot']*120/100;

                            //Point Setelah Adjustment
                            if (number_format($pdt,1) >= 120 ) {
                              $adjp = $maxp;
                            }else{
                              $adjp = $point = $row3['bobot']*$pdt/100;
                            }

                            //Total Bobot
                            $tot_bobot2[] = $row3['bobot'];

                            //Total Realisasi
                            $tot_real2[] = $jml_r;
                            
                            //Total Point Sblm Adjust
                            $tot_pba2[] = $point;

                            //Total Max Point
                            $tot_maxp2[] = $maxp;

                            //Total Point Stlh Adjust
                            $tot_psa2[] = $adjp;

                            //Persentase pencapaian
                            $ppt2 = array_sum($tot_psa2)/array_sum($tot_bobot2)*100;

                            //Nilai Kualitatif
                            $n_kuanti = $jp['persen']*($ppt2/100);

                            //Total Kuali dan Kuanti
                            $tot_nkuali_nkuanti = $n_kuali + $n_kuanti;

                           ?>
                          <?= number_format($jml_r) ?>
                        </td>
                        <td><?= number_format($pdt,1) ?>%</td>
                        <td><?= number_format($point,1) ?></td>
                        <td><?= number_format($maxp,1) ?></td>
                        <td>
                            <?= number_format($adjp,1) ?>
                        </td>
                      </tr>
                    </tbody>
<?php endforeach; ?>
                      <tr>
                        <td colspan="2"><b>TOTAL</b></td>
                        <td colspan=""><b><?= array_sum($tot_bobot2) ?></b></td>
                        <td colspan=""></td>
                        <td colspan=""><b><?= array_sum($tot_real2) ?></b></td>
                        <td colspan=""><b></b></td>
                        <td colspan=""><b><?= number_format(array_sum($tot_pba2),1) ?></b></td>
                        <td colspan=""><b><?= number_format(array_sum($tot_maxp2),1) ?></b></td>
                        <td colspan=""><b><?= number_format(array_sum($tot_psa2),1) ?></b></td>
                      </tr>
                      <tr>
                        <td colspan="8"><b>PERSENTASE PENCAPAIAN TARGET</b></td>
                        <td colspan=""><b><?= number_format($ppt2)  ?>%</b></td>
                      </tr>
                      <tr>
                        <td colspan="8"><b>PERSENTASE PENILAIAN KUALITATIF</b></td>
                        <td colspan=""><b><?= $jp['persen']  ?>%</b></td>
                      </tr>
                      <tr>
                        <td colspan="8"><b>NILAI KUANTITATIF</b></td>
                        <td colspan=""><b><?= number_format($n_kuanti,2)  ?></b></td>
                      </tr>
                      <tr>
                        <td colspan="8"><b>TOTAL NILAI KUALITATIF + TOTAL NILAI KUANTITATIF</b></td>
                        <td colspan=""><b><?= number_format($tot_nkuali_nkuanti,2)  ?></b></td>
                      </tr>
                  </table>
                </div>

              </div>
              <!--/ Basic Bootstrap Table -->
            </div>
            <!-- / Content -->
<?php require 'footer.php'; ?>