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
			<h1>Edit Employee</h1>
			<form class="form-group" method= "POST" action="/employ/{{$employ->id}}">
				@method('PATCH')
				@csrf
			    <label>Name*</label>
			    <input type="text"  name="name" class="form-control" value="{{$employ->name}}">

			    <label>Email*</label>
			    <input type="text"  name="email" class="form-control" value="{{$employ->email}}">

			    <label>Phone Number*</label>
			    <input type="number"  name="number" class="form-control" value="{{$employ->number}}">

		     	<label>Employee Photo*</label>
				<fieldset>
		        	<input type="file" name="img" style="padding-bottom:10px;" value="{{$employ->img}}">
		    	</fieldset>

		    	<label>Full Address*</label>
			    <input type="text"  name="address" class="form-control" value="{{$employ->address}}">
				     
				<label>Designation*</label>
				<input type="text"  name="designation" class="form-control" value="{{$employ->designation}}" >
				<div class="form-group">

				<label>Organisation*</label>
				<input type="text"  name="organization" class="form-control" value="{{$employ->organization}}" >
				<div class="form-group">

				<label>Description*</label>
				<textarea name = "description" rows="5" cols="10" onKeyPress class="form-control">
				{{{$employ->description}}}
				</textarea>

				<label>Country*</label>
				<input type="text"  name="country" min="18" class="form-control" value="{{$employ->country}}" ><br>

		    	<button type="submit" class="btn btn-danger" style="margin-bottom:20px;">Update</button>
		    </form>
		    <form method="POST" action="/employ/{{$employ->id}}">
			    @method('DELETE')
			    @csrf
			    <button type="submit" class="btn btn-primary">Delete</button>
  			</form>
		</div>
	</div>
</div>
</body>
</html>




