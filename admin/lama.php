<?php require 'header.php'; ?>
          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Persediaan /</span> Unit Lama</h4>

              <!-- Basic Bootstrap Table -->
              <div class="card">
                <h5 class="card-header">Tabel Data Barang
                <br><br>
                <div class="col-sm-auto">
                  <input type="text" id="myInput" onkeyup="myFunction()" class="form-control" placeholder="Cari Data Barang">
                </div>
                </h5>
                <div class="table-responsive text-nowrap">
                  <table id="myTable" class="table" ui-jq="footable" ui-options='
                {
                  "paging": {
                    "enabled": true
                },
                  "filtering": {
                    "enabled": true
                },
                  "sorting": {
                    "enabled": true
                }}'>
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Kode Barang</th>
                        <th>Barang</th>
                        <th>Stok</th>
                        <th style="text-align: center;">Persediaan</th>
                        <th style="text-align: center;">Aksi</th>
                      </tr>
                    </thead>
<?php 
$no=1;
$data = query("SELECT * FROM barang ORDER BY brg ASC");
foreach ($data as $row) :
 ?>
                    <tbody class="table-border-bottom-0">
                      <tr>
                        <td>
                        	<i class="fab fa-angular fa-lg text-danger me-3"></i> <strong><?= $no++;  ?></strong>
                        </td>
                        <td><?= $row['kd_brg'] ?></td>
                        <td><?= $row['brg'] ?></td>
                        <td><?= $row['stok_lama'] ?></td>
                        <td style="text-align: center;">
                          	<a class="btn btn-sm btn-primary" href="tLsm.php?kd_brg=<?= $row['kd_brg'] ?>&&brg=<?= $row['brg'] ?>&&hrg_lama=<?= $row['hrg_lama'] ?>&&stok_lama=<?= $row['stok_lama'] ?>">Input Stok Masuk</a>
                          	<a class="btn btn-sm btn-danger" href="tLsk.php?kd_brg=<?= $row['kd_brg'] ?>&&brg=<?= $row['brg'] ?>&&hrg_lama=<?= $row['hrg_lama'] ?>&&stok_lama=<?= $row['stok_lama'] ?>">Input Stok Keluar</a>
                        </td>
                        <td style="text-align: center;">
                          	<a class="btn btn-sm btn-info" href="det-lama.php?kd_brg=<?= $row['kd_brg'] ?>&&brg=<?= $row['brg'] ?>">Detail Transaksi</a>
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

<script src="../assets/bootstrap.min.js"></script>
<script src="../assets/jquery.min.js"></script>
<script>
    $(document).ready(function () {
        $("#myInput").on("keyup", function () {
            var value = $(this).val().toLowerCase();
          $("#myTable tbody tr").filter(function () {
              $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
          });
        });
    });
</script>

<?php require 'footer.php'; ?>