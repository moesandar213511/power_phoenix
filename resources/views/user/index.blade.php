@extends('user.site_user.master_user')
@section('title','Power Phoenix')
@section('content')
<!-- banner -->
<div class="banner_w3lspvt" id="home">
	<div class="csslider infinity" id="slider1">
		<input type="radio" name="slides" checked="checked" id="slides_1"/>
		<input type="radio" name="slides" id="slides_2"/>
		<input type="radio" name="slides" id="slides_3"/>
		<input type="radio" name="slides" id="slides_4"/>

		<ul class="banner_slide_bg">
			<li>
				<div class="slider-info bg1">
					<div class="bs-slider-overlay1">
						<div class="banner-text">
							<div class="container">
								<h5 class="tag mb-3 text-uppercase">We are professional <span class="ml-2"><span></h5>
								<h1 class="movetxt agile-title text-capitalize">Consult Your</h1>
								<h4 class="movetxt mb-3 agile-title text-capitalize">Business With Us</h4>
								<p>Vivamus eget est in odio tempor interdum. Mauris maximus fermentum arcu, ac finibus ante. Sed mattis risus at ipsum elementum,
								ut auctor turpis cursus. Sed sed odio pharetra, aliquet velit cursus, vehicula enim. Mauris porta aliquet magna, eget laoreet ligula.</p>					
								<a class="btn btn1 mt-4 text-capitalize scroll" href="{{url('/about')}}" > Get Started </a>
							</div>
						</div>
					</div>
				</div>
			</li>
			<li>
				<div class="slider-info bg2">
					<div class="bs-slider-overlay1">
						<div class="banner-text">
							<div class="container">
								<h5 class="tag mb-3 text-uppercase">We are unique <span class="ml-2"><span></h5>
								<h4 class="movetxt agile-title text-capitalize">Creative Design </h4>
								<h4 class="movetxt mb-3 agile-title text-capitalize">Manage Business </h4>	
								<p>Vivamus eget est in odio tempor interdum. Mauris maximus fermentum arcu, ac finibus ante. Sed mattis risus at ipsum elementum,
								ut auctor turpis cursus. Sed sed odio pharetra, aliquet velit cursus, vehicula enim. Mauris porta aliquet magna, eget laoreet ligula.</p>					
								<a class="btn btn1 mt-4 text-capitalize scroll" href="{{url('/about')}}" > Get Started </a>
							</div>
						</div>
					</div>
				</div>
			</li>
			<li>
				<div class="slider-info bg3">
					<div class="bs-slider-overlay1">
						<div class="banner-text">
							<div class="container">
								<h5 class="tag mb-3 text-uppercase">We are creative <span class="ml-2"><span></h5>
								<h4 class="movetxt agile-title text-capitalize">High Quality </h4>
								<h4 class="movetxt mb-3 agile-title text-capitalize">Creative thinking </h4>	
								<p>Vivamus eget est in odio tempor interdum. Mauris maximus fermentum arcu, ac finibus ante. Sed mattis risus at ipsum elementum,
								ut auctor turpis cursus. Sed sed odio pharetra, aliquet velit cursus, vehicula enim. Mauris porta aliquet magna, eget laoreet ligula.</p>					
								<a class="btn btn1 mt-4 text-capitalize scroll" href="{{url('/about')}}" > Get Started </a>
							</div>
						</div>
					</div>
				</div>
			</li>
			<li>
				<div class="slider-info bg4">
					<div class="bs-slider-overlay1">
						<div class="banner-text">
							<div class="container">
								<h5 class="tag mb-3 text-uppercase">We are awesome <span class="ml-2"><span></h5>
								<h4 class="movetxt agile-title text-capitalize">Tons of Projects </h4>
								<h4 class="movetxt mb-3 agile-title text-capitalize">With Consultancy </h4>	
								<p>Vivamus eget est in odio tempor interdum. Mauris maximus fermentum arcu, ac finibus ante. Sed mattis risus at ipsum elementum,
								ut auctor turpis cursus. Sed sed odio pharetra, aliquet velit cursus, vehicula enim. Mauris porta aliquet magna, eget laoreet ligula.</p>					
								<a class="btn btn1 mt-4 text-capitalize scroll" href="{{url('/about')}}" > Get Started </a>
							</div>
						</div>
					</div>
				</div>
			</li>
		</ul>
		<div class="navigation"> 
			<div>
			  <label for="slides_1"></label>
			  <label for="slides_2"></label>
			  <label for="slides_3"></label>
			  <label for="slides_4"></label>
			</div>
		</div>
	</div>
