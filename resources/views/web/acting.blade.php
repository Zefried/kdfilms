@extends('web.template.master')
@section('content')
<style>
    .error{
        color: white;
    background-color: red;
    border-radius: 18px;
    padding: 2px;
    }
</style>
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
                    <form method="POST" action="{{route('web.service_enquiry.submit')}}">
                        @csrf
                        <div class="row">
                            <div class="mb-3 col-lg-6">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Enter your name">
                                @if ($errors->has('name'))
                                    <span class="error">{{ $errors->first('name') }}</span>
                                @enderror
                            </div>
                            <div class="mb-3 col-lg-6">
                                <label for="city" class="form-label">City</label>
                                <input type="text" class="form-control" name="city" id="city" placeholder="Enter your city">
                                @if ($errors->has('city'))
                                    <span class="error">{{ $errors->first('city') }}</span>
                                @enderror
                            </div>
                            <div class="mb-3 col-lg-6">
                                <label for="mobile" class="form-label">Mobile Number</label>
                                <input type="tel" class="form-control" name="mobile" id="mobile"
                                    placeholder="Enter your mobile number">
                                    @if ($errors->has('mobile'))
                                    <span class="error">{{ $errors->first('mobile') }}</span>
                                @enderror
                            </div>
                            <div class="mb-3 col-lg-6">
                                <label for="email" class="form-label">Email ID</label>
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="Enter your email address">
                                    @if ($errors->has('email'))
                                    <span class="error">{{ $errors->first('email') }}</span>
                                @enderror
                            </div>
                            <div class="mb-3 col-lg-6">
                                <label for="showreels" class="form-label">Show Reels Link</label>
                                <input type="url" class="form-control" name="show_reels_link" id="showreels"
                                    placeholder="Enter the link to your show reels">
                                    @if ($errors->has('show_reels_link'))
                                    <span class="error">{{ $errors->first('show_reels_link') }}</span>
                                @enderror
                            </div>
                            <div class="mb-3 col-lg-6">
                                <label for="category" class="form-label">Category</label>
                                <input type="text" class="form-control" name="category" id="category" placeholder="Enter your category">
                                @if ($errors->has('category'))
                                    <span class="error">{{ $errors->first('category') }}</span>
                                @enderror
                            </div>
                            <div class="mb-3 col-lg-12">
                                <label for="message" class="form-label">Message</label>
                                <textarea class="form-control" id="message" name="message" rows="4" placeholder="Enter your message"></textarea>
                                @if ($errors->has('message'))
                                    <span class="error">{{ $errors->first('message') }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- pop up form ends here -->


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
                                        <img src="assets/img/why-one-r.jpg" class="img-fluid" alt="">
                                    </div>
                                    <div class="services-lable">
                                        <!-- <p class="text-white mb-0 f-14 text-uppercase">Trusted Services</p> -->
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="services-box ps-0 ps-lg-4 mt-4">
                                        <h3 class="services-title text-uppercase">Acting</h3>
                                        <p class="text-uppercase mt-4 pt-3 f-20">KD FILMS
                                            creating modern &amp; engaging film experiences</p>
                                        <p class="text-muted mt-4"><span class="servicepagetext">we're passionate about
                                                nurturing talent and fostering creativity. Our workshops cover a wide range
                                                of artistic disciplines, from acting and singing to modeling, photography,
                                                direction, screenplay writing, storyboarding, and sketching. <br> <br>Our
                                                experienced
                                                instructors and industry insiders guide and mentor you in turning your
                                                dreams into reality. Join us today and embark the journey.
                                            </span></p>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="services-box ps-0 ps-lg-4 mt-4">
                                        <h3 class="services-title text-uppercase">Acting Workshop</h3>
                                        <p class="text-uppercase mt-4 pt-3 f-20">Get Ready to Steal the Spotlight with Our
                                            Acting Workshops!
                                        </p>
                                        <p class="services-title text-uppercase">We've all been there – that burning desire
                                            to conquer the world of acting, but
                                            feeling like you're missing a few key pieces of the puzzle. Well, guess what?
                                            You're in for a treat.
                                        </p>
                                        <p class="text-muted mt-4"><span class="servicepagetext"> <span
                                                    style="color: #ff2d55;">Here's the Deal:</span>
                                                At KD FILMS WORKSHOP, we're all about helping you become the best actor you
                                                can be. Our workshops are like a backstage pass to the world of acting,
                                                where you get to learn the ropes from the pros and immerse yourself in the
                                                art of performance. <br><br>
                                                <span style="color: #ff2d55;"> What You Can Expect: </span>
                                                Imagine being guided by experienced instructors who've walked the red
                                                carpets, and delivered unforgettable performances on the big screen. They're
                                                not just teachers; they're your mentors, your backstage buddies, and your
                                                biggest fans. <br><br>
                                                Throughout our workshops, you'll dive deep into the world of acting. From
                                                embodying different characters to expressing emotions with authenticity, we
                                                cover it all. You'll learn to modulate your voice and master the art of body
                                                language. It's like adding powerful tools to your acting toolkit. <br><br>
                                                But that's not all. We're here to boost your confidence, to make sure that
                                                when you step onto that stage or in front of the camera, you own it. No more
                                                jitters or self-doubt – just pure, unadulterated self-assuredness. <br><br>
                                                And when it comes to the industry, we've got the inside scoop. Auditions,
                                                casting calls, and all the tricks of the trade – we spill the beans on it
                                                all. You'll be armed with knowledge, connections, and the experience you
                                                need to shine in the spotlight. <br><br>
                                                Oh, and speaking of the spotlight, we give you the stage to strut your
                                                stuff. Whether it's through our in-house productions or the network we've
                                                built, you'll have your moment. It's where you get to show the world what
                                                you're made of. <br> <br>
                                                So, what are you waiting for? Let's make those acting dreams of yours a
                                                reality. Join KD FILM WORKSHOP, and let's kickstart your journey to stardom
                                                in style.
                                                Ready to ignite your inner superstar? Enroll in our Acting workshop today,
                                                and let's set those dreams on fire!
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
