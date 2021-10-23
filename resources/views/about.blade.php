@include('header')
<!--About Pages start--->
<!--Banner Start-->
<!-- -->
<!--Banner End-->
@foreach ($about as $about)
<div class="about-area">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
			  <img src="/uploads/donors/{{$about ->img}}">
			</div>
			<div class="col-md-6">
				{{$about->description}}
			</div>
		</div>
	</div>
</div>
@endforeach
<div class="container">
  <div class="row">
    <div class="col-6">
      <p><b style="color:red; font-style:italic; font-size:20px;">If you are willing to donate some of your amount for the charity and for the welfare of our oraganisation, you can donate us through paypal.</b></p>
                    @include('paypal')
    </div>
  </div>
</div>
<div class="faq-area bg-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="accordion-item">
                    <h3>General Questions</h3>

                    @foreach ($question as $question)
                    <dl class="faq-accordion">
                        <dt class="">{{$question->queries}}</dt>
                        <dd>
                        <p>{{$question->answer}}</p>
                        </dd>
                    </dl>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>            
@include('footer')



