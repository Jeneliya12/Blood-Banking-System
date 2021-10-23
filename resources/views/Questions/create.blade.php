<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <script src="https://kit.fontawesome.com/6516079e62.js" crossorigin="anonymous"></script>

    <style>
 
    .form-group{
        margin-left:50px;
        margin-right:50px;
    }
    .container{
        background:white; 
    
    }
    h1{
        color:red;
        font-style:italic;
    }   
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-md-6 col-sm-6">
                <h1>Drop your questions here</h1><br>
                <form class="form-group" method= "POST" action="/questions">
                    {{csrf_field()}}        
                    <label>Ask us your queries*</label>
                    <textarea name="queries" class="form-control"></textarea>
                     @if($errors->first('queries'))
                        <div class="alert alert-danger" role="alert">
                            <li>{{$errors->first('queries')}}</li>
                        </div>
                    @endif
                    <label>Date*</label>
                    <input type="date" name="date" class="form-control"><br>
                    <button type="submit" class="btn btn-danger" style="margin-bottom:20px;">Submit</button>
                </form>
            </div>
            <div class="card-body col-md-2">
                <img src="/savelife.jpg" style="height:200px;">
                <img src="/form.jpg" style="height:200px; margin-left:40px;">
            </div>   
        </div>
    </div>
</body>
</html>