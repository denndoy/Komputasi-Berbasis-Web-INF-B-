<?php 
function url_dasar(){
    // $_SERVER['SERVER_NAME'] : alamat website, misalkan websitemu.com
    // $_SERVER['SCRIPT_NAME'] : directory website, websitemu.com/blog/
    $url_dasar = "https://".$_SERVER['SERVER_NAME'].dirname($_SERVER['SCRIPT_NAME']);
    return $url_dasar;
}

// Function halaman dashboard/Home
function imagesHome($id) {
    global $connect;
    $sql1 = "SELECT * FROM dashboard WHERE id = '$id'";
    $q1 = mysqli_query($connect, $sql1);
    $r1 = mysqli_fetch_array($q1);
    $text = $r1['description'];

    preg_match('/< *img[^>]*src *= *["\']?([^"\']*)/i', $text, $img);
    $gambar = $img[1]; // ../images/filename
    $gambar = str_replace("../images/", url_dasar()."/images/", $gambar);
    return $gambar;
}

function titleHome($id) {
    global $connect;
    $sql1 = "SELECT * FROM dashboard WHERE id = '$id'";
    $q1 = mysqli_query($connect, $sql1);
    $r1 = mysqli_fetch_array($q1);
    $text = $r1['title'];
    return $text;
}

function quoteHome($id) {
    global $connect;
    $sql1 = "SELECT * FROM dashboard WHERE id = '$id'";
    $q1 = mysqli_query($connect, $sql1);
    $r1 = mysqli_fetch_array($q1);
    $text = $r1['quote'];
    return $text;
}

function descriptionHome($id) {
    global $connect;
    $sql1 = "SELECT * FROM dashboard WHERE id = '$id'";
    $q1 = mysqli_query($connect, $sql1);
    $r1 = mysqli_fetch_array($q1);
    $text = strip_tags($r1['description']);
    return $text;
}

// function halaman about
function imagesAbout($id) {
    global $connect;
    $sql1 = "SELECT * FROM about WHERE id = '$id'";
    $q1 = mysqli_query($connect, $sql1);
    $r1 = mysqli_fetch_array($q1);
    $text = $r1['description'];

    preg_match('/< *img[^>]*src *= *["\']?([^"\']*)/i', $text, $img);
    $gambar = $img[1]; // ../images/filename
    $gambar = str_replace("../images/", url_dasar()."/images/", $gambar);
    return $gambar;
}

function titleAbout($id) {
    global $connect;
    $sql1 = "SELECT * FROM about WHERE id = '$id'";
    $q1 = mysqli_query($connect, $sql1);
    $r1 = mysqli_fetch_array($q1);
    $text = $r1['title'];
    return $text;
}

function quoteAbout($id) {
    global $connect;
    $sql1 = "SELECT * FROM about WHERE id = '$id'";
    $q1 = mysqli_query($connect, $sql1);
    $r1 = mysqli_fetch_array($q1);
    $text = $r1['quote'];
    return $text;
}

function descriptionAbout($id) {
    global $connect;
    $sql1 = "SELECT * FROM about WHERE id = '$id'";
    $q1 = mysqli_query($connect, $sql1);
    $r1 = mysqli_fetch_array($q1);
    $text = strip_tags($r1['description']);
    return $text;
}

// function halaman portfolio
function imagesPortfolio($id) {
    global $connect;
    $sql1 = "SELECT * FROM portfolio WHERE id = '$id'";
    $q1 = mysqli_query($connect, $sql1);
    $r1 = mysqli_fetch_array($q1);
    $text = $r1['description'];

    preg_match('/< *img[^>]*src *= *["\']?([^"\']*)/i', $text, $img);
    $gambar = $img[1]; // ../images/filename
    $gambar = str_replace("../images/", url_dasar()."/images/", $gambar);
    return $gambar;
}

function titlePortfolio($id) {
    global $connect;
    $sql1 = "SELECT * FROM portfolio WHERE id = '$id'";
    $q1 = mysqli_query($connect, $sql1);
    $r1 = mysqli_fetch_array($q1);
    $text = $r1['title'];
    return $text;
}

function quotePortfolio($id) {
    global $connect;
    $sql1 = "SELECT * FROM portfolio WHERE id = '$id'";
    $q1 = mysqli_query($connect, $sql1);
    $r1 = mysqli_fetch_array($q1);
    $text = $r1['quote'];
    return $text;
}

function descriptionPortfolio($id) {
    global $connect;
    $sql1 = "SELECT * FROM portfolio WHERE id = '$id'";
    $q1 = mysqli_query($connect, $sql1);
    $r1 = mysqli_fetch_array($q1);
    $text = strip_tags($r1['description']);
    return $text;
}

// function halaman portfolio
function imagesblogvlog($id) {
    global $connect;
    $sql1 = "SELECT * FROM blogvlog WHERE id = '$id'";
    $q1 = mysqli_query($connect, $sql1);
    $r1 = mysqli_fetch_array($q1);
    $text = $r1['description'];

    preg_match('/< *img[^>]*src *= *["\']?([^"\']*)/i', $text, $img);
    $gambar = $img[1]; // ../images/filename
    $gambar = str_replace("../images/", url_dasar()."/images/", $gambar);
    return $gambar;
}

function titleblogvlog($id) {
    global $connect;
    $sql1 = "SELECT * FROM blogvlog WHERE id = '$id'";
    $q1 = mysqli_query($connect, $sql1);
    $r1 = mysqli_fetch_array($q1);
    $text = $r1['title'];
    return $text;
}

function quoteblogvlog($id) {
    global $connect;
    $sql1 = "SELECT * FROM blogvlog WHERE id = '$id'";
    $q1 = mysqli_query($connect, $sql1);
    $r1 = mysqli_fetch_array($q1);
    $text = $r1['quote'];
    return $text;
}

function descriptionblogvlog($id) {
    global $connect;
    $sql1 = "SELECT * FROM blogvlog WHERE id = '$id'";
    $q1 = mysqli_query($connect, $sql1);
    $r1 = mysqli_fetch_array($q1);
    $text = strip_tags($r1['description']);
    return $text;
}
?> 