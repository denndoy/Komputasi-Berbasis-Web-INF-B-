<?php 
include_once("inc/connectDB.php");
include_once("inc/inc_function.php");
?>
<?php include("index_header.php") ?>
<!-- Hero Section Start -->
<section class="flex-fill bg-light text-dark d-flex align-items-center">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 text-center text-lg-start">
                <h1 class="display-5 fw-bold text-dark" data-aos="fade-down-right" data-aos-duration="1000"><?php echo titleHome('1')?></h1>
                <h1 class="display-4 fw-bold text-dark mt-1" data-aos="zoom-in" data-aos-duration="1000"><?php echo quoteHome('1')?></h1>
                <h2 class="h4 fw-semibold text-secondary mb-4" data-aos="fade-left" data-aos-duration="1000"><?php echo descriptionHome('1') ?></h2>
                <div class="row justify-content-start">
                    <div class="col-4">
                        <a href="portfolio.php" class="btn btn-primary" style="background-color: #AF8F6F;" data-aos="fade-left" data-aos-duration="1000">My Portfolio</a>
                    </div>
                    <div class="col-4">
                        <a href="contact.php" class="btn btn-primary" style="background-color: #AF8F6F;" data-aos="fade-left" data-aos-duration="1000">Contact Me</a>
                    </div>
                </div>

            </div>
            <div class="col-lg-6 text-center">
                <div class="position-relative mt-5 mt-lg-0">
                    <img src="<?php echo imagesHome('1')?>" alt="Dandy Tri Widianto" class="img-fluid position-relative z-3">
                    <span class="position-absolute bottom-0 start-50 translate-middle-x" style="transform: translateY(10px) scale(1.1);">
                        <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" width="400" height="400">
                            <path fill="#543310"
                                d="M59.5,-47C75.4,-27.4,85.6,-2.8,80.3,17.5C75,37.8,54.3,53.7,31.7,63.9C9.1,74,-15.3,78.3,-35.9,70.1C-56.6,61.9,-73.4,41.2,-77,19.3C-80.5,-2.6,-70.9,-25.7,-55.9,-45.1C-40.9,-64.4,-20.4,-80,0.7,-80.5C21.7,-81.1,43.5,-66.5,59.5,-47Z"
                                transform="translate(100 100) scale(1.2)" />
                        </svg>
                    </span>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero Section End -->

<?php include("index_footer.php") ?>