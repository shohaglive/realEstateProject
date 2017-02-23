<?php include "header.php";
if(isset($_GET['pid'])) $pro_id = $_GET['pid']; else header("Location: index.php");

$where = array(
    "id" => $pro_id
);
$property = $control->getData("properties", $where);
$property = $property[0];
?>

<!-- breadcrumbs -->
	<div class="w3ls-inner-banner">
		<div class="container">
			<h2>Property Details</h2>
			<label></label>
			<div class="clearfix"></div>
		</div>
	</div>
	<!-- //breadcrumbs -->
	
	<!-- main-content -->
	<div class="main-content">
		<!-- property-details -->
		<div class="agileits-property-details">
			<div class="container">
						<div class="col-md-6 w3ls-property-images">
							<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
								<!-- Indicators -->
								<ol class="carousel-indicators">
									<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
									<li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
									<li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
								</ol>

								<!-- Wrapper for slides -->
								<div class="carousel-inner">
									<div class="item active">
										<img class="img-responsive" src="images/view-1.jpg" alt="" />
									</div>
									<div class="item">
										<img class="img-responsive" src="images/view-2.jpg" alt="" />
									</div>
									<div class="item">
										<img class="img-responsive" src="images/view-3.jpg" alt="" />
									</div>
								</div>

								<!-- Controls -->
								<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
									<span class="glyphicon glyphicon-chevron-left"></span>
								</a>
								<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
									<span class="glyphicon glyphicon-chevron-right"></span>
								</a>
							</div>
						</div>
						<div class="col-md-6 ins-details">
							<div class="ins-name">
								<h3><?php echo $property[1]; ?></h3>
								<h6><?php echo $property[5]." Tk"; ?></h6>
								<p><?php echo $property[4]; ?></p>
								
							</div>
							<div class="span span1">
								<p class="left">Number of bedrooms</p>
								<p class="right">: 3</p>
								<div class="clearfix"></div>
							</div>
							<div class="span span2">
								<p class="left">Number of bathrooms/ensuites</p>
								<p class="right">: 5</p>
								<div class="clearfix"></div>
							</div>
							<div class="span span1">
								<p class="left">Parking</p>
								<p class="right">: Available</p>
								<div class="clearfix"></div>
							</div>
							<div class="span span4">
								<p class="left">Size of garden/outside space</p>
								<p class="right">: <?php echo $property[3]; ?></p>
								<div class="clearfix"></div>
							</div>
						</div>
						<div class="clearfix"></div>			
			</div>
		</div>
		<!-- property-details -->
		<!-- related-properties -->
		<div class="wthree-related-properties text-center">
			<div class="container">
				<h3 class="w3l-heading">Related Properties</h3>
				<div class="col-md-3 w3-related-property">
					<a href="#"><figure><img class="img-responsive" src="images/related-property-img1.jpg" alt="" /></figure></a>
					<a href="#">Property Details</a>
				</div>
				<div class="col-md-3 w3-related-property">
					<a href="#"><figure><img class="img-responsive" src="images/related-property-img2.jpg" alt="" /></figure></a>
					<a href="#">Property Details</a>
				</div>
				<div class="col-md-3 w3-related-property">
					<a href="#"><figure><img class="img-responsive" src="images/related-property-img3.jpg" alt="" /></figure></a>
					<a href="#">Property Details</a>
				</div>
				<div class="col-md-3 w3-related-property">
					<a href="#"><figure><img class="img-responsive" src="images/related-property-img4.jpg" alt="" /></figure></a>
					<a href="#">Property Details</a>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<!-- //related-properties -->
	</div>
<!-- //main-content -->
	<!-- footer -->
	<footer>	
		<!-- footer-top -->
		<div class="footer-top">
			<div class="container">
				<div class="col-md-6 footer-top-left">
					<h3><a href="index.html">ESTATE GROUP</a></h3>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.</p>
					<ul class="fb_icons2">
						<li><a class="fb" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a class="twit" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a class="goog" href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
						<li><a class="pin" href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
						<li><a class="drib" href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
					</ul>
				</div>
				<div class="col-md-3 footer-top-mid">
					<h3>Our Company</h3>
					<ul>
						<li><a href="index.html"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Home</a></li>
						<li><a href="about.html"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>About</a></li>
						<li><a href="properties.html"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Properties</a></li>
						<li><a href="blog.html"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Blog</a></li>
						<li><a href="contact.html"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Contact</a></li>
					</ul>
				</div>
				<div class="col-md-3 adress-agile">
					<h3>Address</h3>
					<address>
						<ul>
							<li>Parma Via Modena</li>
							<li>40019 Sant'Agata Bolognese</li>
							<li>BO, Italy</li>
							<li>Telephone : +1 (548) 123-456 7</li>
							<li>Email : <a class="mail" href="mailto:mail@example.com">info(at)estategroup.com</a></li>
						</ul>
					</address>				
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<!-- //footer-top -->
		<div class="w3layouts-copyright">
			<p class="footer">&copy; 2016 Estate Group. All Rights Reserved | Design by <a href="http://w3layouts.com/"> W3layouts</a></p>
		</div>
	</footer>
	<!-- //footer -->
</body>
</html>