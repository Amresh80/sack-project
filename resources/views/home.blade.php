@extends('layouts.app')

@section('content')

<!-- Slider start -->
<section id="home" class="p-0">
	<div id="main-slide" class="cd-hero">
		<ul class="cd-hero-slider">
			<li class="selected">
				<div class="overlay2">
					<img class="" src="images/slider/banner4.jpg" alt="slider">
				</div>
				<div class="cd-full-width">
					<h2>Need To Invent The Future!</h2>
					<h3>We Making Difference To Great Things Possible</h3>
					<a href="#0" class="btn btn-primary white cd-btn">Start Now</a>
					<a href="#0" class="btn btn-primary solid cd-btn">Learn More</a>
				</div> <!-- .cd-full-width -->
			</li>
			<li>
				<div class="overlay2">
					<img class="" src="images/slider/banner9.jpg" alt="slider">
				</div>
				<div class="cd-half-width">
					<h2>How Big Can You Dream?</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. In consequatur cumque natus!</p>
					<a href="#0" class="cd-btn btn btn-primary solid">Take a Tour</a>
				</div> <!-- .cd-half-width -->

				<div class="cd-half-width cd-img-container">
					<img src="images/slider/Web-Design-Background-PNG.png" alt="">
				</div>  <!-- .cd-half-width.cd-img-container -->
			</li>
			<li>
				<div class="overlay2">
					<img class="" src="images/slider/banner2.jpg" alt="slider">
				</div>



				<div class="cd-half-width cd-img-container img-right">
					<img src="images/slider/webdev.png" alt="">
				</div> <!-- .cd-half-width.cd-img-container -->
				<div class="cd-half-width">
					<h2>Your Challenge is Our Progress</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. In consequatur cumque natus!</p>
					<a href="#0" class="cd-btn btn btn-primary white">Start</a>
					<a href="#0" class="cd-btn btn secondary btn-primary solid">Learn More</a>
				</div> <!-- .cd-half-width -->
			</li>


			<li>
				<div class="overlay2">
					<img class="" src="images/slider/bannerapp.jpg" alt="slider">
				</div>



				<div class="cd-half-width cd-img-container img-right">
					<img src="images/slider/android.png" alt="">
				</div> <!-- .cd-half-width.cd-img-container -->
				<div class="cd-half-width">
					<h2>Your Challenge is Our Progress</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. In consequatur cumque natus!</p>
					<a href="#0" class="cd-btn btn btn-primary white">Start</a>
					<a href="#0" class="cd-btn btn secondary btn-primary solid">Learn More</a>
				</div> <!-- .cd-half-width -->
			</li>



			<li class="cd-bg-video">
				<div class="cd-full-width">
					<h2>WE ARE HERE TO MAKE IT HAPPEN</h2>
					<h3>We Making Difference To Great Things Possible</h3>

					<a href="#0" class="cd-btn btn btn-primary solid">Learn more</a>
				</div> <!-- .cd-full-width -->

				<div class="cd-bg-video-wrapper" data-video="videos/video">
					<!-- video element will be loaded using jQuery -->
				</div> <!-- .cd-bg-video-wrapper -->
			</li>
		</ul>
		<!--/ cd-hero-slider -->

		<div class="cd-slider-nav">
			<nav>
				<span class="cd-marker item-1"></span>
				<ul>
					<li class="selected"><a href="#0"><i class="fa fa-home"></i> Invent</a></li>
					<li><a href="#0"><i class="fa fa-desktop"></i> Design</a></li>
					<li><a href="#0"><i class="fa fa-newspaper-o"></i> development</a></li>
					<li><a href="#0"><i class="fa fa-android"></i> App</a></li>
					<li class="video"><a href="#0"><i class="fa fa-video-camera"></i> Video</a></li>
				</ul>
			</nav>
		</div> <!-- .cd-slider-nav -->

	</div>
	<!--/ Main slider end -->
</section>
<!--/ Slider end -->


