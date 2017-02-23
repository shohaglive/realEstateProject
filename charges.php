<?php include "header.php";

$where = array();
$packages = $control->getData("packages", $where);

?>

	<div class="w3ls-inner-banner">
		<div class="container">
			<h2>PHOTOS</h2>
			<label></label>
			<div class="clearfix"></div>
		</div>
	</div>
	<!-- //breadcrumbs -->
	
	<!-- main-content -->
	<div class="main-content">
	<!-- about-page -->
		<!-- welcome -->

		<!-- /welcome -->
		<!-- Stats -->

		<!-- //Stats -->

		<!-- OUR AGENTS -->
		<section class="team-w3ls">
			<div class="container">
				<div class="agileits-team text-center">
					<h3>VIEW Pricing</h3>
					<p>Here's our current pricing plan</p>
<center>
                    <?php
                    foreach($packages as $package)
                    {?>
							
					<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 w3-agent">
						<div class="hovereffect">

								<div class="overlay">
									<h4><?php echo $photo[1] ?></h4>
								<!--	<p>
										<a href="#" data-toggle="modal" data-target="#agent1">Contact me</a>
									</p>
									-->
								</div>
                            <center>
                                <h3> <?php echo $package[1];?></h3>

                                <table  cellspacing="100px" style="font-size: 28; font-weight: bold">
                                    <tr>
                                        <td>Amount</td>
                                        <td align="right"><?php echo $package[2]." Tk";?></td>
                                    </tr>
                                    <tr>
                                        <td>No of Installment</td>
                                        <td align="right"><?php echo $package[3];?></td>
                                    </tr>
                                    <tr>
                                        <td>Installment Amount</td>
                                        <td><?php echo sprintf("%.2f",$package[2]/$package[3])." Tk";?></td>
                                    </tr>
                                </table>

                            </center>

						</div>
					</div>					
						<?php
                        }
                        ?>

					<div class="clearfix"></div>
