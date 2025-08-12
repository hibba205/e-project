<!-- footer-66 -->
	<footer class="w3l-footer">
		<section class="footer-inner-main">
			<div class="footer-hny-grids py-5">
				<div class="container py-lg-4">
					<div class="text-txt">
						<div class="right-side">
							<div class="row footer-about">
								<div class="col-md-3 col-6 footer-img mb-lg-0 mb-4">
									<a href="{{ url('user/movies') }}"><img class="img-fluid" src="{{ asset('user/assets/images/banner1.jpg') }}"
											alt=""></a>
								</div>
								<div class="col-md-3 col-6 footer-img mb-lg-0 mb-4">
									<a href="{{ url('user/movies') }}"><img class="img-fluid" src="{{ asset('user/assets/images/banner2.jpg') }}"
											alt=""></a>
								</div>
								<div class="col-md-3 col-6 footer-img mb-lg-0 mb-4">
									<a href="{{ url('user/movies') }}"><img class="img-fluid" src="{{ asset('user/assets/images/banner3.jpg') }}"
											alt=""></a>
								</div>
								<div class="col-md-3 col-6 footer-img mb-lg-0 mb-4">
									<a href="{{ url('user/movies') }}"><img class="img-fluid" src="{{ asset('user/assets/images/banner4.jpg') }}"
											alt=""></a>
								</div>
							</div>
							<div class="row footer-links">


								<div class="col-md-3 col-sm-6 sub-two-right mt-5">
									<h6>Movies</h6>
									<ul>
										<li><a href="{{ url('user/movies') }}">Trailers</a></li>
										<li><a href="{{ url('user/movies') }}">Movies available:</a></li>
										<li><a href="{{ url('user/movies') }}">English Movies</a></li>
										<li><a href="{{ url('user/movies') }}">Indian movie</a></li>
										<li><a href="{{ url('user/movies') }}">Upcoming Movies</a></li>
										<li><a href="">Contact Us</a></li>
									</ul>
								</div>
								<div class="col-md-3 col-sm-6 sub-two-right mt-5">
									<h6>Information</h6>
									<ul>
										<li><a href="{{ url('/home') }}">Home</a> </li>
										<li><a href="{{ url('/user/movies') }}">Movies</a> </li>
										<li><a href="{{ url('/user/theaters') }}">Theater</a> </li>
										<li><a href="{{ url('/about') }}">About</a> </li>
										<li><a href="{{ url('signIn') }}">Login</a></li>
										<li><a href="{{ url('/user/feedbacks') }}">Reviews</a></li>
									</ul>
								</div>
								<div class="col-md-3 col-sm-6 sub-two-right mt-5">
									<h6>Locations</h6>
									<ul>
										<li><a href="{{ url('/user/theaters') }}">Karachi</a></li>
										<li><a href="{{ url('/user/theaters') }}">Rawalpindi</a></li>
										<li><a href="{{ url('/user/theaters') }}">Lahore</a></li>
										<li><a href="{{ url('/user/theaters') }}">Multan</a></li>
										<li><a href="{{ url('/user/theaters') }}">Sialkot</a></li>
										<li><a href="{{ url('/user/theaters') }}">Islamabad</a></li>
									</ul>
								</div>
								<div class="col-md-3 col-sm-6 sub-two-right mt-5">
									<h6>My Showz</h6>
									<p>MyShowz. Book your favorite movies with ease, find nearby theaters, and enjoy a seamless ticketing experience. Have feedback or questions?- We’re here to help make your movie nights unforgettable.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			</div>
			<div class="below-section">
				<div class="container">
					<div class="copyright-footer">
						<div class="columns text-lg-left">
							<p>&copy; 2021 MyShowz. All rights reserved</p>
					   </div>

						<ul class="social text-lg-right">
							<li><a href="https://www.facebook.com/"><span class="fa fa-facebook" aria-hidden="true"></span></a>
							</li>
							<li><a href="https://pk.linkedin.com/"><span class="fa fa-linkedin" aria-hidden="true"></span></a>
							</li>
							<li><a href="https://www.google.co.uk/"><span class="fa fa-google-plus" aria-hidden="true"></span></a>
							</li>

						</ul>
					</div>
				</div>
			</div>
			<!-- move top -->
			<button onclick="topFunction()" id="movetop" title="Go to top">
				<span class="fa fa-arrow-up" aria-hidden="true"></span>
			</button>
<script>
				// When the user scrolls down 20px from the top of the document, show the button
				window.onscroll = function () {
					scrollFunction()
				};

				function scrollFunction() {
					if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
						document.getElementById("movetop").style.display = "block";
					} else {
						document.getElementById("movetop").style.display = "none";
					}
				}

				// When the user clicks on the button, scroll to the top of the document
				function topFunction() {
					document.body.scrollTop = 0;
					document.documentElement.scrollTop = 0;
				}
</script>
			<!-- /move top -->

		</section>
	</footer>