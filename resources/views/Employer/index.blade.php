<!DOCTYPE html>
<html>
 <head>
  <title></title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="{{ asset('assets/css/dataTables.min.css') }}" rel="stylesheet">
  <style type="text/css">
   .box{
    width:600px;
    margin:0 auto;
   }
  </style>
 </head>
 <body> 
  <br />
  <div class="container">    
    <div class="table-responsive">
      <table id="datatable" class="table table-striped table-bordered">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Image</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Number</th>
            <th scope="col">Address</th>
            <th scope="col">Designation</th>
            <th scope="col">Organization</th>
            <th scope="col">Edit</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($employ as $employ)
            <tr>
              <td>{{$employ->id}}</td>
              <td><img src="{{ asset('uploads/donors/'. $employ->img)}}" width="100px"; height="100px;" alt="Image"></td>
              <td>{{$employ->name}}</td>
              <td>{{$employ->email}}</td>
              <td>{{$employ->number}}</td>
              <td>{{$employ->address}}</td>
              <td>{{$employ->designation}}</td>
              <td>{{$employ->organization}}</td>
              <td>
                <a href="/employ/{{$employ->id}}/edit" class="btn btn-success">Edit</a>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
  <script src="{{asset('assets/js/dataTables.min.js')}}"></script>
    <script>
      $(document).ready( function () {
          $('#datatable').DataTable();
      } );
  </script>
</body>
</html>
  