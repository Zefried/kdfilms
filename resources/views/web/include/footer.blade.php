<!-- Start Footer Area -->
<footer class="footer-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="single-footer-widget">
                    <h3>Venue Location</h3>
                    <p><i class="icofont-google-map"></i>Nalbari (Assam), 781340

                        KD films</p>
                    <a href="tel:6001543783" class="contact-authority"><i class="icofont-phone"></i> +91 6001543783</a>
                    <a href="mailto:kdfilms2018@gmail.com"><p class="py-2 icofont-envelope"> kdfilms2018@gmail.com</p></a>
                </div>
            </div>

            <div class="col-lg-6 col-md-6">
                <div class="single-footer-widget">
                    <h3>Social Connection</h3>
                    <p>K D Films is a production house based in Nalbari, Assam. K D Films was established in 2016. </p>

                    <ul class="social-links">
                        <li><a href="#" class="facebook" target="_blank"><i class="icofont-facebook"></i></a></li>
                        {{-- <li><a href="#" class="twitter" target="_blank"><i class="icofont-twitter"></i></a></li>
                        <li><a href="#" class="linkedin" target="_blank"><i class="icofont-linkedin"></i></a></li> --}}
                        <li><a href="#" class="instagram" target="_blank"><i class="icofont-instagram"></i></a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="copyright-area">
                    <div class="logo">
                        <a href="index-5.html">
                            <img src="assets/img/kdlogo.png" alt="logo" style="height: 80px; width:170px; ">
                        </a>
                    </div>
                    <ul>
                        {{-- <li><a href="#">Blog</a></li>
                        <li><a href="#">Contact</a></li> --}}
                        {{-- <li><a href="#">Ticket</a></li> --}}
                        {{-- <li><a href="#">Venue</a></li> --}}
                        {{-- <li><a href="#">Terms & Conditions</a></li> --}}
                    </ul>
                    <p><i class="icofont-copyright"></i> KD Films. All rights reserved</p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- End Footer Area -->

<!-- Back Top top -->
<div class="back-to-top">Top</div>
<!-- End Back Top top -->

<!-- JQuery Min JS -->
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<!-- Bootstrap Min JS -->
<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
<!-- MeanMenu JS -->
<script src="{{asset('assets/js/jquery.meanmenu.js')}}"></script>
<!-- WoW Min JS -->
<script src="{{asset('assets/js/wow.min.js')}}"></script>
<!-- Magnific Popup Min JS -->
<script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
<!-- Fancybox Min JS -->
<script src="{{asset('assets/js/fancybox.min.js')}}"></script>
<!-- Appear Min JS -->
<script src="{{asset('assets/js/jquery.appear.min.js')}}"></script>
<!-- Odometer Min JS -->
<script src="{{asset('assets/js/odometer.min.js')}}"></script>
<!-- Owl Carousel Min JS -->
<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
<!-- AjaxChimp JS -->
<script src="{{asset('assets/js/jquery.ajaxchimp.min.js')}}"></script>
<!-- Form Validator Min JS -->
<script src="{{asset('assets/js/form-validator.min.js')}}"></script>
<!-- Contact Form Min JS -->
<script src="{{asset('assets/js/contact-form-script.js')}}"></script>
<!-- Main JS -->
<script src="{{asset('assets/js/main.js')}}"></script>

<script>

    
let currentImageIndex = 0;
const images = document.querySelectorAll('.gallery-item');
const lightbox = document.querySelector('.lightbox');
const lightboxImage = document.getElementById('lightbox-image');

function openLightbox(index) {
    currentImageIndex = index;
    lightbox.style.display = 'block';
    lightboxImage.src = images[currentImageIndex].src;
}

function closeLightbox() {
    lightbox.style.display = 'none';
}

function changeImage(step) {
    currentImageIndex += step;

    if (currentImageIndex >= images.length) {
        currentImageIndex = 0;
    } else if (currentImageIndex < 0) {
        currentImageIndex = images.length - 1;
    }

    lightboxImage.src = images[currentImageIndex].src;
}

// Attach click event listeners to gallery images
for (let i = 0; i < images.length; i++) {
    images[i].addEventListener('click', () => openLightbox(i));
}

// Initially close the lightbox when it's displayed
lightbox.addEventListener('click', (event) => {
    if (event.target === lightbox) {
        closeLightbox();
    }
});

// Close the lightbox when the close button is clicked
document.querySelector('.close-button').addEventListener('click', closeLightbox);
</script>

</body>


</html>