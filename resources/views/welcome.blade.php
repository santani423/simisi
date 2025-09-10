@extends('layout.master')

@section('content')
    <div class="banner-area responsive-top-pad banner-standard text-center auto-height">
        <!-- Fixed Shape -->
        <div class="fixed-shape" style="background-image: url({{ asset('source/assets/img/shape/15.png') }});"></div>
        <div class="shape-right">
            <img src="{{ asset('source/assets/img/shape/16.png') }}" alt="Shape">
        </div>
        <div class="shape-left">
            <img src="{{ asset('source/assets/img/shape/17.png') }}" alt="Shape">
        </div>
        <!-- End Fixed Shape -->
        <div class="container">
            <div class="content-box">
                <div class="row align-center">
                    <div class="col-lg-10 offset-lg-1 info">
                        {{-- <h5 class="wow fadeInLeft">We're expert developer</h5> --}}
                        <h2 class="wow fadeInDown" data-wow-duration="1s">Start Transforming  <br> your Organization
                        </h2>
                        <a class="btn circle btn-theme theme btn-md" href="#">Get Started</a>
                    </div>
                    <div class="col-lg-8 offset-lg-2 wow fadeInUp" data-wow-duration="1s">
                        <div class="thumb">
                            <img src="{{ asset('source/assets/img/illustration/10.png') }}" alt="Thumb">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
       <!-- Start Signup
    ============================================= -->
   
    <!-- End Signup -->
    <!-- Start Features
    ============================================= -->
    @include('component._component1')
    <!-- End Our Features -->
      <!-- Start Why Choose Us 
    ============================================= -->
    @include('component._component2')
    <!-- End Why Choose Us -->
      <!-- Start Choose us Area
    ============================================= -->
    @include('component._component3')
    <!-- End Choose us Area -->
       <!-- Start Overview 
    ============================================= -->
    @include('component._component4')
    @include('component._component5')
    @include('component._component6')
    @include('component._component7')
    @include('component._component8')
    @include('component._component9')
   
   
   
 
    
  
    <!-- End Blog -->
      <!-- Start Contact 
    ============================================= -->
    <div id="contact" class="contact-area default-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 maps">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d14767.262289338461!2d70.79414485000001!3d22.284975!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1424308883981"></iframe>
                </div>
                <div class="col-lg-5 contact-forms">
                    <h2 class="area-title">We’d love to hear from <br> you anytime</h2>
                    <form action=" " method="POST" class="contact-form">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <i class="fas fa-user"></i>
                                    <input class="form-control" id="name" name="name" placeholder="Name" type="text">
                                    <span class="alert-error"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <i class="fas fa-envelope"></i>
                                    <input class="form-control" id="email" name="email" placeholder="Email*" type="email">
                                    <span class="alert-error"></span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <i class="fas fa-phone"></i>
                                    <input class="form-control" id="phone" name="phone" placeholder="Phone" type="text">
                                    <span class="alert-error"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group comments">
                                    <i class="fas fa-edit"></i>
                                    <textarea class="form-control" id="comments" name="comments" placeholder="Tell Us About Project *"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <button type="submit" name="submit" id="submit">
                                    Send Message <i class="fa fa-paper-plane"></i>
                                </button>
                            </div>
                        </div>
                        <!-- Alert Message -->
                        <div class="col-lg-12 alert-notification">
                            <div id="message" class="alert-msg"></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Contact -->
@endsection
