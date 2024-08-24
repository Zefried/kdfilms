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
                                        <img src="assets/img/serviceImage/Direction.png" class="img-fluid" alt="">
                                    </div>
                                    <div class="services-lable">
                                        <!-- <p class="text-white mb-0 f-14 text-uppercase">Trusted Services</p> -->
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="services-box ps-0 ps-lg-4 mt-4">
                                        <h3 class="services-title text-uppercase">Direction & Screenplay Writing:</h3>
                                        <p class="text-uppercase mt-4 pt-3 f-20">KD FILM WORKSHOP: Craft Your Vision, Shape the Story, and Make It Come Alive!</p>
                                        <p class="text-muted mt-4"><span class="servicepagetext">Embark on a Journey of Filmmaking:
                                            At KD FILMS WORKSHOP, we're all about nurturing budding directors and screenwriters. Our Direction & Screenplay Writing classes will guide you through the art of storytelling and crafting compelling narratives for the silver screen.
                                            </span>
                                            </span>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="services-box ps-0 ps-lg-4 mt-4">
                                        <h3 class="services-title text-uppercase">Here's What Awaits You:</h3>
                                        <p class="text-uppercase mt-4 pt-3 f-20">Imagine being mentored by seasoned directors 
                                        </p>
                                        <p class="services-title text-uppercase">Imagine being mentored by seasoned directors and award-winning screenwriters who've brought iconic stories to life on the big screen. They're not just instructors; they're your creative allies, your backstage buddies, and your biggest fans.
                                        </p>
                                        <p class="text-muted mt-4"><span class="servicepagetext"> <span
                                                    style="color: #ff2d55;">In our workshops:</span>
                                                    you'll delve deep into the theory of direction and the secrets of great screenplay writing. We'll explore the nuances of crafting compelling characters, building suspense, and developing engaging plots. You'll learn how to shape a vision and breathe life into it on the screen. <br><br> </span> </p>

                                                <p>But we're not just about teaching; we're about nurturing your creative voice. Whether you're a novice filmmaker or a budding screenwriter, our workshops cater to all levels. It's about creating stories that resonate and visual storytelling that captivates.
                                                    And when it comes to the industry, we've got the inside scoop. We share insights into the world of direction, screenplay writing, and the opportunities to shine in the world of filmmaking. We don't just teach you how to direct; we teach you how to become a storyteller who captivates audiences. <br><br>
                                                    We also believe in learning by doing. That's why we provide opportunities for you to bring your vision to life. Whether it's through in-house productions or connections to the filmmaking industry, you'll have the platform to turn your creative dreams into reality. <br><br>
                                                    Ready to craft your cinematic vision, shape compelling stories, and make them come alive on the big screen? Enroll in our Direction & Screenplay Writing classes and let's embark on a creative journey together!
                                                    </p>
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
