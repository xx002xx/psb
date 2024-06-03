<h2>Profile</h2>
<?php 
$id 	= $_SESSION['auth'];
$query      = "SELECT b.*, c.*, year(a.tanggal_daftar) as tahun_angkatan FROM akun b, detail_pendaftaran a ,siswa c WHERE  b.id_user=$id AND a.id_user=$id AND  c.id_detail_pendaftaran=a.id";

    $exec       = mysqli_query($conn, $query);


    if ($exec) {
        while ($user = mysqli_fetch_array($exec)) {
            foreach ($user as $key=>$val) {
                ${$key} = $val;
            }       
        }
    }

    $class_descriptions = [
    'A' => 'SLB-A : Teruntuk anak-anak tunanetra',
    'B' => 'SLB-B : Teruntuk anak-anak tunarungu',
    'C' => 'SLB-C : Teruntuk anak-anak yang memiliki intelegensi di bawah rata-rata',
    'D' => 'SLB-D : Teruntuk anak-anak tunadaksa (tidak memiliki fisik yang sempurna)',
];
?>
<div class="col-sm-12 col-md-8 col-lg-10 col-lg-offset-1">
   <div class="card" style="margin-top: 50px">
      <div class="card-header" data-background-color="blue">
         <h4 class="title">Biodata</h4>
         <p class="category">Periksan data anda dibawah, pastikan sudah benar</p>
      </div>
      <div class="card-content table-responsive">

         <h3 style="overflow: hidden;"><b>Informasi Pendidikan Siswa</b></h3>
         <table class="table table-hover">

            <tbody>
               <tr>
                  <td><b>Nama</b></td>
                  <td>: <?php echo $nama; ?></td>
               </tr>
               <tr>
                  <td><b>NIS</b></td>
                  <td>: <?php echo $nis; ?></td>
               </tr>
               <tr>
                  <td><b>Tahun Angkatan</b></td>
                  <td>: <?php echo $tahun_angkatan; ?></td>
               </tr>
               <tr>
                  <td><b>Kelas</b></td>
                  <td>: <?php echo $kelas; ?></td>
               </tr>
               <tr>
                  <td><b>Keterangan</b></td>
                  <td>:
                     <?php echo isset($class_descriptions[$kelas]) ? $class_descriptions[$kelas] : 'Keterangan tidak tersedia'; ?>
                  </td>
               </tr>
            </tbody>
         </table>