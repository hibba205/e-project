@extends('partials.user.main')
@section('content')
	<!--/breadcrumbs -->
	<div class="w3l-breadcrumbs">
		<nav id="breadcrumbs" class="breadcrumbs">
			<div class="container page-wrapper">
				<a href="index.html">Home</a> » <span class="breadcrumb_last" aria-current="page">About</span>
			</div>
		</nav>
	</div>
	<!--/theme-change-->
<script src="{{ asset('user/assets/js/theme-change.js') }}"></script>
<script>
	const toggleSwitch = document.querySelector('.theme-switch input[type="checkbox"]');
	const currentTheme = localStorage.getItem('theme');

	if (currentTheme) {
		document.documentElement.setAttribute('data-theme', currentTheme);

		switchTextColor(currentTheme);

		if (currentTheme === 'dark') {
			toggleSwitch.checked = true;
		}
	}

	function switchTextColor(currTheme) {

		if (currTheme === 'light') {
			document.getElementById("swiper-container-h1").style.color = 'black';
			document.getElementById("details-h3-1").style.color = 'black';
			document.getElementById("details-h3-2").style.color = 'black';
			document.getElementById("details-h3-3").style.color = 'black';
			document.getElementById("details-h3-4").style.color = 'black';
			document.getElementById("details-h3-5").style.color = 'black';
			document.getElementById("details-h3-6").style.color = 'black';
		} else {
			document.getElementById("swiper-container-h1").style.color = 'white';
			document.getElementById("details-h3-1").style.color = 'white';
			document.getElementById("details-h3-2").style.color = 'white';
			document.getElementById("details-h3-3").style.color = 'white';
			document.getElementById("details-h3-4").style.color = 'white';
			document.getElementById("details-h3-5").style.color = 'white';
			document.getElementById("details-h3-6").style.color = 'white';
		}
	}
	toggleSwitch.addEventListener('change', switchTheme, false);
</script>
	<!-- /about-->
	<div class="w3l-ab-grids py-5">

		<div class="container py-lg-4">
			<div class="row ab-grids-sec align-items-center">
				<div class="col-lg-6 ab-right">
					<img class="img-fluid" src="{{asset('user/assets/images/banner1.jpg')}}">
				</div>
				<div class="col-lg-6 ab-left pl-lg-4 mt-lg-0 mt-5">
					<h3 class="hny-title">My Showz Entertainment</h3>
					<p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam id quisquam ipsam
						molestiae ad eius accusantium? Nulla dolorem perferendis inventore! posuere cubilia Curae;
						Nunc non risus in justo convallis feugiat.</p>
					<div class="ready-more mt-4">
						<a href="#" class="btn read-button">Read More <span class="fa fa-angle-double-right ml-2"
								aria-hidden="true"></span></a>
					</div>
				</div>
			</div>

			<div class="w3l-counter-stats-info text-center">
				<div class="stats_left">
					<div class="counter_grid">
						<div class="icon_info">
							<p class="counter">65</p>
							<h4>Movies</h4>

						</div>
					</div>
				</div>
				<div class="stats_left">
					<div class="counter_grid">
						<div class="icon_info">
							<p class="counter">165</p>
							<h4>Shows</h4>

						</div>
					</div>
				</div>
				<div class="stats_left">
					<div class="counter_grid">
						<div class="icon_info">
							<p class="counter">463</p>
							<h4>Staff Members</h4>

						</div>
					</div>
				</div>
				<div class="stats_left">
					<div class="counter_grid">
						<div class="icon_info">
							<p class="counter">5063</p>
							<h4>No. of Users</h4>

						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
	
	<!-- **************** -->
