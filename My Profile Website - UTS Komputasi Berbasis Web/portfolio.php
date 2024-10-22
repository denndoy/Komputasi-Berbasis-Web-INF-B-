<?php 
include_once("inc/connectDB.php");
include_once("inc/inc_function.php");
?>
<?php include("index_header.php")?>
<!-- Portfolio -->
<section class="flex-fill bg-light text-dark d-flex align-items-center">
    <div class="container">
        <div class="row text-center mb-3">
            <div class="col">
                <h2 class="fw-semibold" data-aos="fade-down" data-aos-duration="1000"><?php echo titlePortfolio('1')?></h2>
            </div>
        </div>
        <div class="row text-center mb-3">
            <div class="col" data-aos="zoom-out" data-aos-duration="1000">
                <p><?php echo quotePortfolio('1') ?></p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-4 mb-3">
                <div class="card" data-aos="zoom-out" data-aos-duration="1000" data-aos-delay="200">
                    <img src="<?php echo imagesPortfolio('2')?>" class="card-img-top" alt="projects 1">
                    <div class="card-body">
                        <p class="card-text"><?php echo descriptionPortfolio('2')?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card" data-aos="zoom-out" data-aos-duration="1000" data-aos-delay="400">
                    <img src="<?php echo imagesPortfolio('3')?>" class="card-img-top" alt="projects 2">
                    <div class="card-body">
                        <p class="card-text"><?php echo descriptionPortfolio('3')?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card" data-aos="zoom-out" data-aos-duration="1000" data-aos-delay="600">
                    <img src="<?php echo imagesPortfolio('4')?>" class="card-img-top" alt="projects 3">
                    <div class="card-body">
                        <p class="card-text"><?php echo descriptionPortfolio('4')?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Akhir Projects -->
<?php include("index_footer.php")?>