<?php
session_start();

// Fungsi untuk membersihkan input
function cleanInput($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Jika form awal disubmit, simpan data ke session
if ($_SERVER['REQUEST_METHOD'] == 'POST' && !isset($_POST['finalSubmit'])) {
    $_SESSION['form_data'] = [
        'nama' => cleanInput($_POST['nama']),
        'email' => cleanInput($_POST['email']),
        'hobby' => isset($_POST['hobby']) ? $_POST['hobby'] : [],
        'gender' => isset($_POST['gender']) ? cleanInput($_POST['gender']) : '',
        'tanggalLahir' => cleanInput($_POST['tanggalLahir'])
    ];
}

// Jika tombol submit final ditekan
if (isset($_POST['finalSubmit'])) {
    // Koneksi ke database
    $servername = "localhost";
    $username = "root";
    $password = "2023071011";
    $dbname = "web011";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    }

    // Mengambil data dari session
    $nama = $conn->real_escape_string($_SESSION['form_data']['nama']);
    $email = $conn->real_escape_string($_SESSION['form_data']['email']);
    $hobby = $conn->real_escape_string(implode(", ", $_SESSION['form_data']['hobby']));
    $gender = $conn->real_escape_string($_SESSION['form_data']['gender']);
    $tanggal_lahir = $conn->real_escape_string($_SESSION['form_data']['tanggalLahir']);

    $sql = "INSERT INTO kontak (nama, email, hobby, gender, tanggal_lahir) 
            VALUES ('$nama', '$email', '$hobby', '$gender', '$tanggal_lahir')";

    if ($conn->query($sql) === TRUE) {
        echo "<div class='alert alert-success'>Data berhasil disimpan ke database!</div>";
        // Bersihkan session setelah data disimpan
        unset($_SESSION['form_data']);
    } else {
        echo "<div class='alert alert-danger'>Error: " . $sql . "<br>" . $conn->error . "</div>";
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi Kontak</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="container-fluid m-3">
    <?php
    if (isset($_SESSION['form_data'])) {
        $data = $_SESSION['form_data'];
        echo "<h2>Konfirmasi Data:</h2>";
        echo "<p>Nama: " . $data['nama'] . "</p>";
        echo "<p>Email: " . $data['email'] . "</p>";

        $hobbies = $data['hobby'];
        if (count($hobbies) === 3) {
            echo "<p>Hobby: Nyanyi, Baca, dan Lari</p>";
        } elseif (count($hobbies) === 2) {
            echo "<p>Hobby: " . implode(' dan ', $hobbies) . "</p>";
        } elseif (count($hobbies) === 1) {
            echo "<p>Hobby: " . $hobbies[0] . "</p>";
        } else {
            echo "<p>Hobby: Tidak ada</p>";
        }
        
        echo "<p>Jenis Kelamin: " . $data['gender'] . "</p>";

        $tanggalLahir = new DateTime($data['tanggalLahir']);
        $tanggalSekarang = new DateTime("today");
        if ($tanggalLahir > $tanggalSekarang) {
            $thn = $bln = $tgl = "0";
        } else {
            $diff = $tanggalSekarang->diff($tanggalLahir);
            $thn = $diff->y;
            $bln = $diff->m;
            $tgl = $diff->d;
        }
        echo "<p>Umur: " . $thn . " tahun " . $bln . " bulan " . $tgl . " hari</p>";

        // Form untuk konfirmasi final
        echo "<form method='POST'>";
        echo "<button type='submit' name='finalSubmit' class='btn btn-primary'>Simpan ke Database</button>";
        echo "</form>";
    } else {
        echo "Terima Kasih";
    }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>