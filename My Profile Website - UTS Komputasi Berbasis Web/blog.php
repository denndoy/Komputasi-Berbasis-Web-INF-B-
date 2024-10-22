<?php 
include_once("inc/connectDB.php");
include_once("inc/inc_function.php");
?>
<?php include("index_header.php") ?>
<section class="flex-fill bg-light text-dark d-flex align-items-center">
    <div class="container">
        <div class="row text-center mb-3">
            <div class="col mt-5 pt-3">
                <h2 class="fw-semibold" data-aos="fade-down" data-aos-duration="1000"><?php echo titleblogvlog('1')?></h2>
            </div>
        </div>
        <div class="row text-center mb-3">
            <div class="col" data-aos="zoom-out" data-aos-duration="1000">
                <p><?php echo quoteblogvlog('1')?></p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-4" data-aos="zoom-out" data-aos-duration="1000">
                <div class="card">
                    <img src="<?php echo imagesblogvlog('2')?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="fw-semibold card-title"><?php echo titleblogvlog('2')?></h5>
                        <p class="card-text"><?php echo descriptionblogvlog('2')?></p>
                        <a href="https://kumparan.com/dandy-tri-widianto/pilpres-2024-di-tangan-milenial-dan-gen-z-apa-pengaruhnya-21nuUdHvPAz" target="_blank" class="btn" style="background-color: #AF8F6F;">Read</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4" data-aos="zoom-out" data-aos-duration="1000">
                <div class="card">
                    <img src="<?php echo imagesblogvlog('3')?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="fw-semibold card-title"><?php echo titleblogvlog('3')?></h5>
                        <p class="card-text"><?php echo descriptionblogvlog('3')?></p>
                        <a href="https://youtu.be/iyefS79VqHI" target="_blank" class="btn" style="background-color: #AF8F6F;">Watch</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4" data-aos="zoom-out" data-aos-duration="1000">
                <div class="card">
                    <img src="<?php echo imagesblogvlog('4')?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="fw-semibold card-title"><?php echo titleblogvlog('4')?></h5>
                        <p class="card-text"><?php echo descriptionblogvlog('4')?></p>
                        <a href="https://youtu.be/NH4tHR-ZQ9M" target="_blank" class="btn" style="background-color: #AF8F6F;">Watch</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include("index_footer.php") ?>