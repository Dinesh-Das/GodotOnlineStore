<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Godot Store Single Product</title>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" >
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="top-nav-bar">
		<div class="search-box">
				<i class="fa fa-bars" id="menu-btn" onClick="openmenu()"></i>
				<i class="fa fa-times" id="close-btn" onClick="closemenu()"></i>
				<a href="index.php"><img src="images/godot_logo.jpg" class="logo"></a>
				<input type="text" class="form-control">
				<span class="input-group-text"><i class="fa fa-search" aria-hidden="true"></i></span>
		</div>
		<div class="menu-bar">
			<ul>
				<li><a href="#"><i class="fa fa-shopping-basket" aria-hidden="true"></i> Cart</a></li>
				<li><a href="registrationform.php">Signup</a></li>
				<li><a href="loginform.php">Login</a></li>		
			</ul>
		</div>
	</div>
	<!-- Single product -->
<section class="single-product">
<div class="container">
	<div class="row">
	<div class="col-md-5">
	
	<div id="product-slider" class="carousel slide carousel-fade" data-ride="carousel">
  	<div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/pil1.jpg" height="450px" class="d-block"  >
    </div>
    <div class="carousel-item">
      <img src="images/pil2.jpg" height="450px" class="d-block " >
    </div>
    <div class="carousel-item">
      <img src="images/pil3.jpg" height="450px" class="d-block " >
    </div>
		  <a class="carousel-control-prev" href="#product-slider" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#product-slider" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  </div> 
</div>
		
	</div>
	<div class="col-md-7">
		<p class="new-arrival text-center">New</p>
			<h2>Pillow Covers</h2>
			<p>Procuct code :2134512451</p>
			<i class="fa fa-star"></i>	
			<i class="fa fa-star"></i>	
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>	
			<i class="fa fa-star-half"></i>	
		<p class="price">RS 300</p>
		<p><b>Availibility:</b> In Stock</p>
		<p><b>Condition:</b> New</p>
		<p><b>Brand:</b> Godot</p>
		<label>Quantity:</label>
		<input type="text" value="1">
		<button type="button" class="btn btn-primary">Add To Cart</button>
		</div>	
	</div>
</div>
</section>	
	<!-- ---------------------Product description-------- -->
	<section class="product-description">
	<div class="container">
	<h6>Product Description</h6>
	<p>Hi welcome to y2k fun show i am your host y2k... yaaay Did i really just forget the lyrics.;; na when a pot top show lalalala shshsssa</p>
	<p>If set to "hover", pauses the cycling of the carousel on mouseenter and resumes the cycling of the carousel on mouseleave. If set to false, hovering over the carousel won't pause it.

On touch-enabled devices, when set to "hover", cycling will pause on touchend (once the user finished interacting with the carousel) for two intervals, before automatically resuming. Note that this is in addition to the above mouse behavior.</p>
	<hr>
		</div>

