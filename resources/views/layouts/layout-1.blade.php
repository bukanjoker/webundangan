<!DOCTYPE HTML>
<html>
	<head>
		<title>@yield('title')</title>

		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->

		<style type="text/css">
			/*css here*/
		</style>

	</head>
	<body>

		<!-- contents here -->
		<!-- Header -->
		<section id="header" class="main">
			<header class="major">
				@yield('header')
			</header>
			<div class="container" style="background: transparent; box-shadow: inset 0 0px 0 0 #dddddd">
				<ul class="actions">
					<li><a href="#one" class="button special scrolly">Invitation</a></li>
				</ul>
			</div>
			<!-- <a href="#one" class="goto-next scrolly">Next</a> -->
		</section>
		<!-- love-story -->
		<section id="one" class="main special">
			<div class="container">
				<span class="image fit primary"><img src="images/pic01.jpg" alt="" /></span>
				<div class="content">
					<header class="major">
						<h2>Love Story</h2>
					</header>
					@yield('love-story')
				</div>
				<a href="#two" class="goto-next scrolly">Next</a>
			</div>
		</section>
		<!-- resepsi -->
		<section id="two" class="main special">
			<div class="container">
				<span class="image fit primary"><img src="images/pic02.jpg" alt="" /></span>
				<div class="content">
					<header class="major">
						<h2>Resepsi</h2>
					</header>
					@yield('resepsi')
				</div>
				<a href="#three" class="goto-next scrolly">Next</a>
			</div>
		</section>
		<section id="three" class="main special">
			<div class="container">
				<div class="content">
					<header class="major">
						<h2>Map</h2>
					</header>
					@yield('map')
					<div id="google-map" class="gmap"></div>	
				</div>
				<a href="#four" class="goto-next scrolly">Next</a>
			</div>
		</section>
		<section id="four" class="main special">
			<div class="container">
				<div class="content">
					<header class="major">
						<h2>Buku Tamu</h2>
					</header>
					@yield('buku-tamu')
					<form method="post" action="#">
						<div class="row uniform">
							<div class="6u 12u$(xsmall)"><input type="text" name="name" id="name" placeholder="Name" /></div>
							<div class="6u$ 12u$(xsmall)"><input type="email" name="email" id="email" placeholder="Email" /></div>
							<div class="12u$"><textarea name="message" id="message" placeholder="Message" rows="4"></textarea></div>
							<div class="12u$">
								<ul class="actions">
									<li><input type="submit" value="Send Message" class="special" /></li>
								</ul>
							</div>
						</div>
					</form>
				</div>
			</div>
		</section>
		
		<!-- @yield('addition') -->

		@include('layouts.footer')

		<!-- Scripts here -->
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/jquery.scrollex.min.js"></script>
		<script src="assets/js/jquery.scrolly.min.js"></script>
		<script src="assets/js/skel.min.js"></script>
		<script src="assets/js/util.js"></script>
		<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
		<script src="assets/js/main.js"></script>

		<script type="text/javascript">
		      function initMap() { 
		        var envita = new google.maps.LatLng(-5.117278000000001, 105.30699470000002);
		        var map = new google.maps.Map(document.getElementById('google-map'), {
		          zoom: 16,
		          center: envita,
		        oomControl: true,
		        navigationControl: true,
		        scrollwheel: false,
		        styles: [
		          {
		          "featureType":"all",
		          "elementType":"all",
		            "stylers":[
		              { "saturation":"-70" }
		            ]
		        }]
		        });
		        var marker = new google.maps.Marker({
		          position: envita,
		          map: map,
		          icon: "http://envita.net/wp-content/themes/invitus%20gongkow/temp-undangan/great-day/images/map_pin.png"
		        });
		      }
		  </script>
		  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC6J5-_NS1XuofKOPArJFF6bna9TWv8M48&callback=initMap" async defer></script>

	</body>
</html>