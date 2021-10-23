<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div class="panel panel-primary">
	<div class="panel-heading">
		Information <i class="fa fa-info"></i>
	</div>
	<div class="panel-body">
		<table class="table table-bordered">
			<thead>
				<th>Name</th>
				<th>Emai</th>
				<th>Address</th>
				<th>City</th>
			</thead>
			<tbody>
				@foreach($data as $dt)
				<tr>
					<td>{{$dt->name}}</td>
					<td>{{$dt->email}}</td>
					<td>{{$dt->address}}</td>
					<td>{{$dt->city->name}}</td>
				@endforeach
				</tr>
				
			</tbody>
			
		</table>
		
	</div>
	
</div>
</body>
</html>