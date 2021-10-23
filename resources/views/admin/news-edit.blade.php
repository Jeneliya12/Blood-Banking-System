@extends('layouts.master')
@section('title')
Edit-Registered
@endsection
@section('content')
<div class="container">
 	<div class="row">
	    <div class="col-md-12">
			<div class="card">
		      	<div class="card-header">
		      		<h3>Edit Registered User</h3>
		      	</div>
		        <div class="card-body">
		        	<div class="row">
		        		<div class="col-md-6">
			        		<form action="/news-register-update/{{$news->id}}" method="POST">
			        			{{csrf_field()}}
			        			{{method_field('PATCH')}}
			        			<div class="form-group">
				        		   <label>Title*</label>
								    <input type="text"  name="title" class="form-control" value="{{$news->title}}" >
								</div>
								<div class="form-group">
								    <label>Category*</label>
								    <input type="text"  name="category" class="form-control" value="{{$news->category}}">
								</div>
								<div class="form-group">
									<label>Short Description*</label>
									<textarea id="description" name = "shortdescription" rows="10" cols="50" onKeyPress class="form-control">
									{{{$news->shortdescription}}}
									</textarea>
								</div>
								<div class="form-group">
									<label>Description*</label>
									<textarea id="description" name = "description" rows="10" cols="50" onKeyPress class="form-control">
									{{{$news->description}}}
									</textarea>
								</div>
								<div class="form-group">
							     	<label>News Photo*</label>
									<fieldset>
							        	<input type="file" name="img" style="padding-bottom:10px;" value="{{$news->img}}">
							    	</fieldset>
							    </div>
							    <div class="form-group">
				    				<label>Date</label>
				    				<input type="date" name="date" value="{{$news->date}}" >
				    			</div>
				    			<button type="submit" class="btn btn-success">Update</button>
				    			<a href="/news-register" class="btn btn-danger">Cancel</a>
				    		</form>	
				    		<form action="/news-delete/{{$news->id}}" method="POST">
		                        {{csrf_field()}}
		                        {{method_field('DELETE')}}
			                    <button type="submit" class="btn btn-danger">DELETE</button>
			                </form>
		        		</div>		
		        	</div>
		        </div>
	      	</div>
    	</div>
  	</div>
</div>
@endsection
@section('scripts')
@endsection

