<?php include("include_header.php") ?>
<?php 
$judul      = "";
$kutipan    = "";
$isi        = "";
$error      = "";
$success    = "";

if(isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    $id = "";
}

if($id != "") {
    $sql1 = "SELECT * FROM blogvlog WHERE id = '$id'";
    $q1 = mysqli_query($connect, $sql1);
    $r1 = mysqli_fetch_array($q1);
    $judul = $r1['title'];
    $kutipan = $r1['quote'];
    $isi = $r1['description'];

    if($isi == '') {
        $error = "Data tidak ditemukan!";
    }
}

if(isset($_POST['simpan'])) {
    $judul      = $_POST['judul'];
    $kutipan    = $_POST['kutipan'];
    $isi        = $_POST['isi'];

    if($judul == '' or $isi == '') {
        $error  = "Silakan masukkan data Judul dan Isi";
    }
    if(empty($error)) {
        if($id != "") {
            $sql1 = "UPDATE blogvlog SET title = '$judul', quote = '$kutipan', description = '$isi', date_of_contents = now() WHERE id = '$id'";
        } else {
            $sql1   = "INSERT INTO blogvlog (title, quote, description) VALUES ('$judul', '$kutipan', '$isi')";
        }
        $q1 = mysqli_query($connect, $sql1);
        if($q1) {
            $success    = "Data telah disimpan!";
        } else {
            $error      = "Data gagal disimpan!";
        }
    }
}
?>
<h1>Admin Data Input Page</h1>
<div class="mb-3 row">
    <a href="blogvlog.php">
        << Back to Admin Page</a>
</div>
<?php
if($success) {
    ?>
    <div class="alert alert-success" role="alert">
        <?php echo $success ?>
    </div>
    <?php
} elseif($error) {
    ?>
    <div class="alert alert-danger" role="alert">
        <?php echo $error ?>
    </div>
    <?php
}
?>
<form action="" method="POST">
    <div class="mb-3 row">
        <label for="judul" class="col-sm-2 col-form-label">Judul</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="judul" value="<?php echo $judul ?>" name="judul">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="kutipan" class="col-sm-2 col-form-label">Kutipan</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="kutipan" value="<?php echo $kutipan ?>" name="kutipan">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="isi" class="col-sm-2 col-form-label">Isi</label>
        <div class="col-sm-10">
            <textarea name="isi" class="form-control" id="summernote"><?php echo $isi ?></textarea>
        </div>
    </div>
    <div class="mb-3 row">
        <div class="col-sm-2"></div>
        <div class="col-sm-10">
            <input type="submit" name="simpan" id="" value="Save Data" class="btn btn-primary">
        </div>
    </div>
</form>
<?php include("include_footer.php") ?>