<?php
/*
if(isset($_GET['submit'])) {
    echo $_GET['password'];
}


?>

<form action="index.php" method="get">
    <input type="text" name="name">
    <input type="password" name="password">
    <input type="submit" name="submit">
</form> */

if(isset($_POST['submit'])) {
    echo $_POST['password'];
}
?>

<form action="profil.php" method="get">
    <input type="text" name="name">
    <input type="password" name="password">
    <input type="submit" name="submit">
</form>