<!-- Image Slider for MEET US Section-->
<div class="swiper-container" style="background-color: var(--theme-bg);">
	<h1 id="swiper-container-h1">Meet Our Team</h1>
	<div class="swiper-wrapper">
		<div class="swiper-slide">
			<div class="imgBx">
				<img src="{{asset('user/assets/images/kishan.PNG')}}" style="width :100%; height: 100%">
			</div>
			<div class="details">
				<h3 id="details-h3-1">Kishan Patel<br></h3>
				<div class="p-sm">
					<a href="https://www.linkedin.com/in/kishan-patel-a95827176/"><i class="fa fa-linkedin"></i></a>
					<a href="https://www.instagram.com/kishann_20/"><i class="fa fa-instagram"></i></a>
					<a href="https://github.com/Kishan207p"><i class="fa fa-github"></i></a>
				</div>
			</div>
		</div>
		<div class="swiper-slide">
			<div class="imgBx">
				<img src="{{asset('user/assets/images/sharvil.jpg')}}" style="width :100%; height: 100%">
			</div>
			<div class="details">
				<h3 id="details-h3-2">Sharvil Patel<br></h3>
				<div class="p-sm">
					<a href="https://www.linkedin.com/in/sharvil-patel/"><i class="fa fa-linkedin"></i></a>
					<a href="https://www.instagram.com/sharvil551/"><i class="fa fa-instagram"></i></a>
					<a href="https://github.com/Sharvil24600"><i class="fa fa-github"></i></a>
				</div>
			</div>
		</div>
		<div class="swiper-slide">
			<div class="imgBx">
				<img src="{{asset('user/assets/images/Harsh (2).jpg')}}" style="width :100%; height: 100%">
			</div>
			<div class="details">
				<h3 id="details-h3-3">Harsh Mange<br></h3>
				<div class="p-sm">
					<a href="https://in.linkedin.com/in/harshmange"><i class="fa fa-linkedin"></i></a>
					<a href="https://www.instagram.com/im.h_r_s_h/"><i class="fa fa-instagram"></i></a>
					<a href="https://github.com/harshmange44"><i class="fa fa-github"></i></a>
				</div>
			</div>
		</div>
		<div class="swiper-slide">
			<div class="imgBx">
				<img src="{{asset('user/assets/images/chavda.PNG')}}" style="width :100%; height: 100%">
			</div>
			<div class="details">
				<h3 id="details-h3-4">Yugam Chavda<br></h3>
				<div class="p-sm">
					<a href="https://www.linkedin.com/in/yugamsinh-chavda-2b06ab18b/"><i class="fa fa-linkedin"></i></a>
					<a href="https://www.instagram.com/yugamsinh_chavda/"><i class="fa fa-instagram"></i></a>
					<a href="https://github.com/YugamsinhChavda"><i class="fa fa-github"></i></a>
				</div>
			</div>
		</div>

	</div>
	<!-- Add Pagination -->
	<div class="swiper-pagination"></div>
</div>
	<section class="w3l-clients" id="clients">
		<!-- /grids -->
		<!-- <div class="cusrtomer-layout py-5"> -->
		<div class="container py-lg-4">
			<!-- <div class="headerhny-title">
				<h3 class="hny-title">Our Testimonials</h3>
			</div> -->
			<!-- /grids -->
			<div class="testimonial-width">
				<div class="owl-clients owl-carousel owl-theme mb-lg-5">
					<div class="item">
						<div class="testimonial-content">
							<div class="testimonial">
								<blockquote>
									<q>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit beatae laudantium
										voluptate rem ullam dolore!.</q>
								</blockquote>
								<div class="testi-des">
									<div class="test-img"><img src="{{asset('user/assets/images/team1.jpg')}}" class="img-fluid" alt="/">
									</div>
									<div class="peopl align-self">
										<h3>Johnson smith</h3>
										<p class="indentity">Washington</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="testimonial-content">
							<div class="testimonial">
								<blockquote>
									<q>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit beatae laudantium
										voluptate rem ullam dolore!.</q>
								</blockquote>
								<div class="testi-des">
									<div class="test-img"><img src="{{asset('user/assets/images/team2.jpg')}}" class="img-fluid" alt="/">
									</div>
									<div class="peopl align-self">
										<h3>Alexander leo</h3>
										<p class="indentity">Washington</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="testimonial-content">
							<div class="testimonial">
								<blockquote>
									<q>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit beatae laudantium
										voluptate rem ullam dolore!.</q>
								</blockquote>
								<div class="testi-des">
									<div class="test-img"><img src="{{asset('user/assets/images/team3.jpg')}}" class="img-fluid" alt="/">
									</div>
									<div class="peopl align-self">
										<h3>Roy Linderson</h3>
										<p class="indentity">Washington</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="testimonial-content">
							<div class="testimonial">
								<blockquote>
									<q>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit beatae laudantium
										voluptate rem ullam dolore!.</q>
								</blockquote>
								<div class="testi-des">
									<div class="test-img"><img src="{{asset('user/assets/images/team4.jpg')}}" class="img-fluid" alt="/">
									</div>
									<div class="peopl align-self">
										<h3>Mike Thyson</h3>
										<p class="indentity">Washington</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="testimonial-content">
							<div class="testimonial">
								<blockquote>
									<q>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit beatae laudantium
										voluptate rem ullam dolore!.</q>
								</blockquote>
								<div class="testi-des">
									<div class="test-img"><img src="{{asset('user/assets/images/team2.jpg')}}" class="img-fluid" alt="/">
									</div>
									<div class="peopl align-self">
										<h3>Laura gill</h3>
										<p class="indentity">Washington</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="testimonial-content">
							<div class="testimonial">
								<blockquote>
									<q>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit beatae laudantium
										voluptate rem ullam dolore!.</q>
								</blockquote>
								<div class="testi-des">
									<div class="test-img"><img src="{{asset('user/assets/images/team3.jpg')}}" class="img-fluid" alt="/">
									</div>
									<div class="peopl align-self">
										<h3>Smith Johnson</h3>
										<p class="indentity">Washington</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /grids -->
		</div>
	</section>
@endsection
