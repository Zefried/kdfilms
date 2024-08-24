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
                                        <img src="assets/img/serviceImage/dancing.png" class="img-fluid" alt="">
                                    </div>
                                    <div class="services-lable">
                                        <!-- <p class="text-white mb-0 f-14 text-uppercase">Trusted Services</p> -->
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="services-box ps-0 ps-lg-4 mt-4">
                                        <h3 class="services-title text-uppercase">Dancing & Singing</h3>
                                        <p class="text-uppercase mt-4 pt-3 f-20">Find Your Voice or Unleash Your Dance Moves & Reach for the Stars!
                                            </p>
                                        <p class="text-muted mt-4"><span class="servicepagetext">At KD FILM WORKSHOP,  
                                            we believe that dancing is more than just steps; it's an expression of your inner groove. Our dance workshops are where you set your spirit free.
                                             </span>
                                            </span>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="services-box ps-0 ps-lg-4 mt-4">
                                        <h3 class="services-title text-uppercase">Dancing  Workshop</h3>
                                        {{-- <p class="text-uppercase mt-4 pt-3 f-20">Get Ready to Steal the Spotlight with Our
                                            Acting Workshops!
                                        </p> --}}
                                        <p class="services-title text-uppercase">Imagine being guided by dance dynamos who've spun, twirled, and tapped their way into the hearts of audiences. 
                                            They're not just instructors; they're your dance gurus, your backstage buddies, and your biggest fans.
                                        </p>
                                        <p class="text-muted mt-4"><span class="servicepagetext"> <span
                                                    style="color: #ff2d55;">Here's the Deal:</span>
                                                At KD FILMS WORKSHOP, we're all about helping you become the best actor you
                                                can be. Our workshops are like a backstage pass to the world of acting,
                                                where you get to learn the ropes from the pros and immerse yourself in the
                                                art of performance. <br><br>
                                                <span style="color: #ff2d55;"> In our workshops: </span>
                                                you'll explore a variety of dance forms. From classical elegance to contemporary cool, we cover it all. 
                                                You'll learn to master the steps and create a captivating dance reel that's uniquely you.. <br><br>


                                                <p>But it's not just about mastering choreography; it's about dancing with confidence, style, and passion. We'll help you own the stage or floor, whether you're performing in a spotlight or just having fun with friends.
                                                    And when it comes to the industry, we've got the lowdown. We share the secrets of auditions, casting, and how to make your mark in the world of dance. We don't just teach you how to dance; we teach you how to dance your way into the industry.
                                                    We also believe that practice makes perfect. That's why we provide opportunities for you to showcase your moves. Whether it's through our in-house dance productions or connections to the dance world, you'll get a platform to show your stuff. <br>
                                                    Ready to make your dancing dreams a reality? Enroll in our dance workshop today and let's dance our hearts out!
                                                    I hope you find these engaging and well-balanced for your singing and dancing services. If you need any adjustments or further assistance, feel free to let me know!
                                                    </p>
                                            </span>
                                            </span>

                                            <h3 class="services-title text-uppercase">Singing Workshop</h3>
                                            {{-- <p class="text-uppercase mt-4 pt-3 f-20">Get Ready to Steal the Spotlight with Our
                                                Acting Workshops!
                                            </p> --}}
                                            <p class="services-title text-uppercase">Discover Your Voice:
                                                At KD FILM WORKSHOP, we're all about nurturing raw talent and turning it into pure musical magic. 
                                                Our singing workshops are where you learn to sing, not just with your voice but with your soul.
                                                
                                            </p>
                                            <p class="text-muted mt-4"><span class="servicepagetext"> <span
                                                        style="color: #ff2d55;">Here's what awaits you::</span>
                                                        Picture this: You're guided by music maestros who've hit all the right notes and harmonized with the best in the industry. They're not just instructors; they're your musical mentors, your backstage buddies, and your biggest fans.. <br><br>
                                                    <span style="color: #ff2d55;"> In our workshops: </span>
                                                    you'll dive into the theory of music and singing. We'll help you grasp the melody of the music world and teach you how to tune your vocal instrument. You'll not just sing, but sing with confidence, control, and emotion. <br><br>
    
    
                                                    <p>But we're not just about hitting high notes. We're about empowering you to become the musician you dream of being. Whether you're a novice or an aspiring superstar, our workshops cater to all levels. It's about creating music that resonates and connecting with your audience on a soulful level. <br>
                                                        And guess what? We provide more than just knowledge; we offer a stage for you to showcase your talent. From in-house performances to connections in the industry, you'll get a chance to shine where it matters the most.
                                                        Ready to transform your shower-time fantasies into a real musical journey? Enroll in our singing workshop, and let's hit those high notes together!
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
