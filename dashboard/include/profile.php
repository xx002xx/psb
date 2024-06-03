<h2>Profile</h2>

<div class="col-sm-12 col-md-8 col-lg-10 col-lg-offset-1">
   <div class="card" style="margin-top: 50px">
      <div class="card-header" data-background-color="blue">
         <h4 class="title">Biodata</h4>
         <p class="category">Periksan data anda dibawah, pastikan sudah benar</p>
      </div>
      <div class="card-content table-responsive">
         <h3 style="overflow: hidden;"><b>Data Siswa</b></h3>
         <button type="button" class="btn btn-info" data-toggle="modal" data-target="#editModal">Edit Data</button>
         <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
               <div class="modal-content">
                  <div class="modal-header">
                     <h5 class="modal-title" id="editModalLabel">Edit Data Siswa</h5>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                     </button>
                  </div>
                  <form action="include/update_student_data.php" method="POST">
                     <div class="modal-body">
                        <div class="form-group">
                           <label for="email">Email</label>
                           <input type="text" readonly class="form-control" id="email" name="email"
                              value="<?php echo $email; ?>" required>
                           <input type="hidden" class="form-control" id="id" name="id"
                              value="<?php echo $id_pendaftaran; ?>" required>
                           <input type="hidden" class="form-control" id="id_dtl" name="id_dtl"
                              value="<?php echo $id_dtl; ?>" required>
                        </div>
                        <div class="form-group">
                           <label for="nama">Nama</label>
                           <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $nama; ?>"
                              required>
                        </div>
                        <div class="form-group">
                           <label for="nik">NIK</label>
                           <input type="text" class="form-control" id="nik" name="nik" value="<?php echo $nik_siswa; ?>"
                              required>
                        </div>
                        <div class="form-group">
                           <label for="nama_panggilan">Nama Panggilan</label>
                           <input type="text" class="form-control" id="nama_panggilan" name="nama_panggilan"
                              value="<?php echo $nama_panggilan; ?>" required>
                        </div>
                        <div class="form-group">
                           <label for="tempat_lahir">Tempat Lahir</label>
                           <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir"
                              value="<?php echo $tempat_lahir; ?>" required>
                        </div>
                        <div class="form-group">
                           <label for="tanggal_lahir">Tanggal Lahir</label>
                           <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir"
                              value="<?php echo $tanggal_lahir; ?>" required>
                        </div>
                        <div class="form-group">
                           <label for="jenis_kelamin">Jenis Kelamin</label>
                           <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" required>
                              <option value="Laki-Laki" <?php if ($jenis_kelamin == 'Laki-Laki') echo 'selected'; ?>>
                                 Laki-Laki</option>
                              <option value="Perempuan" <?php if ($jenis_kelamin == 'Perempuan') echo 'selected'; ?>>
                                 Perempuan</option>
                           </select>
                        </div>
                        <div class="form-group">
                           <label for="anak_ke">Anak Ke</label>
                           <input type="number" class="form-control" id="anak_ke" name="anak_ke"
                              value="<?php echo $anak_ke; ?>" required>
                        </div>
                        <div class="form-group">
                           <label for="jumlah_saudara">Jumlah Saudara</label>
                           <input type="number" class="form-control" id="jumlah_saudara" name="jumlah_saudara"
                              value="<?php echo $jumlah_saudara; ?>" required>
                        </div>
                        <div class="form-group">
                           <label for="di_jakarta_ikut">Tinggal Bersama</label>
                           <input type="text" class="form-control" id="di_jakarta_ikut" name="di_jakarta_ikut"
                              value="<?php echo $di_jakarta_ikut; ?>" required>
                        </div>
                     </div>
                     <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                     </div>
                  </form>
               </div>
            </div>
         </div>
         <table class="table table-hover">

            <tbody>
               <tr>
                  <td><b>Email</b></td>
                  <td>: <?php echo $email; ?> </td>
               </tr>
               <tr>
                  <td><b>Nama</b></td>
                  <td>: <?php echo $nama; ?></td>
               </tr>
               <tr>
                  <td><b>NIK</b></td>
                  <td>: <?php echo $nik_siswa; ?></td>
               </tr>
               <tr>
                  <td><b>Nama Panggilan</b></td>
                  <td>: <?php echo $nama_panggilan;; ?></td>
               </tr>
               <tr>
                  <td><b>TTL</b></td>
                  <td>: <?php echo $tempat_lahir.", ".$tanggal_lahir;; ?>,
                     <?php isset($_SESSION['birth_date'])  ?  print($_SESSION['birth_date']) : "2009-01-01"; ?></td>
               </tr>
               <tr>
                  <td><b>Jenis Kelamin</b></td>
                  <td>: <?php echo $jenis_kelamin; ?></td>
               </tr>

               <tr>
                  <td><b>Anak Ke -</b></td>
                  <td>: <?php echo $anak_ke." dari ".$jumlah_saudara?> bersaudara</td>
               </tr>

               <tr>
                  <td><b>Tinggal bersama</b></td>
                  <td>: <?php echo $di_jakarta_ikut; ?></td>
               </tr>
            </tbody>
         </table>


         <h3><b>Data Orangtua</b></h3>
         <table class="table table-hover">
            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#editParentModal">Edit
               Data</button>
            <tbody>
               <tr>
                  <td><b>Nama Ayah</b></td>
                  <td>:
                     <?php echo $nama_ayah; ?>
                  </td>
               </tr>
               <tr>
                  <td><b>NIK AYAH</b></td>
                  <td>: <span></span><?php echo $nik_ayah; ?></td>
               </tr>

               <tr>
                  <td><b>TTL</b></td>
                  <td>: <?php echo $tempat_lahir_ayah.", ".$tanggal_lahir_ayah; ?></td>
               </tr>
               <tr>
                  <td><b>Pendidikan Terakhir</b></td>
                  <td>: <?php echo $pendidikan_terakhir_ayah;; ?></td>
               </tr>

               <tr>
                  <td><b>Pekerjaan</b></td>
                  <td>: <?php echo $pekerjaan_ayah; ?></td>
               </tr>

               <tr>
                  <td><b>Agama</b></td>
                  <td>: <?php echo $agama_ayah; ?></td>
               </tr>
               <tr>
                  <td><b>Nama Ibu</b></td>
                  <td>: <?php echo $nama_ibu;; ?></td>
               </tr>
               <tr>
                  <td><b>TTL</b></td>
                  <td>: <?php echo $tempat_lahir_ibu.", ".$tanggal_lahir_ibu; ?></td>
               </tr>
               <tr>
                  <td><b>Pendidikan Terakhir</b></td>
                  <td>: <?php echo $pendidikan_terakhir_ibu; ?></td>
               </tr>

               <tr>
                  <td><b>Pekerjaan</b></td>
                  <td>: <?php echo $pekerjaan_ibu; ?></td>
               </tr>

               <tr>
                  <td><b>Agama</b></td>
                  <td>: <?php echo $agama_ibu; ?></td>
               </tr>
               <tr>
                  <td><b>Telp/HP</b></td>
                  <td>: <?php echo $telp; ?></td>
               </tr>
            </tbody>
         </table>

         <div class="modal fade" id="editParentModal" tabindex="-1" role="dialog" aria-labelledby="editParentModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
               <div class="modal-content">
                  <div class="modal-header">
                     <h5 class="modal-title" id="editParentModalLabel">Edit Parent Data</h5>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                     </button>
                  </div>
                  <form action="include/update_parent_data.php" method="POST">
                     <div class="modal-body">
                        <input type="hidden" name="id" value="<?php echo $id_pendaftaran; ?>">
                        <div class="form-group">
                           <label for="nama_ayah">Nama Ayah</label>
                           <input type="text" class="form-control" id="nama_ayah" name="nama_ayah"
                              value="<?php echo $nama_ayah; ?>" required>
                        </div>
                        <div class="form-group">
                           <label for="nik_ayah">NIK Ayah</label>
                           <input type="text" class="form-control" id="nik_ayah" name="nik_ayah"
                              value="<?php echo $nik_ayah; ?>" required>
                        </div>
                        <div class="form-group">
                           <label for="tempat_lahir_ayah">Tempat Lahir Ayah</label>
                           <input type="text" class="form-control" id="tempat_lahir_ayah" name="tempat_lahir_ayah"
                              value="<?php echo $tempat_lahir_ayah; ?>" required>
                        </div>
                        <div class="form-group">
                           <label for="tanggal_lahir_ayah">Tanggal Lahir Ayah</label>
                           <input type="date" class="form-control" id="tanggal_lahir_ayah" name="tanggal_lahir_ayah"
                              value="<?php echo $tanggal_lahir_ayah; ?>" required>
                        </div>
                        <div class="form-group">
                           <label for="pendidikan_terakhir_ayah">Pendidikan Terakhir Ayah</label>
                           <select class="form-control" name="pendidikan_terakhir_ayah" required>
                              <option value="">Pilih Pendidikan Terakhir</option>
                              <option value="SD" <?php if($pendidikan_terakhir_ayah == 'SD') echo 'selected'; ?>>
                                 SD</option>
                              <option value="SMP" <?php if($pendidikan_terakhir_ayah == 'SMP') echo 'selected'; ?>>
                                 SMP</option>
                              <option value="SMA" <?php if($pendidikan_terakhir_ayah == 'SMA') echo 'selected'; ?>>
                                 SMA</option>
                              <option value="Sarjana"
                                 <?php if($pendidikan_terakhir_ayah == 'Sarjana') echo 'selected'; ?>>
                                 Sarjana</option>
                              <option value="Magister"
                                 <?php if($pendidikan_terakhir_ayah == 'Magister') echo 'selected'; ?>>
                                 Magister</option>
                              <option value="Doktor"
                                 <?php if($pendidikan_terakhir_ayah == 'Doktor') echo 'selected'; ?>>
                                 Doktor</option>
                           </select>
                        </div>
                        <div class="form-group">
                           <label for="pekerjaan_ayah">Pekerjaan Ayah</label>
                           <select class="form-control" name="pekerjaan_ayah" required>
                              <option value="">Pilih Pekerjaan Ayah</option>
                              <option value="PNS" <?php if($pekerjaan_ayah == 'PNS') echo 'selected'; ?>>
                                 PNS</option>
                              <option value="Swasta" <?php if($pekerjaan_ayah == 'Swasta') echo 'selected'; ?>>
                                 Swasta</option>
                              <option value="Wiraswasta" <?php if($pekerjaan_ayah == 'Wiraswasta') echo 'selected'; ?>>
                                 Wiraswasta</option>
                              <option value="Petani" <?php if($pekerjaan_ayah == 'Petani') echo 'selected'; ?>>
                                 Petani</option>
                              <option value="Nelayan" <?php if($pekerjaan_ayah == 'Nelayan') echo 'selected'; ?>>
                                 Nelayan</option>
                              <option value="Guru" <?php if($pekerjaan_ayah == 'Guru') echo 'selected'; ?>>
                                 Guru</option>
                              <option value="Dokter" <?php if($pekerjaan_ayah == 'Dokter') echo 'selected'; ?>>
                                 Dokter</option>
                              <option value="Polisi" <?php if($pekerjaan_ayah == 'Polisi') echo 'selected'; ?>>
                                 Polisi</option>
                              <option value="Tentara" <?php if($pekerjaan_ayah == 'Tentara') echo 'selected'; ?>>
                                 Tentara</option>
                              <option value="Lainnya" <?php if($pekerjaan_ayah == 'Lainnya') echo 'selected'; ?>>
                                 Lainnya</option>
                           </select>
                        </div>
                        <div class="form-group">
                           <label for="agama_ayah">Agama Ayah</label>
                           <select class="form-control" name="agama_ayah" required>
                              <option value="Islam" <?php if($agama_ayah == 'Islam') echo 'selected'; ?>>
                                 Islam</option>
                              <option value="Kristen" <?php if($agama_ayah == 'Kristen') echo 'selected'; ?>>
                                 Kristen</option>
                              <option value="Hindu" <?php if($agama_ayah == 'Hindu') echo 'selected'; ?>>
                                 Hindu</option>
                              <option value="Buddha" <?php if($agama_ayah == 'Buddha') echo 'selected'; ?>>
                                 Buddha</option>
                              <option value="Konghucu" <?php if($agama_ayah == 'Konghucu') echo 'selected'; ?>>
                                 Konghucu</option>
                              <option value="Katolik" <?php if($agama_ayah == 'Katolik') echo 'selected'; ?>>
                                 Katolik</option>
                           </select>
                        </div>
                        <div class="form-group">
                           <label for="nama_ibu">Nama Ibu</label>
                           <input type="text" class="form-control" id="nama_ibu" name="nama_ibu"
                              value="<?php echo $nama_ibu; ?>" required>
                        </div>
                        <div class="form-group">
                           <label for="tempat_lahir_ibu">Tempat Lahir Ibu</label>
                           <input type="text" class="form-control" id="tempat_lahir_ibu" name="tempat_lahir_ibu"
                              value="<?php echo $tempat_lahir_ibu; ?>" required>
                        </div>
                        <div class="form-group">
                           <label for="tanggal_lahir_ibu">Tanggal Lahir Ibu</label>
                           <input type="date" class="form-control" id="tanggal_lahir_ibu" name="tanggal_lahir_ibu"
                              value="<?php echo $tanggal_lahir_ibu; ?>" required>
                        </div>
                        <div class="form-group">
                           <label for="pendidikan_terakhir_ibu">Pendidikan Terakhir Ibu</label>
                           <select class="form-control" name="pendidikan_terakhir_ibu" required>
                              <option value="">Pilih Pendidikan Terakhir</option>
                              <option value="SD" <?php if($pendidikan_terakhir_ibu == 'SD') echo 'selected'; ?>>
                                 SD</option>
                              <option value="SMP" <?php if($pendidikan_terakhir_ibu == 'SMP') echo 'selected'; ?>>
                                 SMP</option>
                              <option value="SMA" <?php if($pendidikan_terakhir_ibu == 'SMA') echo 'selected'; ?>>
                                 SMA</option>
                              <option value="Sarjana"
                                 <?php if($pendidikan_terakhir_ibu == 'Sarjana') echo 'selected'; ?>>
                                 Sarjana</option>
                              <option value="Magister"
                                 <?php if($pendidikan_terakhir_ibu == 'Magister') echo 'selected'; ?>>
                                 Magister</option>
                              <option value="Doktor" <?php if($pendidikan_terakhir_ibu == 'Doktor') echo 'selected'; ?>>
                                 Doktor</option>
                           </select>
                        </div>
                        <div class="form-group">
                           <label for="pekerjaan_ibu">Pekerjaan Ibu</label>
                           <select class="form-control" name="pekerjaan_ibu" required>
                              <option value="PNS" <?php echo ($pekerjaan_ibu == 'PNS') ? 'selected' : ''; ?>>
                                 PNS</option>
                              <option value="Guru" <?php echo ($pekerjaan_ibu == 'Guru') ? 'selected' : ''; ?>>
                                 Guru</option>
                              <option value="Dokter" <?php echo ($pekerjaan_ibu == 'Dokter') ? 'selected' : ''; ?>>
                                 Dokter</option>
                              <option value="Pengusaha"
                                 <?php echo ($pekerjaan_ibu == 'Pengusaha') ? 'selected' : ''; ?>>
                                 Pengusaha</option>
                              <option value="Ibu Rumah Tangga"
                                 <?php echo ($pekerjaan_ibu == 'Ibu Rumah Tangga') ? 'selected' : ''; ?>>
                                 Ibu Rumah Tangga</option>
                              <option value="Wiraswasta"
                                 <?php echo ($pekerjaan_ibu == 'Wiraswasta') ? 'selected' : ''; ?>>
                                 Wiraswasta</option>
                              <option value="Karyawan Swasta"
                                 <?php echo ($pekerjaan_ibu == 'Karyawan Swasta') ? 'selected' : ''; ?>>
                                 Karyawan Swasta</option>
                              <option value="Pekerja Lepas"
                                 <?php echo ($pekerjaan_ibu == 'Pekerja Lepas') ? 'selected' : ''; ?>>
                                 Pekerja Lepas</option>
                              <option value="Pedagang" <?php echo ($pekerjaan_ibu == 'Pedagang') ? 'selected' : ''; ?>>
                                 Pedagang</option>
                              <option value="Lainnya" <?php echo ($pekerjaan_ibu == 'Lainnya') ? 'selected' : ''; ?>>
                                 Lainnya</option>
                           </select>
                        </div>
                        <div class="form-group">
                           <label for="agama_ibu">Agama Ibu</label>
                           <select class="form-control" name="agama_ibu" required>
                              <option value="Islam" <?php if($agama_ibu == 'Islam') echo 'selected'; ?>>
                                 Islam</option>
                              <option value="Kristen" <?php if($agama_ibu == 'Kristen') echo 'selected'; ?>>
                                 Kristen</option>
                              <option value="Hindu" <?php if($agama_ibu == 'Hindu') echo 'selected'; ?>>
                                 Hindu</option>
                              <option value="Buddha" <?php if($agama_ibu == 'Buddha') echo 'selected'; ?>>
                                 Buddha</option>
                              <option value="Konghucu" <?php if($agama_ibu == 'Konghucu') echo 'selected'; ?>>
                                 Konghucu</option>
                              <option value="Katolik" <?php if($agama_ibu == 'Katolik') echo 'selected'; ?>>
                                 Katolik</option>
                           </select>
                        </div>
                        <div class="form-group">
                           <label for="telp">Telp/HP</label>
                           <input type="text" class="form-control" id="telp" name="telp" value="<?php echo $telp; ?>"
                              required>
                        </div>
                     </div>
                     <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                     </div>
                  </form>
               </div>
            </div>
         </div>


         <script type="text/javascript">
         function redirectToDaftarSyarat() {
            // Redirect to the specified URL
            window.location.href = "http://localhost:8080/psb/daftar_siswa_baru.php";
         }

         function generateRandomNIK() {
            // Generate a random number for the first part of the NIK (e.g., 435)
            var randomFirstPart = Math.floor(Math.random() * (999 - 100 + 1)) + 100;

            // Generate a random number for the second part of the NIK (e.g., 11)
            var randomSecondPart = Math.floor(Math.random() * (99 - 10 + 1)) + 10;

            // Combine the two parts with a hyphen
            var randomNIK = randomFirstPart + '-' + randomSecondPart;

            return randomNIK;
         }

         // Contoh data NIS
         var nisData = "123456789";

         // Mengambil elemen span berdasarkan ID
         var generatedNikElement = document.getElementById("generatedNik");

         // Menetapkan nilai NIS ke elemen span
         generatedNikElement.innerText = nisData;

         // Set the generated NIK in the HTML
         document.getElementById('generatedNikAyah').innerText = generateRandomNIK();

         function generateRandomNIK() {
            // Generate a random number for the first part of the NIK (e.g., 435)
            var randomFirstPart = Math.floor(Math.random() * (999 - 100 + 1)) + 100;

            // Generate a random number for the second part of the NIK (e.g., 11)
            var randomSecondPart = Math.floor(Math.random() * (99 - 10 + 1)) + 10;


         }

         // Set the generated NIK in the HTML
         document.getElementById('generatedNikIbu').innerText = generateRandomNIK();
         </script>