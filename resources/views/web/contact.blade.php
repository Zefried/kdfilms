@extends('web.template.master')
@section('content')
<style>

    .error{
        color: white;
    background-color: red;
    border-radius: 18px;
    padding: 2px;
    }
    .formalign{
        padding: 50px;
    }

    form {
        border-radius: 10px;
        box-shadow: 3px 2px 30px #6e6995;
    }
    .form-control {
        background:none;
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

    .location-box {
    height: 138px;
    }


</style>
<!-- Start Page Title Area -->
<div class="page-title-area item-bg2">
    <div class="container">
        <h1>Contact Us <br><span><a style="color:#ff0427;" href="{{route('web.index')}}">Home</a></span></h1>

        <!-- <ul>
            <li><a href="index-2.html">Home</a></li>
            <li>Blog</li>
        </ul> -->
    </div>
</div>
<section class="contact-area ptb-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="contact-box location-box">
                    <div class="icon">
                        <i class="icofont-world"></i>
                    </div>
                    <div class="content">
                        <h4>Location</h4>
                        <p>Nalbari (Assam), 781340</p>
                    </div>
                    
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="contact-box">
                    <div class="icon">
                        <i class="icofont-phone"></i>
                    </div>
                    
                    <div class="content">
                        <h4>Phone </h4>
                        <p><a href="tel:6001543783"> +91 6001543783</a></p>
                        {{-- <p><a href="#">(+000) 245522455</a></p> --}}
                    </div>
                    
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
                <div class="contact-box">
                    
                    <div class="icon">
                        <i class="icofont-email"></i>
                    </div>
                    <div class="content">
                        <h4>E-mail</h4>
                        <p><a href="mailto:kdfilms2018@gmail.com">kdfilms2018@gmail.com </a></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row h-100 align-items-center contact-form">
            <div class="col-lg-4 col-md-12">
                <div class="leave-your-message">
                    <h3>Leave Your Message</h3>
                    <p>If you have any questions about the services we provide simply use the form below. We try and respond to all queries and comments.</p>
                    
                    <div class="stay-connected">
                        <h3>Stay Connected</h3>
                        <ul>
                            <li>
                                <a href="#">
                                    <i class="icofont-facebook"></i>
                                    
                                    <span>Facebook</span>
                                </a>
                            </li>
                            
                            {{-- <li>
                                <a href="#">
                                    <i class="icofont-twitter"></i>
                                    
                                    <span>Twitter</span>
                                </a>
                            </li> --}}
                            
                            <li>
                                <a href="#">
                                    <i class="icofont-instagram"></i>
                                    
                                    <span>Instagram</span>
                                </a>
                            </li>
                            
                            {{-- <li>
                                <a href="#">
                                    <i class="icofont-linkedin"></i>
                                    
                                    <span>Linkedin</span>
                                </a>
                            </li> --}}
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-8 col-md-12">
                <form  style="background-image: url(assets/img/contactbg.png);" method="POST" action="{{ route('web.contact.submit') }}">
                    @csrf
                    <div class="row formalign">
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label for="name">Name*</label>
                                <input type="text" class="form-control" name="name" id="name" required="" data-error="Please enter your name" value="{{old('name')}}">
                                 @if ($errors->has('name'))
                                    <span class="error">{{ $errors->first('name') }}</span>
                                @enderror
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" name="email" id="email"  data-error="Please enter your email" value="{{old('email')}}">
                                 @if ($errors->has('email'))
                                    <span class="error">{{ $errors->first('email') }}</span>
                                @enderror
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label for="subject">Subject</label>
                                <input type="text" class="form-control" name="subject" id="subject"  data-error="Please enter your subject" value="{{old('subject')}}">
                                 @if ($errors->has('subject'))
                                    <span class="error">{{ $errors->first('subject') }}</span>
                                @enderror
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label for="number">Phone Number*</label>
                                <input type="text" class="form-control" name="phone" id="phone" required="" data-error="Please enter your number" value="{{old('phone')}}">
                                 @if ($errors->has('phone'))
                                    <span class="error">{{ $errors->first('phone') }}</span>
                                @enderror
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <div class="captcha">
                                    <span>{!! captcha_img() !!}</span>
                                    <button style="background-color: #218838" type="button" class="btn btn-success" id="reload">Refresh</button>
                                    </div>
                                <input id="captcha" type="text" class="form-control" placeholder="Enter Captcha" name="captcha" style="margin-top:20px;">
                                @error('captcha')
                                    <span class="error" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <label for="message">Message*</label>
                                <textarea name="message" class="form-control txtcolor" id="message" cols="30" rows="4" required="" data-error="Write your message">{{old('message')}}</textarea>
                                 @if ($errors->has('message'))
                                    <span class="error">{{ $errors->first('message') }}</span>
                                @enderror
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        
                        <div class="col-lg-12 col-md-12">
                            <button type="submit" class="btn btn-primary disabled" style="pointer-events: all; cursor: pointer;">Send Message</button>
                            <div id="msgSubmit" class="h3 text-center hidden"></div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
@section('script')
<script>
    $("#reload").click(function() {
        $.ajax({
            type: 'GET',
            url: "{{url('refresh-captcha')}}",
            success: function(data) {
                $(".captcha span").html(data.captcha);
            }
        });
    });
</script>
@endsection