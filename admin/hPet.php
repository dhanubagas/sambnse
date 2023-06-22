<?php 
	require'../assets/module/koneksi.php';
	require'../assets/module/functions.php';

	$nik = $_GET["nik"];

	if (hPet($nik) > 0) {
		echo "<script>
				alert('Data Berhasil Di Hapus!');
				document.location.href = 'petugas.php';
			</script>";
	}else{
		echo "<script>alert('Data Gagal Di Hapus!'); document.location.href = 'petugas.php';</script>";
	}
 ?>