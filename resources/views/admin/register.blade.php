@extends('layouts.master')
@section('title')
Registered Roles
@endsection
@section('content')
 <div class="container">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Registered Roles</h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table id="datatable" class="table table-striped table-bordered">
              <thead class=" text-primary">
                <th>Name</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Usertype</th>
                <th>Edit</th>
                <th>Delete</th>
                <th>Status</th>
                <th>Ban</th>
              </thead>
              <tbody>
                @foreach ($users as $row)
                <tr>
                  <td>{{$row->name}}</td>
                  <td>{{$row->phone}}</td>
                  <td>{{$row->email}}</td>
                  <td>{{$row->usertype}}</td>
                  <td>
                    <a href="/role-edit/{{$row->id}}" class="btn btn-success">EDIT</a>
                  </td>
                  <td>
                    <form action="/role-delete/{{$row->id}}" method="POST">
                      {{csrf_field()}}
                      {{method_field('DELETE')}}
                      <button type="submit" class="btn btn-danger">DELETE</button>
                    </form>
                  </td>
                <td>
                  @if($row->is_active==1)
                    Enable
                  @else
                  Disable
                  @endif
                </td>
                  <td>
                    @if($row->is_active==1)
                    <a href="{{route('changestatus', $row->id)}}" class="btn btn-warning">Disable</a>
                    @else

                    <a href="{{route('changestatus', $row->id)}}" class="btn btn-success">Enable</a>
                    @endif
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