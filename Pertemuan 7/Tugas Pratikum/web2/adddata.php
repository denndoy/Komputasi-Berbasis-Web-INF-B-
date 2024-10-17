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
        <h2>Input Data Mahasiswa</h2>
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
if($_SERVER["REQUEST_METHOD"] == "POST") {
    // $id = bersihkanInput($_POST['id']);
    $namaDepan = bersihkanInput($_POST['namadepan']);
    $namaBelakang = bersihkanInput($_POST['namabelakang']);
    $email = bersihkanInput($_POST['email']);

    $inputData = "INSERT INTO biodata(namadepan, namabelakang, email)
    VALUES ('$namaDepan', '$namaBelakang', '$email')";

    //echo "Query = ".$inputData;
    $ambilData = mysqli_query($koneksi, $inputData);
    if($ambilData) {
?>
    <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <b>Data Berhasil</b> ditambahkan ke dalam Database
    </div>
<?php
    } else {
?>
    <div class="alert alert-warning alert-dismissible">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
        <b>Data tidak berhasil</b> ditambahkan ke dalam Database <br>
        <?php echo "Error: ".$ambilData. "<br>".mysqli_error($koneksi);?>
    </div>   
<?php

    }
}



?>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
            <div class="mb-3 mt-3">
                <label for="namadepan">Nama Depan:</label>
                <input type="text" class="form-control" id="namadepan" placeholder="Input Nama Depan" name="namadepan">
            </div>
            <div class="mb-3 mt-3">
                <label for="namabelakang">Nama Belakang:</label>
                <input type="text" class="form-control" id="namabelakang" placeholder="Input Nama Belakang"
                    name="namabelakang">
            </div>
            <div class="mb-3 mt-3">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Input Email" name="email">
            </div>
            <button type="submit" class="btn btn-primary" name="tombol">Submit</button>
        </form>
    </div>
</body>

</html>