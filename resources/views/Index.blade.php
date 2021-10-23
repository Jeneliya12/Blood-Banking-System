
@include('header')
  <!--Slider-Area Start-->
  <div class="slider-area">
    <div class="slider-item" style="background-image: url(sav1.jpg)">
      <div class="bg-3" style="opacity:0.6;"></div>
      <div class="container">
        <div class="row">
          <div class="slider-text">
            <h1>Search a Donor in your Area</h1>
          </div>
          <div class="searchbox">
            
            <form action="https://demosly.com/xicia/bloodbank/search" method="post">
            
              <div class="col-md-3 col-sm-6">
                <input autocomplete="off" type="text" name="country" class="form-control" placeholder="Country Name">
              </div>
              <div class="col-md-3 col-sm-6">
                
                <select data-placeholder="Choose Blood Group" class="chosen-select form-control" name="blood_group_id">
                                      <option></option>
                    <option value="1">A+</option>
                                        <option></option>
                    <option value="2">A-</option>
                                        <option></option>
                    <option value="3">B+</option>
                                        <option></option>
                    <option value="4">B-</option>
                                        <option></option>
                    <option value="5">AB+</option>
                                        <option></option>
                    <option value="6">AB-</option>
                                        <option></option>
                    <option value="7">O+</option>
                                        <option></option>
                    <option value="8">O-</option>
                                    </select>
              </div>
              
              <div class="col-md-3 col-sm-6">
                <input type="submit" value="Search Donor" name="form_search">
              </div>

            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
  
  
  <div class="blood-gallery bg-gray">
    <div class="container">
      <div class="row">
        <div class="headline">
          <h2>Blood Groups</h2>
          <div class="headline-icon" style="background-image: url(drop.jpg)"></div>
        </div>
         <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="blood-item">
              <a>A+</a>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="blood-item">
              <a>A-</a>
            </div>
          </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="blood-item">
              <a>B+</a>
            </div>
          </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="blood-item">
              <a>B-</a>
            </div>
          </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="blood-item">
              <a>AB+</a>
            </div>
          </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="blood-item">
              <a>AB-</a>
            </div>
          </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="blood-item">
              <a>O+</a>
            </div>
          </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="blood-item">
              <a>O-</a>
            </div>
          </div>
                </div>
    </div>
  </div>

