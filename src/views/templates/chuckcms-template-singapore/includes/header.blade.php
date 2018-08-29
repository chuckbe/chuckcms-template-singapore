<!-- Overlay Mobile Menu Click -->
<div class="mobile-menu-first">
    <div id="mobile-menu-right" class="mobile-menu-dark">
      <div class="mCustomScrollbar light" data-mcs-theme="minimal-dark">
           	<div class="header-mobile-menu hmm-v1">
            	<a class="has-icon" href="tel:01128262789"><span class="lnr lnr-phone-handset icon-set-1 icon-xs"></span> <span class="sub-text-icon text-middle">0112-826-2789</span></a>
            	<a href="#" class="ot-btn btn-rounded btn-hightlight-color">Get A Quote</a>
			</div> <!-- End header mobile menu -->
			
			{!! ChuckMenu::renderFrontEnd('chuckcms-template-singapore') !!}

          <div class="footer-mobile-menu fmm-v1">
              <ul class="social">
                  <li class="facebook"><a href=""><i class="fa fa-facebook"></i></a></li>
                  <li class="twitter"><a href=""><i class="fa fa-twitter"></i></a></li>
                  <li class="google-plus"><a href=""><i class="fa fa-google-plus"></i></a></li>
                  <li class="youtube"><a href=""><i class="fa fa-youtube-play"></i></a></li>
                  <li class="linkedin"><a href=""><i class="fa fa-linkedin"></i></a></li>
              </ul>
              <ul class="address-footer-mobile">
                
                <li><a href=""><span class="lnr lnr-map-marker"></span> 8th floor, 379 Hudson St, New York, NY 10018</a></li>
                <li><a href="tel:18001236879 "><span class="lnr lnr-smartphone"></span> 1-800-123-6879 </a></li>
                <li><a href="mailto:contact@finance.com"><span class="lnr lnr-envelope"></span> contact@finance.com</a></li>
                
              </ul>
          </div><!-- End footer mobile menu -->
      </div>
    </div> <!-- /#rmm   -->
</div><!-- End Mobile Menu -->

<div id="page">
    <div class="top-bar top-bar-dark">
      <div class="container">
        <div class="left-top-bar left-top-bar-long">
              <p class="hidden-xs" ><span class="lnr lnr-map-marker large-lnr"></span> 8th floor, 379 Hudson St, New York, NY 10018</p>
               <p class="hidden-xs"><span class="lnr lnr-smartphone large-lnr"></span> 1-800-123-6879 </p>
                <p class="hidden-xs"><span class="lnr lnr-envelope large-lnr"></span> contact@finance.com</p>
                <div class="popover-container visible-xs">
                    <button type="button" class="btn btn-popover popover-dark" data-container="body" data-toggle="popover" data-placement="bottom" title="0112-826-2789" data-content="contact@site.com">
                        <span class="lnr lnr-phone-handset"></span>
                      </button>
                       <button type="button" class="btn btn-popover popover-dark" data-container="body" data-toggle="popover" data-placement="bottom" title="8th floor, 379 Hudson St" data-content="New York, NY 10018">
                        <span class="lnr lnr-map-marker"></span>
                      </button>
                      <button type="button" class="btn btn-popover popover-dark" data-container="body" data-toggle="popover" data-placement="bottom" title="07:30 am – 06:00 pm" data-content="Every Day">
                        <span class="lnr lnr lnr-clock"></span>
                      </button>
                </div>
        </div> <!-- End left top bar -->
        <div class="right-top-bar">
            <ul class="social">
                <li class="facebook"><a href=""><i class="fa fa-facebook"></i></a></li>
                <li class="twitter"><a href=""><i class="fa fa-twitter"></i></a></li>
                <li class="google-plus"><a href=""><i class="fa fa-google-plus"></i></a></li>
                <li class="youtube"><a href=""><i class="fa fa-youtube-play"></i></a></li>
                <li class="linkedin"><a href=""><i class="fa fa-linkedin"></i></a></li>
            </ul>
        </div><!-- End right top bar -->
      </div> <!-- End container -->
    </div> <!-- End top bar -->
    
    <header id="sticked-menu" class="header header-v5">
      <div class="container">
        <div class="logo">
            <div class="mm-toggle visible-xs visible-sm">
              <i class="fa-remove fa fa-bars"></i><span class="mm-label">Menu</span>
            </div>

            <a href="{{ URL::to('/') }}"><img src="{{ URL::to('/') }}{{ ChuckSite::getSetting('logo.href') }}" class="img-responsive" alt="logo"></a>
        
        </div>
        <nav class="navi-desktop-site hidden-sm hidden-xs">

        	{!! ChuckMenu::renderFrontEnd('chuckcms-template-singapore', 'menu-mobile') !!}
                 	
        </nav>
      </div> <!-- End container -->
    </header><!-- END HEADER -->