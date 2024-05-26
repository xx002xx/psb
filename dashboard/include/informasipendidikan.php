<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Siswa</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <style>
    /* Optional custom styling can be added here */
  </style>
</head>

<body>

  <h2>Formulir Data Siswa</h2>

  <div class="container">
    <form id="siswaForm" onsubmit="tampilkanData(); return false;">
      <fieldset>
        <legend>Personal Information</legend>

        <div class="mb-3">
          <label for="namaSiswa" class="form-label">Nama Siswa:</label>
          <input type="text" class="form-control" id="namaSiswa" name="namaSiswa" required>
        </div>

        <div class="mb-3">
          <label for="nisSiswa" class="form-label">NIS Siswa:</label>
          <input type="text" class="form-control" id="nisSiswa" name="nisSiswa" required>
        </div>

        <div class="mb-3">
          <label for="kelas" class="form-label">Kelas:</label>
          <input type="text" class="form-control" id="kelas" name="kelas" required>
        </div>

        <div class="mb-3">
          <label for="kelasKe" class="form-label">Kelas Ke:</label>
          <input type="number" class="form-control" id="kelasKe" name="kelasKe" required>
        </div>

      </fieldset>

      <button type="submit" class="btn btn-primary">Tampilkan Data</button>
    </form>

    <div id="hasilForm"></div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVFQWrvVuHvPQz7snTqYnblzut5zYM+1sR0JYLRU3BvHlldLz9tL" crossorigin="anonymous"></script>
  <script>
    function tampilkanData() {
      var namaSiswa = document.getElementById("namaSiswa").value;
      var nisSiswa = document.getElementById("nisSiswa").value;
      var kelas = document.getElementById("kelas").value;
      var kelasKe = document.getElementById("kelasKe").value;

      var hasilForm = document.getElementById("hasilForm");
      hasilForm.innerHTML = "<h3>Data Siswa:</h3>" +
        "<p>Nama Siswa: " + namaSiswa + "</p>" +
        "<p>NIS Siswa: " + nisSiswa + "</p>" +
        "<p>Kelas: " + kelas + "</p>" +
        "<p>Kelas Ke: " + kelasKe + "</p>";

      // Clear the form after displaying data
      document.getElementById("siswaForm").reset();
    }
  </script>

</body>

</html>
