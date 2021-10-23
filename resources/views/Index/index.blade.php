@include('header')
   <!--Slider-Area Start-->
  <div class="slider-area">
    <div class="slider-item" style="background-image: url(save1.jpg)">
      <div class="bg-3" style="opacity:0.6;"></div>
      <div class="container">
        <div class="row">
          <div class="slider-text">
            <h1>Search Donor in your Area</h1>
          </div>
          <div class="searchbox">
            
            <form action="/search" method="post">
            @csrf
             <div class="col-md-2">
                <input autocomplete="off" type="text" name="q" class="form-control" placeholder="DonorsName">
              </div>
              <div class="col-md-2">
                <input autocomplete="off" type="text" name="p" class="form-control" placeholder="Country Name">
              </div>
              <div class="col-md-2">
                <input autocomplete="off" type="text" name="o" class="form-control" placeholder="City name">
              </div>
                <div class="col-md-3 col-sm-6">
                  <input autocomplete="off" type="text" name="n" class="form-control" placeholder="Blood Group">  
                </div>
              <div class="col-md-2">
                <input type="submit" name="search">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--Slider-Area End-->
   <div class="blood-gallery bg-gray">
    <div class="container">
      <div class="row">
        <div class="headline">
          <h2>Blood Groups</h2>
          <div class="headline-icon" style="background-image: url(drop.jpg)"></div>
        </div>
        @foreach($donor as $donors)
           <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="blood-item">
              <a href="bloodsorting/{{$donors->id}}">{{$donors->blood}}</a>
            </div>
          </div>
        @endforeach
    </div>
  </div>
</div>

<!--Donors Area start---->
    <div class="donner-list-area">
        <div class="container">
            <div class="row">
                <div class="headline">
                    <h2>Our Donors</h2>
                    <div class="headline-icon" style="background-image: url(drop.jpg)"></div>
                </div>
                <div class="donner-gallery owl-carousel">
                    @foreach ($donor as $donor)
                    <div class="donner-item">
                      <div class="donner-list">
                        <div class="donner-photo" style="background-image: url({{asset('uploads/donors/'. $donor->img)}})"></div><br>
                        <div class="donner-info">
                          <h2><a href="">{{$donor->name}}</a></h2>
                          <h4>Blood Group: <span>{{$donor->blood}}</span> </h4>
                          <div class="donner-social">
                            <ul>
                              <li><a href="#"><i class="fa fa-facebook"></i></a></li><li><a href="#"><i class="fa fa-twitter"></i></a></li><li><a href="#"><i class="fa fa-linkedin"></i></a></li><li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                            </ul><br>
                            @if($donor->status=='AVL')
                              <a href="reserve/{{$donors->id}}"><button type="button" class="btn btn-secondary" style="color:red">{{$donor->status}}</button></a>
                            @else
                              <a href="cancel/{{$donors->id}}"><button type="button" class="btn btn-secondary" style="color:red">{{$donor->status}}</button></a>
                                @endif
                          </div>
                        </div>
                        <div class="donner-link">
                          <a href="donors/{{$donor->id}}">Read more</a>
                        </div>
                      </div>
                    </div>
                      @endforeach
                </div>
            </div>      
        </div>
    </div>
<!--Donors Area End---->
<!--Employers Area start--->  
    <div class="donner-list-area bg-gray">
        <div class="container">
            <div class="row">
                <div class="headline">
                    <h2>Our Employee</h2>
                    <div class="headline-icon" style="background-image: url(drop.jpg)"></div>
                </div>
                <div class="donner-gallery owl-carousel">
                    @foreach ($employ as $employ)
                    <div class="donner-item">
                      <div class="donner-list">
                          <div class="donner-photo" style="background-image: url({{asset('uploads/donors/'. $employ->img)}})"></div>
                          <div class="donner-info">
                            <h2><a href="">{{$employ->name}}</a></h2>
                              <h4>Designation: {{$employ->designation}}<br>
                                  Organization: {{$employ->organization}}
                              </h4>
                            <div class="donner-social">
                              <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li><li><a href="#"><i class="fa fa-twitter"></i></a></li><li><a href="#"><i class="fa fa-linkedin"></i></a></li><li><a href="#"><i class="fa fa-pinterest"></i></a></li>                    </ul>
                            </div>
                            <div class="donner-link">
                              <a href="employ/{{$employ->id}}">Read more</a>
                            </div>
                          </div>
                      </div>
                    </div> 
                    @endforeach   
                </div>
              </div>
            </div>
          </div>