<!-- Service box start -->
<section id="service" class="service angle">
    <div class="container">
        <div class="row">
            <div class="col-md-12 heading">
                <span class="title-icon float-left"><i class="fa fa-cogs"></i></span>
                <h2 class="title">Service We Provide <span class="title-desc">A Quality Experience Team with 4 years
                        experience</span></h2>
            </div>
        </div><!-- Title row end -->

        <div class="row">
            <div class="col-md-3 col-sm-3 wow fadeInDown" data-wow-delay=".5s">
                <div class="service-content text-center">
                    <span class="service-icon icon-pentagon"><i class="fa fa-tachometer"></i></span>
                    <h3>Web Design</h3>
                    <p>High Life narwhal, banh mi PBR single-origin coffee Odd Future actually aliqua polaroid befor</p>
                </div>
            </div>
            <!--/ End first service -->

            <div class="col-md-3 col-sm-3 wow fadeInDown" data-wow-delay=".8s">
                <div class="service-content text-center">
                    <span class="service-icon icon-pentagon"><i class="fa fa-android"></i></span>
                    <h3>Apps Development</h3>
                    <p>Food truck master cleanse mixtape minim Portland, cardigan stumptown chambray swag</p>
                </div>
            </div>
            <!--/ End Second service -->

            <div class="col-md-3 col-sm-3 wow fadeInDown" data-wow-delay="1.1s">
                <div class="service-content text-center">
                    <span class="service-icon icon-pentagon"><i class="fa fa-shopping-cart"></i></span>
                    <h3>eCommerce Websites</h3>
                    <p>Neutra Thundercats craft beer, listicle meggings bicycle rights 90's XOXO beard cardiga</p>
                </div>
            </div>
            <!--/ End Third service -->

            <div class="col-md-3 col-sm-3 wow fadeInDown" data-wow-delay="1.4s">
                <div class="service-content text-center">
                    <span class="service-icon icon-pentagon"><i class="fa fa-lightbulb-o"></i></span>
                    <h3>Design for Startups</h3>
                    <p>We design beautiful modern engaging websites that always latest responsive technologies.</p>
                </div>
            </div>
            <!--/ End 4th service -->
        </div><!-- Content row end -->
    </div>
    <!--/ Container end -->
</section>
<!--/ Service box end -->