<div class="container">
		<div class="title-box">
				<h2>Similar Products</h2>
		</div>
		<div class="row">
				<!-- product 1 -->
			<div class="col-md-3">
				<div class="product-top">
					<img src="images/pi1.jpg">
						<div class="overlay-right">
						<button type="button" class="btn btn-secondary" title="Quick Shop">
							<i class="fa fa-eye"></i>	
						</button>
						<button type="button" class="btn btn-secondary" title="Add to Wishlist">
						<i class="fa fa-heart-o"></i>	
						</button>
						<button type="button" class="btn btn-secondary" title="Add to Cart">
							<i class="fa fa-shopping-cart"></i>	
						</button>	
						</div>
				</div>
				<div class="product-bottom text-center">
						
						<i class="fa fa-star"></i>	
						<i class="fa fa-star"></i>	
						<i class="fa fa-star"></i>	
						<i class="fa fa-star"></i>	
						<i class="fa fa-star-half"></i>	
						<h3>Product Name</h3>
						<h5>Product Price</h5>
				</div>
			</div>
				<!-- product 2 -->
				<div class="col-md-3">
					<div class="product-top">
						<img src="images/pi1.jpg">
						<div class="overlay-right">
						<button type="button" class="btn btn-secondary" title="Quick Shop">
							<i class="fa fa-eye"></i>	
						</button>
						<button type="button" class="btn btn-secondary" title="Add to Wishlist">
						<i class="fa fa-heart-o"></i>	
						</button>
						<button type="button" class="btn btn-secondary" title="Add to Cart">
							<i class="fa fa-shopping-cart"></i>	
						</button>	
						</div>
					</div>
					<div class="product-bottom text-center">
						
						<i class="fa fa-star"></i>	
						<i class="fa fa-star"></i>	
						<i class="fa fa-star"></i>	
						<i class="fa fa-star"></i>	
						<i class="fa fa-star-half"></i>	
						<h3>Product Name</h3>
						<h5>Product Price</h5>
					</div>
				</div>
				<!-- product 3 -->
				<div class="col-md-3">
					<div class="product-top">
						<img src="images/pi1.jpg">
						<div class="overlay-right">
						<button type="button" class="btn btn-secondary" title="Quick Shop">
							<i class="fa fa-eye"></i>	
						</button>
						<button type="button" class="btn btn-secondary" title="Add to Wishlist">
						<i class="fa fa-heart-o"></i>	
						</button>
						<button type="button" class="btn btn-secondary" title="Add to Cart">
							<i class="fa fa-shopping-cart"></i>	
						</button>	
						</div>
					</div>
					<div class="product-bottom text-center">
						
						<i class="fa fa-star"></i>	
						<i class="fa fa-star"></i>	
						<i class="fa fa-star"></i>	
						<i class="fa fa-star"></i>	
						<i class="fa fa-star-half"></i>	
						<h3>Product Name</h3>
						<h5>Product Price</h5>
					</div>
				</div>
				<!-- product 4 -->
				<div class="col-md-3">
					<div class="product-top">
						<img src="images/pi1.jpg">
						<div class="overlay-right">
						<button type="button" class="btn btn-secondary" title="Quick Shop">
							<i class="fa fa-eye"></i>	
						</button>
						<button type="button" class="btn btn-secondary" title="Add to Wishlist">
						<i class="fa fa-heart-o"></i>	
						</button>
						<button type="button" class="btn btn-secondary" title="Add to Cart">
							<i class="fa fa-shopping-cart"></i>	
						</button>	
						</div>
					</div>
					<div class="product-bottom text-center">
						
						<i class="fa fa-star"></i>	
						<i class="fa fa-star"></i>	
						<i class="fa fa-star"></i>	
						<i class="fa fa-star"></i>	
						<i class="fa fa-star-half"></i>	
						<h3>Product Name</h3>
						<h5>Product Price</h5>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<!-- footer-->
	<section class="footer">
		<div class="container tex-center">
			<div class="row">
				<div class="col-md-3">
					<h1>Useful Links</h1>
					<p>Privacy Policy</p>
					<p>Terms of use</p>
					<p>Return Policy</p>
					<p>Discount Coupons </p>
				</div>
				<div class="col-md-3">
					<h1>Company</h1>
					<p><a href="aboutus.php">About Us</p></a>
					<p><a href="contact_form.php">Contact Us</a></p>
					<p>Career</p>
					<p>Affiliate </p>
				</div>
				<div class="col-md-3">
					<h1>Follow Us On</h1>
					<p><i class="fa fa-facebook-official"></i><a href="https://www.facebook.com/DevilGamerx1?ref=bookmarks">Facebook</p></a>
					<p><i class="fa fa-youtube-play"></i><a href="https://www.youtube.com/watch?v=8kZNH9-1suY"> Youtube</p></a>
					<p><i class="fa fa-twitter"></i><a href="https://twitter.com/devilgamerx"> Twitter</p></a>
					<p><i class="fa fa-instagram"></i><a href="https://www.instagram.com/dinesh._.das/">
						Instagram </p></a>
				</div>
				<div class="col-md-3 footer-image">
					<h1>Download App</h1>
					<img src="images/Icon Google play.png">
					<img src="images/appstore.png">
				</div>
			</div>
			<hr>
			<p class="copyright">Copyright &copy <a href="https://godot.in">Godot</a> Store. All Rights Reserved <i class="fa fa-heart-o"></i>.</p>
		</div>
	
	</section>
</body>
</html>