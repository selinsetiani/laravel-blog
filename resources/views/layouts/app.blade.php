<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="title" content="Supplier Ikan Indonesia">
    <meta name="keywords" content="Supplier Ikan Jakarta, Supplier Ikan, Ikan Laut">
    <title>Fishery.id - Supplier Ikan Indonesia</title>
    <link rel="icon" href="images/Fevicon.png" type="image/png">
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery.timepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
   
  </head>
  <body>
  
  <?php 
  function current_page($uri = "/") { 
    return strstr(request()->path(), $uri); 
  } 
?>
  @section('sidebar')
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="/"><img src="images/ikan.png"></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span>
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item {{current_page('/') ? 'active' : '' }}"><a href="/" class="nav-link">Home</a></li>
	          <li class="nav-item {{current_page('product') ? 'active' : '' }}"><a href="product" class="nav-link">Product</a></li>
	          <li class="nav-item {{current_page('about') ? 'active' : '' }}"><a href="about" class="nav-link">About</a></li>
	          <li class="nav-item {{current_page('blog') ? 'active' : '' }}"><a href="blog" class="nav-link">Blog</a></li>
	          <li class="nav-item cta mr-md-2 mx-md-3 {{current_page('contact') ? 'active' : '' }}"><a href="contact" class="nav-link ">Contact Us</a></li>

	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    @yield('content')



<footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Find Us On</h2>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="https://www.instagram.com/fisheryindo/"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Info</h2>
              <ul class="list-unstyled">
                <li><a href="contact" class="py-2 d-block">How To Order</a></li>
                <li><a href="contact" class="py-2 d-block">Investor Relations</a></li>
                <li><a href="blog" class="py-2 d-block">Blog</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Registered In</h2>
               <div class="ftco-animate">
                <a href="https://kkp.go.id/" target="_blank"> <img src="images/perikanan.png"></a></div>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Contact Us</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">Jl. Rembang Km 1 Juwana, Ds. Bendar Rt.02/01, Pati 59185 - Jawa Tengah</span></li>
	                <li><a href=" https://wa.me/6285794749779"><span class="icon icon-phone"></span><span class="text">+62 85794-749-779</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@fishery.id</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">
            <p>
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Design by <a href="https://fishery.id" target="_blank">Fishery.id</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="{{ asset('js/jquery.min.js') }}"></script>
	  <script src="{{ asset('js/jquery-migrate-3.0.1.min.js') }}"></script>
	  <script src="{{ asset('js/popper.min.jss') }}"></script>
	  <script src="{{ asset('js/bootstrap.min.js') }}"></script>
	  <script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
	  <script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
	  <script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
	  <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
	  <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
	  <script src="{{ asset('js/aos.js') }}"></script>
	  <script src="{{ asset('js/jquery.animateNumber.min.js') }}"></script>
	  <script src="{{ asset('js/jquery.timepicker.min.js') }}"></script>
	  <script src="{{ asset('js/scrollax.min.js') }}"></script>
	  <script src="{{ asset('js/main.js') }}"></script>
  
  </body>
</html>