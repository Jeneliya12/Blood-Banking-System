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
          <label>Status*</label>
            <input type="text"  name="name" class="form-control">
            @if($errors->first('status'))
            <div class="alert alert-danger" role="alert">
              <li>{{$errors->first('status')}}</li>
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
           <button type="button" class="btn btn-primary float-right"><a href="{{ url('dynamic_pdf/pdf') }}">Generate Report</button>
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
                  <th scope="col">Blood Group</th>
                  <th scope="col">Status</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($donors as $donor)
                <tr>
                  <td>{{$donor->blood}}</td>
                  <td>{{$donor->status}}</td>
                  <td>
                    <a href="/reservation-edit/{{$donor->id}}" class="btn btn-success">Edit</a>
                  </td> 
                </tr>
                @endforeach
              </tbody>
            </table>
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
 