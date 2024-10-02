<?php
    echo "Script di atas DOCTYPE html";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        echo "<br>Script di dalam head";
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "Latihan php";?></title>
</head>
<body>
    <?php
        echo "<br><b>Script di dalam body</b>";
        echo "<script>
            alert('halo');
        </script>";
    ?>
</body>
</html>
<?php
    echo "<br>Script di luar html";
?>