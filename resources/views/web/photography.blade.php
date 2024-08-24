@extends('web.template.master')
@section('content')
    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" style="background-image: url(assets/img/modalbg2.jpg);">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">
                        <span class="modalTxt">Fill The Form</span>
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="background-color:white; opacity:0.8;"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row">
                            <div class="mb-3 col-lg-6">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" placeholder="Enter your name">
                            </div>
                            <div class="mb-3 col-lg-6">
                                <label for="city" class="form-label">City</label>
                                <input type="text" class="form-control" id="city" placeholder="Enter your city">
                            </div>
                            <div class="mb-3 col-lg-6">
                                <label for="mobile" class="form-label">Mobile Number</label>
                                <input type="tel" class="form-control" id="mobile"
                                    placeholder="Enter your mobile number">
                            </div>
                            <div class="mb-3 col-lg-6">
                                <label for="email" class="form-label">Email ID</label>
                                <input type="email" class="form-control" id="email"
                                    placeholder="Enter your email address">
                            </div>
                            <div class="mb-3 col-lg-6">
                                <label for="showreels" class="form-label">Show Reels Link</label>
                                <input type="url" class="form-control" id="showreels"
                                    placeholder="Enter the link to your show reels">
                            </div>
                            <div class="mb-3 col-lg-6">
                                <label for="category" class="form-label">Category</label>
                                <input type="text" class="form-control" id="category" placeholder="Enter your category">
                            </div>
                            <div class="mb-3 col-lg-12">
                                <label for="message" class="form-label">Message</label>
                                <textarea class="form-control" id="message" rows="4" placeholder="Enter your message"></textarea>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </div>
    <!-- pop up form starts here -->


    <div class="service-bg">

        <div class="row mt-5">

            <div class="col-lg-12">

                <div class="services1title">
                    <div class="text-center service-bar">
                        <div class="section-title">
                            <span class="service-title">KD Films Services</span>
                            <div class="bar mar"></div>
                        </div>
                    </div>
                </div>

                <div class="services1header">
                    <div class="tab-content p-3">
                        <div class="tab-pane active" id="navpills-surgery" role="tabpanel">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <div class="services-img mt-4">
                                        <img src="assets/img/serviceImage/Photography.png" class="img-fluid" alt="">
                                    </div>
                                    <div class="services-lable">
                                        <!-- <p class="text-white mb-0 f-14 text-uppercase">Trusted Services</p> -->
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="services-box ps-0 ps-lg-4 mt-4">
                                        <h3 class="services-title text-uppercase">Photography & Cinematography</h3>
                                        <p class="text-uppercase mt-4 pt-3 f-20">KD FILM WORKSHOP Photography & Cinematography Classes: Capture Life's Magic, Frame by Frame!</p>
                                        <p class="text-muted mt-4"><span class="servicepagetext">We know the allure of capturing the perfect shot or creating cinematic magic is irresistible. Let's turn your love for photography and cinematography into an art form. </span>
                                            </span>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="services-box ps-0 ps-lg-4 mt-4">
                                        <h3 class="services-title text-uppercase">Photography & Cinematography Workshop</h3>
                                        <p class="text-uppercase mt-4 pt-3 f-20">Imagine being guided by expert photographers and cinematographers who've created stunning visuals and breathtaking films. They're not just instructors; they're your visual storytelling guides, your backstage buddies, and your biggest fans.
                                        </p>
                                        <p class="services-title text-uppercase">Throughout our workshops, you'll delve into the theory of the camera and the magic of lighting. We'll teach you the essentials of composition, framing, and how to use the camera as your paintbrush. In cinematography, we'll demystify the "Five C's" – camera, composition, cutting, continuity, and close-ups – giving you the tools to create captivating films.
                                        </p>
                                        <p>But we're not just about teaching; we're about nurturing your creative vision. Whether you're a novice with a passion for photography or an aspiring filmmaker, our classes cater to all levels. It's about turning everyday scenes into art and creating films that leave a mark. <br> <br>
                                            And when it comes to the industry, we've got the inside scoop. We share insights on the secrets of cinematography, photography, and the opportunities to thrive in the visual arts world. We don't just teach you how to shoot; we teach you how to make your mark in the world of visual storytelling. <br> <br>
                                            We believe in learning by doing. That's why we provide you with opportunities to showcase your work. Whether it's through in-house photography exhibitions or connections to the world of cinematography, you'll get a platform to unveil your creativity.
                                            Ready to capture life's magic one frame at a time? Enroll in our Photography & Cinematography classes and let's create visual wonders together! </p>
                                            <p>Ready to capture life's magic one frame at a time? Enroll in our Photography & Cinematography classes and let's create visual wonders together!</p>
                                           
                                            
                                        <div class="mt-4">
                                            <!-- Button trigger modal -->
                                            <div class="service-btn">
                                                <button type="button" class="btn btn-primary text-uppercase servicebtnn"
                                                    data-bs-toggle="modal" data-bs-target="#staticBackdrop"> Get Quote
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
