<!-- Footer --> 
<footer class="bg-dark footer">
        <div class="container">
          <div class="row">
            <div class="footer-row">
              
                <div class="footer-col-1">
                    <a href="index.html"><img src="images/Footer/logo-footer.png" class="img-responsive" alt="Image"></a>                    
                    <ul class="clearfix">
                      <li><a href="services-detail.html">Finacial Planning</a></li>
                      <li><a href="services-detail.html">Insurance Consulting</a></li>
                      <li><a href="services-detail.html">Investments Management</a></li>
                      <li><a href="services-detail.html">Retirement Strategies</a></li>
                      <li><a href="services-detail.html">Taxes Planning</a></li>
                      <li><a href="services-detail.html">Business Loan</a></li>
                    </ul>
                  </div>
              
              
                <div class="footer-col-2">
                  <h3 class="text-white">Contact us</h3>
                  <div class="border-2-side">
                    <p>Address: 8th floor, 379 Hudson St, New York, NY 10018</p>
                    <p><span >Phone: (+1) 96 716 6879</span></p>
                    <p><span >Email: contact@site.com</span></p>
                  </div>
                </div>
           
           
                <div class="footer-col-3">
                      <h3 class="text-white">Follow us</h3> 
                      <ul class="social social-footer">
                      	@if(ChuckSite::getSetting('socialmedia.facebook') !== null)
                        <li class="facebook"><a href="{{ ChuckSite::getSetting('socialmedia.facebook') }}"><i class="fa fa-facebook"></i></a></li>
                        @endif
                        @if(ChuckSite::getSetting('socialmedia.twitter') !== null)
                        <li class="twitter"><a href="{{ ChuckSite::getSetting('socialmedia.twitter') }}"><i class="fa fa-twitter"></i></a></li>
                        @endif
                        @if(ChuckSite::getSetting('socialmedia.googleplus') !== null)
                        <li class="google-plus"><a href="{{ ChuckSite::getSetting('socialmedia.googleplus') }}"><i class="fa fa-google-plus"></i></a></li>
                        @endif
                        @if(ChuckSite::getSetting('socialmedia.youtube') !== null)
                        <li class="youtube"><a href="{{ ChuckSite::getSetting('socialmedia.youtube') }}"><i class="fa fa-youtube-play"></i></a></li>
                        @endif
                        @if(ChuckSite::getSetting('socialmedia.linkedin') !== null)
                        <li class="linkedin"><a href="{{ ChuckSite::getSetting('socialmedia.linkedin') }}"><i class="fa fa-linkedin"></i></a></li>
                        @endif
                      </ul>
                </div>
          
            </div> <!-- End footer row -->
            <div class="col-md-12 footer-link">
              <p>Copyright © {{ date('Y') }} Powered by Chuck.be. All rights reserved.</p>
              <ul>
                <li><a href="about.html">About </a></li>
                <li><a href="contact.html">Contact Us </a></li>
                <li><a href="#">Term & Conditions</a></li>
                <li><a href="#">Privacy Policy </a></li>
                <li><a href="#">Sites Map</a></li>
              </ul>
            </div>
          </div><!-- End Row -->

        </div><!-- End container -->
</footer><!-- End  -->
</div> <!-- End Page -->