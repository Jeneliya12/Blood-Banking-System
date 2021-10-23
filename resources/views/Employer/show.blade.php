@include('header')

<!--Banner Start-->
<div class="banner-slider" style="background-image: url(save1.jpg)">
  <div class="bg"></div>
  <div class="bannder-table">
    <div class="banner-text">
      <h1>Emoloyee Detail</h1>
    </div>
  </div>
</div>
<!--Banner End-->

<div class="agent-profile">
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-sm-4">
        <div class="agent-leftbar">
          <div class="agent-profile-item">
              <div class="agent-image" style="background-image: url({{asset('uploads/donors/'. $employ['img'])}})"></div>
            
            <div class="agent-leftbar-info">
              <h2>{{$employ['name']}}</h2>
              <ul>
                <li>Designation: <span>{{$employ['designation']}}</span></li>
                <li>Organization: <span>{{$employ['organization']}}</span></li>
              </ul>
              <div class="agent-leftbar-social">
                <ul>
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li><li><a href="#"><i class="fa fa-twitter"></i></a></li><li><a href="#"><i class="fa fa-linkedin"></i></a></li><li><a href="#"><i class="fa fa-pinterest"></i></a></li>                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-8 col-sm-8">
        <div class="agent-description">
          
          <h3>Details</h3>
          <div class="agent-description-list">
            <table class="table table-bordered">
              <tr>
                <td>Email: </td>
                <td>{{$employ['email']}}</td>
              </tr>
              <tr>
                <td>Phone: </td>
                <td>{{$employ['number']}}</td>
              </tr>
              <tr>
                <td>Address: </td>
                <td>{{$employ['address']}}</td>
              </tr>
                <tr>
                <td>Country: </td>
                <td>{{$employ['country']}}</td>
              </tr>
            </table>
          </div>
          <h3>Description</h3>
          <p class="description">
            Ex vix alienum sadipscing, quod melius philosophia id has. Ad qui quem reprimique, quo possit detracto reprimique no, sint reque officiis ei per. Ea regione commune volutpat pro, fabulas facilis omnesque mei ne. Cu unum detracto comprehensam sea, ad vim ancillae principes, ex usu fugit consulatu. Vis te purto equidem voluptatum.<br />
          <br />
          Detracto contentiones te est, brute ipsum consul an vis. Mea ei regione blandit ullamcorper, definiebas constituam vix ei. At his ludus nonumes gloriatur. Ne vim tamquam nonumes.<br />
          <br />
          Duo purto pertinax in. Ea noluisse mediocrem qui, nobis melius vis et. Iudico delicatissimi no qui, quando fastidii nam et, ne eum rationibus deseruisse neglegentur. Ei eum populo viderer reprimique, tantas homero abhorreant usu ei, at postulant gloriatur vituperata sit.         </p>
        </div>
      </div>
    </div>
  </div>
</div>
@include('footer')