<!-- Portfolio start -->
<section id="portfolio" class="portfolio">
	<div class="container">
		<div class="row">
			<div class="col-md-12 heading">
				<span class="title-icon classic float-left"><i class="fa fa-suitcase"></i></span>
				<h2 class="title classic">Our Awesome Work</h2>
			</div>
		</div> <!-- Title row end -->

		<!--Isotope filter start -->
		<div class="row text-right">
			<div class="col-12">
				<div class="isotope-nav" data-isotope-nav="isotope">
					<ul>
						<li><a href="#" class="active" data-filter="*">All</a></li>
						<li><a href="#" data-filter=".web-design">Web Design</a></li>
						<li><a href="#" data-filter=".development">Development</a></li>
						<li><a href="#" data-filter=".joomla">Joomla</a></li>
						<li><a href="#" data-filter=".wordpress">Wordpress</a></li>
					</ul>
				</div>
			</div>
		</div><!-- Isotope filter end -->
	</div>

	<div class="container-fluid">
		<div class="row isotope" id="isotope">
			<div class="col-sm-3 web-design isotope-item">
				<div class="grid">
					<figure class="m-0 effect-oscar">
						<img src="images/portfolio/1.jpg" alt="">
						<figcaption>
							<h3>Startup Business</h3>
							<a class="link icon-pentagon" href="portfolio-item.html"><i class="fa fa-link"></i></a>
							<a class="view icon-pentagon" data-rel="prettyPhoto" href="images/portfolio/1.jpg"><i
									class="fa fa-search"></i></a>
						</figcaption>
					</figure>
				</div>
			</div><!-- Isotope item end -->

			<div class="col-sm-3 development isotope-item">
				<div class="grid">
					<figure class="m-0 effect-oscar">
						<img src="images/portfolio/2.jpg" alt="">
						<figcaption>
							<h3>Easy to Lanunch</h3>
							<a class="link icon-pentagon" href="portfolio-item.html"><i class="fa fa-link"></i></a>
							<a class="view icon-pentagon" data-rel="prettyPhoto" href="images/portfolio/2.jpg"><i
									class="fa fa-search"></i></a>
						</figcaption>
					</figure>
				</div>
			</div><!-- Isotope item end -->

			<div class="col-sm-3 joomla isotope-item">
				<div class="grid">
					<figure class="m-0 effect-oscar">
						<img src="images/portfolio/12.jpg" alt="">
						<figcaption>
							<h3>Your Business</h3>
							<a class="link icon-pentagon" href="portfolio-item.html"><i class="fa fa-link"></i></a>
							<a class="view icon-pentagon" data-rel="prettyPhoto" href="images/portfolio/12.jpg"><i
									class="fa fa-search"></i></a>
						</figcaption>
					</figure>
				</div>
			</div><!-- Isotope item end -->

			<div class="col-sm-3 wordpress isotope-item">
				<div class="grid">
					<figure class="m-0 effect-oscar">
						<img src="images/portfolio/10.jpg" alt="">
						<figcaption>
							<h3>Prego Match</h3>
							<a class="link icon-pentagon" href="portfolio-item.html"><i class="fa fa-link"></i></a>
							<a class="view icon-pentagon" data-rel="prettyPhoto" href="images/portfolio/10.jpg"><i
									class="fa fa-search"></i></a>
						</figcaption>
					</figure>
				</div>
			</div><!-- Isotope item end -->

			<div class="col-sm-3 joomla isotope-item">
				<div class="grid">
					<figure class="m-0 effect-oscar">
						<img src="images/portfolio/11.jpg" alt="">
						<figcaption>
							<h3>Fashion Brand</h3>
							<a class="link icon-pentagon" href="portfolio-item.html"><i class="fa fa-link"></i></a>
							<a class="view icon-pentagon" data-rel="prettyPhoto" href="images/portfolio/11.jpg"><i
									class="fa fa-search"></i></a>
						</figcaption>
					</figure>
				</div>
			</div><!-- Isotope item end -->

			<div class="col-sm-3 development isotope-item">
				<div class="grid">
					<figure class="m-0 effect-oscar">
						<img src="images/portfolio/7.jpg" alt="">
						<figcaption>
							<h3>The Insidage</h3>
							<a class="link icon-pentagon" href="portfolio-item.html"><i class="fa fa-link"></i></a>
							<a class="view icon-pentagon" data-rel="prettyPhoto" href="images/portfolio/7.jpg"><i
									class="fa fa-search"></i></a>
						</figcaption>
					</figure>
				</div>
			</div><!-- Isotope item end -->

			<div class="col-sm-3 development isotope-item">
				<div class="grid">
					<figure class="m-0 effect-oscar">
						<img src="images/portfolio/6.jpg" alt="">
						<figcaption>
							<h3>Light Carpet</h3>
							<a class="link icon-pentagon" href="portfolio-item.html"><i class="fa fa-link"></i></a>
							<a class="view icon-pentagon" data-rel="prettyPhoto" href="images/portfolio/6.jpg"><i
									class="fa fa-search"></i></a>
						</figcaption>
					</figure>
				</div>
			</div><!-- Isotope item end -->

			<div class="col-sm-3 development isotope-item">
				<div class="grid">
					<figure class="m-0 effect-oscar">
						<img src="images/portfolio/1.jpg" alt="">
						<figcaption>
							<h3>Amazing Keyboard</h3>
							<a class="link icon-pentagon" href="portfolio-item.html"><i class="fa fa-link"></i></a>
							<a class="view icon-pentagon" data-rel="prettyPhoto" href="images/portfolio/1.jpg"><i
									class="fa fa-search"></i></a>
						</figcaption>
					</figure>
				</div>
			</div><!-- Isotope item end -->
		</div><!-- Content row end -->
	</div><!-- Container end -->
