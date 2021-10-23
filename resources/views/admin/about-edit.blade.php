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
		      		<h3>Edit About</h3>
		      	</div>
		        <div class="card-body">
		        	<div class="row">
		        		<div class="col-md-6">
			        		<form action="/about-register-update/{{$about->id}}" method="POST">
			        			{{csrf_field()}}
			        			{{method_field('PATCH')}}
			        			<div class="form-group">
			        				<label>About Photo*</label>
						          	<fieldset>
						          	<input type="file" name="img" style="padding-bottom:10px;">
						          	@if($errors->first('img'))
						          	<div class="alert alert-danger" role="alert">
						            	<li>{{$errors->first('img')}}</li>
						          	</div>
						          	@endif
						          </fieldset>
						        </div>
			        			<div class="form-group">
				        			<label>Title*</label>
								    <input type="text"  name="title" class="form-control" value="{{$about->title}}" >
								</div>
								<div class="form-group">
								    <label>Sub-Title*</label>
								    <input type="text"  name="subtitle" class="form-control" value="{{$about->subtitle}}">
								</div>
								<div class="form-group">
									<label>Description*</label>
									<textarea id="description" name="description" rows="10" cols="50" onKeyPress class="form-control">
									{{{$about->description}}}
									</textarea>
								</div>
				    			<button type="submit" class="btn btn-success">Update</button>
				    			<a href="/about-register" class="btn btn-danger">Cancel</a>
				    		</form>	
				    		<form action="/about-delete/{{$about->id}}" method="POST">
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

