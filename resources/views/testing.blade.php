<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <script src="https://kit.fontawesome.com/6516079e62.js" crossorigin="anonymous"></script>
 </head>
<body>
	<div class="panel panel-primary">
	    <div class="panel-heading">
	      <h2 class="text-center" style="color:white;">Multi dropdown</h2>  
	    </div>
	    <div class="panel-body">
	      <div class="col-md-3">
	        <select class="form-control" name="country" id="country">
	          <option selected="false">
	            Country
	          </option>
	          @foreach($country as $cntry)
	          <option value="{{$cntry->id}}">{{$cntry->name}}</option>
	          @endforeach
	        </select>
	      </div> 
	      <div class="col-md-6">
	        <select class="form-control" name="city" id="city">
	          <option selected="false">
	            City
	          </option>
	        </select>
	      </div>     
	      <div class="col-md-3">
	        <button class="btn btn-primary rounded" type="submit" id="search" name="search">Search<i class="fa fa-search"></i></button>
	      </div>
	      </div>
	    </div>
	    <script type="text/javascript">
  jquery(document).ready(function()
  {
    jquery('select[name="country"]').on('change', function(){
        var countryID= jQuery(this).val();
        if(countryID){
          jquery.ajax({
            url: '/getCities/' +countryID,
            type="GET",
            dataType: "json",
            success:function(data){
              jQuery('select[name="city"]').empty();
              jQuey.each(data, function(key, value){
                $('select[name="City"]').append('<option value="'+key+'">'+value+'</option>');
             });
            }
          });
            
        }
else{
  $('select[name="city"]').empty();
}
});
});
</script>

<script type="text/javascript">
  $('#search').on("click", function(){
    var link= document.getElementById("city").value;
    $.ajax({
      url: window.location.href="getData/"+ link
    });
  });
</script>
</body>
</html>
