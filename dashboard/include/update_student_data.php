<?php 

session_start();
include '../../koneksi/koneksi.php';
    // Get the form data
    $id = $_POST['id'];
    $email = $_POST['email'];
    $nama = $_POST['nama'];
    $nik = $_POST['nik'];
    $nama_panggilan = $_POST['nama_panggilan'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $anak_ke = $_POST['anak_ke'];
    $jumlah_saudara = $_POST['jumlah_saudara'];
    $di_jakarta_ikut = $_POST['di_jakarta_ikut'];
    $id_dtl = $_POST['id_dtl']; 

    // Create the SQL update query
    $query = "UPDATE pendaftaran SET 
                nama = '$nama', 
                nik_siswa = '$nik', 
                nama_panggilan = '$nama_panggilan', 
                tempat_lahir = '$tempat_lahir', 
                tanggal_lahir = '$tanggal_lahir', 
                jenis_kelamin = '$jenis_kelamin', 
                anak_ke = '$anak_ke', 
                jumlah_saudara = '$jumlah_saudara', 
                di_jakarta_ikut = '$di_jakarta_ikut'
              WHERE id = '$id'";

   $query2 = "UPDATE siswa SET 
                nama = '$nama'
               WHERE  id_detail_pendaftaran = '$id_dtl' ";

    // Execute the query
    $exec = mysqli_query($conn, $query);
    $exec2 = mysqli_query($conn, $query2);

  
    // Check if the query was successful
    if ($exec2) {
        $_SESSION['message'] = "Berhasil ubah data siswa";
        echo '<script>window.location = "../index.php?page=2"</script>';
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    // Close the database connection
    mysqli_close($conn);

?>