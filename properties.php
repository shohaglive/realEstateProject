<?php include "header.php";
$where = array();
$properties = $control->getData("properties", $where);
//print_r($properties);
?>
	<!-- //header -->
	<!-- breadcrumbs -->
	<div class="w3ls-inner-banner">
		<div class="container">
			<h2>Properties</h2>
			<label></label>
			<div class="clearfix"></div>
		</div>
	</div>
	<!-- //breadcrumbs -->
	
	<!-- main-content -->
	<div class="main-content">
		<!-- gallery -->
	<div class="gallery" id="gallery">
	<div class="container">
		<div class="gallery_gds">
			<ul class="simplefilter ">
                <li class="active" data-filter="all">All</li>
                <li data-filter="1">Commercial</li>
                <li data-filter="2">Residential</li>
                <li data-filter="3">Luxury</li>
            </ul>   
            <div class="filtr-container " style="padding: 0px; position: relative; height: 858px;">
				<?php
                foreach($properties as $property)
                {?>

                <div class="col-md-4 col-ms-6 jm-item first filtr-item" style="float: left" data-category="<?php echo $property[6] ?>" data-sort="Busy streets" style="opacity: 1; transform: scale(1) translate3d(0px, 0px, 0px); backface-visibility: hidden; perspective: 1000px; transform-style: preserve-3d; position: absolute; transition: all 0.5s ease-out 0ms;">
					<div class="jm-item-wrapper">
						<div class="jm-item-image">
							<img src="images/g1.jpg" alt="property" />
							<span class="jm-item-overlay"> </span>
							<div class="jm-item-button"><a href="property-details.php?pid=<?php echo $property[0]; ?>">View Details</a></div>
						</div>
						<div class="jm-item-title"><?php echo $property[5]." TK" ?></div>
						<a class="agile-its-property-title" href="property-details.html"><?php echo $property[1] ?></a>
						<p class="w3ls-p-text"><?php echo substr($property[4], 0, 80)."..."; ?></p>
					</div>
				</div>
                <?php
                } ?>
               <div class="clearfix"> </div>
            </div>
		</div>
	</div>	
	</div>
	<!--//gallery-->
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