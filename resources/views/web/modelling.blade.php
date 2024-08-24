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
                                        <img src="assets/img/serviceImage/modelling.png" class="img-fluid" alt="">
                                    </div>
                                    <div class="services-lable">
                                        <!-- <p class="text-white mb-0 f-14 text-uppercase">Trusted Services</p> -->
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="services-box ps-0 ps-lg-4 mt-4">
                                        <h3 class="services-title text-uppercase">Modelling</h3>
                                        <p class="text-uppercase mt-4 pt-3 f-20">KD Film Workshop Modeling Classes: Strut Your Way to Success!</p>
                                        <p class="text-muted mt-4"><span class="servicepagetext">We know that walking with style and perfecting the camera-ready look are your secret ambitions. Let's transform those dreams into reality.. </span>
                                            </span>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="services-box ps-0 ps-lg-4 mt-4">
                                        <h3 class="services-title text-uppercase">Modelling</h3>
                                        <p class="text-uppercase mt-4 pt-3 f-20">Discover the World of Modeling:
                                        </p>
                                        <p class="services-title text-uppercase">At KD FILMS WORKSHOP, we are all about molding aspiring models into runway-ready professionals. Our modeling classes will help you master the art of striking poses, owning the stage, and creating a stunning modeling portfolio.
                                        </p>
                                        <p class="text-muted mt-4"><span class="servicepagetext"> <span
                                                    style="color: #ff2d55;">Here's what we offer:</span>
                                                    Picture this: You're under the guidance of experienced mentors who've graced countless runways and posed for the world's top photographers. They're not just instructors; they're your modeling mentors, your backstage buddies, and your biggest fans.. <br><br>
                                                <span style="color: #ff2d55;"> In our workshops: </span>
                                                <p>you'll delve into the nuances of modeling. From perfecting your walk and mastering poses to understanding what it takes to shine in front of the camera, we've got it all covered. Our goal is to help you exude confidence, elegance, and style in every shot.
                                                    We're not just about teaching modeling; we're about creating a modeling journey that aligns with your unique style. Whether you're a fresh face or a potential cover star, our workshops cater to all. It's about making every snapshot count and turning heads wherever you go. <br><br>
                                                    And yes, we provide more than just knowledge; we offer you the chance to showcase your modeling skills. Whether it's through our in-house shoots or connections to the modeling industry, we're here to help you shine where it matters most.
                                                    Ready to embrace the walk and transform your modeling dreams into reality? Enroll in our modeling classes, and let's strike a pose together!
                                                    </p>
                                            </span>
                                            </span>
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
