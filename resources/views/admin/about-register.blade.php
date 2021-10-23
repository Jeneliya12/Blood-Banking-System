@extends('layouts.master')
@section('title')
Registered Roles
@endsection
@section('content')
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Pages</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action ="/save-about" method="POST">
        {{csrf_field()}}
        <div class="modal-body">

          <label>About Photo*</label>
            <fieldset>
            <input type="file" name="img" style="padding-bottom:10px;">
            @if($errors->first('img'))
            <div class="alert alert-danger" role="alert">
              <li>{{$errors->first('img')}}</li>
            </div>
            @endif
          </fieldset>
                    
          <label>Name*</label>
            <input type="text"  name="title" class="form-control">
            @if($errors->first('title'))
            <div class="alert alert-danger" role="alert">
              <li>{{$errors->first('title')}}</li>
            </div>
          @endif
          <label>Sub-title*</label>
            <input type="text"  name="subtitle" class="form-control">
             @if($errors->first('subtitle'))
            <div class="alert alert-danger" role="alert">
              <li>{{$errors->first('subtitle')}}</li>
            </div>
          @endif
          <label>Description*</label>
            <textarea name="description" rows="10" cols="50" class="form-control"></textarea>
             @if($errors->first('description'))
            <div class="alert alert-danger" role="alert">
              <li>{{$errors->first('description')}}</li>
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
          <h4 class="card-title"> Aabout-register
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
                  <th scope="col">Title</th>
                  <th scope="col">sub-title</th>
                  <th scope="col">Description</th>
                  <th scope="col">Edit</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($about as $about)
                  <tr>
                    <td><img src="{{ asset('uploads/donors/'. $about->img)}}" width="500px"; height="500px;" alt="Image"></td>
                    <td>{{$about->title}}</td>
                    <td>{{$about->subtitle}}</td>
                    <td>{{$about->description}}</td>
                    <td>
                      <a href="/about-edit/{{$about->id}}" class="btn btn-success">Edit</a>
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
 