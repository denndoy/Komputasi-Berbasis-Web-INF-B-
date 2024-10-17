<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>

<body>


    <div class="container">
        <h2>Detail Biodata Mahasiswa</h2>
        <div class="row mb-2">
            <div class="col-sm-12">
                <span class="m-1">
                    <a href="simpandata.php" class="btn btn-info" role="button">Kembali</a>
                </span>
            </div>
        </div>
        <table class="table table-striped">
        <?php
            include "koneksi.php";
            include "fungsi.php";
            if(isset($_GET['id'])) {
                $id = bersihkanInput($_GET['id']);
            }
            $ambilData = mysqli_query($koneksi, "SELECT * FROM biodata WHERE id ='$id'");
            if(mysqli_num_rows($ambilData)) {
                while($tampil = mysqli_fetch_array($ambilData)) {
        ?>
            <thead>
                <tr>
                    <th>ID</th>
                    <th><?= $tampil['id'] ?></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Nama Lengkap</td>
                    <td><?php echo $tampil['namadepan']." ".$tampil['namabelakang'] ?></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><?= $tampil['email'] ?></td>
                </tr>
            </tbody>
        <?php
                }
            }
        ?>
        </table>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>