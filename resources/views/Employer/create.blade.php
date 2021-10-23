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
		<form class="form-group" method= "POST" action="/employ">
		<h1>Create Employee</h1>
		<div class="row">
			<div class="col-xl-4 col-md-4 col-sm-4">
					{{csrf_field()}}
				    <label>Name*</label>
				    <input type="text"  name="name" class="form-control">
				    @if($errors->first('name'))
				    <div style="color:red">
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
				    <div style="color:red">
				    @if($errors->first('number'))
						{{$errors->first('number')}}
					@endif
					</div>

			     	<label>Employee Photo*</label>
					<fieldset>
		        	<input type="file" name="img" style="padding-bottom:10px;">
		        	<div style="color:red">
		        	@if($errors->first('img'))
						{{$errors->first('img')}}
					@endif
					</div>
			    	</fieldset>

			    	<label>Full Address*</label>
				    <input type="text"  name="address" class="form-control">
				    <div style="color:red">
				    	{{$errors->first('address')}}
				    </div>
				</div>
				 <div class="col-xl-4 col-md-4 col-sm-4">
					<label>Designation*</label>
				    <input type="text"  name="designation" class="form-control">
				    <div style="color:red">
				    @if($errors->first('designation'))
						{{$errors->first('designation')}}
					@endif
					</div>

					<label>Organization*</label>
				    <input type="text"  name="organization" class="form-control">
				    <div style="color:red">
				    @if($errors->first('organization'))
						{{$errors->first('organization')}}
					@endif
					</div>

					<label>Country*</label>
				    <input type="text"  name="country" class="form-control">
				    <div style="color:red">
				    @if($errors->first('country'))
						{{$errors->first('country')}}
					@endif
					</div>

					<label>Description*</label>
				    <input type="text"  name="description" class="form-control">
				    <div style="color:red">
				    @if($errors->first('description'))
						{{$errors->first('description')}}
					@endif
					</div><br>
			    	<button type="submit" class="btn btn-danger" style="margin-bottom:20px;">Submit</button>
			    </div>
			    <div class="col-md-2">
					<img src="/savelife.jpg" style="height:200px;">
					<img src="/form.jpg" style="height:200px; margin-left:40px;">
				</div>
			</div>
		</form>		 
	</div>			
</body>
</html>