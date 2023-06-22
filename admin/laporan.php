<?php require 'header.php'; ?>
          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Laporan /</span> Cetak Laporan</h4>

              <!-- Basic Bootstrap Table -->
              <div class="card">
                <h5 class="card-header">Laporan Data Barang
                </h5>
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Laporan</th>
                        <th style="text-align: center;">Aksi</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      <tr>
                        <td>
                        	<i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>1</strong>
                        </td>
                        <td>Laporan Data Asset Persediaan</td>
                        <td style="text-align: center;">
                          	<a class="btn btn-sm btn-info" target="_blank" href="cet-lap.php">Cetak Laporan</a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                        	<i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>2</strong>
                        </td>
                        <td>Laporan Data Persediaan Masuk</td>
                        <td style="text-align: center;">
                          	<a class="btn btn-sm btn-info" target="_blank" href="cet-lap-mas.php">Cetak Laporan</a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                        	<i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>3</strong>
                        </td>
                        <td>Laporan Data Persediaan Keluar</td>
                        <td style="text-align: center;">
                          	<a class="btn btn-sm btn-info" target="_blank" href="cet-lap-kel.php">Cetak Laporan</a>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <!--/ Basic Bootstrap Table -->
<br>
              <!-- Basic Bootstrap Table -->
              <div class="card">
                <h5 class="card-header">Laporan Data Unit Persediaan Perkantor
                </h5>
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Cabang</th>
                        <th style="text-align: center;">Aksi</th>
                      </tr>
                    </thead>
                <?php 
                $no=1;
                $cab = query("SELECT * FROM cabang");
                foreach ($cab as $row) :
                 ?>
                    <tbody class="table-border-bottom-0">
                      <tr>
                        <td>
                        	<i class="fab fa-angular fa-lg text-danger me-3"></i> <strong><?= $no++ ?></strong>
                        </td>
                        <td><?= $row['k'] ?></td>
                        <td style="text-align: center;">
                          	<a class="btn btn-sm btn-info" target="_blank" href="cet-lap-perkan.php?kd_k=<?= $row['kd_k'] ?>">Cetak Laporan</a>
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