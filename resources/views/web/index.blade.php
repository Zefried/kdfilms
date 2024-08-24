@extends('web.template.master')
@section('content')
    <style>
        form {
            margin: auto;
            width: 75%;
            background: #ffffff;
            padding: 30px;
            -webkit-box-shadow: 0 0 1.25rem rgba(108, 118, 134, 0.1);
            box-shadow: 0 0 1.25rem rgba(108, 118, 134, 0.1);
            box-shadow: 3px 2px 30px #6e6995;
            border-radius: 10px;
        }

        .error {
            color: white;
            background-color: red;
            border-radius: 18px;
            padding: 2px;
        }

        .formalign {
            padding: 50px;
        }

        form {
            border-radius: 10px;
            box-shadow: 3px 2px 30px #6e6995;
        }

        .form-control {
            background: none;
            color: white;
        }

        .form-control:focus {
            background: none;
            color: white;
        }

        .form-control input {
            color: red !important;

        }

        form input[type="text"] {
            height: 45px;
            border: 1px solid cornflowerblue;
        }

        @media only screen and (min-width: 350px) and (max-width: 600px) {


            .icon-float ul:first-of-type li a {
                padding: 14px 13vw;
                top: -10px;
            }

            .main-banner {
                height: 100%;
                padding-top: 80px;
                padding-bottom: 96px;
            }


        }
    </style>

    <!-- Start Main Banner -->

    <div class="home-slides owl-carousel owl-theme">
        <div class="main-banner item-bg3">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="main-banner-content">
                            <p>Are you <span>ready</span> to attend? </p>
                            <h1>Film Production & <span>Online <b>Training</b> </span> Institute</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-banner item-bg4">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="main-banner-content banner-content-center">
                            <p>Are you <span>ready</span> to attend? </p>
                            <h1>Film Production & <span>Online <b>Training</b> </span> Institute</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-banner item-bg5">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="main-banner-content">
                            <p>Are you <span>ready</span> to attend? </p>
                            <h1>Film Production & <span>Online <b>Training</b> </span> Institute</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Main Banner -->

    <!-- Course section starts from here -->
    <section class="pricing-area pb-100 bg-image">
        <div class="container">
            <div class="section-title">
                <span>KD Films Course</span>
                <h2>Learn From The Experts & <b>Train Yourself</b>
                </h2>
                <div class="bar"></div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="pricing-plan">
                        <h3>The Basic Training Programme</h3>
                        <ul class="pricing-content">
                            <li>Workshop duration is 15 Days (Total 15 hours). Students have the liberty to choose
                                the days in a week to attend their workshops, and they can also choose 1 hour or 2
                                hours per day session </li>
                        </ul>
                        <a href="#abc" class="btn btn-primary">Get Details</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="pricing-plan">
                        <h3>The Advance Training Programme</h3>
                        <ul class="pricing-content">
                            <li>Workshop duration is 30 Days (Total 30 hours). Students have the libert`y to choose
                                the days in a week to attend their workshops, and they can also choose 1 hour or 2
                                hours per day session. </li>
                        </ul>
                        <a href="#abc" class="btn btn-primary">Get Details</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="pricing-plan">
                        <h3>The Professional Training Programme</h3>
                        <ul class="pricing-content">
                            <li>Workshop duration is 45 Days (Total 45 hours). Students have the liberty to choose
                                the days in a week to attend their workshops, and they can also choose 1 hour or 2
                                hours per day session. </li>
                        </ul>
                        <a href="#abc" class="btn btn-primary">Get Details</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Course section End here -->


    <!-- About Section starts here -->
    <!-- <section class="about-area ptb-120 bg-image">
                            <div class="container">
                                <div class="row h-100 align-items-center">
                                    <div class="col-lg-6">
                                        <div class="about-content">
                                            <span>About KD Films</span>
                                            <h2>We Create and <b>Turn</b> Into Reality </h2>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                                has been the industry's standard dummy text ever since the 1500s, when an unknown
                                                printer took a galley of type and scrambled it to make a type specimen book.</p>
                                            <p>It has survived not only five centuries, but also the leap into electronic typesetting,
                                                remaining essentially unchanged.</p> -->
    <!-- <div class="signature"><img src="assets/img/signature.png" alt="image"></div> -->
    <!-- <a href="#" class="btn btn-primary">Read More <i class="icofont-double-right"></i>
                                            </a> -->
    <!-- <a href="#" class="btn btn-secondary">Buy Ticket</a> -->
    <!-- </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="about-image">
                                            <img src="assets/img/aboutb.jpg" class="about-img1" alt="image">
                                            <img src="assets/img/abouta.jpg" class="about-img2" alt="image">
                                            <img src="assets/img/shapes/5.png" class="shape-img" alt="image"> -->
    <!-- <a href="#" class="btn btn-primary">Explore More About</a> -->
    <!-- </div>
                                    </div>
                                </div>
                            </div>
                        </section> -->
    <!-- About section ends here -->

    <!-- Start Why Choose Us Area -->
    <section class="why-choose-us-two why-choose-bg">
        <div class="row m-0 h-100 align-items-center">
            <div class="text-center service-bar">
                <div class="section-title">
                    <span class="service-title">
                        <p class="mobheading"><span class="whychooseus">Why Choose Us</span></p>
                    </span>
                    <div class="bar mar"></div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 p-0">
                <div class="why-choose-img">
                    <img class="why-choose-img-bg" src="assets/img/why-one-r.jpg" alt="image">
                </div>
            </div>
            <div class="col-lg-4 col-md-6 p-0">
                <div class="why-choose-content">
                    <h3>Expert Guidance</h3>
                    <p>At KD Films, students receive training from experienced industry professionals. Our faculty members
                        bring a wealth of practical knowledge and real-world experience, providing invaluable insights into
                        the nuances of filmmaking.</p>
                    <a href="#abc">KD Films <i class="icofont-long-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 p-0">
                <div class="why-choose-img">
                    <img class="why-choose-img-bg" src="assets/img/why-two-res.jpg" alt="image">
                </div>
            </div>
            <div class="col-lg-4 col-md-6 p-0">
                <div class="why-choose-content">
                    <h3>Flexible Learning</h3>
                    <p>We offer flexible workshop durations tailored to suit individual schedules. Students have the freedom
                        to choose the number of days per week and session duration, ensuring a customized learning
                        experience that fits their lifestyle and commitments.</p>
                    <a href="#abc">KD Films <i class="icofont-long-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 p-0">
                <div class="why-choose-img">
                    <img class="why-choose-img-bg" src="assets/img/whychoose3.JPG" alt="image">
                </div>
            </div>
            <div class="col-lg-4 col-md-6 p-0">
                <div class="why-choose-content">
                    <h3>Career Growth</h3>
                    <p>Exceptional students have the chance to work on our upcoming projects or receive referrals for other
                        industry ventures. We believe in nurturing talent and providing avenues for growth, ensuring that
                        promising individuals have opportunities to showcase their skills and kickstart their careers in the
                        film industry.</p>
                    <a href="#abc">KD Films <i class="icofont-long-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- End Why Choose Us Area -->

    <!-- pop up form starts here -->
    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" style="background-image: url(assets/img/modalbg2.jpg);">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">
                        <span class="modalTxt">Fill The Form</span>
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row">
                            <div class="mb-3 col-lg-6">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control newform" id="name"
                                    placeholder="Enter your name">
                            </div>
                            <div class="mb-3 col-lg-6">
                                <label for="city" class="form-label">City</label>
                                <input type="text" class="form-control newform" id="city"
                                    placeholder="Enter your city">
                            </div>
                            <div class="mb-3 col-lg-6">
                                <label for="mobile" class="form-label">Mobile Number</label>
                                <input type="tel" class="form-control newform" id="mobile"
                                    placeholder="Enter your mobile number">
                            </div>
                            <div class="mb-3 col-lg-6">
                                <label for="email" class="form-label">Email ID</label>
                                <input type="email" class="form-control newform" id="email"
                                    placeholder="Enter your email address">
                            </div>
                            <div class="mb-3 col-lg-6">
                                <label for="showreels" class="form-label">Show Reels Link</label>
                                <input type="url" class="form-control newform" id="showreels"
                                    placeholder="Enter the link to your show reels">
                            </div>
                            <div class="mb-3 col-lg-6">
                                <label for="category" class="form-label">Category</label>
                                <input type="text" class="form-control newform" id="category"
                                    placeholder="Enter your category">
                            </div>
                            <div class="mb-3 col-lg-12">
                                <label for="message" class="form-label">Message</label>
                                <textarea class="form-control newform" id="message" rows="4" placeholder="Enter your message"></textarea>
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


    <!-- Youtube video sections starts here -->
    <section class="blog-area ptb-100 bg-image">
        <div class="container">
            <div class="section-title">
                <span>KD Films</span>
                <h2>Our Latest <b>Videos</b>
                </h2>
                <div class="bg-title"> Vlog </div>
                <!-- <a href="#" class="btn btn-primary">View All</a> -->
                <div class="bar"></div>
            </div>
            <div class="row">
                <div class="blog-slides owl-carousel owl-theme">
                    @foreach ($data as $item)
                        <div class="col-lg-12 col-md-12">
                            <div class="youtubevid">
                                <div class="single-blog-post">
                                    <div class="blog-image blog-video">
                                        <div class="video-wrapper">
                                            {{-- <iframe class="vid" src="https://www.youtube.com/embed/{{$item->video_id}}"
                                                frameborder="0" allowfullscreen></iframe> --}}
                                            <a href="https://www.youtube.com/watch?v={{ $item->video_id }}"
                                                target="_blank">
                                                <img height="300px" width="350px"
                                                    src="https://img.youtube.com/vi/{{ $item->video_id }}/sddefault.jpg"
                                                    class="img-responsive">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
    </section>
    <!-- Youtube video sections ends here -->



    <!-- social Media Icon Section -->
    <div class="icon-float">
        <ul class="icon-bar">
            <li>
                <a href="https://api.whatsapp.com/send?phone=917086030335" target="_blank" class="wa1">
                    <i class="icofont-whatsapp"></i>
                </a>
            </li>
            <li>
                <a href="https://www.facebook.com/infowebinfotech/" target="_blank" class="fb1">
                    <i class="icofont-instagram"></i>
                </a>
            </li>
            <li>
                <a href="https://instagram.com/webinfotech_?igshid=YmMyMTA2M2Y=" target="_blank" class="yt1">
                    <i class="icofont-facebook"></i>
                </a>
            </li>
            {{-- <li>
                <a href="https://twitter.com/WebInfotechGhy" target="_blank" class="tw1">
                    <i class="icofont-twitter"></i>
                </a>
            </li> --}}
        </ul>

    </div>
    <!-- social Media Icon Section -->
    <!-- Contact Form container -->
    <div class="contact-last" id="abc">
        <!-- Bootstrap 5 starter form -->
        <form id="formmob" style="background-image: url(assets/img/contactbg.png);" method="POST"
            action="{{ route('web.contact.submit') }}">
            @csrf
            <h1 id="contact-form" style="text-align: center;">Contact Form</h1>
            <!-- Name input -->
            <div class="mb-3 col-lg-6">
                <label class="form-label" for="name">Name</label>
                <input class="form-control" id="name" type="text" name="name" placeholder="Name"
                    value="{{ old('name') }}" />
                @if ($errors->has('name'))
                    <span class="error">{{ $errors->first('name') }}</span>
                @enderror
        </div>


        <!-- Email address input -->
        <div class="mb-3 col-lg-6">
            <label class="form-label" for="emailAddress">Email Address</label>
            <input class="form-control" id="emailAddress" name="email" type="email" placeholder="Email Address"
                value="{{ old('email') }}" />
            @if ($errors->has('email'))
                <span class="error">{{ $errors->first('email') }}</span>
            @enderror
    </div>
    <!-- Phone input -->
    <div class="mb-3 col-lg-6">
        <label class="form-label" for="phone">Phone</label>
        <input class="form-control" id="phone" name="phone" type="tel" placeholder="Phone"
            value="{{ old('Phone') }}" />
        @if ($errors->has('phone'))
            <span class="error">{{ $errors->first('phone') }}</span>
        @enderror
</div>
{{-- <div class="col-lg-12 col-md-12">
    <div class="form-group">
        <div class="captcha">
            <span>{!! captcha_img() !!}</span>
            <button style="background-color: #218838" type="button" class="btn btn-success"
                id="reload">Refresh</button>
        </div>
        <input id="captcha" type="text" class="form-control" placeholder="Enter Captcha"
            name="captcha" style="margin-top: 20px;">
        @error('captcha')
            <span class="error" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div> --}}
<!-- Message input -->
<div class="mb-3">
    <label class="form-label" for="message">Message</label>
    <textarea class="form-control" id="message" name="message" type="text" placeholder="Message"
        style="height: 10rem;">{{ old('message') }}</textarea>
    @if ($errors->has('message'))
        <span class="error">{{ $errors->first('message') }}</span>
    @enderror
</div>
<!-- Form submit button -->
<div class="d-grid">
<button class="btn btn-primary btn-lg contactbtn" type="submit">Submit</button>
</div>
</form>
</div>
</div>
@endsection
@section('script')
<script>
    $("#reload").click(function() {
        $.ajax({
            type: 'GET',
            url: "{{ url('refresh-captcha') }}",
            success: function(data) {
                $(".captcha span").html(data.captcha);
            }
        });
    });
</script>
@endsection