</div>
<!-- //banner -->
	
<!-- welcome -->
{{-- Rabbit::zg2uni("သီဟိုဠ္မွ ဉာဏ္ႀကီးရွင္သည္ အာယုဝဍ္ဎနေဆးၫႊန္းစာကို ဇလြန္ေဈးေဘးဗာဒံပင္ထက္ အဓိ႒ာန္လ်က္ ဂဃနဏဖတ္ခဲ့သည္။");

Rabbit::uni2zg("သီဟိုဠ်မှ ဉာဏ်ကြီးရှင်သည် အာယုဝဍ်ဎနဆေးညွှန်းစာကို ဇလွန်ဈေးဘေးဗာဒံပင်ထက် အဓိဋ္ဌာန်လျက် ဂဃနဏဖတ်ခဲ့သည်။"); --}}
<section class="welcome py-5" id="welcome">
	<div class="container py-sm-3">
		<h3 class="heading mb-4">Welcome!!</h3>
		<p>We Provide Professional Web Design,Web Development,Software Development,Arduino Project,PLC Controller,PlC Controller, Robtic Operation System and Mobile App Development services in Myanmar.</p>
	</div>
</section>
<!-- //welcome -->


<!-- project -->
<section class="book text-center">
	<div class="layer py-5">
		<div class="container py-lg-5 py-md-3">
			<h3 class="mb-sm-4 mb-3">Want to start a new project with us? Lets Start!</h3>
			<a href="{{url('/about')}}" class="scroll"> Start A Project Now </a>
		</div>
	</div>
</section>
<!-- //project -->

<!-- section -->
<section class="section py-5">
	<div class="container py-md-5">
		<div class="row section_grids">
			<div class="col-lg-8">
				<h3>Welcome To Our Company</h3>
				<p class="my-4">Nulla felis tortor, rutrum eget feugiat non, blandit nec tellus. Nam pharetra ipsum ligula volutpat, a finibus. Vivamus eget est
				init odio tempor interdum. Mauris maximus fermentum arcu, ac finibus ante. Sed mattis risus at ipsum elementum,ut auctor turpis cursus.
				Sed sed odio pharetra, aliquet velit cursus, vehicula enim.</p>
				<p>Nam pharetra ipsum,	ligula volutpat a finibus.Vivamus eget est ac finibus ante.</p>
			</div>
			<div class="col-lg-4 mt-lg-0 mt-5 img">
				<img src="images/powerphoenix.jpg" class="img-fluid" alt=""/>
			</div>
		</div>
	</div>
</section>
<!-- //section -->

<!-- section -->
<section class="section py-5 bg-light">
	<div class="container py-md-5">
		<div class="row section_grids">
			<div class="col-lg-6">
				<img src="images/s1.jpg" class="img-fluid" alt=""/>
			</div>
			<div class="col-lg-6 mt-lg-0 mt-5">
				<h3><i>Our Products</i></h3>
				<h4 class="produts">Green Hackers Education Platform
					<small>greenhackersonline.com</small></h4>
				<h4 class="produts">Green Hackers Education Moblile Application
					<small>greenhackersonline.com</small></h4>
				<h4 class="produts">Ponit of Sale Software Management System </h4>
				<h4 class="produts">Restaurant Management System</h4>
				<h4 class="produts">Private School Software Management System</h4>
				<h4 class="produts">Green Hackers Electrical Dictionary(Russian-English-Myanmar)</h4>
				<h4 class="produts">HR Management System</h4>
				
			</div>
		</div>
	</div>
</section>
<!-- //section -->

