
@include('header')
<!--Banner Start-->
<div class="banner-slider" style="background: none;">
	<div class="bg"></div>
	<div class="bannder-table">
		<div class="banner-text">
			<h1>News Details</h1>
		</div>
	</div>
</div>
<!--Banner End-->

<!--Single Blog Start-->
<div class="single-blog bg-area">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="single-blog-item">
					<div class="single-blog-photo">
						<img src="{{asset('uploads/donors/'. $news['img'])}}" alt="Lorem ipsum dolor sit amet">
					</div>
					<div class="single-blog-text">
						<h2>{{$news['title']}}</h2>
						<ul>
							<li>Category: <a>{{$news['category']}}</a></li>
							<li>Date: {{$news['date']}}</li>
						</ul>
						<div class="single-blog-pra">
							<p>
							{{$news['description']}}
							</p>
						</div>
						<h3>Share This</h3>
						<div class="sharethis-inline-share-buttons"></div>
					</div>

					<h3>Comments</h3>
					<!-- Facebook Comment Main Code (got from facebook website) -->
					<div class="fb-comments" data-href="https://demosly.com/xicia/bloodbank/news/lorem-ipsum-dolor-sit-amet" data-numposts="5"></div>
						
				</div>
			</div>
			<div class="col-md-4">
				<div class="single-sidebar">
										<div class="single-widget categories">
						<h3>Categories</h3>
	<ul>
						<li><a href="https://demosly.com/xicia/bloodbank/category/commercial">Commercial</a></li>
							<li><a href="https://demosly.com/xicia/bloodbank/category/economy">Economy</a></li>
							<li><a href="https://demosly.com/xicia/bloodbank/category/residential">Residential</a></li>
							<li><a href="https://demosly.com/xicia/bloodbank/category/tools-and-equipment">Tools and Equipment</a></li>
					</ul>
	</div>

					<div class="single-widget categories">
						<h3>Share This</h3>
						<div class="sharethis-inline-share-buttons"></div>
					</div>

					<h3>Comments</h3>
										<!-- Facebook Comment Main Code (got from facebook website) -->
					<div class="fb-comments" data-href="https://demosly.com/xicia/bloodbank/news/vix-tale-noluisse-voluptua-ad-ne" data-numposts="5"></div>
						
				</div>
			</div>
			<div class="col-md-4">
				<div class="single-sidebar">
										<div class="single-widget categories">
						<h3>Categories</h3>
						<ul>
															<li><a href="https://demosly.com/xicia/bloodbank/category/commercial">Commercial</a></li>
																<li><a href="https://demosly.com/xicia/bloodbank/category/economy">Economy</a></li>
																<li><a href="https://demosly.com/xicia/bloodbank/category/residential">Residential</a></li>
																<li><a href="https://demosly.com/xicia/bloodbank/category/tools-and-equipment">Tools and Equipment</a></li>
														</ul>
					</div>

					<div class="single-widget categories">
						<h3>Recent Posts</h3>
						<ul>
															<li><a href="https://demosly.com/xicia/bloodbank/news/lorem-ipsum-dolor-sit-amet">Lorem ipsum dolor sit amet</a></li>
																<li><a href="https://demosly.com/xicia/bloodbank/news/an-labores-explicari-qui-eu">An labores explicari qui eu</a></li>
																<li><a href="https://demosly.com/xicia/bloodbank/news/nostrum-copiosae-argumentum-has">Nostrum copiosae argumentum has</a></li>
																<li><a href="https://demosly.com/xicia/bloodbank/news/liber-utroque-vim-an-ne-his-brute">Liber utroque vim an ne his brute</a></li>
														</ul>
					</div>

					<div class="single-widget categories">
						<h3>Popular Posts</h3>
						<ul>
															<li><a href="https://demosly.com/xicia/bloodbank/news/tollit-cetero-cu-usu-etiam-evertitur">Tollit cetero cu usu etiam evertitur</a></li>
																<li><a href="https://demosly.com/xicia/bloodbank/news/lorem-ipsum-dolor-sit-amet">Lorem ipsum dolor sit amet</a></li>
																<li><a href="https://demosly.com/xicia/bloodbank/news/cu-vel-choro-exerci-pri-et-oratio-iisque">Cu vel choro exerci pri et oratio iisque</a></li>
																<li><a href="https://demosly.com/xicia/bloodbank/news/liber-utroque-vim-an-ne-his-brute">Liber utroque vim an ne his brute</a></li>
														</ul>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>
	<!--Newsletters Start-->
	<div class="newsletter-area">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="newsletter-headline">
						<h2>Newsletter</h2>
												<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid fugit expedita, iure ullam cum vero ex sint aperiam maxime.						</p>
											</div>
					<div class="newsletter-submit">
												<form action="" method="post">
							<input type="text" placeholder="Enter Your Email" name="email_subscribe">
							<input type="submit" value="Submit" name="form_subscribe">
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--Newsletters End-->

	<!--Footer-Area Start-->
	<div class="footer-area">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-sm-3">
					<div class="footer-item footer-service">
						<h2>Latest News</h2>
						<ul class="fmain">
															<li><a href="https://demosly.com/xicia/bloodbank/news/lorem-ipsum-dolor-sit-amet">Lorem ipsum dolor sit amet</a></li>
																<li><a href="https://demosly.com/xicia/bloodbank/news/an-labores-explicari-qui-eu">An labores explicari qui eu</a></li>
																<li><a href="https://demosly.com/xicia/bloodbank/news/nostrum-copiosae-argumentum-has">Nostrum copiosae argumentum has</a></li>
														</ul>
					</div>
				</div>
				<div class="col-md-3 col-sm-3">
					<div class="footer-item footer-service">
						<h2>Popular News</h2>
						<ul class="fmain">
															<li><a href="https://demosly.com/xicia/bloodbank/news/tollit-cetero-cu-usu-etiam-evertitur">Tollit cetero cu usu etiam evertitur</a></li>
																<li><a href="https://demosly.com/xicia/bloodbank/news/lorem-ipsum-dolor-sit-amet">Lorem ipsum dolor sit amet</a></li>
																<li><a href="https://demosly.com/xicia/bloodbank/news/cu-vel-choro-exerci-pri-et-oratio-iisque">Cu vel choro exerci pri et oratio iisque</a></li>
														</ul>
					</div>
				</div>
				<div class="col-md-3 col-sm-3">
					<div class="footer-item footer-service">
						<h2>Contact</h2>
						<ul>
							<li>Address: ABC Steet, NewYork.</li>
							<li>Email: info@yourwebsite.com</li>
							<li>Phone: 123-456-7878</li>
							<li>Fax: 123-456-7890</li>
						</ul>
					</div>
				</div>
				<div class="col-md-3 col-sm-3">
					<div class="footer-item footer-service">
						<h2>Social Media</h2>
						<div class="footer-social-link">
							<ul>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li><li><a href="#"><i class="fa fa-twitter"></i></a></li><li><a href="#"><i class="fa fa-linkedin"></i></a></li><li><a href="#"><i class="fa fa-google-plus"></i></a></li><li><a href="#"><i class="fa fa-pinterest"></i></a></li>							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="copyright">
					<p>Copyright © 2017. All Rights Reserved.</p>
				</div>
			</div>
		</div>
	</div>

	<!--Footer-Area End-->


	<!--Scroll-Top-->
	<div class="scroll-top">
		<div class="scroll"></div>
	</div>
	<!--Scroll-Top-->


	

	<!--Js-->
	<script src="https://demosly.com/xicia/bloodbank/js/jquery-2.2.4.min.js"></script>
	<script src="https://demosly.com/xicia/bloodbank/js/jquery-ui.js"></script>
	<script src="https://demosly.com/xicia/bloodbank/js/bootstrap.min.js"></script>
	<script src="https://demosly.com/xicia/bloodbank/js/chosen.jquery.js"></script>
	<script src="https://demosly.com/xicia/bloodbank/js/docsupport/init.js"></script>
	<script src="https://demosly.com/xicia/bloodbank/js/lightbox.min.js"></script>
	<script src="https://demosly.com/xicia/bloodbank/js/jquery.dataTables.min.js"></script>
	<script src="https://demosly.com/xicia/bloodbank/js/owl.carousel.min.js"></script>
	<script src="https://demosly.com/xicia/bloodbank/js/jquery.slicknav.min.js"></script>
	<script src="https://demosly.com/xicia/bloodbank/js/jquery.filterizr.min.js"></script>
	<script src="https://demosly.com/xicia/bloodbank/js/jquery.collapse.js"></script>
	<script src="https://demosly.com/xicia/bloodbank/js/custom.js"></script>

	<script>
		function confirmDelete()
		{
		    return confirm("Do you sure want to delete this data?");
		}

	</script>


	
</body>

</html>