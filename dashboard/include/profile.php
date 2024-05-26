<h2>Profile</h2>

<div class="col-sm-12 col-md-8 col-lg-10 col-lg-offset-1">
<div class="card" style="margin-top: 50px">
<div class="card-header" data-background-color="blue">
<h4 class="title">Biodata Pendaftar</h4>
<p class="category">Periksan data anda dibawah, pastikan sudah benar</p>
</div>
<div class="card-content table-responsive">
<button type="button" class="btn btn-info" onclick="redirectToDaftarSyarat()">Edit Data Profil</button>

<h3 style="overflow: hidden;"><b>Data Siswa</b></h3>
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
    <td><b>NIS</b></td>
    <td>: <span id="generatedNik"></span></td>
</tr>
        <tr>
    <td><b>NIK</b></td>
    <td>: <span >5171040707840003</span></td>
</tr>
        <tr>
            <td><b>Nama Panggilan</b></td>
            <td>: <?php echo $nama_panggilan;; ?></td>
        </tr>
        <tr>
            <td><b>TTL</b></td>
            <td>: <?php echo $tempat_lahir.", ".$tanggal_lahir;; ?>, <?php isset($_SESSION['birth_date'])  ?  print($_SESSION['birth_date']) : "2009-01-01"; ?></td>
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

    <tbody>
        <tr>
            <td><b>Nama Ayah</b></td>
            <td>:ahmad<!-- <?php echo $nama_ayah; ?> --></td>
        </tr>
        <tr>
    <td><b>NIK AYAH</b></td>
    <td>: <span></span>5171040707840012</td>
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
            <td>: <?php echo $agama_ayah; ?>islam</td>
        </tr>
        <tr>
            <td><b>Nama Ibu</b></td>
            <td>: <?php echo $nama_ibu;; ?></td>
        </tr>
        <tr>
    <td><b>NIK IBU</b></td>
    <td>: <span>5171040707840002</span></td>
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
<script type="text/javascript">
    function redirectToDaftarSyarat() {
    // Redirect to the specified URL
    window.location.href = "http://localhost/psb/daftar_siswa_baru.php";
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
