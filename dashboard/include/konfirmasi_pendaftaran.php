<h2>Konfirmasi Pendaftaran</h2>

<?php  
if (isset($_SESSION['message'])) {
    echo "<div class='alert alert-success alert-dismissable'>
      <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
      <strong>Berhasil!</strong> Konfirmasi Pembayaran.
    </div>";
}
?>

<div class="row">
   <div class="col-sm-12 col-md-8 col-lg-10 col-lg-offset-1">
      <div class="card" style="margin-top: 50px">
         <div class="card-header" data-background-color="blue">
            <h4 class="title">Konfirmasi Pendaftaran</h4>
            <p class="category">Lakukan konfirmasi Pendaftaran Siswa Baru</p>
         </div>
         <div class="card-content">

            <h3 style="overflow: hidden;"><b>Data Siswa</b></h3>
            <table class="table table-hover">
               <thead>
                  <tr>
                     <td><b>No</b></td>
                     <td><b>Nama</b></td>
                     <td><b>Email</b></td>
                     <td><b>Lihat Akte</b></td>
                     <td><b>Lihat Foto</b></td>
                     <td><b>Bukti Bayar</b></td>
                     <td><b>Status Pendaftaran</b></td>
                     <td><b>Aksi</b></td>
                  </tr>
               </thead>
               <tbody>
                  <?php  
				    		$query 	= "SELECT a.nama, a.id as id_daftar, b.id as id_akun,a.upload_akte,a.foto_anak,b.email,c.* , d.bukti_pembayaran, d.id as idcicilan, c.id as idDetail
				    				FROM pendaftaran a, akun b, detail_pendaftaran c, cicilan_pendaftaran d 
						    		WHERE a.id=b.id_user 
						    		AND b.role_user=1 
						    		AND c.id_user = a.id
                           AND c.id = d.id_detail_pendaftaran
                    				AND a.upload_akte != '' 
                    				AND a.upload_kartu_keluarga != '' 
                    				AND a.foto_anak != '' 
                    				AND a.foto_keluarga != ''
									ORDER BY c.status_pendaftaran asc
										"
										
										;

				    		$exec 	=	mysqli_query($conn, $query);

				    		if ($exec) {
				    			$total	= mysqli_num_rows($exec);
				    			if ($total > 0) {
				    				while ($rows = mysqli_fetch_array($exec)) {
				    				    
				    				    $status = $rows['status_pendaftaran'];

				    			
				    	?>


                  <tr>
                     <td><?php echo ++$no; ?></td>
                     <td><?php echo $rows['nama']; ?></td>
                     <td><?php echo $rows['email']; ?></td>
                     <td><a target="_blank" href="../assets/uploads/<?php echo $rows['upload_akte']; ?>"
                           data-lightbox="gallery">
                           Lihat
                        </a></td>
                     <td><a target="_blank" href="../assets/uploads/<?php echo $rows['foto_anak']; ?>"
                           data-lightbox="gallery">
                           Lihat
                        </a></td>
                     <td><a target="_blank" href="../assets/uploads/<?php echo $rows['bukti_pembayaran']; ?>"
                           data-lightbox="gallery">
                           Lihat
                        </a></td>
                     <td><?php
if ($status == 0) {
    print("<font color='#e74c3c'>Pengajuan Baru</font>");
} elseif ($status == 1) {
    print("<font color='#f39c12'>Menunggu Pembayaran</font>");
} elseif ($status == 2) {
    print("<font color='#3498db'>Verifikasi Pembayaran</font>");

   } elseif ($status == 3) {
    print("<font color='#3498db'>Cicilan</font>");

   }
   elseif ($status == 4) {
    print("<font color='##2ecc71'>Ditetapkan</font>");
} 
?>
                     </td>
                     <td>
                        <?php
                        if ($status == 0) {
                           ?>
                        <a href="include/proses_konfirmasi_pendaftaran.php?ida=<?php echo $rows['id_akun'] ?>&idd=<?php echo $rows['id_daftar'] ?>&idu=<?php echo $Id ?>"
                           class="btn btn-warning btn-sm">Konfirmasi</a>
                        <?php
                        }
                        ?>

                        <?php
                        if ($status == 2) {
                           ?>

                        <a href="#" class="btn btn-warning btn-sm"
                           onclick="konfirmasiPembayaran(<?php echo $rows['idcicilan']; ?>, <?php echo $rows['idDetail']; ?>)">Verifikasi
                           Pembayaran</a>
                        <?php
                        }
                        else{
                           echo "-";
                        }
                        ?>
                        <!-- <a href="" class="btn btn-primary btn-sm">Konfirmasi</a> -->
                     </td>
                  </tr>

                  <?php
				    				}
				    			}else{
				    				echo "<td colspan='5' align='center'><h3><b>Belum ada siswa daftar</b></h3></td>";
				    			}
				    		}else{
				    			echo mysqli_error($conn);
				    		}
				    	?>

               </tbody>
            </table>

         </div>
      </div>
   </div>
</div>

<?php  

unset($_SESSION['message']);

?>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
function konfirmasiPembayaran(idCicilan, idDetail) {
   Swal.fire({
      title: 'Konfirmasi Pembayaran',
      text: 'Apakah Anda yakin ingin mengkonfirmasi pembayaran ini?',
      icon: 'question',
      showCancelButton: true,
      confirmButtonText: 'Ya, Konfirmasi',
      cancelButtonText: 'Tidak',
   }).then((result) => {
      if (result.isConfirmed) {
         // Jika pengguna mengkonfirmasi, arahkan ke proses konfirmasi
         window.location.href =
            `include/proses_konfirmasi_cicilan_pendaftaran.php?id=${idCicilan}&idd=${idDetail}`;
      }
   }).catch((error) => {
      console.error(error);
   });
}
</script>