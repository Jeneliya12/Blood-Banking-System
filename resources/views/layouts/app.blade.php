<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
<!---  Meta Tags----->
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />

  <meta name="description" content="BloodBank"><meta name="keywords" content=""><title>Blood Bank Management System</title>
  <!-- Favicon-->
  <link href="https://demosly.com/xicia/bloodbank/assets/uploads/favicon.png" rel="shortcut icon" type="image/png">

  <!-- Stylesheets-->
  <link rel="stylesheet" href="https://demosly.com/xicia/bloodbank/css/style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
  
  <script type="text/javascript" src="//platform-api.sharethis.com/js/sharethis.js#property=5993ef01e2587a001253a261&product=inline-share-buttons"></script>
<style>
   h1, p{
    font-family: 'Dancing Script', cursive;
    } 
  </style>
</head>
<body>

  <div class="menu-area">
    <div class="container">
      <div class="row">
        <div class="col-md-2 col-sm-12 col-xs-12">
          <div class="logo">
            <a href="/"><img src="logo1.png" alt=""></a>
          </div>
        </div>

        <div class="col-md-10 col-sm-9">
          <div class="menu">
            <ul id="nav" class="main-menu">
                <li><a href="/">
                          Home
                        </a></li><li></li><li>
                      <a href= "/donorspage">
                          Donors
                      </a>
                      </li><li></li><li>
                      <a href="/employerpage">
                          Employers
                      </a>
                      </li><li></li>
                        <li>
                      <a href="/newspages">
                   
                          Blog
                    
                      </a>
                      </li>
                        <li>
                      <a href="/about">
                         About Us
                      </a>
                      </li> 
                      <li>
                      <a href="contact">
                          Contact Us
                      </a>
                      </li> 
                      <li>
                        
                      <li>
                      <a href="/login">
                          Login
                      </a>
                      </li>  
                        
              <li> 
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                @guest
                @else
                  <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                  </li> 
                @endguest
                </button>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <main class="py-4">
        @yield('content')
      </main>
    </div>
  </div> 
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
  <script type="text/javascript" src="//platform-api.sharethis.com/js/sharethis.js#property=5993ef01e2587a001253a261&product=inline-share-buttons"></script>

  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

  <script src="https://kit.fontawesome.com/6516079e62.js" crossorigin="anonymous"></script>

                 
</body>
 
</html>

       
             
            