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

        table, th, td {
            border: 1px solid black;
        }

        th, td {
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
        <img src="path_to_logo/logo.png" alt="Logo SLB Karya Bhakti" id="logo">
        <h1>Laporan Pendaftaran Siswa Baru</h1>
    </div>

    <div id="cop">
        <img src="path_to_cop/cop.png" alt="Cop Surat">
    </div>

    <table>
        <tr>
            <th>Nama</th>
            <td>Nama Siswa</td>
        </tr>
        <tr>
            <th>NIS</th>
            <td>Nomor Induk Siswa</td>
        </tr>
        <tr>
            <th>Alamat</th>
            <td>Alamat Siswa</td>
        </tr>
        <!-- tambahkan kolom lain sesuai kebutuhan -->
    </table>

    <!-- tambahkan informasi tambahan atau tanda tangan jika diperlukan -->

    <div class="button-container">
        <button class="print-button" onclick="window.print()">Cetak / Unduh</button>
    </div>
</body>
</html>
