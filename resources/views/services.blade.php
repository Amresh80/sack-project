

@extends('layouts.app')


<div id="banner-area">
    <img src="images/banner/banner3.jpg" alt="" />
    <div class="parallax-overlay"></div>
    <!-- Subpage title start -->
    <div class="banner-title-content">
        <div class="text-center">
            <h2>Service</h2>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item text-white" aria-current="page">Service</li>
                </ol>
            </nav>
        </div>
    </div><!-- Subpage title end -->
</div><!-- Banner area end -->

<!-- Main container start -->
<section id="main-container">
    <div class="container">
        <!-- Services -->
        <div class="row">
            <div class="col-md-12 heading">
                <span class="title-icon classic float-left"><i class="fa fa-cogs"></i></span>
                <h2 class="title classic">Our Services</h2>
            </div>
        </div>
        <div class="row">

            @if($services_list)
            @foreach ($services_list as $service)
                <div class="col-md-3 col-sm-3 mb-5 wow fadeInDown" data-wow-delay=".5s">
                <div class="service-content text-center">
                    <span class="service-icon icon-pentagon"><i class="{{ $service->service_icon }}"></i></span>
                    <h3>{{ $service->service_name}}</h3>
                    <p>{{ $service->service_desc}}</p>
                </div>
            </div>
            @endforeach
             @endif
           
        </div><!-- Content 2nd row end -->
        <!-- Services end -->
    </div>
    <!--/ 1st container end -->

    <div class="gap-60"></div>

    <!-- Testimonial start-->
    <div class="testimonial parallax parallax3">
        <div class="parallax-overlay"></div>
        <div class="container">
            <div class="row">
                <div id="testimonial-carousel" class="owl-carousel owl-theme text-center testimonial-slide">

                    
                     @if($testimonials)
                        @foreach ($testimonials as $testimonial)
                    <div class="item">
                        <div class="testimonial-thumb">
                            <img src="images/team/testimonial1.jpg" alt="testimonial">
                        </div>
                        <div class="testimonial-content">
                            <p class="testimonial-text">
                               {{ $testimonial->test_desc}}
                            </p>
                            <h3 class="name">{{ $testimonial->test_name}}<span>{{ $testimonial->test_dig}}</span></h3>
                        </div>
                    </div>
                        @endforeach
                    @endif
                    
                </div>
                <!--/ Testimonial carousel end-->
            </div>
            <!--/ Row end-->
        </div>
        <!--/  Container end-->
    </div>
    <!--/ Testimonial end-->

</section>
<!--/ Main container end -->
<!-- 
<section class="call-to-action">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h3>Join with BizCraft and Give Your Website a Brand New Look</h3>
                <a href="#" class="float-right btn btn-primary white">Purchase Now</a>
            </div>
        </div>
    </div>
</section> -->
