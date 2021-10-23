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
	<h1 class="text-3xl font-bold">Comparison of Blood Group with Donor's Age and unique ID </h1>
	<div class="flex pt-5">
		<div class="w-1/2">
			{!! $chart->container() !!}
		</div>
		<div class="w-1/2 px-8 pt-12">
			{!! $charts->container() !!}
		</div>
	</div>
	
		{!! $chart->script() !!}
		{!! $charts->script() !!}
</div>	
</body>
</html>
@endsection
	

