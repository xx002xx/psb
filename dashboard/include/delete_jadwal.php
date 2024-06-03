<?php 

session_start();
include '../../koneksi/koneksi.php';

if (isset($_GET['id_jadwal'])) {
	
	$id 		= 	$_GET['id_jadwal'];

	$query		= 	"DELETE FROM jadwal WHERE id_jadwal = '$id'";

	$exec 		= 	mysqli_query($conn, $query);

	if ($exec) {
		$_SESSION['message'] 	= 	"Hapus data jadwal";
		echo '<script>window.location="../index.php?page=22"</script>';
	}
}
?>