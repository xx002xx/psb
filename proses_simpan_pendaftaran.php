<?php
	//Start session  
	session_start();
	
	//import connection to database
	include "koneksi/koneksi.php";

	//check if $_SESSION is exist
	if (isset($_SESSION)) {
		foreach ($_SESSION as $key => $val) {
			${$key} = $val;
		}


		$sql	= "INSERT INTO pendaftaran VALUES(null,'$full_name', '$nick_name', '$birth_place'
					, '$birth_date' ,'$gender', '$child_number', '$child_total', '$in_jakarta_follow'
					, '$father_name', '$birth_place_father','$birth_date_father', '$father_last_education'
					, '$father_job', '$agama_ayah','$mother_name', '$birth_place_mother', '$birth_date_mother'
					, '$mother_last_education', '$mother_job', '$mother_religion', '$telp','','','','','$nik_ayah','$no_telp','$nik_siswa','$nik_siswa')";

		$exec 	= mysqli_query($conn,$sql);

		if ($exec) {

			$id 		= $conn->insert_id;
			//echo $id;
			$query 		= "INSERT INTO akun VALUES(null, '$email', '$password', '',1, $id)";

			$exec_akun 	=  mysqli_query($conn, $query);

			$date_regis	= date("Y-m-d");

			$query2		= "INSERT INTO detail_pendaftaran (id_user,tanggal_daftar,status_pendaftaran)
							VALUES($id, '$date_regis', 0)";

			$exec_detil	= mysqli_query($conn, $query2);

			if ($exec_akun && $exec_detil) {
				session_destroy();
				echo'<script> window.location="success_register.php"; </script> ';
			}else{
				echo mysqli_error($conn);
				echo 'gagal';
			}

		}else{
			echo mysqli_error($conn);
		}
	}
?>