</section><!-- Portfolio end -->
<!-- Counter Strat -->
<section class="ts_counter p-0">
	<div class="container-fluid">
		<div class="row facts-wrapper wow fadeInLeft text-center">
			<div class="facts one col-md-3 col-sm-6">
				<span class="facts-icon"><i class="fa fa-user"></i></span>
				<div class="facts-num">
					<span class="counter">1200</span>
				</div>
				<h3>Clients</h3>
			</div>

			<div class="facts two col-md-3 col-sm-6">
				<span class="facts-icon"><i class="fa fa-institution"></i></span>
				<div class="facts-num">
					<span class="counter">1277</span>
				</div>
				<h3>Item Sold</h3>
			</div>

			<div class="facts three col-md-3 col-sm-6">
				<span class="facts-icon"><i class="fa fa-suitcase"></i></span>
				<div class="facts-num">
					<span class="counter">869</span>
				</div>
				<h3>Projects</h3>
			</div>

			<div class="facts four col-md-3 col-sm-6">
				<span class="facts-icon"><i class="fa fa-trophy"></i></span>
				<div class="facts-num">
					<span class="counter">76</span>
				</div>
				<h3>Awwards</h3>
			</div>

		</div>
	</div>
	<!--/ Container end -->
</section>
<!--/ Counter end -->

<!-- Feature box start -->
<section id="feature" class="feature">
    <div class="container">
        <div class="row">
            <div class="feature-box col-sm-4 wow fadeInDown" data-wow-delay=".5s">
                <span class="feature-icon float-left"><i class="fa fa-heart-o"></i></span>
                <div class="feature-content">
                    <h3>Clean &amp; Modern Design</h3>
                    <p>Bras urna felis accumsan at ultrde cesid posuere masa socis nautoque penat</p>
                </div>
            </div>
            <!--/ End first featurebox -->

            <div class="feature-box col-sm-4 wow fadeInDown" data-wow-delay=".5s">
                <span class="feature-icon float-left"><i class="fa fa-codepen"></i></span>
                <div class="feature-content">
                    <h3>Useful Shortcodes</h3>
                    <p>High Life narwhal, banh mi PBR single-origin coffee Odd Future actually aliqua</p>
                </div>
            </div>
            <!--/ End 2nd featurebox -->

            <div class="feature-box col-sm-4 wow fadeInDown" data-wow-delay=".5s">
                <span class="feature-icon float-left"><i class="fa fa-film"></i></span>
                <div class="feature-content">
                    <h3>Parallax Section</h3>
                    <p>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut</p>
                </div>
            </div>
            <!--/ End 3rd featurebox -->
        </div><!-- Content row end -->

        <div class="gap-40"></div>

        <div class="row">
            <div class="feature-box col-sm-4 wow fadeInDown" data-wow-delay=".5s">
                <span class="feature-icon float-left"><i class="fa fa-newspaper-o"></i></span>
                <div class="feature-content">
                    <h3>Multipurpose Concept</h3>
                    <p>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut</p>
                </div>
            </div>
            <!--/ End 1st featurebox -->

            <div class="feature-box col-sm-4 wow fadeInDown" data-wow-delay=".5s">
                <span class="feature-icon float-left"><i class="fa fa-desktop"></i></span>
                <div class="feature-content">
                    <h3>Responsive Layout</h3>
                    <p>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut</p>
                </div>
            </div>
            <!--/ End 2nd featurebox -->

            <div class="feature-box col-sm-4 wow fadeInDown" data-wow-delay=".5s">
                <span class="feature-icon float-left"><i class="fa fa-pagelines"></i></span>
                <div class="feature-content">
                    <h3>Light wight Performance</h3>
                    <p>High Life narwhal, banh mi PBR single-origin coffee Odd Future actually aliqua</p>
                </div>
            </div>
            <!--/ End 3rd featurebox -->

        </div><!-- Content row end -->

        <div class="gap-40"></div>

        <div class="row">
            <div class="feature-box col-sm-4 wow fadeInDown" data-wow-delay=".5s">
                <span class="feature-icon float-left"><i class="fa fa-recycle"></i></span>
                <div class="feature-content">
                    <h3>Free Lifetime Updates</h3>
                    <p>Bras urna felis accumsan at ultrde cesid posuere masa socis nautoque penat</p>
                </div>
            </div>
            <!--/ End first featurebox -->

            <div class="feature-box col-sm-4 wow fadeInDown" data-wow-delay=".5s">
                <span class="feature-icon float-left"><i class="fa fa-diamond"></i></span>
                <div class="feature-content">
                    <h3>Endless Possibilites</h3>
                    <p>High Life narwhal, banh mi PBR single-origin coffee Odd Future actually aliqua</p>
                </div>
            </div>
            <!--/ End first featurebox -->

            <div class="feature-box col-sm-4 wow fadeInDown" data-wow-delay=".5s">
                <span class="feature-icon float-left"><i class="fa fa-whatsapp"></i></span>
                <div class="feature-content">
                    <h3>24/7 Live Support</h3>
                    <p>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut</p>
                </div>
            </div>
            <!--/ End first featurebox -->
        </div><!-- Content row end -->

    </div>
    <!--/ Container end -->