<!--Donors Area start---->
    <div class="donner-list-area">
        <div class="container">
            <div class="row">
                <div class="headline">
                    <h2>Recent Donors</h2>
                    <div class="headline-icon" style="background-image: url(drop.jpg)"></div>
                </div>
                <div class="donner-gallery owl-carousel">
                    @foreach ($donor as $donor)
                    <div class="donner-item">
                        <div class="donner-list">
                            <div class="donner-photo" style="background-image: url({{ asset('uploads/donors/'. $donor->img)}})"></div><br>
                                <div class="donner-info">
                                  <h2><a href="">{{$donor->name}}</a></h2>
                                  <h4>Blood Group: <span>{{$donor->blood}}</span> </h4>
                                  <div class="donner-social">
                                    <ul>
                                      <li><a href="#"><i class="fa fa-facebook"></i></a></li><li><a href="#"><i class="fa fa-twitter"></i></a></li><li><a href="#"><i class="fa fa-linkedin"></i></a></li><li><a href="#"><i class="fa fa-pinterest"></i></a></li> 
                                    </ul>
                                  </div>
                                  <div class="donner-link">
                                    <a href="/donors/{{$donor->id}}">Read more</a>
                                  </div>
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
                    <h2>Recent Employers</h2>
                    <div class="headline-icon" style="background-image: url(drop.jpg)"></div>
                </div>
                <div class="donner-gallery owl-carousel">
                    <div class="donner-item">
                        <div class="donner-list">
                            <div class="donner-photo" style="background-image: url(sowyesh.jpg)"></div>
                            <div class="donner-info">
                              <h2><a href="">Sowyesh Khadka</a></h2>
                                <h4>
                                Designation: Telemarketer<br>
                                Organization: Linens And Things
                                </h4>
                              <div class="donner-social">
                                <ul>
                                  <li><a href="#"><i class="fa fa-facebook"></i></a></li><li><a href="#"><i class="fa fa-twitter"></i></a></li><li><a href="#"><i class="fa fa-linkedin"></i></a></li><li><a href="#"><i class="fa fa-pinterest"></i></a></li>                    </ul>
                              </div>
                              <div class="donner-link">
                                <a href="https://demosly.com/xicia/bloodbank/agent/13">Read more</a>
                              </div>
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
              <div class="testimonial-photo" style="background-image: url(renu.jpg)"></div>
              <div class="testimonial-text">
                <h2>Renu Dahal</h2>
                <h3>Managing Director(ABC Inc.)</h3>
                <div class="testimonial-pra">
                  <p>
                    Mei ut errem legimus periculis, eos liber epicurei necessitatibus eu, facilisi postulant vel no. Ad mea commune disputando, cu vel choro exerci. Pri et oratio iisque atomorum, enim detracto mei ne, id eos soleat iudicabit. Ne reque reformidans mei, rebum delicata consequuntur an sit.                  </p>
                </div>
              </div>
            </div>
                        <div class="testimonial-item">
              <div class="testimonial-photo" style="background-image: url(nabin.jpg)"></div>
              <div class="testimonial-text">
                <h2>Himal Kunwar</h2>
                <h3>CEO(SS Multimedia)</h3>
                <div class="testimonial-pra">
                  <p>
                    Mei ut errem legimus periculis, eos liber epicurei necessitatibus eu, facilisi postulant vel no. Ad mea commune disputando, cu vel choro exerci. Pri et oratio iisque atomorum, enim detracto mei ne, id eos soleat iudicabit. Ne reque reformidans mei, rebum delicata consequuntur an sit.                  </p>
                </div>
              </div>
            </div>
                        <div class="testimonial-item">
              <div class="testimonial-photo" style="background-image: url(nisan.jpg)"></div>
              <div class="testimonial-text">
                <h2>Misan Poudel</h2>
                <h3>Chairman(GH Group)</h3>
                <div class="testimonial-pra">
                  <p>
                    Mei ut errem legimus periculis, eos liber epicurei necessitatibus eu, facilisi postulant vel no. Ad mea commune disputando, cu vel choro exerci. Pri et oratio iisque atomorum, enim detracto mei ne, id eos soleat iudicabit. Ne reque reformidans mei, rebum delicata consequuntur an sit.                  </p>
                </div>
              </div>
            </div>
                        <div class="testimonial-item">
              <div class="testimonial-photo" style="background-image: url(jatin.jpg)"></div>
              <div class="testimonial-text">
                <h2>Jatin Gurung</h2>
                <h3>CFO(XYZ It Solution)</h3>
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
                      <div class="latest-item">
              <div class="latest-photo" style="background-image: url(news1.jfif)"></div>
              <div class="latest-text">
                <h2>Kathmandu's blood banks are running out of blood</h2>
                <ul>
                  <li>Category: <a href="">Commercial</a></li>
                  <li>Date: 05-09-2017</li>
                </ul>
                <div class="latest-pra">
                  <p>
                    <p>Lorem ipsum dolor sit amet, qui case probo velit no, an postea scaevola partiendo mei. Id mea fuisset perpetua referr ...                  </p>
                  <a href="">Read more</a>
                </div>
              </div>
            </div>
                        <div class="latest-item">
              <div class="latest-photo" style="background-image: url(news2.jpg)"></div>
              <div class="latest-text">
                <h2>Door-To-Door Blood Collection Campaign Launched In Valley</h2>
                <ul>
                  <li>Category: <a href="">Commercial</a></li>
                  <li>Date: 05-09-2017</li>
                </ul>
                <div class="latest-pra">
                  <p>
                    <p>Lorem ipsum dolor sit amet, qui case probo velit no, an postea scaevola partiendo mei. Id mea fuisset perpetua referr ...                  </p>
                  <a href="">Read more</a>
                </div>
              </div>
            </div>
                        <div class="latest-item">
              <div class="latest-photo" style="background-image: url(news3.jpg)"></div>
              <div class="latest-text">
                <h2>Blood donation is predominantly done by men</h2>
                <ul>
                  <li>Category: <a href="">Commercial</a></li>
                  <li>Date: 05-09-2017</li>
                </ul>
                <div class="latest-pra">
                  <p>
                    <p>Lorem ipsum dolor sit amet, qui case probo velit no, an postea scaevola partiendo mei. Id mea fuisset perpetua referr ...                  </p>
                  <a href="">Read more</a>
                </div>
              </div>
            </div>
                        <div class="latest-item">
              <div class="latest-photo" style="background-image: url(news4.jpg)"></div>
              <div class="latest-text">
                <h2>Nepalese App Developed To Gather Blood Donor</h2>
                <ul>
                  <li>Category: <a href="">Residential</a></li>
                  <li>Date: 05-09-2017</li>
                </ul>
                <div class="latest-pra">
                  <p>
                    <p>Lorem ipsum dolor sit amet, qui case probo velit no, an postea scaevola partiendo mei. Id mea fuisset perpetua referr ...                  </p>
                  <a href=>Read more</a>
                </div>
              </div>
            </div>
                        <div class="latest-item">
              <div class="latest-photo" style="background-image: url(news5.jpg)"></div>
              <div class="latest-text">
                <h2>Official Visit of the IFBDO to Nepal – report</h2>
                <ul>
                  <li>Category: <a href="">Residential</a></li>
                  <li>Date: 05-09-2017</li>
                </ul>
                <div class="latest-pra">
                  <p>
                    <p>Lorem ipsum dolor sit amet, qui case probo velit no, an postea scaevola partiendo mei. Id mea fuisset perpetua referr ...                  </p>
                  <a href="">Read more</a>
                </div>
              </div>
            </div>
                        <div class="latest-item">
              <div class="latest-photo" style="background-image: url(news6.jpg)"></div>
              <div class="latest-text">
                <h2>Lack of blood bank hits patients hard in Bajura</h2>
                <ul>
                  <li>Category: <a href="">Tools and Equipment</a></li>
                  <li>Date: 05-09-2017</li>
                </ul>
                <div class="latest-pra">
                  <p>
                    <p>Lorem ipsum dolor sit amet, qui case probo velit no, an postea scaevola partiendo mei. Id mea fuisset perpetua referr ...                  </p>
                  <a href="">Read more</a>
                </div>
              </div>
            </div>
                        <div class="latest-item">
              <div class="latest-photo" style="background-image: url(a.jpg)"></div>
              <div class="latest-text">
                <h2>262,439 pints of blood collected last fiscal</h2>
                <ul>
                  <li>Category: <a href="">Tools and Equipment</a></li>
                  <li>Date: 05-09-2017</li>
                </ul>
                <div class="latest-pra">
                  <p>
                    <p>>Lorem ipsum dolor sit amet, qui case probo velit no, an postea scaevola partiendo mei. Id mea fuisset perpetua referr ...                  </p>
                  <a href="">Read more</a>
                </div>
              </div>
            </div>
                    </div>
      </div>
    </div>
  </div>
@include('footer')  
</body>

</html> 