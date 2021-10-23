<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <script src="https://kit.fontawesome.com/6516079e62.js" crossorigin="anonymous"></script>

    <style>
 
	.form-group{
		margin-left:50px;
		margin-right:50px;
	}
	.container{
		background:white; 
	
	}
	h1{
		color:red;
		font-style:italic;
	}	
    </style>
</head>
<body>
	<div class="container">
		<h1>Create Donors</h1>
		<form class="form-group" method= "POST" action="/donors">
		{{csrf_field()}}
		<div class="row">	
				<div class="col-xl-3 col-md-6 col-sm-6">	
				    <label>Name*</label>
				    <input type="text"  name="name" class="form-control">
				    @if($errors->first('name'))
						<div  style="color:red">
						{{$errors->first('name')}}
						</div>
					@endif

					<label>Email*</label>
				    <input type="text"  name="email" class="form-control">
				     @if($errors->first('email'))
						<div style="color:red">
							{{$errors->first('email')}}
						</div>
					@endif

				    <label>Phone Number*</label>
				    <input type="number"  name="number" class="form-control">
				     @if($errors->first('number'))
						<div style="color:red">
						{{$errors->first('number')}}
						</div>
					@endif

			     	<label>Donor Photo*</label>
					<fieldset>
		        	<input type="file" name="img" style="padding-bottom:10px;">
		        	 @if($errors->first('img'))
					<div style="color:red">
					{{$errors->first('img')}}
					</div>
					@endif
			    	</fieldset>
			    </div>

			    <div class="col-xl-3 col-md-6 col-sm-6">
			    	<label>Full Address*</label>
				    <input type="text"  name="address" class="form-control">
				     @if($errors->first('address'))
						<div style="color:red">
						{{$errors->first('address')}}
						</div>
					@endif

					<label>Country*</label>
				    <input type="text"  name="country" class="form-control">
				     @if($errors->first('country'))
						<div style="color:red">
						{{$errors->first('country')}}
						</div>
					@endif

					<label>City*</label>
				    <input type="text"  name="city" class="form-control">
				     @if($errors->first('city'))
						<div style="color:red">
						{{$errors->first('city')}}
						</div>
					@endif


					<label>Profession*</label>
				    <input type="text"  name="profession" class="form-control">
				     @if($errors->first('profession'))
						<div style="color:red">
							{{$errors->first('profession')}}
						</div>
					@endif
				</div>

				<div class="col-xl-3 col-md-6 col-sm-6">
					<label>Education*</label>
				    <input type="text"  name="education" class="form-control">
				     @if($errors->first('education'))
						<div style="color:red">
							{{$errors->first('education')}}
						</div>
					@endif

					<label>Gender*</label><br>
					 <input type="radio" id="male" name="gender" value="male">
						  <label for="male">Male</label><br>
						  <input type="radio" id="female" name="gender" value="female">
						  <label for="female">Female</label><br>
						  <input type="radio" id="other" name="gender" value="other">
						  <label for="other">Other</label><br>
					 @if($errors->first('gender'))
						<div style="color:red">
						{{$errors->first('gender')}}
						</div>
					@endif

					<label>Date-of-birth*</label>
				    <input type="date"  name="birth" class="form-control">
				     @if($errors->first('birth'))
						<div style="color:red">
						{{$errors->first('birth')}}
						</div>
					@endif

					<label>Age*</label>
				    <input type="number" min="16" max="55" name="age" class="form-control">
				     @if($errors->first('age'))
						<div style="color:red">
						{{$errors->first('age')}}	
						</div>
					@endif
				</div>
				<div class="col-xl-3 col-md-6 col-sm-6">
					<label>Religion*</label>
				    <input type="text" name="religion" class="form-control">
				     @if($errors->first('religion'))
						<div style="color:red">
						{{$errors->first('religion')}}
						</div>
					@endif

					<label>description*</label>
				    <input type="text" name="description" class="form-control">
				     @if($errors->first('description'))
						<div style="color:red">
						{{$errors->first('description')}}
						</div>
					@endif

				    <label>Blood Group*</label><br>
				    <select name="blood" style="margin-bottom:10px">
                      <option selected="true" disabled="disabled">Blood groups</option>
                      <option >A+</option>
                      <option>A-</option>
                      <option>B+</option>
                      <option>B-</option>
                      <option>O+</option>
                      <option>O-</option>
                      <option>AB+</option>
                      <option>AB-</option>
                    </select>
                    @if($errors->first('blood'))
						<div style="color:red">
						{{$errors->first('blood')}}
						</div>
					@endif<br>
                	
    				<label>Date</label>
    				<input type="date" name="date"  class="form-control">
    				@if($errors->first('date'))
						<div style="color:red">
						{{$errors->first('date')}}
						</div>
					@endif

			    	<button type="submit" class="btn btn-danger" style="margin-bottom:20px;">Submit</button><br>
				</div>
			</div>	
	</form>
</div> 
		
		    <!-- <form action="{{route('event-save')}}" method="post" id="locationForm">
		        <div class="row">
		           <div class="col-sm-6">
		                <div class="panel panel-default">
		                    <div class="panel-heading">
		                        <h3 class="panel-title">Select the location</h3>
		                    </div>
		                    <div class="panel-body">
		                        <div class="form-group">
		                            <span class="error">{{$errors->first('lat')}}</span>
		                            <span class="error">{{$errors->first('long')}}</span>
		                            <event-location></event-location>
		                        </div>
		                    </div>
		                </div>
		            </div>
		          </div>
		        </form> -->
</body>
</html>
