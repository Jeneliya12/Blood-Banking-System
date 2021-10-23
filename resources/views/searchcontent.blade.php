@include('header')
 <div class="banner-slider" style="background-image: url(drop.jpg);">
  <div class="bg"></div>
  <div class="bannder-table">
    <div class="banner-text">
      <h1>Donors Detail</h1>
    </div>
  </div>
</div>
<!-- Donors Area start-->
@if(isset($details))    
 <div class="donner-list-area">
        <div class="container">
            <div class="row">
                <div class="headline">
                    <h2>Recent Donors</h2>
                     <h1 class="search-results-count"><h1> The Search results for  <b> {{ $query }} </b> is/are :</h1>
                    <div class="headline-icon" style="background-image: url(drop.jpg)"></div>
                </div>

                <div class="donner-gallery owl-carousel">
                    @foreach ($details as $donors)
                    <div class="donner-item">
                      <div class="donner-list">
                        <div class="donner-photo" style="background-image: url({{asset('uploads/donors/'. $donors->img)}})"></div><br>
                        <div class="donner-info">
                          <h2><a href="">{{$donors->name}}</a></h2>
                          <h4>Blood Group: <span>{{$donors->blood}}</span> </h4>
                          <div class="donner-social">
                            <ul>
                              <li><a href="#"><i class="fa fa-facebook"></i></a></li><li><a href="#"><i class="fa fa-twitter"></i></a></li><li><a href="#"><i class="fa fa-linkedin"></i></a></li><li><a href="#"><i class="fa fa-pinterest"></i></a></li> 
                            </ul>
                          </div>
                          <div class="donner-link">
                            <a href="/donors/{{$donors->id}}">Read more</a>
                          </div>
                        </div>
                        </div
                      </div>
                    </div>
                    @endforeach
                     @elseif(isset($message))
                    <h1>{{ $message }}</h1>
                    @endif
                </div>
            </div>      
        </div>
    </div>
<!--Donors Area End-- 
     <!--  @if(isset($details))
              <p> The Search results for your query <b> {{ $query }} </b> are :</p>
              <h2>Sample User details</h2>
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Email</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($details as $donors)
                  <tr>
                    <td>{{$donors->name}}</td>
                    <td>{{$donors->email}}</td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
              @elseif(isset($message))
              <p>{{ $message }}</p>
              @endif -->

@include('footer')