<!--Employers Area End--->
  <!--Testimonial Area Start-->
  <div class="testimonial-area" style="background-image: url(save1.jpg)">
    <div class="bg-2" style="background-color: #333;"></div>
    <div class="container">
      <div class="row">
        <div class="headline headline-white">
          <h2>Happy Customers</h2>
          <div class="headline-icon" style="background-image: url(drop.jpg)"></div>
        </div>
        <div class="testimonial-gallery owl-carousel">
              <div class="testimonial-item">
              <div class="testimonial-photo" style="background-image: url(uploads/donors/renu.jpg)"></div>
              <div class="testimonial-text">
                <h2>Renu Dahal</h2>
                <h3>Entrepreneur (The Women's Carrier)</h3>
                <div class="testimonial-pra">
                  <p>
                    Mei ut errem legimus periculis, eos liber epicurei necessitatibus eu, facilisi postulant vel no. Ad mea commune disputando, cu vel choro exerci. Pri et oratio iisque atomorum, enim detracto mei ne, id eos soleat iudicabit. Ne reque reformidans mei, rebum delicata consequuntur an sit.                  </p>
                </div>
              </div>
            </div>
                        <div class="testimonial-item">
              <div class="testimonial-photo" style="background-image: url(uploads/donors/nabin.jpg)"></div>
              <div class="testimonial-text">
                <h2>Himal Kunwar</h2>
                <h3>Electrical Engineer (Hydropower Company) </h3>
                <div class="testimonial-pra">
                  <p>
                    Mei ut errem legimus periculis, eos liber epicurei necessitatibus eu, facilisi postulant vel no. Ad mea commune disputando, cu vel choro exerci. Pri et oratio iisque atomorum, enim detracto mei ne, id eos soleat iudicabit. Ne reque reformidans mei, rebum delicata consequuntur an sit.                  </p>
                </div>
              </div>
            </div>
                        <div class="testimonial-item">
              <div class="testimonial-photo" style="background-image: url(uploads/donors/nisan.jpg)"></div>
              <div class="testimonial-text">
                <h2>Nisan Poudel</h2>
                <h3>Chairman (GH Group)</h3>
                <div class="testimonial-pra">
                  <p>
                    Mei ut errem legimus periculis, eos liber epicurei necessitatibus eu, facilisi postulant vel no. Ad mea commune disputando, cu vel choro exerci. Pri et oratio iisque atomorum, enim detracto mei ne, id eos soleat iudicabit. Ne reque reformidans mei, rebum delicata consequuntur an sit.                  </p>
                </div>
              </div>
            </div>
            <div class="testimonial-item">
              <div class="testimonial-photo" style="background-image: url(uploads/donors/jatin.jpg)"></div>
              <div class="testimonial-text">
                <h2>Jatin Gurung</h2>
                <h3>CFO (XYZ It Solution)</h3>
                <div class="testimonial-pra">
                  <p>
                    Mei ut errem legimus periculis, eos liber epicurei necessitatibus eu, facilisi postulant vel no. Ad mea commune disputando, cu vel choro exerci. Pri et oratio iisque atomorum, enim detracto mei ne, id eos soleat iudicabit. Ne reque reformidans mei, rebum delicata consequuntur an sit.                  </p>
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>
  <!--Testimonial Area End-->

  <!--Latest News Start-->
  <div class="latest-news">
    <div class="container">
      <div class="row">
        <div class="headline">
          <h2><span>Breaking</span> News</h2>
          <div class="headline-icon" style="background-image: url(drop.jpg)"></div>
        </div>
        <div class="latest-gallery owl-carousel">
          @foreach ($news as $news)
            <div class="latest-item">
              <div class="latest-photo" style="background-image: url({{ asset('uploads/donors/'. $news->img)}})"></div>
              <div class="latest-text">
                <h2>{{$news->title}}</h2>
                <ul>
                  <li>Category:<a href=""> {{$news->category}}</a></li>
                  <li>Date: {{$news->date}}</li>
                </ul>
                <div class="latest-pra">
                    <p>{{$news->shortdescription}}</p>
                  <a href="news/{{$news->id}}">Read more</a>
                </div>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
<!---News Ended---->
@include('footer')
</body>
<!-- <script type="text/javascript">
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
</script> -->
</html> 