</center>
				</div>
			</div>
		</section>	
			<!-- modal-for agent1-details -->
				<div class="modal fade modal-about" id="agent1" tabindex="-1" role="dialog">
					<div class="modal-dialog" role="document">
						<div class="modal-content"> 
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<h4 class="modal-title">ABOUT ME</h4>
							</div>
							<div class="modal-body modal-spa">
								<div class="w3layouts-about"> 
									<div class="col-md-4 about-left ">
										<img src="images/agent-1.jpg" class="img-responsive" alt=""/>
									</div>
									<div class="col-md-8 about-right wthree">
										<h3>Hi, i'm <span>K. Thompson </span></h3>
										<h4>Certificated Agent </h4>
										<ul class="address">									
											<li>
												<ul class="agileits-address-text">
													<li><b>PHONE </b></li>
													<li>+00 111 222 3333</li>
												</ul>
											</li>
											<li>
												<ul class="agileits-address-text">
													<li><b>ADDRESS </b></li>
													<li>13 browne Street, San Francisco.</li>
												</ul>
											</li>
											<li>
												<ul class="agileits-address-text">
													<li><b>E-MAIL </b></li>
													<li><a href="mailto:example@mail.com"> mail@example.com</a></li>
												</ul>
											</li>
										</ul> 
									</div> 
									<div class="clearfix"> </div> 
								</div>
							</div> 
						</div>
					</div>
				</div>
			<!-- //modal-for agent1-details -->
			<!-- modal-for agent2-details -->
				<div class="modal fade modal-about" id="agent2" tabindex="-1" role="dialog">
					<div class="modal-dialog" role="document">
						<div class="modal-content"> 
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<h4 class="modal-title">ABOUT ME</h4>
							</div>
							<div class="modal-body modal-spa">
								<div class="w3layouts-about"> 
									<div class="col-md-4 about-left">
										<img src="images/agent-2.jpg" class="img-responsive" alt=""/>
									</div>
									<div class="col-md-8 about-right wthree">
										<h3>Hi, i'm <span>M. John Bean </span></h3>
										<h4>Certificated Agent </h4>
										<ul class="address">									
											<li>
												<ul class="agileits-address-text">
													<li><b>PHONE </b></li>
													<li>+(040) 987 65 4321</li>
												</ul>
											</li>
											<li>
												<ul class="agileits-address-text">
													<li><b>ADDRESS </b></li>
													<li>15th Black Door Apartment, San Francisco.</li>
												</ul>
											</li>
											<li>
												<ul class="agileits-address-text">
													<li><b>E-MAIL </b></li>
													<li><a href="mailto:example@mail.com"> mail@example.com</a></li>
												</ul>
											</li>
										</ul> 
									</div> 
									<div class="clearfix"> </div> 
								</div>
							</div> 
						</div>
					</div>
				</div>
			<!-- //modal-for agent2-details -->
			<!-- modal-for agent3-details -->
				<div class="modal fade modal-about" id="agent3" tabindex="-1" role="dialog">
					<div class="modal-dialog" role="document">
						<div class="modal-content"> 
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<h4 class="modal-title">ABOUT ME</h4>
							</div>
							<div class="modal-body modal-spa">
								<div class="w3layouts-about"> 
									<div class="col-md-4 about-left ">
										<img src="images/agent-3.jpg" class="img-responsive" alt=""/>
									</div>
									<div class="col-md-8 about-right wthree">
										<h3>Hi, i'm <span>K. Smith </span></h3>
										<h4>Certificated Agent </h4>
										<ul class="address">									
											<li>
												<ul class="agileits-address-text">
													<li><b>PHONE </b></li>
													<li>+00 111 222 3333</li>
												</ul>
											</li>
											<li>
												<ul class="agileits-address-text">
													<li><b>ADDRESS </b></li>
													<li>13 browne Street, San Francisco.</li>
												</ul>
											</li>
											<li>
												<ul class="agileits-address-text">
													<li><b>E-MAIL </b></li>
													<li><a href="mailto:example@mail.com"> mail@example.com</a></li>
												</ul>
											</li>
										</ul> 
									</div> 
									<div class="clearfix"> </div> 
								</div>
							</div> 
						</div>
					</div>
				</div>
			<!-- //modal-for agent3-details -->
			<!-- modal-for agent4-details -->
				<div class="modal fade modal-about" id="agent4" tabindex="-1" role="dialog">
					<div class="modal-dialog" role="document">
						<div class="modal-content"> 
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<h4 class="modal-title">ABOUT ME</h4>
							</div>
							<div class="modal-body modal-spa">
								<div class="w3layouts-about"> 
									<div class="col-md-4 about-left ">
										<img src="images/agent-4.jpg" class="img-responsive" alt=""/>
									</div>
									<div class="col-md-8 about-right wthree">
										<h3>Hi, i'm <span>R. Micahel </span></h3>
										<h4>Certificated Agent </h4>
										<ul class="address">									
											<li>
												<ul class="agileits-address-text">
													<li><b>PHONE </b></li>
													<li>+(040) 987 65 4321</li>
												</ul>
											</li>
											<li>
												<ul class="agileits-address-text">
													<li><b>ADDRESS </b></li>
													<li>15th Black Door Apartment, San Francisco.</li>
												</ul>
											</li>
											<li>
												<ul class="agileits-address-text">
													<li><b>E-MAIL </b></li>
													<li><a href="mailto:example@mail.com"> mail@example.com</a></li>
												</ul>
											</li>
										</ul> 
									</div> 
									<div class="clearfix"> </div> 
								</div>
							</div> 
						</div>
					</div>
				</div>
			<!-- //modal-for agent4-details -->
			<!-- modal-for agent5-details -->
				<div class="modal fade modal-about" id="agent5" tabindex="-1" role="dialog">
					<div class="modal-dialog" role="document">
						<div class="modal-content"> 
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<h4 class="modal-title">ABOUT ME</h4>
							</div>
							<div class="modal-body modal-spa">
								<div class="w3layouts-about"> 
									<div class="col-md-4 about-left ">
										<img src="images/agent-5.jpg" class="img-responsive" alt=""/>
									</div>
									<div class="col-md-8 about-right wthree">
										<h3>Hi, i'm <span>Johnny Cage </span></h3>
										<h4>Certificated Agent </h4>
										<ul class="address">									
											<li>
												<ul class="agileits-address-text">
													<li><b>PHONE </b></li>
													<li>+00 111 222 3333</li>
												</ul>
											</li>
											<li>
												<ul class="agileits-address-text">
													<li><b>ADDRESS </b></li>
													<li>13 browne Street, San Francisco.</li>
												</ul>
											</li>
											<li>
												<ul class="agileits-address-text">
													<li><b>E-MAIL </b></li>
													<li><a href="mailto:example@mail.com"> mail@example.com</a></li>
												</ul>
											</li>
										</ul> 
									</div> 
									<div class="clearfix"> </div> 
								</div>
							</div> 
						</div>
					</div>
				</div>
			<!-- //modal-for agent5-details -->
			<!-- modal-for agent6-details -->
				<div class="modal fade modal-about" id="agent6" tabindex="-1" role="dialog">
					<div class="modal-dialog" role="document">
						<div class="modal-content"> 
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<h4 class="modal-title">ABOUT ME</h4>
							</div>
							<div class="modal-body modal-spa">
								<div class="w3layouts-about"> 
									<div class="col-md-4 about-left">
										<img src="images/agent-6.jpg" class="img-responsive" alt=""/>
									</div>
									<div class="col-md-8 about-right wthree">
										<h3>Hi, i'm <span>Thomson Doe </span></h3>
										<h4>Certificated Agent </h4>
										<ul class="address">									
											<li>
												<ul class="agileits-address-text">
													<li><b>PHONE </b></li>
													<li>+(040) 987 65 4321</li>
												</ul>
											</li>
											<li>
												<ul class="agileits-address-text">
													<li><b>ADDRESS </b></li>
													<li>15th Black Door Apartment, San Francisco.</li>
												</ul>
											</li>
											<li>
												<ul class="agileits-address-text">
													<li><b>E-MAIL </b></li>
													<li><a href="mailto:example@mail.com"> mail@example.com</a></li>
												</ul>
											</li>
										</ul> 
									</div> 
									<div class="clearfix"> </div> 
								</div>
							</div> 
						</div>
					</div>
				</div>
			<!-- //modal-for agent6-details -->
			<!-- modal-for agent7-details -->
				<div class="modal fade modal-about" id="agent7" tabindex="-1" role="dialog">
					<div class="modal-dialog" role="document">
						<div class="modal-content"> 
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<h4 class="modal-title">ABOUT ME</h4>
							</div>
							<div class="modal-body modal-spa">
								<div class="w3layouts-about"> 
									<div class="col-md-4 about-left ">
										<img src="images/agent-7.jpg" class="img-responsive" alt=""/>
									</div>
									<div class="col-md-8 about-right wthree">
										<h3>Hi, i'm <span>P. Edward Crisp </span></h3>
										<h4>Certificated Agent </h4>
										<ul class="address">									
											<li>
												<ul class="agileits-address-text">
													<li><b>PHONE </b></li>
													<li>+00 111 222 3333</li>
												</ul>
											</li>
											<li>
												<ul class="agileits-address-text">
													<li><b>ADDRESS </b></li>
													<li>13 browne Street, San Francisco.</li>
												</ul>
											</li>
											<li>
												<ul class="agileits-address-text">
													<li><b>E-MAIL </b></li>
													<li><a href="mailto:example@mail.com"> mail@example.com</a></li>
												</ul>
											</li>
										</ul> 
									</div> 
									<div class="clearfix"> </div> 
								</div>
							</div> 
						</div>
					</div>
				</div>
			<!-- //modal-for agent7-details -->
			<!-- modal-for agent8-details -->
				<div class="modal fade modal-about" id="agent8" tabindex="-1" role="dialog">
					<div class="modal-dialog" role="document">
						<div class="modal-content"> 
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<h4 class="modal-title">ABOUT ME</h4>
							</div>
							<div class="modal-body modal-spa">
								<div class="w3layouts-about"> 
									<div class="col-md-4 about-left ">
										<img src="images/agent-8.jpg" class="img-responsive" alt=""/>
									</div>
									<div class="col-md-8 about-right wthree">
										<h3>Hi, i'm <span>S. Smith Kevin</span></h3>
										<h4>Certificated Agent </h4>
										<ul class="address">									
											<li>
												<ul class="agileits-address-text">
													<li><b>PHONE </b></li>
													<li>+(040) 987 65 4321</li>
												</ul>
											</li>
											<li>
												<ul class="agileits-address-text">
													<li><b>ADDRESS </b></li>
													<li>15th Black Door Apartment, San Francisco.</li>
												</ul>
											</li>
											<li>
												<ul class="agileits-address-text">
													<li><b>E-MAIL </b></li>
													<li><a href="mailto:example@mail.com"> mail@example.com</a></li>
												</ul>
											</li>
										</ul> 
									</div> 
									<div class="clearfix"> </div> 
								</div>
							</div> 
						</div>
					</div>
				</div>
			<!-- //modal-for agent8-details -->
	<!-- //	OUR AGENTS -->
	<!-- //about-page -->
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