<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container mt-3">
        <h2>Edit Data Mahasiswa</h2>
        <div class="row mb-2">
            <div class="col-sm-12">
                <span class="m-1">
                    <a href="simpandata.php" class="btn btn-info" role="button">Back</a>
                </span>
            </div>
        </div>
        <?php
        include "koneksi.php";
        include "fungsi.php";
        $id = $namaDepan = $namaBelakang = $email = "";
        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST['id'])) {
                $id = bersihkanInput($_POST['id']);
                $namaDepan = bersihkanInput($_POST['namadepan']);
                $namaBelakang = bersihkanInput($_POST['namabelakang']);
                $email = bersihkanInput($_POST['email']);

                $updateData = "UPDATE biodata SET
                namadepan='$namaDepan', 
                namabelakang='$namaBelakang', 
                email='$email'
                WHERE id='$id'";

                $ambilData = mysqli_query($koneksi, $updateData);
                if ($ambilData) {
                    echo "<div class='alert alert-success alert-dismissible'>
                            <button type='button' class='btn-close' data-bs-dismiss='alert'></button>
                            <b>Data Berhasil</b> diedit!
                        </div>";
                } else {
                    echo "<div class='alert alert-warning alert-dismissible'>
                            <button type='button' class='btn-close' data-bs-dismiss='alert'></button>
                            <b>Data tidak berhasil</b> diedit! <br>
                            Error: " . mysqli_error($koneksi) . "
                        </div>";
                }
            }
        } else {
            if (isset($_GET['id'])) {
                $id = bersihkanInput($_GET['id']);
                $strSQL = "SELECT * FROM biodata WHERE id ='$id'";
                $ambilData = mysqli_query($koneksi, $strSQL);
                if (mysqli_num_rows($ambilData) > 0) {
                    $tampil = mysqli_fetch_assoc($ambilData);
                    $namaDepan = $tampil['namadepan'];
                    $namaBelakang = $tampil['namabelakang'];
                    $email = $tampil['email'];
                }
            }
        }
        ?>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
            <div class="mb-3 mt-3">
                <label for="id">ID:</label>
                <input type="text" class="form-control" id="namadepan" placeholder="id" name="id" value="<?= $id ?>" readonly>
            </div>
            <div class="mb-3 mt-3">
                <label for="namadepan">Nama Depan:</label>
                <input type="text" class="form-control" id="namadepan" placeholder="Input Nama Depan" name="namadepan" value="<?php echo $namaDepan; ?>">
            </div>
            <div class="mb-3 mt-3">
                <label for="namabelakang">Nama Belakang:</label>
                <input type="text" class="form-control" id="namabelakang" placeholder="Input Nama Belakang" name="namabelakang" value="<?php echo $namaBelakang; ?>">
            </div>
            <div class="mb-3 mt-3">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Input Email" name="email" value="<?php echo $email; ?>">
            </div>
            <button type="submit" class="btn btn-primary" name="tombol">Submit</button>
        </form>
    </div>
</body>
</html>