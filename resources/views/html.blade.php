<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script>
      window.Laravel = { csrfToken: '{{ csrf_token() }}', basePath: '{{ url("/") }}/' }
    </script>
    <title>Tranvas</title>
    <link rel="stylesheet" href="{{ url('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{mix('css/app.css')}}">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>

    <div class="container" id="app">

        <div class="content-container">
            @yield('content')
        </div>

    </div>

    <script src="//cdn.ckeditor.com/4.7.1/standard/ckeditor.js"></script>
    <script src="{{mix('js/app.js')}}"></script>
</body>
</html>