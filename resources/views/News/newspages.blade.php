@include('header')

<!--Banner Start-->
<div class="banner-slider" style="background-image: url(save1.jpg)">
	<div class="bg"></div>
	<div class="bannder-table">
		<div class="banner-text">
			<h1>Blog</h1>
		</div>
	</div>
</div>
<!--Banner End-->

<div class="blog-page-area">
	<div class="container">
		<div class="row">
			@foreach ($news as $news)
			<div class="col-md-4 col-sm-6 col-xs-12 blog-item">
				<div class="latest-item">
					<div class="latest-photo" style="background-image: url({{ asset('uploads/donors/'. $news->img)}})"></div>
					<div class="latest-text">
						<h2><a href="">{{$news->title}}</a></h2>
						<ul>
							<li>Category: <a href="https://demosly.com/xicia/bloodbank/category/economy">{{$news->category}}</a></li>
							<li>Date: {{$news->date}}</li>
						</ul>
						<div class="latest-pra">
							<p>{{$news->shortdescription}}</p>
							<a href="news/{{$news->id}}">Read more</a>
						</div>
					</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</div>
@include('footer')	
