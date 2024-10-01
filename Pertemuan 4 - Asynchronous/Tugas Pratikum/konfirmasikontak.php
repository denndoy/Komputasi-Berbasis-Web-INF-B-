<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <?php
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $hobbies = isset($_POST['hobby']) ? implode(', ', $_POST['hobby']) : 'None';
            echo "Nama saya adalah ".$_POST['name'];
            echo "<br>Email saya adalah ".$_POST['email'];
            echo "<br>Hobby saya adalah ".$hobbies;
            echo "<br>Jenis kelamin saya adalah ".$_POST['gender'];
    }

    ?>
</body>
</html>