</section>
<!--/ Feature box end -->


<section id="image-block" class="image-block p-0">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6 ts-padding"
				style="height:650px;background:url(images/about.jpg) 50% 50% / cover no-repeat;">
			</div>
			<div class="col-md-6 ts-padding img-block-right">
				<div class="img-block-head text-center">
					<h2>Know More About Our Company</h2>
					<h3>Why Choose Us</h3>
					<p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.
						Proin gravida nibh vel velit auctor Aenean sollicitudin, adipisicing elit sed lorem quis bibendum auctor.
					</p>
				</div>

				<div class="gap-30"></div>

				<div class="image-block-content">
					<span class="feature-icon float-left"><i class="fa fa-bicycle"></i></span>
					<div class="feature-content">
						<h3>Tons of Features</h3>
						<p>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut</p>
					</div>
				</div>
				<!--/ End 1st block -->

				<div class="image-block-content">
					<span class="feature-icon float-left"><i class="fa fa-diamond"></i></span>
					<div class="feature-content">
						<h3>PowerPack Theme</h3>
						<p>Proin gravida nibh vel velit auctor Aenean sollicitudin adipisicing</p>
					</div>
				</div>
				<!--/ End 1st block -->

				<div class="image-block-content">
					<span class="feature-icon float-left"><i class="fa fa-street-view"></i></span>
					<div class="feature-content">
						<h3>Day Night Support</h3>
						<p>Simply dummy text and typesettings industry has been the industry</p>
					</div>
				</div>
				<!--/ End 1st block -->

			</div>
		</div>
	</div>
</section>
<!--/ Image block end -->


