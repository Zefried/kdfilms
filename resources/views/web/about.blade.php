@extends('web.template.master')
@section('content')

<!-- Start Page Title Area -->
<div class="page-title-area item-bg1">
    <div class="container">
        <h1>About Us<span><a style="color:#ff0427;" href="{{route('web.index')}}">Home</a></span></h1>
    </div>
</div>
<section class="about-area ptb-120 bg-image">
    <div class="container">
        <div class="row h-100 align-items-center">
            <div class="col-lg-6">
                <div class="about-content">
                    <span>ABOUT KD FILMS</span>
                    <h2>We Create and <b>Turn</b> Into Reality</h2>

                    <div class="abouttext">
                        <p>K D Films is a production house based in Guwahati & Nalbari, Assam. K D Films was established
                            in 2016. Maximum works of our production are done at Jyoti Chitraban (Film Studio) Society,
                            Government of Assam, India.</p>

                        <p>We have released our First Assamese Feature Film “RAJA RETURNS” on 26th October 2018. “RAJA
                            RETURNS” is now available for streaming on Voot App. And we have also done many projects..
                        </p>

                        <p>Right now we have started the online training programme through our official website
                            www.kdfilms.in . Our faculties are well experienced. Everyone can join us and learn from the
                            experts to train themselves. Best students will get a chance to work in our upcoming
                            projects or will be referred for other’s projects too.</p>
                    </div>
                    {{-- <div class="signature mb-0">
                        <img src="assets/img/signature.png" alt="image">
                    </div> --}}
                </div>
            </div>

            <div class="col-lg-6">
                <div class="about-image">
                    <img src="assets/img/aboutb.jpg" class="about-img1" alt="image">

                    <img src="assets/img/abouta.jpg" class="about-img2" alt="image">

                    <img src="assets/img/shapes/5.png" class="shape-img" alt="image">
                </div>
            </div>
        </div>
    </div>
</section>



@endsection