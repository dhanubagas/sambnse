<?php 

	require "../assets/module/functions.php";
	require "../assets/module/koneksi.php";

	$id= $_GET["id"];

	if(approve_kuan($id) > 0){
	echo "
				<script>
					alert('Data Berhasil Di Approve');
					document.location.href = 'pending.php';
				</script>
			";

	}else {
		echo "
				<script>
					alert('Data gagal Di Approve');
					document.location.href = 'pending.php';
				</script>
			";
	}
	
?>