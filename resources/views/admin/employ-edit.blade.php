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
			        		<form action="/employ-register-update/{{$employ->id}}" method="POST">
			        			{{csrf_field()}}
			        			{{method_field('PATCH')}}
			        			<div class="form-group">
				        		   <label>Name*</label>
								    <input type="text"  name="name" class="form-control" value="{{$employ->name}}" >
								</div>
								<div class="form-group">
								    <label>Email*</label>
								    <input type="text"  name="email" class="form-control" value="{{$employ->email}}">
								</div>
								<div class="form-group">
								    <label>Phone Number*</label>
								    <input type="number"  name="number" class="form-control" value="{{$employ->number}}" >
								</div>
								<div class="form-group">
							     	<label>Employer Photo*</label>
									<fieldset>
							        	<input type="file" name="img" style="padding-bottom:10px;
							        	" value="{{$employ->img}}">
							    	</fieldset>
							    </div>
							    <div class="form-group">
							    	<label>Full Address*</label>
								    <input type="text"  name="address" class="form-control" value="{{$employ->address}}" >
								</div>
				                <div class="form-group">
				                    <label>Designation*</label>
				        			 <input type="text"  name="designation" class="form-control" value="{{$employ->designation}}" >	
				    			</div>
				    			<div class="form-group">
				    				<label>Organization*</label>				    			<input type="text" name="organization" class="form-control" value="{{$employ->organization}}" >
				    			</div>
				    			<button type="submit" class="btn btn-success">Update</button>
				    			<a href="/employ-register" class="btn btn-danger">Cancel</a>
				    		</form>	
				    		<form action="/employ-delete/{{$employ->id}}" method="POST">
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

