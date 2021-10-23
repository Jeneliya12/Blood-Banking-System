@include('header')
<div class="banner-slider" style="background-image: url(https://demosly.com/xicia/bloodbank/assets/uploads/banner_search.jpg)">
	<div class="bg"></div>
	<div class="bannder-table">
		<div class="banner-text">
			<h1>Search Result</h1>
		</div>
	</div>
</div>

<div class="slider-area">
	<div class="slider-item" style="background:#333;padding: 20px 0;">
		<div class="container">
			<div class="row">
				<div class="searchbox" style="margin-top:0;">
					
					<form action="donors/search" method="post">
					
						<div class="col-md-3 col-sm-6">
							<input autocomplete="off" type="text" name="country" class="form-control" placeholder="Country Name">
						</div>

						<div class="col-md-3 col-sm-6">
							<input autocomplete="off" type="text" name="city" class="form-control" placeholder="City Name">
						</div>

						<div class="col-md-3 col-sm-6">
							
							<select data-placeholder="Choose Blood Group" class="chosen-select form-control" name="blood">
																
								<option >A+</option>
																
								<option>A-</option>
																	
								<option>B+</option>
																	
								<option>B-</option>
																	
								<option>AB+</option>
													
								<option>AB-</option>
													
								<option>O+</option>
													
								<option>O-</option>
							</select>
						</div>
						
						<div class="col-md-3 col-sm-6">
							<input type="submit" value="Search Donor" name="form_search">
						</div>

					</form>

				</div>
			</div>
		</div>
	</div>
</div>

<div class="donner-page-area">
	<div class="container">
		<div class="row">
			
			<div class="col-md-12">
				<h3>All Results for &rarr; Blood Group: {{$donor['blood']}} </h3>			</div>

				<div class="parent">
					<div class="col-md-3 col-sm-4 col-xs-12 blood-list">
						<div class="donner-item">
							<div class="donner-list">
								<div class="donner-photo" style="background-image: url({{asset('uploads/donors/'. $donor['img'])}})"></div>
								<div class="donner-info">
									<h2><a href="https://demosly.com/xicia/bloodbank/donor/6">{{$donor['name']}}</a></h2>
									<h4>Blood Group: <span>{{$donor['blood']}}</span> </h4>
									<div class="donner-social">
										<ul>
											<li><a href="#"><i class="fa fa-facebook"></i></a></li><li><a href="#"><i class="fa fa-twitter"></i></a></li><li><a href="#"><i class="fa fa-linkedin"></i></a></li><li><a href="#"><i class="fa fa-pinterest"></i></a></li>										</ul>
									</div>
									<div class="donner-link">
										<a href="https://demosly.com/xicia/bloodbank/donor/6">Read more</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Load More button -->	
		</div>
	</div>
</div>
@include('footer')	
</body>

</html>