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
		<div class="row">
			<div class="col-xl-6 col-md-6 col-sm-6">
				<h1>Create News</h1>
				<form class="form-group" method= "POST" action="/news">
					{{csrf_field()}}
				    <label>Title*</label>
				    <input type="text"  name="title" class="form-control">
				    @if($errors->first('title'))
						<div class="alert alert-danger" role="alert">
							<li>{{$errors->first('title')}}</li>
						</div>
					@endif
					<label>Category*</label>
				    <select name="category" class="form-control">
				    	<option selected="true" disabled="disabled">Category</option>
						<option>Commercial</option>
						<option>Residential</option>
						<option>Tool and Equipment</option>
					</select>
				     @if($errors->first('category'))
						<div class="alert alert-danger" role="alert">
							<li>{{$errors->first('category')}}</li>
						</div>
					@endif

					<label>Short Description*</label>
				    <textarea name="shortdescription" class="form-control"></textarea>
				     @if($errors->first('shortdescription'))
						<div class="alert alert-danger" role="alert">
							<li>{{$errors->first('shortdescription')}}</li>
						</div>
					@endif

				    <label>Description*</label>
				    <textarea name="description" class="form-control"></textarea>
				     @if($errors->first('description'))
						<div class="alert alert-danger" role="alert">
							<li>{{$errors->first('description')}}</li>
						</div>
					@endif

			     	<label>News Image*</label>
					<fieldset>
		        	<input type="file" name="img" style="padding-bottom:10px;">
		        	 @if($errors->first('img'))
					<div class="alert alert-danger" role="alert">
						<li>{{$errors->first('img')}}</li>
					</div>
					@endif
			    	</fieldset>
			    	
    				<label>Date</label>
    				<input type="date" name="date">
			    	<button type="submit" class="btn btn-danger" style="margin-bottom:20px;">Submit</button>
			    </form>
			</div>
			<div class="card-body col-md-2">
				<img src="/savelife.jpg" style="height:200px;">
				<img src="/form.jpg" style="height:200px; margin-left:40px;">
			</div>	 
		</div>
	</div>
</body>
</html>