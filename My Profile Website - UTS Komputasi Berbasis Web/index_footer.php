<link rel="stylesheet" href="css/index_style.css">
<!-- Footer Start -->
<footer class="p-1" style="background-color: #543310;">
    <div class="container">
        <!-- Copyright -->
        <div class="row">
            <div class="col text-center">
                <p class="mt-4">Copyright 2024 &copy; All Rights Reserved by Dandy Tri Widianto.</p>
            </div>
        </div>
    </div>
</footer>
<!-- Footer End -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>


    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>

        const galleryImage = document.querySelectorAll('.gallery-img');

        galleryImage.forEach((img, i) => {
            img.dataset.aos = 'fade-down';
            img.dataset.aosDelay = i * 100
            img.dataset.aosDuration = 1000;
        });

        AOS.init({
            once: true,
            duration: 500,
        });
    </script>

    <script src="js/raw.githubusercontent.com_micku7zu_vanilla-tilt.js_master_dist_vanilla-tilt.min.js"></script>
    <script type="text/javascript">
        VanillaTilt.init(document.querySelectorAll(".laptop-box"), {
            max: 30,
            speed: 1000,
            scale: 1.1,
            glare: true,
        });
    </script>
</body>

</html>