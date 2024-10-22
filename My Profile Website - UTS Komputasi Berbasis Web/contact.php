<?php 
include_once("inc/connectDB.php");
include_once("inc/inc_function.php");
?>
<?php include("index_header.php")?>
<!-- Contact -->
<section class="flex-fill bg-light text-dark d-flex align-items-center">
    <div class="container">
        <div class="row text-center mb-3">
            <div class="col">
                <h2 class="fw-semibold" data-aos="fade-down" data-aos-duration="1000">Contact Me</h2>
            </div>
        </div>
        <div class="row justify-content-center" data-aos="fade-down" data-aos-duration="1000">
            <div class="col-md-8">
                <div class="alert alert-success alert-dismissible fade show d-none my-alert" role="alert">
                    <strong>Terima Kasih!</strong> Pesan sudah terkirim.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <form action="sendmessage.php" method="post">
                    <div class="mb-3">
                        <label for="fullname" class="form-label">Full Name</label>
                        <input type="text" class="form-control" id="fullname" required aria-describedby="fullname" name="fullname">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" required aria-describedby="email" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="telp" class="form-label">Telp</label>
                        <input type="tel" class="form-control" id="telp" required aria-describedby="telp" name="telp">
                    </div>
                    <div class="mb-3">
                        <label for="subject" class="form-label">Subject</label>
                        <input type="text" class="form-control" id="subject" required aria-describedby="subject" name="subject">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Message</label>
                        <textarea class="form-control" id="message" rows="3" required name="message"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-send" style="background-color: #AF8F6F;" name="submitButton">Send</button>
                    <button class="btn btn-primary btn-loading d-none" type="button" disabled>
                        <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                        Loading...
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- Akhir Contact -->


<?php include("index_footer.php")?>