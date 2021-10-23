<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  	<link href="{{ asset('assets/css/dataTables.min.css') }}" rel="stylesheet">
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-xl-8 col-md-8 col-sm-8">
			<h1>Edit Donors</h1>
			<form class="form-group" method= "POST" action="/donors/{{$donor->id}}">
				@method('PATCH')
				@csrf
			    <label>Name*</label>
			    <input type="text"  name="name" class="form-control" value="{{$donor->name}}">

			    <label>Email*</label>
			    <input type="text"  name="email" class="form-control" value="{{$donor->email}}">

			    <label>Phone Number*</label>
			    <input type="number"  name="number" class="form-control" value="{{$donor->number}}">

		     	<label>Donor Photo*</label>
				<fieldset>
		        	<input type="file" name="img" style="padding-bottom:10px;" value="{{$donor->img}}">
		    	</fieldset>

		    	<label>Full Address*</label>
			    <input type="text"  name="address" class="form-control" value="{{$donor->address}}">

			    <label>Profession*</label>
				<input type="text"  name="profession" class="form-control" value="{{$donor->profession}}">
				    
				<label>Education*</label>
			    <input type="text"  name="education" class="form-control" value="{{$donor->education}}">
				    
				<label>Gender*</label><br>
				<input type="radio" id="male" name="gender" value="{{$donor->gender}}">
				<label for="male">Male</label><br>
				<input type="radio" id="female" name="gender" value="{{$donor->gender}}" >
				<label for="female">Female</label><br>
				<input type="radio" id="other" name="gender" value="{{$donor->gender}}">
				<label for="other">Other</label><br>

				<label>Date of birth*</label>
				<input type="date"  name="birth" class="form-control" value="{{$donor->birth}}">
				     
				<label>Age*</label>
				<input type="number"  name="age" min="18" class="form-control" value="{{$donor->age}}" >
				
				<label>Religion*</label>
				<input type="text" name="religion" class="form-control" value="{{$donor->religion}}">

				<label>Description*</label>
				<input type="text" name="description" class="form-control" value="{{$donor->description}}">

			    <label>Blood Group*</label><br>
			    <select name="blood" style="margin-bottom:10px" value="{{$donor->blood}}" class="form-control">
	              <option>Blood groups</option>
	              <option>A+</option>
	              <option>A-</option>
	              <option>B+</option>
	              <option>B-</option>
	              <option>O+</option>
	              <option>O-</option>
	              <option>AB+</option>
	              <option>AB-</option>
	            </select>
		    	<button type="submit" class="btn btn-danger" style="margin-bottom:20px;">Update</button>
		    </form>
		    <form method="POST" action="/donors/{{$donor->id}}">
			    @method('DELETE')
			    @csrf
		   		 <button type="submit" class="btn btn-primary">Delete</button>
  			</form>
		</div>
	</div>
</div>
</body>
</html>




