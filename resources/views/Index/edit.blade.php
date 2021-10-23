@include('header')
<div class="banner-slider" style="background-image: url(a.jpg);">
	<div class="bg"></div>
	<div class="bannder-table">
		<div class="banner-text">
			<h1>Donor Detail</h1>
		</div>
	</div>
</div>

<div class="donner-profile">
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-sm-4">
				<div class="donner-leftbar">
					<div class="donner-profile-item">
						<div class="donner-image" style="background-image: url(ashu.jpg)"></div>
						<div class="donner-leftbar-info">
							<h2>Aayushka Gurung</h2>
							<h4>Blood Group: <span>B+</span> </h4>
							<div class="donner-leftbar-social">
								<ul>
									<li><a href="#"><i class="fa fa-facebook"></i></a></li><li><a href="#"><i class="fa fa-twitter"></i></a></li><li><a href="#"><i class="fa fa-linkedin"></i></a></li><li><a href="#"><i class="fa fa-pinterest"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="donner-contact-form">
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
					<h3>Message to Donor</h3>
					<form method="post" action="{{url('try/send')}}">
					    {{ csrf_field() }}
					    <div class="form-group">
					     <label>Full Name</label>
					     <input type="text" name="name" class="form-control" value="" />
					    </div>
					    <div class="form-group">
					      <label>Phone Number</label>
					     <input type="number" name="number" class="form-control" value="" />
					    </div>  
					    <div class="form-group">
					     <label>Email Address</label>
					     <input type="text" name="email" class="form-control" value="" />
					    </div>
					    <div class="form-group">
					      <label>Address</label>
					     <input type="text" name="address" class="form-control" value="" />
					    </div>
					    <div class="form-group">
					     <label>Message</label>
					     <textarea name="message" class="form-control"></textarea>
					    </div>
					    <div class="form-group">
					     <button type="submit" class="btn btn-primary" name="form1">Submit</button> </div>
					   </form>	
					</div>
				</div>
			</div>
			<div class="col-md-8 col-sm-8">
				<div class="donner-description">
					<div class="donner-description-list">
						<h3>Donor Details</h3>
						<table class="table table-bordered">
							<tr>
								<td style="width:200px"><span>Profession: </span></td>
								<td>Doctor</td>
							</tr>
							<tr>
								<td>Education: </td>
								<td>Bachelor of Medicine and Bachelor of Surgery</td>
							</tr>
							<tr>
								<td>Gender: </td>
								<td>Female</td>
							</tr>
							<tr>
								<td>Date of Birth: </td>
								<td>1993-12-23</td>
							</tr>
							<tr>
								<td>Age: </td>
								<td>
									27								</td>
							</tr>
							<tr>
								<td>Religion: </td>
								<td>Christian</td>
							</tr>
							<tr>
								<td>Email: </td>
								<td>aashugrg@gmail.com</td>
							</tr>
							<tr>
								<td>Phone: </td>
								<td>9999999</td>
							</tr>
							<tr>
								<td>Address: </td>
								<td>Bhaktapur</td>
							</tr>
							<tr>
								<td>Country: </td>
								<td>Nepal</td>
							</tr>
							<tr>
								<td>Map: </td>
								<td>
									<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28266.318856583548!2d85.40695700346649!3d27.677434854685718!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb1aae42806ba1%3A0x5449e079404e5e82!2sBhaktapur!5e0!3m2!1sen!2snp!4v1589021765684!5m2!1sen!2snp" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen></iframe>
								</td>
							</tr>
						</table>
						<h3>Description</h3>
						<p class="description">
							Ex vix alienum sadipscing, quod melius philosophia id has. Ad qui quem reprimique, quo possit detracto reprimique no, sint reque officiis ei per. Ea regione commune volutpat pro, fabulas facilis omnesque mei ne. Cu unum detracto comprehensam sea, ad vim ancillae principes, ex usu fugit consulatu. Vis te purto equidem voluptatum.<br />
						</p>

						<h3 style="margin-top:30px;">Employer Details (Who Added This Donor)</h3>
						<table class="table table-bordered">
							<tr>
								<td style="width:200px">Employer Name: </td>
								<td>Sowyesh Khadka</td>
							</tr>
							<tr>
								<td>Designation: </td>
								<td>Telemarketer</td>
							</tr>
							<tr>
								<td>Organization: </td>
								<td>Linens And Things</td>
							</tr>
							<tr>
								<td>Email Address: </td>
								<td>sowyeshkhadka@gmail.com</td>
							</tr>
							<tr>
								<td>Phone Number: </td>
								<td>207-843-8306</td>
							</tr>
							<tr>
								<td>More about this agent: </td>
								<td>
									<a href="">Click Here</a>
								</td>
							</tr>
						</table>
					</div>
					
				</div>
			</div>
		</div>
	</div>
</div>
@include('footer')
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
	
</body>

</html>