@include('header')
<div class="banner-slider" style="background-image: url('news3.jpg')">
  <div class="bg"></div>
  <div class="bannder-table">
    <div class="banner-text">
      <h1>Search Result</h1>
    </div>
  </div>
</div>


<div class="donner-page-area">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h3>All Results for &rarr; Blood Group:{{$donor['blood']}}</h3>     </div>      
        <div class="parent"> 
          <div class="col-md-3 col-sm-4 col-xs-12 blood-list">
            <div class="donner-item">
              <div class="donner-list">
                <div class="donner-photo" style="background-image: url({{asset('uploads/donors/'. $donor['img'])}})"></div>
                <div class="donner-info">
                  <h2><a href="https://demosly.com/xicia/bloodbank/donor/3">{{$donor['name']}}</a></h2>
                  <div class="donner-social">
                    <ul>
                      <li><a href="#"><i class="fa fa-facebook"></i></a></li><li><a href="#"><i class="fa fa-twitter"></i></a></li><li><a href="#"><i class="fa fa-linkedin"></i></a></li><li><a href="#"><i class="fa fa-pinterest"></i></a></li>                    </ul>
                  </div>
                  <div class="donner-link">
                    <a href="donor/{{$donor->id}}">Read more</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
       

        <!-- Load More button -->
                          

      
    </div>
  </div>
</div>