<!-- testimonials -->
<section class="testimonials banner-bottom-agile-w3ls" id="testimonials">
	<div class="layer py-5">
		<div class="container py-md-3">
			<h3 class="heading text-capitalize text-white mb-lg-5 mb-4">Testimonials</h3>
			<div class="row">
				<div class="feedback-info col-md-6">
					<div class="feedback-top">
						<span class="fa fa-quote-right"></span> 
						<p> Sed semper leo metus, a lacinia eros semper at. Etiam sodales orci sit amet vehicula pellentesque. blandit nec tellus.
							Nam pharetra ipsum ligula, a finibus.</p>
						<div class="clearfix"></div>
					</div>
					<div class="feedback-grids">
						<div class="feedback-img">
							<img src="images/test1.jpg" class="img-fluid" alt="" />
						</div>
						<div class="feedback-img-info">
							<h5>Mary Jane</h5>
							<p class="font-italic">- Aug 24, 2018</p>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="feedback-info col-md-6 mt-md-0 mt-5">
					<div class="feedback-top">
						<span class="fa fa-quote-right"></span> 
						<p> Sed semper leo metus, a lacinia eros semper at. Etiam sodales orci sit amet vehicula pellentesque. blandit nec tellus.
							Nam pharetra ipsum ligula, a finibus.</p>
						<div class="clearfix"></div>
					</div>
					<div class="feedback-grids">
						<div class="feedback-img">
							<img src="images/test2.jpg" class="img-fluid" alt="" />
						</div>
						<div class="feedback-img-info">
							<h5>Peter Guptill</h5>
							<p class="font-italic">Aug 24, 2018</p>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="feedback-info col-md-6 mt-5">
					<div class="feedback-top">
						<span class="fa fa-quote-right"></span> 
						<p> Sed semper leo metus, a lacinia eros semper at. Etiam sodales orci sit amet vehicula pellentesque. blandit nec tellus.
							Nam pharetra ipsum ligula, a finibus.</p>
						<div class="clearfix"></div>
					</div>
					<div class="feedback-grids">
						<div class="feedback-img">
							<img src="images/test1.jpg" class="img-fluid" alt="" />
						</div>
						<div class="feedback-img-info">
							<h5>Steven Wilson</h5>
							<p class="font-italic">Aug 24, 2018</p>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="feedback-info col-md-6 mt-5">
					<div class="feedback-top">
						<span class="fa fa-quote-right"></span> 
						<p> Sed semper leo metus, a lacinia eros semper at. Etiam sodales orci sit amet vehicula pellentesque. blandit nec tellus.
							Nam pharetra ipsum ligula, a finibus.</p>
						<div class="clearfix"></div>
					</div>
					<div class="feedback-grids">
						<div class="feedback-img">
							<img src="images/test2.jpg" class="img-fluid" alt="" />
						</div>
						<div class="feedback-img-info">
							<h5>Mary Jane</h5>
							<p class="font-italic">Aug 24, 2018</p>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- //testimonials -->

<!-- newsletter -->
<section class="newsletter py-5" id="subscribe">
		<div class="container py-md-3">
			<div class="row">
				<div class="col-lg-6">
					<h4 class="newsletter">Sign up for Our newsletter</h4>
				</div>
				<div class="col-lg-6 mt-lg-0 mt-3">
					<form action="#" method="post" class="">
						<input type="email" name="Email" placeholder="Enter your email..." required="">
						<button type="submit" class="btn">Submit</button>
						<div class="clearfix"> </div>
						<span>By signing up to our website, you agree to the <a href="#">terms and conditions.</a></span>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="gallery py-5" id="gallery" style="margin-top: -20px;">
        <div class="container py-md-5">
            <div class="header text-center">
                <h3 class="tittle mb-lg-5 mb-3">Our Client</h3>
            </div>
            <div class="row news-grids text-center gallery-wrap">
            	@foreach($client as $client_data)
                <div class="col-md-3 gal-img">
                    <a href="{{$client_data->link}}" target="_blank"><img src="{{asset('upload/client/'.$client_data->photo)}}" alt="news image" class="img-fluid" style="width: 300px; height: 160px;"></a>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection