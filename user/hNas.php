<?php 
	require'../assets/module/koneksi.php';
	require'../assets/module/functions.php';

	$id = $_GET["id"];

	if (hNas($id) > 0) {
		echo "<script>
				alert('Data Berhasil Di Hapus!');
				document.location.href = 'pending.php';
			</script>";
	}else{
		echo "<script>alert('Data Gagal Di Hapus!'); document.location.href = 'pending.php';</script>";
	}
 ?>