<?php
session_start();

include '../../koneksi/koneksi.php';
    // Collect the data from the POST request
    $id = $_POST['id'];
    $nama_ayah = $_POST['nama_ayah'];
    $nik_ayah = $_POST['nik_ayah'];
    $tempat_lahir_ayah = $_POST['tempat_lahir_ayah'];
    $tanggal_lahir_ayah = $_POST['tanggal_lahir_ayah'];
    $pendidikan_terakhir_ayah = $_POST['pendidikan_terakhir_ayah'];
    $pekerjaan_ayah = $_POST['pekerjaan_ayah'];
    $agama_ayah = $_POST['agama_ayah'];
    $nama_ibu = $_POST['nama_ibu'];
     $nik_ibu = $_POST['nik_ibu'];
    $tempat_lahir_ibu = $_POST['tempat_lahir_ibu'];
    $tanggal_lahir_ibu = $_POST['tanggal_lahir_ibu'];
    $pendidikan_terakhir_ibu = $_POST['pendidikan_terakhir_ibu'];
    $pekerjaan_ibu = $_POST['pekerjaan_ibu'];
    $agama_ibu = $_POST['agama_ibu'];
    $telp = $_POST['telp'];

    // SQL query to update the data
    $sql = "UPDATE pendaftaran SET 
                nama_ayah = '$nama_ayah',
                nik_ayah = '$nik_ayah',
                tempat_lahir_ayah = '$tempat_lahir_ayah',
                tanggal_lahir_ayah = '$tanggal_lahir_ayah',
                pendidikan_terakhir_ayah = '$pendidikan_terakhir_ayah',
                pekerjaan_ayah = '$pekerjaan_ayah',
                agama_ayah = '$agama_ayah',
                nama_ibu = '$nama_ibu',
                nik_ibu = '$nik_ibu',
                tempat_lahir_ibu = '$tempat_lahir_ibu',
                tanggal_lahir_ibu = '$tanggal_lahir_ibu',
                pendidikan_terakhir_ibu = '$pendidikan_terakhir_ibu',
                pekerjaan_ibu = '$pekerjaan_ibu',
                agama_ibu = '$agama_ibu',
                telp = '$telp'
            WHERE id = '$id'";

  //  echo "<pre>".$sql."</pre>";
//die();
    if (mysqli_query($conn, $sql)) {
        $_SESSION['success_message'] = "Data updated successfully.";
        
    } else {
        $_SESSION['error_message'] = "Error updating data: " . mysqli_error($conn);
    }
 echo '<script>window.location = "../index.php?page=2"</script>';
    // Close the database connection
    mysqli_close($conn);
    
    


?>