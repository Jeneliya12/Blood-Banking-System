@extends('layouts.master')
@section('title')
Registered Roles
@endsection
@section('content')
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Employers</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action ="/save-employ" method="POST">
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

            <label>Employer Photo*</label>
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

          <label>Designation*</label>
            <input type="text"  name="designation" class="form-control">
             @if($errors->first('designation'))
            <div class="alert alert-danger" role="alert">
              <li>{{$errors->first('designation')}}</li>
            </div>
          @endif

          <label>Organization*</label>
            <input type="text"  name="organization" class="form-control">
             @if($errors->first('organization'))
            <div class="alert alert-danger" role="alert">
              <li>{{$errors->first('organization')}}</li>
            </div>
          @endif

          <label>Country*</label>
            <input type="text"  name="country" class="form-control">
             @if($errors->first('Country'))
            <div class="alert alert-danger" role="alert">
              <li>{{$errors->first('Country')}}</li>
            </div>
          @endif

          <label>Description*</label>
            <input type="text"  name="description" class="form-control">
             @if($errors->first('Description'))
            <div class="alert alert-danger" role="alert">
              <li>{{$errors->first('Description')}}</li>
            </div>
          @endif
        </div>       
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">SAVE</button>
            </div>
        </form>
    </div>
  </div>
</div>
 <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"> Employ-register
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
                  <th scope="col">Designation</th>
                  <th scope="col">Organization</th>
                  <th scope="col">Edit</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($employ as $employ)
                  <tr>
                    <td><img src="{{ asset('uploads/donors/'. $employ->img)}}" width="50px"; height="50px;" alt="Image"></td>
                    <td>{{$employ->name}}</td>
                    <td>{{$employ->email}}</td>
                    <td>{{$employ->number}}</td>
                    <td>{{$employ->designation}}</td>
                    <td>{{$employ->organization}}</td>
                    <td>
                      <a href="/employ-edit/{{$employ->id}}" class="btn btn-success">Edit</a>
                    </td>
                  </tr>   
                @endforeach
              </tbody>
            </table>
            <button type="button" class="btn btn-primary float-right"><a href="{{ url('/employ_pdf/pdf') }}">Generate Report</button>
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
 