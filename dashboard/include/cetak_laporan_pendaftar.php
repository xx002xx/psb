<?php
// Buat koneksi ke database
include '../../koneksi/koneksi.php';

// Query untuk menampilkan data siswa dengan kelas 'B'
$querySiswa = "SELECT * FROM siswa";
$execSiswa = mysqli_query($conn, $querySiswa);

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Laporan Pendaftaran Siswa Baru SLB Karya Bhakti</title>
   <style>
   body {
      font-family: Arial, sans-serif;
      margin: 20px;
   }

   #header {
      text-align: center;
   }

   #logo {
      max-width: 100px;
      max-height: 100px;
   }

   #cop {
      margin-top: 20px;
      margin-bottom: 20px;
   }

   table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
   }

   table,
   th,
   td {
      border: 1px solid black;
   }

   th,
   td {
      padding: 10px;
      text-align: left;
   }

   .button-container {
      text-align: center;
      margin-top: 20px;
   }

   .print-button {
      padding: 10px 20px;
      background-color: #007bff;
      color: #fff;
      border: none;
      border-radius: 5px;
      cursor: pointer;
   }
   </style>
</head>

<body>
   <div id="header">
      <img src="../../assets/img/logo-slb.png" alt="Logo SLB Karya Bhakti" id="logo">
      <h1>Laporan Siswa Kelas Ditetapkan</h1>
   </div>

   <div id="cop">
      <div id="kop-surat">
         <div>
            <h3>KOP SURAT</h3>
            <p>
               PEMERINTAH KOTA BANDUNG<br>
               DINAS PENDIDIKAN<br>
               SLB Karya Bhakti<br>
               Jl. Persaudaraan No.35 Hantap Bandung 40281<br>
               BANDUNG 40281
            </p>
         </div>
      </div>
   </div>

   <table>
      <tr>
         <th>NIS</th>
         <th>Nama</th>
         <th>Kelas</th>
         <!-- tambahkan kolom lain sesuai kebutuhan -->
      </tr>
      <?php
      // Tampilkan data siswa dengan kelas 'B' dalam tabel
      if ($execSiswa) {
          while ($siswa = mysqli_fetch_array($execSiswa)) {
              ?>
      <tr>
         <td><?php echo $siswa['nis']; ?></td>
         <td><?php echo $siswa['nama']; ?></td>
         <td><?php echo $siswa['kelas']; ?></td>
         <!-- tambahkan kolom lain sesuai kebutuhan -->
      </tr>
      <?php
          }
      } else {
          echo "0 results";
      }
      ?>
   </table>

   <!-- tambahkan informasi tambahan atau tanda tangan jika diperlukan -->

   <div class="button-container">
      <button class="print-button" onclick="window.print()">Cetak / Unduh</button>
   </div>
</body>

</html>

<?php
// Tutup koneksi database
$conn->close();
?>