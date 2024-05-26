<h2>Konfirmasi Pembayaran Pendaftaran</h2>

<?php  
if (isset($_SESSION['message'])) {
    echo "<div class='alert alert-success alert-dismissable'>
      <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
      <strong>Berhasil!</strong> Konfirmasi Pembayaran pendaftaran.
    </div>";
}
?>

<div class="row">
    <div class="col-sm-12 col-md-8 col-lg-10 col-lg-offset-1">
        <div class="card" style="margin-top: 50px">
            <div class="card-header" data-background-color="blue">
                <h4 class="title">Konfirmasi Pendaftaran</h4>
                <p class="category">Lakukan konfirmasi pendaftaran</p>
            </div>
            <div class="card-content">
                
                <h3 style="overflow: hidden;"><b>Data Konfirmasi Pembayaran</b></h3>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <td><b>No</b></td>
                            <td><b>Nama Pendaftar</b></td>
                            <td><b>Email</b></td>
                            <td><b>Cicilan Ke</b></td>
                            <td><b>Status Pembayaran</b></td>
                            <td><b>Aksi</b></td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php  
                        $query  = "SELECT a.Id,a.cicilan_ke, a.status_cicilan, c.email, d.nama,b.Id idd FROM cicilan_pendaftaran a , detail_pendaftaran b, akun c, pendaftaran d WHERE a.id_detail_pendaftaran = b.Id AND a.status_cicilan = 0 AND c.id_user = d.Id AND b.id_user = d.Id ";

                        $exec   =   mysqli_query($conn, $query);

                        if ($exec) {
                            $total  = mysqli_num_rows($exec);
                            if ($total > 0) {
                                while ($rows = mysqli_fetch_array($exec)) {
                                    $status = $rows['status_cicilan'];
                                    ?>
                                    <tr>
                                        <td><?php echo ++$no; ?></td>
                                        <td><?php echo $rows['nama']; ?></td>
                                        <td><?php echo $rows['email']; ?></td>
                                        <td><b><?php echo $rows['cicilan_ke']; ?></b></td>
                                        <td>
                                            <?php 
                                            if ($status == 0) {
                                                echo "<font color='#e74c3c'>Belum dikonfirmasi</font>";
                                            } else {
                                                echo "<font color='#2ecc71'>Sudah dikonfirmasi</font>";
                                            }
                                            ?>
                                        </td>
                                        <td>
                                            <!-- Tambahkan SweetAlert untuk konfirmasi -->
                                            <a href="#" class="btn btn-warning btn-sm" onclick="konfirmasiPembayaran(<?php echo $rows['Id']; ?>, <?php echo $rows['idd']; ?>)">Konfirmasi</a>
                                        </td>
                                    </tr>
                                    <?php
                                }
                            } else {
                                echo "<tr><td colspan='6' align='center'><h3><b></b></h3></td></tr>";
                            }
                        } else {
                            echo mysqli_error($conn);
                        }
                        ?>

                        <!-- Jika Anda ingin menambahkan data contoh tambahan, Anda bisa melakukannya di bawah ini -->
                         <tr>
                            <td>1</td>
                            <td>Anggit Prayogo</td>
                            <td>anggitprayogo@gmail.com</td>
                            <td><b>1</b></td>
                            <td class=" text-success ">Sudah dikonfirmasi</font></td>
                            <td>
                                <a href="#" class="btn btn-warning btn-sm" onclick="konfirmasiPembayaran(99, 9)">Konfirmasi</a>
                            </td>
                        </tr>
                         <tr>
                            <td>2</td>
                            <td>test</td>
                            <td>test@gmail.com</td>
                            <td><b>1</b></td>
                            <td class=" text-success ">Sudah dikonfirmasi</td>
                            <td>
                                <a href="#" class="btn btn-warning btn-sm" onclick="konfirmasiPembayaran(99, 9)">Konfirmasi</a>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>test2</td>
                            <td>test2@gmail.com</td>
                            <td><b>1</b></td>
                             <td class=" text-success ">Sudah dikonfirmasi</td>
                            <td>
                                <a href="#" class="btn btn-warning btn-sm" onclick="konfirmasiPembayaran(99, 9)">Konfirmasi</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php  
unset($_SESSION['message']);
?>

<!-- Tambahkan script SweetAlert di bagian bawah halaman -->
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
                window.location.href = `include/proses_konfirmasi_cicilan_pendaftaran.php?id=${idCicilan}&idd=${idDetail}`;
            }
        }).catch((error) => {
            console.error(error);
        });
    }
</script>
