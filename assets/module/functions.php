<?php  

function eAkun($data){
		global $conn;
		$id = $data["id"];
		$username = htmlspecialchars($data["username"]);
		$password = htmlspecialchars($data["password"]);
		$nama = htmlspecialchars($data["nama"]);
		
		$password2 = password_hash($password , PASSWORD_DEFAULT);

		//query insert data
		$query = "UPDATE users SET 
				username = '$username',
				password = '$password2',
				nama = '$nama'
				WHERE id = $id
				";
		mysqli_query($conn, $query);
		
		return mysqli_affected_rows($conn);
}

function tPet($data){
		global $conn;

		$nik = htmlspecialchars($data["nik"]);
		$nama = htmlspecialchars($data["nama"]);
		$jabatan = htmlspecialchars($data["jabatan"]);
		$cab = htmlspecialchars($data["cab"]);
		$p_kuali = 0;
		$p_kuanti = 0;
		
		$cek = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM users WHERE username = '$nik'"));
		
		if ($cek > 0 ) {
			echo "
                <script>
                    alert('Data User Sudah Ada !');
                    document.location.href = 'petugas.php';
                </script>
            ";
		}else{

		//query insert data
		$query = "INSERT INTO petugas VALUES ('','$nik','$nama','$jabatan','$cab','$p_kuali','$p_kuanti')";
		mysqli_query($conn, $query);

		$password2 = password_hash($nik , PASSWORD_DEFAULT);

		$query2 = "INSERT INTO users VALUES ('','$nik','$password2','$nama')";
		
		mysqli_query($conn, $query2);
		}


		return mysqli_affected_rows($conn);
}

function ePet($data){
	global $conn;
	$id = $data["id"];
	$nik = htmlspecialchars($data["nik"]);
	$nama = htmlspecialchars($data["nama"]);
	$jabatan = htmlspecialchars($data["jabatan"]);

	$query = "UPDATE petugas SET 
			  nama = '$nama',
			  jabatan = '$jabatan'
			  WHERE id = $id
			   ";
	mysqli_query($conn,$query);
	
	$query2 = "UPDATE users SET 
			  nama = '$nama'
			  WHERE username = '$nik'
			   ";
	mysqli_query($conn,$query2);
	

	return mysqli_affected_rows($conn);


}

function hPet($nik) {
	global $conn;
	mysqli_query($conn, "DELETE FROM petugas WHERE nik = $nik");
	mysqli_query($conn, "DELETE FROM users WHERE username = $nik");
	mysqli_query($conn, "DELETE FROM target WHERE nik = $nik");

	return mysqli_affected_rows($conn);
}

function tJp($data){
		global $conn;

		$kode = htmlspecialchars($data["kode"]);
		$jp = htmlspecialchars($data["jp"]);
		$persen = htmlspecialchars($data["persen"]);
				
		//query insert data
		$query = "INSERT INTO jenis_p VALUES ('','$kode','$jp','$persen')";
		mysqli_query($conn, $query);

		return mysqli_affected_rows($conn);
}

function eJp($data){
	global $conn;
	$id = $data["id"];
	$jp = htmlspecialchars($data["jp"]);
	$persen = htmlspecialchars($data["persen"]);

	$query = "UPDATE jenis_p SET 
			  jp = '$jp',
			  persen = '$persen'
			  WHERE id = $id
			   ";
	mysqli_query($conn,$query);
	
	return mysqli_affected_rows($conn);


}

function tPen($data){
		global $conn;

		$kd_jp = htmlspecialchars($data["kd_jp"]);
		$kode = htmlspecialchars($data["kode"]);
		$penilaian = htmlspecialchars($data["penilaian"]);
		$bobot = htmlspecialchars($data["bobot"]);
		$ket = htmlspecialchars($data["ket"]);
		
		$cek = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM penilaian WHERE penilaian = '$penilaian'"));

		if ($cek > 0 ) {
			echo "
                <script>
                    alert('Indeks Penilaian Sudah Ada !');
                    document.location.href = 'penilaian.php';
                </script>
            ";
		}else{
		
		//query insert data
		$query = "INSERT INTO penilaian VALUES ('','$kd_jp','$kode','$penilaian','$bobot','$ket')";

		mysqli_query($conn, $query);

		}

		return mysqli_affected_rows($conn);
}

function ePen($data){
	global $conn;
	$id = $data["id"];
	$penilaian = htmlspecialchars($data["penilaian"]);
	$bobot = htmlspecialchars($data["bobot"]);
	$ket = htmlspecialchars($data["ket"]);

	$query = "UPDATE penilaian SET 
			  penilaian = '$penilaian',
			  bobot = '$bobot',
			  ket = '$ket'
			  WHERE id = $id
			   ";
	mysqli_query($conn,$query);
	
	return mysqli_affected_rows($conn);


}

