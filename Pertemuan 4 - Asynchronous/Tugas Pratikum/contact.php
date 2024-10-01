<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="dashboard.html">Dashboard</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="dashboard.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid mt-3">
        <h1>Contact Us</h1>
        <form method="POST" action="konfirmasikontak.php">
            <div class="mb-3">
                <label for="fullName" class="form-label">Name</label>
                <input type="text" class="form-control" id="fullName" name="name">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
            </div>
            <label class="mb-2">Hobby</label>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="mancing" id="flexCheckDefault" name="hobby[]">
                <label class="form-check-label" for="flexCheckDefault">Mancing</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="berenang" id="flexCheckDefault" name="hobby[]">
                <label class="form-check-label" for="flexCheckDefault">Berenang</label>
            </div>
            <label class="my-2">Jenis Kelamin</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault1" value="laki-laki">
                <label class="form-check-label" for="flexRadioDefault1">
                    Laki-Laki
                </label>
            </div>
            <div class="form-check mb-3">
                <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault2" value="perempuan">
                <label class="form-check-label" for="flexRadioDefault2">
                    Perempuan
                </label>
            </div>
            <button type="submit" class="btn btn-primary">Kirim</button>
            <button type="reset" class="btn btn-primary">Hapus</button>
        </form>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
</body>

</html>