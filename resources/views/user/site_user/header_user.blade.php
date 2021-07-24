<header>
	<div class="container">
		<div class="header d-lg-flex justify-content-between align-items-center">
			<div class="header-agile">
				<h1>
					<a class="navbar-brand logo" href="{{url('/')}}">
					Power Phoenix
					</a>
				</h1>
			</div>
			<div class="nav_w3ls">
				<nav>
					<label for="drop" class="toggle mt-lg-0 mt-2"><span class="fa fa-bars" aria-hidden="true"></span></label>
					<input type="checkbox" id="drop"/>
						<ul class="menu" id="navbar">
							<li class="mr-lg-3 mr-0"><a style="color : <?php echo $url == "home" ? 'orange' : "" ?>" href="{{url('/')}}">Home</a></li>
							<li class="mr-lg-3 mr-1"><a style="color : <?php echo $url == "about" ? 'orange' : "" ?>" href="{{url('/about')}}">About</a></li>
							<li class="mr-lg-3 mr-2"><a style="color : <?php echo $url == "service" ? 'orange' : "" ?>" href="{{url('/service')}}">Services</a></li>
							<li class="mr-lg-3 mr-3"><a style="color : <?php echo $url == "blog" ? 'orange' : "" ?>" href="{{url('/blog')}}">Blog</a></li>
							<li class="mr-lg-3 mr-4"><a style="color : <?php echo $url == "contact" ? 'orange' : "" ?>" href="{{url('/contact')}}">Contact</a></li>
						</ul>
						<script>
							document.querySelector('a').addEventListener('click',function(){
								
							})
							document.querySelector('.mr-0').classList.remove('active');
						</script>
				</nav>
			</div>
			<div class="buttons mt-lg-0 mt-2">
				<a href="https://www.facebook.com/powerphoenixmyanmar/" target="_blank"><span class="fa mr-1 fa-facebook"></span></a>
				<a href="#"><span class="fa mr-1 fa-twitter"></span></a>
				<a href="#"><span class="fa mr-1 fa-linkedin"></span></a>
			</div>

		</div>
	</div>
</header>