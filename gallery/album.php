<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title>Jims Paradise Creations | Home</title>
	<link rel="stylesheet" href="/assets/css/master.css">
	<link rel="stylesheet" href="/assets/css/lightslider.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="/assets/js/jquery.numeric.min.js"></script>
	<script src="/assets/js/lightslider.js"></script>
	<script src="/assets/js/main.js"></script>
	<script src="//use.typekit.net/ndx1ovc.js"></script>
	<script>try{Typekit.load();}catch(e){}</script>
	<script type="text/javascript">
		$(document).ready(function() {
			$("#lightSlider").lightSlider({
				item: 4,
				slideMove: 4,
				pager: false,
				enableDrag: false
			}); 
		});
	</script>
</head>
<body>
	<header>
		<div class="container-fluid header">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3 col-sm-offset-3">
						<img src="/assets/images/logo.png" alt="" class="center-block img-responsive xs-padding-top">
					</div>
					<div class="col-md-3 col-sm-3 col-xs-12">
						<p class="phone-number">
							(602) 501-8857<br/>
							<a class="btn btn-default contact-btn" id="contact-us-btn" href="#contact-us" role="button">Contact us!</a>
						</p>

					</div>
				</div>
			</div>
		</div>
		<div class="container navigation">
			<div class="row">
				<div class="col-md-12">
					<nav class="mainNav">
						<ul class="hidden-sm hidden-xs desktop-nav">
							<a href="/">
								<li>Home</li>
							</a>
							<a href="/gallery/">
								<li>Photo Gallery</li>
							</a>
						</ul>
						<div class="mobile-hamburger visible-xs visible-sm">
							<span></span>
						</div>
						<ul class="mobile-nav unstyled">
							<a href="/">
								<li>Home</li>
							</a>
							<a href="/gallery/">
								<li>Photo Gallery</li>
							</a>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</header>
	<div class="container content-section">
		<section class="row gallery album">
			<div class="col-md-12">
				<h2 class="cursive">Photo Gallery</h2>
				<p class="bread-crumbs">Albums &gt; Album Title</p>
				<div class="gallery-container center-block">
					<div class="large-img-view">
						<img src="http://placehold.it/612x408?text=hello1" alt="" class="center-block img-responsive main-image">
						<div class="img-num" id="imgcounter"></div>
					</div>
					<div class="image-thumbs">
						<ul class="unstyled thumbs" id="lightSlider">
							<li class="thumb active"><img src="http://placehold.it/240x180?text=hello1" data-ogImg="http://placehold.it/612x408?text=hello1" alt="" class="img-responsive"></li>
							<li class="thumb"><img src="http://placehold.it/240x180?text=hello2" data-ogImg="http://placehold.it/612x408?text=hello2" alt="" class="img-responsive"></li>
							<li class="thumb"><img src="http://placehold.it/240x180?text=hello3" data-ogImg="http://placehold.it/612x408?text=hello3" alt="" class="img-responsive"></li>
							<li class="thumb"><img src="http://placehold.it/240x180?text=hello4" data-ogImg="http://placehold.it/612x408?text=hello4" alt="" class="img-responsive"></li>
							<li class="thumb"><img src="http://placehold.it/240x180?text=hello5" data-ogImg="http://placehold.it/612x408?text=hello5" alt="" class="img-responsive"></li>
							<li class="thumb"><img src="http://placehold.it/240x180?text=hello6" data-ogImg="http://placehold.it/612x408?text=hello6" alt="" class="img-responsive"></li>
							<li class="thumb"><img src="http://placehold.it/240x180?text=hello7" data-ogImg="http://placehold.it/612x408?text=hello7" alt="" class="img-responsive"></li>
							<li class="thumb"><img src="http://placehold.it/240x180?text=hello8" data-ogImg="http://placehold.it/612x408?text=hello8" alt="" class="img-responsive"></li>
							<li class="thumb"><img src="http://placehold.it/240x180?text=hello9" data-ogImg="http://placehold.it/612x408?text=hello9" alt="" class="img-responsive"></li>
							<li class="thumb"><img src="http://placehold.it/240x180?text=hello10" data-ogImg="http://placehold.it/612x408?text=hello10" alt="" class="img-responsive"></li>
						</ul>
					</div>
				</div>

			</div>
		</section>

		<section class="row content" id="contact-us">
			<div class="col-md-6 col-sm-12 col-xs-12 story">
				<h2 class="cursive center-text">Our Story</h2>
				<img src="/assets/images/jim.jpg" alt="" class="center-block img-responsive img-rounded our-story-img">
				<p>With over 30 years of experience, Jim started out building and designing his own tropical front and back yards complete with ponds and waterfalls. Realizing that this is what he loved, he started a business and has been turning yards into paradise for others ever since!</p>
			</div>
			<div class="col-md-6 col-sm-12 col-xs-12 contact">
				<h2 class="cursive center-text">Contact Us</h2>
				<form>
					<div class="form-group">
						<input type="text" class="form-control" id="name" name="fullName" placeholder="First and Last Name">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="phoneNumber" placeholder="Phone Number">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="city" placeholder="City">
					</div>
					<div class="form-group">
						<textarea class="form-control" rows="5" placeholder="Your message..."></textarea>
					</div>
					
					<button type="submit" class="btn btn-default contact-btn">Send</button>
				</form>
			</div>
		</section>
		<section class="row footer">
			<div class="col-md-8 col-md-offset-2 col-sm-12 col-xs-12">
				<img src="/assets/images/payment.png" class="center-block img-responsive" alt="">
				<hr/>
				<ul>
					<a href="http://my.angieslist.com/angieslist/myangie/CheckTheList/SPInformation.aspx?H0%2bSMgLjeJ%2fl%2f4c3KWzDtHCsdlDyPgTItVjWUL6uL2qPdEsSgYx5ZHfr20W7wkdX" target="_blank"><li class="angies-list"></li></a>
					<a href="http://www.yelp.com/biz/jims-paradise-creations-landscaping-glendale" target="_blank"><li class="yelp"></li></a>
					<a href="https://www.facebook.com/pages/Jims-Paradise-Creations-Landscaping/295381250593622" target="_blank"><li class="facebook"></li></a>
					<a href="https://plus.google.com/u/1/b/111305442307250769007/111305442307250769007/about" target="_blank"><li class="google"></li></a>
				</ul>
			</div>
			<div class="col-md-2 col-sm-12 col-xs-12">
				<img src="/assets/images/logo.png" alt="" class="center-block img-responsive xs-padding-top">
			</div>
		</section>
	</div>
</body>
</html>