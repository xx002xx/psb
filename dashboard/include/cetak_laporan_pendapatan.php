<?php
// Buat koneksi ke database
include '../../koneksi/koneksi.php';

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Set default tahun
$selected_year = date('Y');

// Jika form dikirim, ambil tahun yang dipilih
if (isset($_POST['tahun'])) {
    $selected_year = $_POST['tahun'];
}

// Query untuk mengambil data cicilan_pendaftaran berdasarkan tahun yang dipilih
$query = "SELECT MONTH(tanggal_pembayaran) AS bulan, SUM(nominal) AS total FROM cicilan_pendaftaran WHERE YEAR(tanggal_pembayaran) = $selected_year GROUP BY MONTH(tanggal_pembayaran)";
$result = $conn->query($query);

// Array untuk menyimpan total pendapatan per bulan
$total_per_bulan = array_fill(1, 12, 0);

// Memasukkan hasil query ke dalam array
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $bulan = $row['bulan'];
        $total = $row['total'];
        $total_per_bulan[$bulan] = $total;
    }
}

// Tanggal Cetak
$tanggal_cetak = date('d F Y');
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Laporan Pendapatan Siswa Baru SLB Karya Bhakti</title>
   <style>
   body {
      font-family: Arial, sans-serif;
   }

   .header {
      text-align: center;
      margin-bottom: 20px;
   }

   .logo {
      max-width: 100px;
      margin-bottom: 10px;
   }

   table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
   }

   th,
   td {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;
   }

   th {
      background-color: #f2f2f2;
   }

   .button-container {
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
   <div class="header">
      <img src="../../assets/img/logo-slb.png" alt="Logo SLB Karya Bhakti" class="logo">
      <h1>Laporan Pendapatan Siswa Baru SLB Karya Bhakti</h1>
      <p>
         PEMERINTAH KOTA BANDUNG<br>
         DINAS PENDIDIKAN<br>
         SLB Karya Bhakti<br>
         Jl. Persaudaraan No.35 Hantap Bandung 40281<br>
         BANDUNG 40281
      </p>
   </div>

   <form method="POST" action="">
      <label for="tahun">Pilih Tahun:</label>
      <select name="tahun" id="tahun">
         <?php
            // Generate dropdown tahun dari 2010 hingga tahun sekarang
            $tahun_sekarang = date('Y');
            for ($tahun = 2010; $tahun <= $tahun_sekarang; $tahun++) {
                echo "<option value='$tahun' " . ($tahun == $selected_year ? 'selected' : '') . ">$tahun</option>";
            }
            ?>
      </select>
      <input type="submit" value="Filter">
   </form>

   <div class="content">
      <table>
         <tr>
            <th>Bulan</th>
            <th>Total Pendapatan</th>
         </tr>
         <?php
            // Tampilkan total pendapatan per bulan
            for ($i = 1; $i <= 12; $i++) {
                $nama_bulan = date("F", mktime(0, 0, 0, $i, 1));
                $total = isset($total_per_bulan[$i]) ? "Rp " . number_format($total_per_bulan[$i], 0, ',', '.') : "Rp 0";
                echo "<tr><td>$nama_bulan</td><td>$total</td></tr>";
            }
            ?>
      </table>
   </div>

   <div class="footer">
      <p>Tanggal Cetak: <?php echo $tanggal_cetak; ?></p>
   </div>

   <div class="button-container">
      <button class="print-button" onclick="window.print()">Cetak / Unduh</button>
   </div>
</body>

</html>

<?php
// Tutup koneksi database
$conn->close();
?>