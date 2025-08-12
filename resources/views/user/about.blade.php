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
							<h4>Theaters</h4>

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
							<p class="counter">5</p>
							<h4>No. of Users</h4>

						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
	
	<!-- **************** -->

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
									<q>“Film is incredibly democratic and accessible, it’s probably the best option if you actually want to change the world, not just re-decorate it.”</q>
								</blockquote>
								<div class="testi-des">
									<div class="test-img"><img src="{{asset('user/assets/images/team1.jpg')}}" class="img-fluid" alt="/">
									</div>
									<div class="peopl align-self">
										<h3>Banksy</h3>
										<p class="indentity">Bristol, England</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="testimonial-content">
							<div class="testimonial">
								<blockquote>
									<q>Cinema is a language. It can say things — big, abstract things — and I love that about it. It’s a very special way of communicating.</q>
								</blockquote>
								<div class="testi-des">
									<div class="test-img"><img src="{{asset('user/assets/images/team2.jpg')}}" class="img-fluid" alt="/">
									</div>
									<div class="peopl align-self">
										<h3>Denis Villeneuve</h3>
										<p class="indentity">Quebec, Canada</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="testimonial-content">
							<div class="testimonial">
								<blockquote>
									<q>The best films are those that leave you thinking, that haunt you long after the credits roll. Cinema has the power to change how we see the world.</q>
								</blockquote>
								<div class="testi-des">
									<div class="test-img"><img src="{{asset('user/assets/images/team3.jpg')}}" class="img-fluid" alt="/">
									</div>
									<div class="peopl align-self">
										<h3>Anonymous</h3>
										<p class="indentity">Origin Unknown</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="testimonial-content">
							<div class="testimonial">
								<blockquote>
									<q>Film is a truly magical medium. It has such power to transport audiences to other places, to inspire, to thrill, to move, and to create experiences that stay with us foreve.</q>
								</blockquote>
								<div class="testi-des">
									<div class="test-img"><img src="{{asset('user/assets/images/team4.jpg')}}" class="img-fluid" alt="/">
									</div>
									<div class="peopl align-self">
										<h3>Peter Jackson</h3>
										<p class="indentity">Wellington, New Zealand</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="testimonial-content">
							<div class="testimonial">
								<blockquote>
									<q>Change the way we see things. They take us to other places, they open doors and minds. Movies are the memories of our lifetime, we need to keep them alive.</q>
								</blockquote>
								<div class="testi-des">
									<div class="test-img"><img src="{{asset('user/assets/images/team2.jpg')}}" class="img-fluid" alt="/">
									</div>
									<div class="peopl align-self">
										<h3>Martin Scorsese</h3>
										<p class="indentity">New York, USA</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="testimonial-content">
							<div class="testimonial">
								<blockquote>
									<q>Film is incredibly democratic and accessible; It is probably one of the best option if you actually want to change the world, not only just redecorate it.</q>
								</blockquote>
								<div class="testi-des">
									<div class="test-img"><img src="{{asset('user/assets/images/team3.jpg')}}" class="img-fluid" alt="/">
									</div>
									<div class="peopl align-self">
										<h3>Banksy</h3>
										<p class="indentity">Bristol, UK</p>
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
