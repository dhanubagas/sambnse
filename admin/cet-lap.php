<?php 

require '../assets/module/koneksi.php';

$data = query("SELECT * FROM barang ORDER BY brg ASC");

 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cetak Laporan Nilai Persediaan</title>
</head>
<body>
<hr>
<h1 style="text-align: center;">Laporan Daftar  Persediaan</h1>
<h1 style="text-align: center;">PT. Bank Nagari Simpang Empat</h1>
<hr>
<br>
<table style="text-align: left;" border="2px" width="100%">
    <tr>
    	<td>No</td>
    	<td>Jenis Barang</td>
    	<td>Unit Lama</td>
    	<td>Harga Lama</td>
    	<td>Unit Baru</td>
    	<td>Harga Baru</td>
    	<td>Total Harga</td>
    </tr>
<?php
$no=1; 
foreach ($data as $row) :
$stok_lama[] = $row['stok_lama']; 
$stok_baru[] = $row['stok_baru']; 
$tot = ($row['stok_lama'] * $row['hrg_lama'])+($row['stok_baru'] * $row['hrg_baru']);
$ar_tot[] = $tot;
$tot_as = array_sum($ar_tot) 
 ?>
 	<tr>
 		<td><?= $no++ ?></td>
 		<td><?= $row['brg'] ?></td>
 		<td style="text-align: center;"><?= number_format($row['stok_lama']) ?></td>
 		<td>Rp. <?= number_format($row['hrg_lama'],2)?></td>
 		<td style="text-align: center;"><?= number_format($row['stok_baru']) ?></td>
 		<td>Rp. <?= number_format($row['hrg_baru'],2)?></td>
 		<td>Rp. <?= number_format($tot,2)?></td>
 	</tr>
<?php endforeach; ?>
	<tr>
		<td style="text-align: center;" colspan="6"><b>Total Nilai Persediaan</b></td>
		<td style="text-align: center;" colspan=""><b>Rp. <?= number_format($tot_as,2) ?></b></td>
	</tr>
</table>
<br>

<table style="text-align: right;" width="100%">
    <tr>
        <td>Kab. Pasaman Barat, <?= date('d-m-Y') ?></td>
    </tr>
    <tr>
        <td>Mengetahui, </td>
    </tr>
    <tr>
        <td><br><br><br><br><br><br></td>
    </tr>
    <tr>
        <td>Pimpinan Cabang Simpang Empat</td>
    </tr>
</table>

<script>
	window.print();
</script>

</body>
</html>
