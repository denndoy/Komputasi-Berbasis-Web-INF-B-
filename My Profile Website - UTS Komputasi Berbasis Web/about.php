<?php 
include_once("inc/connectDB.php");
include_once("inc/inc_function.php");
?>
<?php include("index_header.php") ?>
<!-- About -->
<section class="flex-fill bg-light text-dark d-flex align-items-center">
    <div class="container">
        <div class="row text-center mb-3">
            <div class="col" data-aos="fade-down" data-aos-duration="1000">
                <h2 class="fw-semibold"><?php echo titleAbout('1') ?></h2>
            </div>
        </div>
        <div class="row text-center mb-3">
            <div class="col" data-aos="zoom-out" data-aos-duration="1000">
                <p class="fst-italic"><?php echo quoteAbout('1') ?></p>
            </div>
        </div>
        <div class="row justify-content-center fs-5">
            <div class="col-md-8" data-aos="fade-right" data-aos-duration="1000">
                <p><?php echo descriptionAbout('1') ?></p>
            </div>
        </div>
    </div>
</section>
<!-- Akhir About -->
<?php include("index_footer.php") ?>