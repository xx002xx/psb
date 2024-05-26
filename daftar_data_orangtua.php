<?php  
	//start the session
	session_start();

    $redirect = "";
    
    if (isset($_SESSION['is_data_parent_exist'])) {
        $redirect = "<script> window.location='daftar_syarat.php'; </script>";
    }else{
        $redirect = "<script> window.location='daftar_syarat.php'; </script>";
    }

    if(isset($_POST['submit'])){
        foreach ($_POST as $key => $val) {
            ${$key} = $val;
            $_SESSION[$key] = $val; // Menyimpan setiap nilai dari form ke session
        }

        if (!empty($_SESSION)) {
            echo $redirect;
            print_r($_SESSION); // Menampilkan semua data session untuk debugging
        }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8" />
   <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
   <link rel="icon" type="image/png" href="../assets/img/favicon.png" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
   <title>Penerimaan Siswa Baru SLB Karya Bhakti </title>
   <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
   <meta name="viewport" content="width=device-width" />
   <!-- Bootstrap core CSS     -->
   <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
   <!--  Material Dashboard CSS    -->
   <link href="assets/css/material-dashboard.css?v=1.2.0" rel="stylesheet" />
   <!--  CSS for Demo Purpose, don't include it in your project     -->
   <link href="assets/css/demo.css" rel="stylesheet" />
   <!--     Fonts and icons     -->
   <link href="assets/css/font-awesome.min.css" rel="stylesheet">
   <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet'
      type='text/css'>
   <link rel="stylesheet" href="assets/css/main.css">

</head>

<body>
   <div class="container">

      <div class="row">
         <div class="col-sm-12 col-md-8 col-lg-10 col-lg-offset-1">

            <div class="card" style="margin-top: 50px">
               <div class="card-header" data-background-color="blue">
                  <h4 class="title">Data Orang Tua</h4>
                  <p class="category">Isi Form pendaftaran dengan benar</p>
               </div>
               <div class="card-content">
                  <form method="post" action="daftar_data_orangtua.php">

                     <fieldset class="the-fieldset">
                        <legend class="the-legend">Data Ayah</legend>
                        <!-- Father data form input -->
                        <div class="row">
                           <div class="col-md-12">
                              <div class="form-group label-floating">
                                 <label class="control-label">Nama Ayah</label>
                                 <input type="text" class="form-control" name="father_name"
                                    value="<?php isset($_SESSION['father_name'])  ?  print($_SESSION['father_name']) : ""; ?>">
                              </div>
                           </div>
                        </div>

                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-group label-floating">
                                 <label class="control-label">Tempat lahir Ayah</label>
                                 <input type="text" class="form-control" name="birth_place_father"
                                    value="<?php isset($_SESSION['birth_place_father'])  ?  print($_SESSION['birth_place_father']) : ""; ?>"
                                    required>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group label-floating">
                                 <label class="control-label">Tanggal lahir Ayah</label>
                                 <input type="date" class="form-control" name="birth_date_father"
                                    value="<?php isset($_SESSION['birth_date_father'])  ?  print($_SESSION['birth_date_father']) : print("1980-01-01"); ?>"
                                    required>
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-12">
                              <div class="form-group label-floating">
                                 <label class="control-label">No/Tlp</label>
                                 <input type="number" class="form-control" name="no_telp"
                                    value="<?php echo isset($_SESSION['no_telp']) ? $_SESSION['no_telp'] : ''; ?>">
                              </div>
                           </div>
                        </div>
                        <div class="row">

                           <div class="row">
                              <div class="col-md-12">
                                 <div class="form-group label-floating">
                                    <label class="control-label">NIK</label>
                                    <input type="text" class="form-control" name="nik_ayah"
                                       placeholder="Masukkan NIK (maksimal 16 karakter)" maxlength="16"
                                       onkeyup="this.value=this.value.replace(/[^0-9]/g,'');"
                                       value="<?php echo isset($_SESSION['nik_ayah']) ? $_SESSION['nik_ayah'] : ''; ?>"
                                       required>

                                 </div>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-md-12">
                                 <div class="form-group label-floating">
                                    <label class="control-label">Penghasilan</label>
                                    <select class="form-control" name="income">
                                       <option value="0-1"
                                          <?php echo isset($_SESSION['income']) && $_SESSION['income'] == '0-1' ? 'selected' : ''; ?>>
                                          0 s/d 1 jt</option>
                                       <option value="1-2.5"
                                          <?php echo isset($_SESSION['income']) && $_SESSION['income'] == '1-2.5' ? 'selected' : ''; ?>>
                                          1 s/d 2,5 juta</option>
                                       <option value="2.5-5"
                                          <?php echo isset($_SESSION['income']) && $_SESSION['income'] == '2.5-5' ? 'selected' : ''; ?>>
                                          2,5 juta s/d 5 jt</option>
                                       <option value="5-10"
                                          <?php echo isset($_SESSION['income']) && $_SESSION['income'] == '5-10' ? 'selected' : ''; ?>>
                                          5 jt s/d 10 jt</option>
                                    </select>
                                 </div>
                              </div>
                           </div>



                           <div class="row">
                              <div class="col-md-12">
                                 <div class="form-group label-floating">
                                    <label class="control-label">Pendidikan Terakhir Ayah</label><br>
                                    <select class="form-control" name="father_last_education">
                                       <option value="">Pilih Pendidikan Terakhir</option>
                                       <option value="SD"
                                          <?php if(isset($_SESSION['father_last_education']) && $_SESSION['father_last_education'] == 'SD') echo 'selected'; ?>>
                                          SD</option>
                                       <option value="SMP"
                                          <?php if(isset($_SESSION['father_last_education']) && $_SESSION['father_last_education'] == 'SMP') echo 'selected'; ?>>
                                          SMP</option>
                                       <option value="SMA"
                                          <?php if(isset($_SESSION['father_last_education']) && $_SESSION['father_last_education'] == 'SMA') echo 'selected'; ?>>
                                          SMA</option>
                                       <option value="Sarjana"
                                          <?php if(isset($_SESSION['father_last_education']) && $_SESSION['father_last_education'] == 'Sarjana') echo 'selected'; ?>>
                                          Sarjana</option>
                                       <option value="Magister"
                                          <?php if(isset($_SESSION['father_last_education']) && $_SESSION['father_last_education'] == 'Magister') echo 'selected'; ?>>
                                          Magister</option>
                                       <option value="Doktor"
                                          <?php if(isset($_SESSION['father_last_education']) && $_SESSION['father_last_education'] == 'Doktor') echo 'selected'; ?>>
                                          Doktor</option>
                                    </select>
                                 </div>
                              </div>

                           </div>

                           <div class="row">
                              <div class="col-md-12">
                                 <div class="form-group">
                                    <label class="control-label">Pekerjaan Ayah</label><br>
                                    <select class="form-control" name="father_job">
                                       <option value="">Pilih Pekerjaan Ayah</option>
                                       <option value="PNS"
                                          <?php if(isset($_SESSION['father_job']) && $_SESSION['father_job'] == 'PNS') echo 'selected'; ?>>
                                          PNS</option>
                                       <option value="Swasta"
                                          <?php if(isset($_SESSION['father_job']) && $_SESSION['father_job'] == 'Swasta') echo 'selected'; ?>>
                                          Swasta</option>
                                       <option value="Wiraswasta"
                                          <?php if(isset($_SESSION['father_job']) && $_SESSION['father_job'] == 'Wiraswasta') echo 'selected'; ?>>
                                          Wiraswasta</option>
                                       <option value="Lainnya"
                                          <?php if(isset($_SESSION['father_job']) && $_SESSION['father_job'] == 'Lainnya') echo 'selected'; ?>>
                                          Lainnya</option>
                                    </select>
                                 </div>
                              </div>
                           </div>

                           <div class="row">
                              <div class="col-md-12">
                                 <div class="form-group">
                                    <label class="control-label">Agama Ayah</label><br>
                                    <div class="row">
                                       <div class="col-md-12">

                                          <select class="form-control" name="agama_ayah" required>
                                             <option value="Islam"
                                                <?php if(isset($_SESSION['agama_ayah']) && $_SESSION['agama_ayah'] == 'Islam') echo 'selected'; ?>>
                                                Islam</option>
                                             <option value="Kristen"
                                                <?php if(isset($_SESSION['agama_ayah']) && $_SESSION['agama_ayah'] == 'Kristen') echo 'selected'; ?>>
                                                Kristen</option>
                                             <option value="Hindu"
                                                <?php if(isset($_SESSION['agama_ayah']) && $_SESSION['agama_ayah'] == 'Hindu') echo 'selected'; ?>>
                                                Hindu</option>
                                             <option value="Buddha"
                                                <?php if(isset($_SESSION['agama_ayah']) && $_SESSION['agama_ayah'] == 'Buddha') echo 'selected'; ?>>
                                                Buddha</option>
                                             <option value="Konghucu"
                                                <?php if(isset($_SESSION['agama_ayah']) && $_SESSION['agama_ayah'] == 'Konghucu') echo 'selected'; ?>>
                                                Konghucu</option>
                                             <option value="Katolik"
                                                <?php if(isset($_SESSION['agama_ayah']) && $_SESSION['agama_ayah'] == 'Katolik') echo 'selected'; ?>>
                                                Katolik</option>
                                          </select>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>

                        </div>
                        <!-- END Father data form input -->
                     </fieldset>





                     <fieldset class="the-fieldset" style="margin-top: 20px">
                        <legend class="the-legend">Data Ibu</legend>
                        <!-- Father data form input -->
                        <!-- Mother data form input -->
                        <div class="row">
                           <div class="col-md-12">
                              <div class="form-group label-floating">
                                 <label class="control-label">Nama Ibu</label>
                                 <input type="text" class="form-control" name="mother_name" required
                                    value="<?php isset($_SESSION['mother_name'])  ?  print($_SESSION['mother_name']) : ""; ?>"
                                    autofocus>
                              </div>
                           </div>
                        </div>

                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-group label-floating">
                                 <label class="control-label">Tempat lahir Ibu</label>
                                 <input type="text" class="form-control" name="birth_place_mother"
                                    value="<?php isset($_SESSION['birth_place_mother'])  ?  print($_SESSION['birth_place_mother']) : ""; ?>"
                                    required>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group label-floating">
                                 <label class="control-label">Tanggal lahir Ibu</label>
                                 <input type="date" class="form-control" name="birth_date_mother"
                                    value="<?php isset($_SESSION['birth_date_mother'])  ?  print($_SESSION['birth_date_mother']) : print("1980-01-01"); ?>"
                                    required>
                              </div>
                           </div>
                        </div>

                        <div class="row">
                           <div class="col-md-12">
                              <div class="form-group label-floating">
                                 <label class="control-label">Pendidikan Terakhir Ibu</label>
                                 <select class="form-control" name="mother_last_education" required>
                                    <option value="SD"
                                       <?php echo (isset($_SESSION['mother_last_education']) && $_SESSION['mother_last_education'] == 'SD') ? 'selected' : ''; ?>>
                                       SD</option>
                                    <option value="SMP"
                                       <?php echo (isset($_SESSION['mother_last_education']) && $_SESSION['mother_last_education'] == 'SMP') ? 'selected' : ''; ?>>
                                       SMP</option>
                                    <option value="SMA"
                                       <?php echo (isset($_SESSION['mother_last_education']) && $_SESSION['mother_last_education'] == 'SMA') ? 'selected' : ''; ?>>
                                       SMA</option>
                                    <option value="Sarjana"
                                       <?php echo (isset($_SESSION['mother_last_education']) && $_SESSION['mother_last_education'] == 'Sarjana') ? 'selected' : ''; ?>>
                                       Sarjana</option>
                                    <option value="Doktor"
                                       <?php echo (isset($_SESSION['mother_last_education']) && $_SESSION['mother_last_education'] == 'Doktor') ? 'selected' : ''; ?>>
                                       Doktor</option>
                                 </select>
                              </div>

                           </div>

                        </div>

                        <div class="row">
                           <div class="col-md-12">
                              <div class="form-group label-floating">
                                 <label class="control-label">Pekerjaan Ibu</label>
                                 <select class="form-control" name="mother_job" required>
                                    <option value="PNS"
                                       <?php echo (isset($_SESSION['mother_job']) && $_SESSION['mother_job'] == 'PNS') ? 'selected' : ''; ?>>
                                       PNS</option>
                                    <option value="Guru"
                                       <?php echo (isset($_SESSION['mother_job']) && $_SESSION['mother_job'] == 'Guru') ? 'selected' : ''; ?>>
                                       Guru</option>
                                    <option value="Dokter"
                                       <?php echo (isset($_SESSION['mother_job']) && $_SESSION['mother_job'] == 'Dokter') ? 'selected' : ''; ?>>
                                       Dokter</option>
                                    <option value="Pengusaha"
                                       <?php echo (isset($_SESSION['mother_job']) && $_SESSION['mother_job'] == 'Pengusaha') ? 'selected' : ''; ?>>
                                       Pengusaha</option>
                                    <!-- Anda bisa menambahkan pilihan pekerjaan lainnya sesuai kebutuhan -->
                                 </select>
                              </div>

                           </div>
                        </div>



                        <div class="row">
                           <div class="col-md-12">
                              <div class="form-group label-floating">
                                 <label class="control-label">Agama Ibu</label>
                                 <select class="form-control" name="mother_religion" required>
                                    <option value="Islam"
                                       <?php echo (isset($_SESSION['mother_religion']) && $_SESSION['mother_religion'] == 'Islam') ? 'selected' : ''; ?>>
                                       Islam</option>
                                    <option value="Kristen"
                                       <?php echo (isset($_SESSION['mother_religion']) && $_SESSION['mother_religion'] == 'Kristen') ? 'selected' : ''; ?>>
                                       Kristen</option>
                                    <option value="Hindu"
                                       <?php echo (isset($_SESSION['mother_religion']) && $_SESSION['mother_religion'] == 'Hindu') ? 'selected' : ''; ?>>
                                       Hindu</option>
                                    <option value="Buddha"
                                       <?php echo (isset($_SESSION['mother_religion']) && $_SESSION['mother_religion'] == 'Buddha') ? 'selected' : ''; ?>>
                                       Buddha</option>
                                    <option value="Konghucu"
                                       <?php echo (isset($_SESSION['mother_religion']) && $_SESSION['mother_religion'] == 'Konghucu') ? 'selected' : ''; ?>>
                                       Konghucu</option>
                                    <!-- Anda bisa menambahkan pilihan agama lainnya sesuai kebutuhan -->
                                 </select>
                              </div>

                           </div>
                        </div>
                        <!-- END Mother data form input -->

                        <div class="row">
                           <div class="col-md-12">
                              <div class="form-group label-floating">
                                 <label class="control-label">No Telp</label>
                                 <input type="number" class="form-control" name="telp"
                                    value="<?php echo isset($_SESSION['telp']) ? $_SESSION['telp'] : ""; ?>" required
                                    maxlength="16">
                              </div>
                           </div>
                        </div>

                     </fieldset>


                     <?php  
                            if (isset($_SESSION['is_data_parent_exist'])) {
                            ?>
                     <button type="submit" name="submit" class="btn btn-primary pull-right">Kembali <i
                           class="fa fa-arrow-right"></i></button>
                     <?php
                            }else{
                            ?>
                     <a href="daftar_siswa_baru.php" class="btn btn-warning pull-left"><i class="fa fa-arrow-left"></i>
                        Kembali</a>
                     <button type="submit" name="submit" class="btn btn-primary pull-right">Lanjut <i
                           class="fa fa-arrow-right"></i></button>
                     <?php
                            }
                            ?>


                     <div class="clearfix"></div>
                  </form>
               </div>
            </div>
         </div>
      </div>
</body>

</html>

</html>


</fieldset>


<?php  
                            if (isset($_SESSION['is_data_parent_exist'])) {
                            ?>
<button type="submit" name="submit" class="btn btn-primary pull-right">Kembali <i
      class="fa fa-arrow-right"></i></button>
<?php
                            }else{
                            ?>
<a href="daftar_siswa_baru.php" class="btn btn-warning pull-left"><i class="fa fa-arrow-left"></i>
   Kembali</a>
<button type="submit" name="submit" class="btn btn-primary pull-right">Lanjut <i class="fa fa-arrow-right"></i></button>
<?php
                            }
                            ?>


<div class="clearfix"></div>
</form>
</div>
</div>
</div>
</div>
</body>

</html>