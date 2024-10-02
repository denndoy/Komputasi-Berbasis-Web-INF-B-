<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $namaDepan = "Dandy";
        $namaBelakang = "Tri Widianto";
        $namaLengkap = $namaDepan." ".$namaBelakang;
        echo "Nama saya adalah ".$namaLengkap;
        echo "<br>Nama saya adalah $namaLengkap";

        $tanggalMasuk = 2023;
        $tanggalmasuk = 2024;
        echo "<br>Tanggal masuk kuliah $tanggalMasuk";
        echo "<br>Tanggal masuk kuliah ".$tanggalmasuk;

    ?>
</body>
</html>