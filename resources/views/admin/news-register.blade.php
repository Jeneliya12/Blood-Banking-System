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
      <form action ="/save-news" method="POST">
        {{csrf_field()}}
        <div class="modal-body">
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
          <h4 class="card-title"> News-register
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
                <th scope="col">ID</th>
                <th scope="col">Image</th>
                <th scope="col">Title</th>
                <th scope="col">Category</th>
                <th scope="col">Short Description</th>
                <th scope="col">Description</th>
                <th scope="col">Date</th>
                <th scope="col">Edit</th>
              </tr>
              </thead>
              <tbody>
                @foreach ($news as $news)
                  <tr>
                    <td>{{$news->id}}</td>
                    <td><img src="{{ asset('uploads/donors/'. $news->img)}}" width="300px"; height="100px;" alt="Image"></td>
                    <td>{{$news->title}}</td>
                    <td>{{$news->category}}</td>
                    <td>{{$news->shortdescription}}</td>
                    <td>{{$news->description}}</td>
                    <td>{{$news->date}}</td>
                    <td>
                      <a href="/news-edit/{{$news->id}}" class="btn btn-success">Edit</a>
                    </td>
                  </tr>   
                @endforeach
              </tbody>
            </table>
            <button type="button" class="btn btn-primary float-right"><a href="{{ url('/news_pdf/pdf') }}">Generate Report</button>
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
 