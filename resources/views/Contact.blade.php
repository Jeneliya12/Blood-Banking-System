@include('header')
<!--Banner Start-->
<div class="banner-slider" style="background-image: url(save1.jpg)">
	<div class="bg"></div>
	<div class="bannder-table">
		<div class="banner-text">
			<h1>Contact Us</h1>
		</div>
	</div>
</div>
<!--Banner End-->

<div class="contact-area bg-area">
	<div class="container">
		<div class="row">
			<div class="col-md-3 col-sm-6">
				<div class="contact-item">
					<div class="contact-text">
						<i class="fa fa-map-marker"></i>
						<h3>Address</h3>
						<p>Pulchowk, Lalitpur.</p>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="contact-item">
					<div class="contact-text">
						<i class="fa fa-phone"></i>
						<h3>Email</h3>
						<p>bloodbank@yourwebsite.com</p>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="contact-item">
					<div class="contact-text">
						<i class="fa fa-envelope-o"></i>
						<h3>Phone</h3>
						<p>123-456-7878</p>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="contact-item">
					<div class="contact-text">
						<i class="fa fa-fax"></i>
						<h3>Fax</h3>
						<p>123-456-7890</p>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="contact-form">
				  	@if (count($errors) > 0)
					<div class="alert alert-danger">
						<button type="button" class="close" data-dismiss="alert">×</button>
						<ul>
						    @foreach ($errors->all() as $error)
						    	<li>{{ $error }}</li>
						    @endforeach
					    </ul>
					</div>
					@endif
					@if ($message = Session::get('success'))
				   <div class="alert alert-success alert-block">
				    <button type="button" class="close" data-dismiss="alert">×</button>
				           <strong>{{ $message }}</strong>
				   </div>
				  @endif
					<form action="{{url('/contact/send')}}" method="post">
						  @csrf
						<div class="form-row">

							<div class="form-group">
								<label for="">Full Name</label>
								<input type="text" class="form-control" name="name" placeholder="Full Name">
							</div>

							<div class="form-group">
								<label for="">Phone Number</label>
								<input type="text" class="form-control" name="number" placeholder="Phone Number">
							</div>

							<div class="form-group">
								<label for="">Email</label>
								<input type="text" class="form-control" name="email" placeholder="Email">
							</div>


							<div class="form-group">
								<label for="">Message</label>
								<textarea class="form-control" name="message"></textarea>
							</div>

							<button type="submit" class="btn btn-primary" name="form_contact">Submit</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="map-area">
				</div>
			</div>
		</div>
	</div>
</div>
 <script>
    @if (session('status'))
      // alert('{{session('status')}}');
      swal({
          title: '{{session('status')}}',
          // text: "You clicked the button!",
          icon: '{{session('statuscode')}}',
          button: "OK",
          });
    @endif
  </script>
















	
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
	<!--Scroll-Top--

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