<!-- Team start -->
<section id="team" class="team">
	<div class="container">
		<div class="row">
			<div class="col-md-12 heading">
				<span class="title-icon float-left"><i class="fa fa-weixin"></i></span>
				<h2 class="title">Meet with our Team <span class="title-desc">A Quality Experience Team with 4 years
						experience</span></h2>
			</div>
		</div><!-- Title row end -->

		<div class="row text-center">
			<div class="col-md-3 col-sm-6">
				<div class="team wow slideInLeft">
					<div class="img-hexagon">
						<img src="images/team/th.jpg" alt="">
						<span class="img-top"></span>
						<span class="img-bottom"></span>
					</div>
					<div class="team-content">
						<h3>Vosgi Varduhi</h3>
						<p>Web Designer</p>
						<div class="team-social">
							<a class="fb" href="#"><i class="fa fa-facebook"></i></a>
							<a class="twt" href="#"><i class="fa fa-twitter"></i></a>
							<a class="gplus" href="#"><i class="fa fa-google-plus"></i></a>
							<a class="linkdin" href="#"><i class="fa fa-linkedin"></i></a>
							<a class="dribble" href="#"><i class="fa fa-dribbble"></i></a>
						</div>
					</div>
				</div>
			</div>
			<!--/ Team 1 end -->
			<div class="col-md-3 col-sm-6">
				<div class="team wow slideInLeft">
					<div class="img-hexagon">
						<img src="images/team/th.jpg" alt="">
						<span class="img-top"></span>
						<span class="img-bottom"></span>
					</div>
					<div class="team-content">
						<h3>Robert Aleska</h3>
						<p>Web Designer</p>
						<div class="team-social">
							<a class="fb" href="#"><i class="fa fa-facebook"></i></a>
							<a class="twt" href="#"><i class="fa fa-twitter"></i></a>
							<a class="gplus" href="#"><i class="fa fa-google-plus"></i></a>
							<a class="linkdin" href="#"><i class="fa fa-linkedin"></i></a>
							<a class="dribble" href="#"><i class="fa fa-dribbble"></i></a>
						</div>
					</div>
				</div>
			</div>
			<!--/ Team 2 end -->
			<div class="col-md-3 col-sm-6">
				<div class="team wow slideInRight">
					<div class="img-hexagon">
						<img src="images/team/th.jpg" alt="">
						<span class="img-top"></span>
						<span class="img-bottom"></span>
					</div>
					<div class="team-content">
						<h3>Taline Voski</h3>
						<p>Web Designer</p>
						<div class="team-social">
							<a class="fb" href="#"><i class="fa fa-facebook"></i></a>
							<a class="twt" href="#"><i class="fa fa-twitter"></i></a>
							<a class="gplus" href="#"><i class="fa fa-google-plus"></i></a>
							<a class="linkdin" href="#"><i class="fa fa-linkedin"></i></a>
							<a class="dribble" href="#"><i class="fa fa-dribbble"></i></a>
						</div>
					</div>
				</div>
			</div>
			<!--/ Team 3 end -->
			<div class="col-md-3 col-sm-6">
				<div class="team animate wow slideInRight">
					<div class="img-hexagon">
						<img src="images/team/th.jpg" alt="">
						<span class="img-top"></span>
						<span class="img-bottom"></span>
					</div>
					<div class="team-content">
						<h3>Alban Spencer</h3>
						<p>Web Designer</p>
						<div class="team-social">
							<a class="fb" href="#"><i class="fa fa-facebook"></i></a>
							<a class="twt" href="#"><i class="fa fa-twitter"></i></a>
							<a class="gplus" href="#"><i class="fa fa-google-plus"></i></a>
							<a class="linkdin" href="#"><i class="fa fa-linkedin"></i></a>
							<a class="dribble" href="#"><i class="fa fa-dribbble"></i></a>
						</div>
					</div>
				</div>
			</div>
			<!--/ Team 4 end -->
		</div>
		<!--/ Content row end -->
	</div>
	<!--/ Container end -->
</section>
<!--/ Team end -->

<!-- 
<section class="parallax parallax1">
    <div class="parallax-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2>Are You Ready to Buy This Template!</h2>
                <h3>Just Click Button and Use Your Own</h3>
                <p>
                    <a href="#" class="btn btn-primary white">Purchase Now</a>
                    <a href="#" class="btn btn-primary solid">Get In Touch</a>
                </p>
            </div>
        </div>
    </div>
</section> -->


<!-- Clients start -->
<section id="clients" class="clients">
	<div class="container">
		<div class="row wow fadeInLeft">
			<div id="client-carousel" class="col-sm-12 owl-carousel owl-theme text-center client-carousel">
				<figure class="m-0 item client_logo">
					<a href="#">
						<img src="images/clients/client1.png" alt="client">
					</a>
				</figure>
				<figure class="m-0 item client_logo">
					<a href="#">
						<img src="images/clients/client2.png" alt="client">
					</a>
				</figure>
				<figure class="m-0 item client_logo">
					<a href="#">
						<img src="images/clients/client3.png" alt="client">
					</a>
				</figure>
				<figure class="m-0 item client_logo">
					<a href="#">
						<img src="images/clients/client4.png" alt="client">
					</a>
				</figure>
				<figure class="m-0 item client_logo">
					<a href="#">
						<img src="images/clients/client5.png" alt="client">
					</a>
				</figure>
				<figure class="m-0 item client_logo">
					<a href="#">
						<img src="images/clients/client6.png" alt="client">
					</a>
				</figure>
				<figure class="m-0 item client_logo">
					<a href="#">
						<img src="images/clients/client7.png" alt="client">
					</a>
				</figure>
				<figure class="m-0 item client_logo">
					<a href="#">
						<img src="images/clients/client8.png" alt="client">
					</a>
				</figure>
			</div><!-- Owl carousel end -->
		</div><!-- Main row end -->
	</div>
	<!--/ Container end -->
</section>
<!--/ Clients end -->

@stop




