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
			        		<form action="/donor-register-update/{{$donors->id}}" method="POST">
			        			{{csrf_field()}}
			        			{{method_field('PATCH')}}
			        			<div class="form-group">
				        		   <label>Name*</label>
								    <input type="text"  name="name" class="form-control" value="{{$donors->name}}" >
								</div>
								<div class="form-group">
								    <label>Email*</label>
								    <input type="text"  name="email" class="form-control" value="{{$donors->email}}">
								</div>
								<div class="form-group">
								    <label>Phone Number*</label>
								    <input type="number"  name="number" class="form-control" value="{{$donors->number}}" >
								</div>
								<div class="form-group">
							     	<label>Donor Photo*</label>
									<fieldset>
							        	<input type="file" name="img" style="padding-bottom:10px;
							        	" value="{{$donors->img}}">
							    	</fieldset>
							    </div>
							    <div class="form-group">
							    	<label>Full Address*</label>
								    <input type="text"  name="address" class="form-control" value="{{$donors->address}}" >
								</div>
								<div class="form-group">
								    <label>Blood Group*</label><br>
								    <select name="blood" style="margin-bottom:10px">
				                      <option value="{{$donors->blood}}">Blood groups</option>
				                      <option value="{{$donors->blood}}"  >A+</option>
				                      <option value="{{$donors->blood}}" >A-</option>
				                      <option value="{{$donors->blood}}" >B+</option>
				                      <option value="{{$donors->blood}}" >B-</option>
				                      <option value="{{$donors->blood}}" >O+</option>
				                      <option value="{{$donors->blood}}" >O-</option>
				                      <option value="{{$donors->blood}}" >AB+</option>
				                      <option value="{{$donors->blood}}" >AB-</option>
				                    </select><br>
				                </div>
				                <div class="form-group">
				                    <label>Status*</label>
						            <input type="text"  name="status" class="form-control"  value="{{$donors->status}}" >
						        </div>
						         <div class="form-group">
							    	<label>City*</label>
								    <input type="text"  name="city" class="form-control" value="{{$donors->city}}" >
								</div>
								<div class="form-group">
							    	<label>Country*</label>
								    <input type="text"  name="country" class="form-control" value="{{$donors->country}}" >
								</div>
								 <div class="form-group">
							    	<label>Last Date*</label>
								    <input type="date"  name="address" class="form-control" value="{{$donors->last_date}}" >
								</div>
				    			<div class="form-group">
				    				<label>Date</label>
				    				<input type="date" name="date" value="{{$donors->date}}" >
				    			</div>
				    			<button type="submit" class="btn btn-success">Update</button>
				    			<a href="/donor-register" class="btn btn-danger">Cancel</a>
			    			</form>	
			    			<form action="/donor-delete/{{$donors->id}}" method="POST">
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