function tTar($data){
		global $conn;

		$bln = htmlspecialchars($data["bln"]);
		$thn = htmlspecialchars($data["thn"]);
		$nik = htmlspecialchars($data["nik"]);
		$kd_jp = htmlspecialchars($data["kd_jp"]);
		$kd_p = htmlspecialchars($data["kd_p"]);
		$t = htmlspecialchars($data["t"]);
				
		//query insert data
		$query = "INSERT INTO target VALUES ('','$bln','$thn','$nik','$kd_jp','$kd_p','$t')";
		mysqli_query($conn, $query);

		return mysqli_affected_rows($conn);
}

function eTar($data){
	global $conn;
	$id = $data["id"];
	$t = htmlspecialchars($data["t"]);

	$query = "UPDATE target SET 
			  t = '$t'
			  WHERE id = $id
			   ";
	mysqli_query($conn,$query);

	return mysqli_affected_rows($conn);


}

function hPen($nik) {
	global $conn;
	mysqli_query($conn, "DELETE FROM petugas WHERE nik = $nik");
	mysqli_query($conn, "DELETE FROM users WHERE username = $nik");

	return mysqli_affected_rows($conn);
}

function tNas($data){
		global $conn;
		$nik = htmlspecialchars($data["nik"]);
		$kd_nas = htmlspecialchars($data["kd_nas"]);
		$tgl = htmlspecialchars($data["tgl"]);
		$norek = htmlspecialchars($data["norek"]);
		$j_pen = htmlspecialchars($data["j_pen"]);
		$nm_nas = htmlspecialchars($data["nm_nas"]);
		$fileName = $_FILES['ss']['name'];
		$ket = htmlspecialchars($data["ket"]);
		$status = "Pending";
		
		//query insert data
		$query = "INSERT INTO kuali VALUES ('','$nik','$kd_nas','$tgl','$norek','$nm_nas','$j_pen','$fileName','$ket','$status')";

		move_uploaded_file($_FILES['ss']['tmp_name'], "../screenshoot/".$_FILES['ss']['name']);

		
		mysqli_query($conn, $query);

		return mysqli_affected_rows($conn);
}

function hNas($id) {
	global $conn;
	$ss = query("SELECT * FROM kuali WHERE id = $id")[0];
	unlink("../screenshoot/".$ss['ss']);
	mysqli_query($conn, "DELETE FROM kuali WHERE id = $id");

	return mysqli_affected_rows($conn);
}

function tKuan($data){
		global $conn;
		$nik = htmlspecialchars($data["nik"]);
		$kd_nas = htmlspecialchars($data["kd_nas"]);
		$tgl = htmlspecialchars($data["tgl"]);
		$norek = htmlspecialchars($data["norek"]);
		$j_pen = htmlspecialchars($data["j_pen"]);
		$nm_nas = htmlspecialchars($data["nm_nas"]);
		$realisasi = htmlspecialchars($data["realisasi"]);
		$status = "Pending";
		
		//query insert data
		$query = "INSERT INTO kuanti VALUES ('','$nik','$tgl','$norek','$nm_nas','$realisasi','$j_pen','$status')";

		mysqli_query($conn, $query);

		return mysqli_affected_rows($conn);
}

function hKuan($id) {
	global $conn;
	$ss = query("SELECT * FROM kuali WHERE id = $id")[0];
	unlink("../screenshoot/".$ss['ss']);
	mysqli_query($conn, "DELETE FROM kuali WHERE id = $id");

	return mysqli_affected_rows($conn);
}

function approve($data){
	global $conn;
	$id = $data["id"];
	$status = "Approved";

	$query = "UPDATE kuali SET 
			  status = '$status'
			  WHERE id = $id
			   ";
	mysqli_query($conn,$query);

	return mysqli_affected_rows($conn);


}

function approve_kuan($data){
	global $conn;
	$id = $data["id"];
	$status = "Approved";

	$query = "UPDATE kuanti SET 
			  status = '$status'
			  WHERE id = $id
			   ";
	mysqli_query($conn,$query);

	return mysqli_affected_rows($conn);


}

function tCab($data){
		global $conn;

		$kd_k = htmlspecialchars($data["kd_k"]);
		$k = htmlspecialchars($data["k"]);
		$ket = htmlspecialchars($data["ket"]);
				
		//query insert data
		$query = "INSERT INTO cabang VALUES ('','$kd_k','$k','$ket')";
		mysqli_query($conn, $query);

		return mysqli_affected_rows($conn);
}

function eCab($data){
	global $conn;
	$id = $data["id"];
	$k = htmlspecialchars($data["k"]);
	$ket = htmlspecialchars($data["ket"]);

	$query = "UPDATE cabang SET 
			  k = '$k',
			  ket = '$ket'
			  WHERE id = $id
			   ";
	mysqli_query($conn,$query);
	return mysqli_affected_rows($conn);


}

function hCab($id) {
	global $conn;
	mysqli_query($conn, "DELETE FROM cabang WHERE id = $id");

	return mysqli_affected_rows($conn);
}

?>