<?php include("include_header.php") ?>
<?php
$success = "";
$per_page = 2;
$keyword = (isset($_GET['keyword'])) ? $_GET['keyword'] : "";
if (isset($_GET['op'])) {
    $op = $_GET['op'];
} else {
    $op = "";
}
if ($op == 'delete') {
    $id = $_GET['id'];
    $sql1 = "DELETE FROM portfolio WHERE id = '$id'";
    $q1   = mysqli_query($connect, $sql1);
    if ($q1) {
        $success = "Berhasil hapus data!";
    }
}
?>
<h1>Admin Page Portfolio</h1>
<p>
    <a href="portfolio_input.php">
        <input type="button" class="btn btn-primary" value="Create New Page">
    </a>
</p>
<?php
if($success) {
?>
    <div class="alert alert-success" role="alert">
        <?php echo $success ?>
    </div>
<?php
}
?>
<section class="flex-grow-1">
    <form action="" class="row g-3" method="get">
        <div class="col-auto">
            <input type="text" class="form-control" placeholder="Input Keyword" name="keyword" value="<?php echo $keyword ?>">
        </div>
        <div class="col-auto">
            <input type="submit" name="search" value="Search" class="btn btn-secondary">
        </div>
    </form>
    <table class="table table-striped">
        <thead>
            <tr>
                <th class="col-1">#</th>
                <th>ID</th>
                <th>Judul</th>
                <th>Kutipan</th>
                <th class="col-2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sqlAdding = "";
            if ($keyword != '') {
                $array_keyword = explode(" ", $keyword);
                for ($x = 0; $x < count($array_keyword); $x++) {
                    $sqlSearch[] = "(title like '%" . $array_keyword[$x] . "%' or quote like '%" . $array_keyword[$x] . "%' or description like '%" . $array_keyword[$x] . "%')";
                }
                $sqlAdding = " where " . implode(" or ", $sqlSearch);
            }
            $sql1   = "SELECT * FROM portfolio $sqlAdding";
            $page = isset($_GET['page'])?(int)$_GET['page']:1;
            $start = ($page > 1) ? ($page * $per_page) - $per_page : 0;
            $q1 = mysqli_query($connect, $sql1);
            $total = mysqli_num_rows($q1);
            $pages = ceil($total / $per_page);
            $no = $start + 1;
            $sql1 = $sql1. " ORDER BY id DESC LIMIT $start, $per_page";

            $q1   = mysqli_query($connect, $sql1);
            while ($r1 = mysqli_fetch_array($q1)) {
            ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $r1['id'] ?></td>
                    <td><?php echo $r1['title'] ?></td>
                    <td><?php echo $r1['quote'] ?></td>

                    <td>
                        <a href="portfolio_input.php?id=<?php echo $r1['id']?>">
                            <span class="badge bg-warning text-dark">Edit</span>
                        </a>
                        <a href="portfolio.php?op=delete&id=<?php echo $r1['id'] ?>" onclick="return confirm('Apakah yakin ingin menghapus data?')">
                            <span class="badge bg-danger">Delete</span>
                        </a>
                    </td>
                </tr>
            <?php
            }
            ?>

        </tbody>
    </table>

    <nav aria-label="Page navigation example" class="">
            <ul class="pagination">
                <?php
                $search = (isset($_GET['search']))?$_GET['search']: "";
                for($i = 1; $i <= $pages; $i++) {
                    ?>
                    <li class="page-item">
                        <a class="page-link" href="portfolio.php?keyword=<?php echo $keyword ?> &search=<?php echo $search?> &page=<?php echo $i?> "><?php echo $i ?></a>
                    </li>
                    <?php
                }            
                ?>
            </ul>
    </nav>
</section>
<?php include("include_footer.php") ?>