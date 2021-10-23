@include('header')
<div class="banner-slider" style="background-image: url(a.jpg);">
  <div class="bg"></div>
  <div class="bannder-table">
    <div class="banner-text">
      <h1>Donors Detail</h1>
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
                            </ul>
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
@include('footer')