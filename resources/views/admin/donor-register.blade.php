@extends('layouts.master')
@section('title')
Registered Roles
@endsection
@section('content')
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Donors</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action ="/save-donors" method="POST">
        {{csrf_field()}}
        <div class="modal-body"> 
          <label>Name*</label>
            <input type="text"  name="name" class="form-control">
            @if($errors->first('name'))
            <div class="alert alert-danger" role="alert">
              <li>{{$errors->first('name')}}</li>
            </div>
            @endif

          <label>Email*</label>
            <input type="text"  name="email" class="form-control">
             @if($errors->first('email'))
            <div class="alert alert-danger" role="alert">
              <li>{{$errors->first('email')}}</li>
            </div>
          @endif

          <label>Phone Number*</label>
          <input type="number"  name="number" class="form-control">
           @if($errors->first('number'))
          <div class="alert alert-danger" role="alert">
            <li>{{$errors->first('number')}}</li>
          </div>
          @endif

          <label>Donor Photo*</label>
          <fieldset>
          <input type="file" name="img" style="padding-bottom:10px;">
          @if($errors->first('img'))
          <div class="alert alert-danger" role="alert">
            <li>{{$errors->first('img')}}</li>
          </div>
          @endif
          </fieldset>

          <label>Full Address*</label>
          <input type="text"  name="address" class="form-control">
          @if($errors->first('address'))
          <div class="alert alert-danger" role="alert">
            <li>{{$errors->first('address')}}</li>
          </div>
          @endif
          
          <label>Country*</label>
            <input type="text"  name="country" class="form-control">
             @if($errors->first('country'))
            <div class="alert alert-danger" role="alert">
              <li>{{$errors->first('country')}}</li>
            </div>
          @endif

          <label>City*</label>
            <input type="text"  name="city" class="form-control">
             @if($errors->first('city'))
            <div class="alert alert-danger" role="alert">
              <li>{{$errors->first('city')}}</li>
            </div>
          @endif

          <label>Profession*</label>
            <input type="text"  name="profession" class="form-control">
             @if($errors->first('profession'))
            <div class="alert alert-danger" role="alert">
              <li>{{$errors->first('profession')}}</li>
            </div>
          @endif

          <label>Education*</label>
            <input type="text"  name="education" class="form-control">
             @if($errors->first('Education'))
            <div class="alert alert-danger" role="alert">
              <li>{{$errors->first('Education')}}</li>
            </div>
          @endif

          <label>Gender*</label><br>
           <input type="radio" id="male" name="gender" value="male">
              <label for="male">Male</label><br>
              <input type="radio" id="female" name="gender" value="female">
              <label for="female">Female</label><br>
              <input type="radio" id="other" name="gender" value="other">
              <label for="other">Other</label><br>

          <label>Date-of-birth*</label>
            <input type="date"  name="birth" class="form-control">
             @if($errors->first('birth'))
            <div class="alert alert-danger" role="alert">
              <li>{{$errors->first('birth')}}</li>
            </div>
          @endif

          <label>Age*</label>
            <input type="number"  name="age" min="18" class="form-control">
             @if($errors->first('age'))
            <div class="alert alert-danger" role="alert">
              <li>{{$errors->first('age')}}</li>
            </div>
          @endif

          <label>Religion*</label>
            <input type="text" name="religion" class="form-control">
             @if($errors->first('religion'))
            <div class="alert alert-danger" role="alert">
              <li>{{$errors->first('religion')}}</li>
            </div>
          @endif

          <label>description*</label>
            <input type="text" name="description" class="form-control">
             @if($errors->first('description'))
            <div class="alert alert-danger" role="alert">
              <li>{{$errors->first('description')}}</li>
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
          </select><br>

          <label>Status*</label>
            <input type="text"  name="status" class="form-control">
            @if($errors->first('status'))
            <div class="alert alert-danger" role="alert">
              <li>{{$errors->first('status')}}</li>
            </div>
            @endif

          <label>Last Donation Date</label>
            <input type="date" name="last_date" class="form-control">
            @if($errors->first('date'))
            <div style="color:red">
            {{$errors->first('date')}}
            </div>
          @endif

          <label>Date</label>
          <input type="date" name="date" class="form-control"><br>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">SAVE</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

 <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"> Donor-register
           <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">ADD</button>  
          </h4>
           @if (session('status'))
            <div class="alert alert-success" role="alert">
              {{ session('status') }}
            </div>
          @endif

        </div>
        <style type="text/css">
          .w-10p{
            width:10% !important;
          }
        </style>
        <div class="card-body">
          <div class="table-responsive">
            <table id="datatable" class="table table-striped table-bordered">
              <thead class=" text-primary">
                <tr>
                  <th scope="col">Image</th>
                  <th scope="col">Name</th>
                  <th scope="col">Email</th>
                  <th scope="col">Number</th>
                  <th scope="col">Address</th>
                  <th scope="col">Blood-group</th>
                  <th scope="col">Status</th>
                  <th scope="col">Edit</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($donors as $donor)
                <tr>
                  <td><img src="{{ asset('uploads/donors/'. $donor->img)}}" width="50px"; height="50px;" alt="Image"></td>
                  <td>{{$donor->name}}</td>
                  <td>{{$donor->email}}</td>
                  <td>{{$donor->number}}</td>
                  <td>{{$donor->address}}</td>
                  <td>{{$donor->blood}}</td>
                  <td>{{$donor->status}}</td>
                  <td>
                    <a href="/donors-edit/{{$donor->id}}" class="btn btn-success">Edit</a>
                  </td> 
                </tr>
                @endforeach
              </tbody>
            </table>
            <button type="button" class="btn btn-primary float-right"><a href="{{ url('dynamic_pdf/pdf') }}">Generate Report</button>
          </div>
        </div>
      </div>
    </div>
</div>
    @endsection
    @section('scripts')
<script>
$(document).ready( function () {
    $('#datatable').DataTable();
} );
</script>  
@endsection
 