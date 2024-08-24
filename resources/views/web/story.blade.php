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
                                        <img src="assets/img/serviceImage/storyboarding.png" class="img-fluid" alt="">
                                    </div>
                                    <div class="services-lable">
                                        <!-- <p class="text-white mb-0 f-14 text-uppercase">Trusted Services</p> -->
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="services-box ps-0 ps-lg-4 mt-4">
                                        <h3 class="services-title text-uppercase">Storyboarding</h3>
                                        <p class="text-uppercase mt-4 pt-3 f-20">KD FILM WORKSHOP: Elevate Your Preproduction Skills and Bring Your Imagination to Life!</p>
                                        <p class="text-muted mt-4"><span class="servicepagetext">Master the Art of Preproduction </span>
                                            </span>
                                            <p>At KD FILM WORKSHOP, we're all about empowering you with the tools and skills to bring your creative ideas to life. Our Storyboarding & Sketching classes will guide you in the art of visual storytelling and planning the perfect foundation for your projects.</p>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="services-box ps-0 ps-lg-4 mt-4">
                                        <h3 class="services-title text-uppercase">Here's What You'll Discover:</h3>
                                        <p class="text-uppercase mt-4 pt-3 f-20">Imagine being mentored by seasoned visual artists and storyboarders who've laid the groundwork for unforgettable stories and productions. They're not just instructors; they're your creative mentors, your backstage buddies, and your biggest fans.
                                        </p>
                                        <p class="services-title text-uppercase">In our workshops, you'll learn the secrets of sketching, storyboarding, and visual planning. We'll guide you in creating captivating visual narratives and understanding the concept of the line of action. Whether it's sketching characters or mapping out storyboards, you'll have the tools to visualize your projects.
                                        </p>
                                    <p>
                                        But we're not just about teaching; we're about nurturing your creative imagination. Whether you're an aspiring visual artist or a filmmaker who wants to master preproduction, our workshops cater to all levels. It's about elevating your projects from good to great.
And when it comes to the industry, we've got the inside scoop. <br><br> We share insights on the importance of preproduction, storyboarding, and how a well-planned foundation leads to successful projects. We don't just teach you how to sketch; we teach you how to bring your creative ideas to life.
We also believe in learning by doing. That's why we provide opportunities for you to showcase your skills. <br><br> Whether it's through in-house productions or connections to the world of visual storytelling, you'll have the platform to turn your creative concepts into reality.
Ready to elevate your preproduction skills, bring your imagination to life, and create projects that leave a lasting impact? Enroll in our Storyboarding & Sketching classes and let's start visualizing your creative dreams!

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
