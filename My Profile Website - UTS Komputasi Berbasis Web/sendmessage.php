<?php
include_once("inc/connectDB.php");
include_once("inc/inc_function.php");
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<?php
$fullName = "";
$email = "";
$telp = "";
$subject = "";
$message = "";
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submitButton"])) {
    if (isset($_POST["fullname"])) {
        $fullName = $_POST["fullname"];
    }
    if (isset($_POST["email"])) {
        $email = $_POST["email"];
    }
    if (isset($_POST["telp"])) {
        $telp = $_POST["telp"];
    }
    if (isset($_POST["subject"])) {
        $subject = $_POST["subject"];
    }
    if (isset($_POST["message"])) {
        $message = $_POST["message"];
    }
    $sql = "INSERT INTO contact (fullname, email, telp, subject, message)
    VALUES ('$fullName', '$email', '$telp', '$subject', '$message')";
    if ($connect->query($sql) === TRUE) {
        ?>
        <div class="container mt-3">
            <div class="alert alert-success">
                <strong>Success!</strong> Data berhasil disimpan.
            </div>
            <a href="index.php" class="btn btn-primary" style="background-color: #AF8F6F; border: 0;">Back to Home</a>
        </div>
        <?php
    } else {
        $fullName = "";
        $email = "";
        $telp = "";
        $subject = "";
        $message = "";
        echo "Error: " . $sql . "<br>" . $connect->error;
    }
}
?>