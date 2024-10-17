<!DOCTYPE html>
<html lang="en">
<head>
  <title>Simpan Data</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<?php 
include "koneksi.php";
$namaDepan = "";
$namaBelakang = "";
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["tombol"])) {
    if (isset($_POST["namadepan"])) {
        $namaDepan = $_POST["namadepan"];
    }
    if (isset($_POST["namabelakang"])) {
        $namaBelakang = $_POST["namabelakang"];
    }
    $sql = "INSERT INTO biodata (namadepan, namabelakang)
    VALUES ('$namaDepan', '$namaBelakang')";
    if ($koneksi->query($sql) === TRUE) {
      echo "
        <div class=\"container mt-3\">
            <div class=\"alert alert-success\">
                <strong>Success!</strong> Data berhasil disimpan.
            </div>
        </div>
        ";
    } else {
        $namaDepan = "";
        $namaBelakang = "";
        echo "Error: " . $sql . "<br>" . $koneksi->error;
    }
}

?>
<div class="container mt-3">
  <h2>Konfirmasi Input Data Mahasiswa</h2>  
    <div class="mb-3 mt-3">
      <label for="namadepan">Nama Depan:</label>
      <?= $namaDepan ?>
    </div>
    <div class="mb-3 mt-3">
      <label for="namabelakang">Nama Belakang:</label>
      <?= $namaBelakang ?>
    </div>
    <div class="mb-3 mt-3 table-responsive">
      <h2>Data Mahasiswa</h2>
      <table class="table table-hover">
        <tr class="table-dark">
          <th>No</th>
          <th>ID</th>
          <th>Nama Depan</th>
          <th>Nama Belakang</th>
        </tr>

        <?php
          $no = 1;
          $ambilData = mysqli_query($koneksi, "SELECT * FROM biodata");
          while($tampil = mysqli_fetch_array($ambilData)) {
            echo "
            <tr>
              <td>$no</td>
              <td>$tampil[id]</td>
              <td>$tampil[namadepan]</td>
              <td>$tampil[namabelakang]</td>
            </tr>";
            $no++;
          }
        ?>
      </table>
    </div>
</div>
</body>
</html>
