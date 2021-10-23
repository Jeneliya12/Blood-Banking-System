@extends('layouts.master')
@section('title')
Charts
@endsection
@section('content')
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
	 <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>
</head>
<body><br><br>
<div class="container">
	<h1 class="text-3xl font-bold">Comparision of Donor's address with their unique id</h1>
	<div>
		<div>
			{!! $chart->container() !!}
		</div>
	</div>
	{!! $chart->script() !!}
</div>	
</body>
</html>
@endsection
	

