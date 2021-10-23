@include('header')
<div class="banner-slider" style="background-image: url(a.jpg);">
  <div class="bg"></div>
  <div class="bannder-table">
    <div class="banner-text">
      <h1>Employee Details</h1>
    </div>
  </div>
</div>
<!--Employers Area start--->  
    <div class="donner-list-area bg-gray">
        <div class="container">
            <div class="row">
                <div class="headline">
                    <h2>Our Employees</h2>
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
@include('footer')