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
    <div class="row">
      <div class="col-md-7" align="right">
        <h1 style="font-weight: bold">Donor's Data</h1> 
      </div>
      <div class="col-md-5" align="right">
        <a href="{{ url('dynamic_pdf/pdf') }}" class="btn btn-danger">Convert into PDF</a>
      </div>
   </div>
   <br />
   <div class="table-responsive">
    <table id="datatable" class="table table-striped table-bordered">
     <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Number</th>
        <th>Photo</th>
        <th>Address</th>
        <th>Blood Group</th>
        <th>Date</th>
        <th>Edit</th>
      </tr>
     </thead>
     <tbody>
     @foreach($donor_data as $donors)
      <tr>
        <td>{{ $donors->id }}</td>
       <td>{{ $donors->name }}</td>
       <td>{{ $donors->email}}</td>
       <td>{{ $donors->number}}</td>
       <td><img src="{{ asset('uploads/donors/'. $donors->img)}}" width="100px"; height="100px;" alt="Image"></td>
       <td>{{ $donors->address}}</td>
      <td>{{ $donors->blood}}</td>
      <td>{{$donors->date}}</td> 
       <td>
          <a href="/donors/{{$donors->id}}/edit" class="btn btn-success">Edit</a>
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
