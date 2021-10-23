@include('header')

<!--Banner Start-->
<div class="banner-slider" style="background-image: url(save1.jpg)">
  <div class="bg"></div>
  <div class="bannder-table">
    <div class="banner-text">
      <h1>Donor Detail</h1>
    </div>
  </div>
</div>
<!--Banner End-->

<div class="donner-profile">
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-sm-4">
        <div class="donner-leftbar">
          <div class="donner-profile-item">
            <div class="donner-image" style="background-image: url({{asset('uploads/donors/'. $donor['img'])}})"></div>
            <div class="donner-leftbar-info">
              <h2>{{$donor['name']}}</h2>
              <h4>Blood Group: <span>{{$donor['blood']}}</span> </h4>
              <div class="donner-leftbar-social">
                <ul>
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li><li><a href="#"><i class="fa fa-twitter"></i></a></li><li><a href="#"><i class="fa fa-linkedin"></i></a></li><li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="donner-contact-form">
           @if (count($errors) > 0)
            <div class="alert alert-danger">
              <button type="button" class="close" data-dismiss="alert">×</button>
                <ul>
                  @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                  @endforeach
                </ul>
            </div>
          @endif
         @if ($message = Session::get('success'))
         <div class="alert alert-success alert-block">
          <button type="button" class="close" data-dismiss="alert"></button>
                 <strong>{{ $message }}</strong>
         </div>
        @endif
          <h3>Message to Donor</h3>
          <form method="post" action="{{url('sendemail/send')}}">
              {{ csrf_field() }}
              <div class="form-group">
               <label>Full Name</label>
               <input type="text" name="name" class="form-control" value="" />
              </div>
              <div class="form-group">
                <label>Phone Number</label>
               <input type="number" name="number" class="form-control" value="" />
              </div>  
              <div class="form-group">
               <label>Email Address</label>
               <input type="text" name="email" class="form-control" value="" />
              </div>
              <div class="form-group">
                <label>Address</label>
               <input type="text" name="address" class="form-control" value="" />
              </div>
              <div class="form-group">
               <label>Message</label>
               <textarea name="message" class="form-control"></textarea>
              </div>
              <div class="form-group">
               <button type="submit" class="btn btn-primary" name="form1">Submit</button> </div>
             </form>
             <script>
                  @if (session('status'))
                    // alert('{{session('status')}}');
                    swal({
                        title: '{{session('status')}}',
                        // text: "You clicked the button!",
                        icon: '{{session('statuscode')}}',
                        button: "OK",
                        });
                  @endif
                </script>  
          </div>
        </div>
      </div>
      <div class="col-md-8 col-sm-8">
        <div class="donner-description">
          <div class="donner-description-list">
            <h3>Donor Details</h3>
            <table class="table table-bordered">
  
                <td style="width:200px"><span>Profession:</span></td>
                <td>{{$donor['profession']}}</td>
              </tr>
              <tr>
                <td>Education: </td>
                <td>{{$donor['education']}}</td>
              </tr>
              <tr>
                <td>Gender: </td>
                <td>{{$donor['gender']}}</td>
              </tr>
              <tr>
                <td>Date of Birth: </td>
                <td>{{$donor['birth']}}</td>
              </tr>
              <tr>
              <td>Last Donation: </td>
                <td>{{$donor['last_date']}}</td>
              </tr>
              <tr>
                <td>Age: </td>
                <td>
                  {{$donor['age']}}               </td>
              </tr>
              <tr>
                <td>Religion: </td>
                <td>{{$donor['religion']}}</td>
              </tr>
              <tr>
                <td>Email: </td>
                <td>{{$donor['email']}}</td>
              </tr>
              <tr>
                <td>Phone: </td>
                <td>{{$donor['number']}}</td>
              </tr>
              <tr>
                <td>Address: </td>
                <td>{{$donor['address']}}</td>
              </tr>
              <tr>
                <td>Country: </td>
                <td>{{$donor['country']}}</td>
              </tr>
              <tr>
                <td>City: </td>
                <td>{{$donor['city']}}</td>
              </tr>
              <tr>
                <td>Map: </td>
                <td>
                 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2414279.131143447!2d85.06799170106272!3d27.700294406544327!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb198a307baabf%3A0xb5137c1bf18db1ea!2sKathmandu%2044600!5e0!3m2!1sen!2snp!4v1589268307311!5m2!1sen!2snp" width="800" height="500" frameborder="0" style="border:0;" allowfullscreen></iframe>
                </td>
              </tr>
            </table>
            <h3>Description</h3>
            <p class="description">
              {{$donor['description']}}
            <br />
            </p>
          </div>     
        </div>
      </div>
    </div>
  </div>
</div>
@include('footer')