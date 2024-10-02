<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="container-fluid m-3">
    <?php
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            echo "Nama: ".$_POST['name'];
            echo "<br>Email: ".$_POST['email'];

            $hobbies = isset($_POST['hobby']) ? $_POST['hobby'] : [];
            if (count($hobbies) === 3) {
                echo "<br>Hobby: Nyanyi, Baca, dan Lari";
            } elseif (count($hobbies) === 2) {
                echo "<br>Hobby: " .implode(' dan ', $hobbies);
            } else {
                echo "<br>Hobby: " .implode(' ',$hobbies);
            }
            
            echo "<br>Jenis Kelamin: ".$_POST['gender'];

            $tanggalLahir = new DateTime($_POST['tanggalLahir']);
            $tanggalSekarang = new DateTime("today");
            if($tanggalLahir > $tanggalSekarang) {
                $thn = "0";
                $bln = "0";
                $tgl = "0";
            }
            $thn = $tanggalSekarang -> diff($tanggalLahir)->y;
            $bln = $tanggalSekarang -> diff($tanggalLahir)->m;
            $tgl = $tanggalSekarang -> diff($tanggalLahir)->d;
            echo "<br>Umur: ".$thn." tahun ".$bln." bulan ".$tgl." hari";
    }
    ?>

    <button type="submit" class="btn btn-primary" value="simpan">Submit</button>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
</body>
</html>