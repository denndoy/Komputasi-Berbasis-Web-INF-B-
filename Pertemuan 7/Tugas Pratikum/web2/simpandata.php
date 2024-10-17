<!DOCTYPE html>
<html lang="en">

<head>
  <title>Simpan Data</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Tambahkan jQuery sebelum DataTables -->
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Ganti dengan CSS DataTables yang sesuai dengan Bootstrap -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
  <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
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
    if (isset($_POST["email"])) {
      $email = $_POST["email"];
    }
    $sql = "INSERT INTO biodata (namadepan, namabelakang, email)
    VALUES ('$namaDepan', '$namaBelakang', '$email')";
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
        $email = "";
        echo "Error: " . $sql . "<br>" . $koneksi->error;
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["mhs"])) {
  foreach($_POST['mhs'] as $idMhs) {
      $sql = "DELETE FROM biodata WHERE id = ?";
      $stmt = $koneksi->prepare($sql);
      $stmt->bind_param("i", $idMhs);
      $stmt->execute();
  }
  
  header("Location: " . $_SERVER['PHP_SELF']);
  exit;
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
      <form action="" method="POST" onsubmit="return konfirmasi()">
        <div class="row row-cols-auto">
          <div class="col mb-1">
            <h2>Data Mahasiswa</h2>
          </div>
          <div class="col">
            <a href="adddata.php" class="btn btn-info">Add Data</a>
            <button type="submit" class="btn btn-danger">Hapus</button>
          </div>

        </div>
        <table id="myTable" class="table table-hover">
          <thead>
            <tr class="table-dark">
              <th><input type="checkbox" name="" id="" onchange="selectAll(this)"></th>
              <th>ID</th>
              <th>Nama Depan</th>
              <th>Nama Belakang</th>
              <th>Email</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php
    $ambilData = mysqli_query($koneksi, "SELECT * FROM biodata");
    while($tampil = mysqli_fetch_array($ambilData)) {
      echo "
        <tr>
          <td><input type='checkbox' class='datamhs' name='mhs[]' value='". $tampil['id']."'/></td>
          <td><a href='view.php?id=" . $tampil['id'] . "'>" . $tampil['id'] . "</a></td>
          <td>" . $tampil['namadepan'] . "</td>
          <td>" . $tampil['namabelakang'] . "</td>
          <td>" . $tampil['email'] . "</td>
          <td>
            <a href='edit.php?id=" . $tampil['id'] . "' class='btn btn-primary'>Edit</a>
            <a href='hapus.php?id=". $tampil['id'] . "' class='btn btn-danger'>Hapus</a>
          </td>
        </tr>";
    }
    ?>
          </tbody>
        </table>
      </form>
    </div>
  </div>

  <script src="https://cdn.datatables.net/2.1.8/js/dataTables.min.js"></script>
  <script>
    $(document).ready(function () {
      $('#myTable').DataTable({
        dom: '<"row"<"col-sm-12 col-md-6"l><"col-sm-12 col-md-6"f>>' +
          '<"row"<"col-sm-12"tr>>' +
          '<"row"<"col-sm-12 col-md-5"i><"col-sm-12 col-md-7"p>>',
        pagingType: "simple_numbers",
        language: {
          search: "_INPUT_",
          searchPlaceholder: "Cari data...",
          lengthMenu: "Tampilkan _MENU_ data",
          info: "Menampilkan _START_ sampai _END_ dari _TOTAL_ data"
        }
      });
    });

    function konfirmasi() {
      return confirm("Apakah Anda yakin untuk menghapus data?");
    }

    function selectAll(input) {
      let checkboxes = document.querySelectorAll('.datamhs');
      checkboxes.forEach(function (checkbox) {
        checkbox.checked = input.checked;
      });
    }
  </script>
</body>

</html>