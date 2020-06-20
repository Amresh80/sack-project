
    <!-- Footer start -->
    <footer id="footer" class="footer">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-12 footer-widget">
            <h3 class="widget-title">Recent Posts</h3>

          <!-- loop starts here  -->
            <div class="latest-post-items media">
              <div class="latest-post-content media-body">
                <h4><a href="#">Bulgaria claims to find Europe's 'oldest town'</a></h4>
                <p class="post-meta">
                  <span class="author">Posted by John Doe</span>
                  <span class="post-meta-cat">in<a href="#"> Blog</a></span>
                </p>
              </div>
            </div><!-- 1st Latest Post end -->

          <!-- loop ends here  -->

          </div>
          <!--/ End Recent Posts-->


          <div class="col-md-4 col-sm-12 footer-widget">
	        <h3 class="widget-title">Flickr Photos</h3>

	        <div class="img-gallery">
	          <div class="img-container">
	            <a class="thumb-holder" data-rel="prettyPhoto" href="images/gallery/10.jpg">
	              <img src="images/gallery/10.jpg" alt="">
	            </a>
	            <a class="thumb-holder" data-rel="prettyPhoto" href="images/gallery/11.jpg">
	              <img src="images/gallery/11.jpg" alt="">
	            </a>
	            <a class="thumb-holder" data-rel="prettyPhoto" href="images/gallery/10.jpg">
	              <img src="images/gallery/10.jpg" alt="">
	            </a>
	            <a class="thumb-holder" data-rel="prettyPhoto" href="images/gallery/11.jpg">
	              <img src="images/gallery/11.jpg" alt="">
	            </a>
	            <a class="thumb-holder" data-rel="prettyPhoto" href="images/gallery/10.jpg">
	              <img src="images/gallery/10.jpg" alt="">
	            </a>
	            <a class="thumb-holder" data-rel="prettyPhoto" href="images/gallery/11.jpg">
	              <img src="images/gallery/11.jpg" alt="">
	            </a>
	            <a class="thumb-holder" data-rel="prettyPhoto" href="images/gallery/10.jpg">
	              <img src="images/gallery/10.jpg" alt="">
	            </a>
	            <a class="thumb-holder" data-rel="prettyPhoto" href="images/gallery/11.jpg">
	              <img src="images/gallery/11.jpg" alt="">
	            </a>
	            <a class="thumb-holder" data-rel="prettyPhoto" href="images/gallery/10.jpg">
	              <img src="images/gallery/10.jpg" alt="">
	            </a>
	          </div>
	        </div>
	      </div>
	      <!--/ end flickr -->


           @if($contactDetails)
                @foreach ($contactDetails as $contact)

          <div class="col-md-3 col-sm-12 footer-widget footer-about-us">
            <h3 class="widget-title"> Contact Us</h3>
            <p>{{ $contact->desc}}</p>
            <h4>Address</h4>
            <p>{{ $contact->address}}</p>
            <div class="row">
              <div class="col-md-6">
                <h4>Email:</h4>
                <p>{{ $contact->email_id}}</p>
              </div>
              <div class="col-md-6">
                <h4>Phone No.</h4>
                <p>{{ $contact->phone}}</p>
              </div>
            </div>
            <form action="#" role="form">
              <div class="input-group subscribe">
                <input type="email" class="form-control" placeholder="Email Address" required="">
                <span class="input-group-addon">
                  <button class="btn" type="submit"><i class="fa fa-envelope-o"> </i></button>
                </span>
              </div>
            </form>
          </div>
            @endforeach
                @endif
          <!--/ end about us -->

        </div><!-- Row end -->
      </div><!-- Container end -->
    </footer><!-- Footer end -->


    <!-- Copyright start -->
    <section id="copyright" class="copyright angle">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <ul class="footer-social unstyled">
              <li>
                <a title="Twitter" href="#">
                  <span class="icon-pentagon wow bounceIn"><i class="fa fa-twitter"></i></span>
                </a>
                <a title="Facebook" href="#">
                  <span class="icon-pentagon wow bounceIn"><i class="fa fa-facebook"></i></span>
                </a>
                <a title="Google+" href="#">
                  <span class="icon-pentagon wow bounceIn"><i class="fa fa-google-plus"></i></span>
                </a>
                <a title="linkedin" href="#">
                  <span class="icon-pentagon wow bounceIn"><i class="fa fa-linkedin"></i></span>
                </a>
                <a title="Pinterest" href="#">
                  <span class="icon-pentagon wow bounceIn"><i class="fa fa-pinterest"></i></span>
                </a>
                <a title="Skype" href="#">
                  <span class="icon-pentagon wow bounceIn"><i class="fa fa-skype"></i></span>
                </a>
                <a title="Dribble" href="#">
                  <span class="icon-pentagon wow bounceIn"><i class="fa fa-dribbble"></i></span>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <!--/ Row end -->
        <div class="row">
          <div class="col-md-12 text-center">
            <div class="copyright-info">
              &copy; Copyright 2019 Themefisher. <span>Designed by <a
                  href="https://themefisher.com">Themefisher.com</a></span>
            </div>
          </div>
        </div>
        <!--/ Row end -->
        <div id="back-to-top" data-spy="affix" data-offset-top="10" class="back-to-top affix position-fixed">
          <button class="btn btn-primary" title="Back to Top"><i class="fa fa-angle-double-up"></i></button>
        </div>
      </div>
      <!--/ Container end -->
    </section>
    <!--/ Copyright end -->

</div><!-- Body inner end -->
