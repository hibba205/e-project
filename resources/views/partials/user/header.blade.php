<!-- header -->
	<header id="site-header" class="w3l-header fixed-top">
		<!--/nav-->
		<nav class="navbar navbar-expand-lg navbar-light fill px-lg-0 py-0 px-3">
			<div class="container">
				<h1><a class="navbar-brand" href="index.html"><span class="fa fa-play icon-log"
							aria-hidden="true"></span>
						MyShowz</a></h1>
				<button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
					data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
					aria-label="Toggle navigation">
					<span class="fa icon-expand fa-bars"></span>
					<span class="fa icon-close fa-times"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item"><a class="nav-link" href="{{ url('/home') }}">Home</a></li>
						<li class="nav-item"><a class="nav-link" href="{{ url('/user/movies') }}">Movies</a></li>
						<li class="nav-item"><a class="nav-link" href="{{ url('/user/theaters') }}">Theaters</a></li>
						<li class="nav-item"><a class="nav-link" href="{{ url('/about') }}">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('/contact') }}">Contact</a></li>
						<li class="nav-item"><a class="nav-link" href="{{ url('/user/feedbacks') }}">Reviews</a></li>
					</ul>
					<!--/search-right-->
					<div class="search-right">
						<a href="#search" class="btn search-hny mr-lg-3 mt-lg-0 mt-4" title="search">Search <span
								class="fa fa-search ml-3" aria-hidden="true"></span></a>
						<!-- search popup -->
						<div id="search" class="pop-overlay">
							<div class="popup">
								<form action="#" method="post" class="search-box">
									<input type="search" placeholder="Search your Keyword" name="search" required="required" autofocus="">
									<button type="submit" class="btn"><span class="fa fa-search" aria-hidden="true"></span></button>
								</form>
								<div class="browse-items">
									<h3 class="hny-title two mt-md-5 mt-4">Browse all:</h3>
									<ul class="search-items">
										<li><a href="{{ asset('/movies') }}">Action</a></li>
										<li><a href="{{ asset('/movies') }}">Drama</a></li>
										<li><a href="{{ asset('/movies') }}">Family</a></li>
										<li><a href="{{ asset('/movies') }}">Thriller</a></li>
										<li><a href="{{ asset('/movies') }}">Commedy</a></li>
										<li><a href="{{ asset('/movies') }}">Romantic</a></li>
										<li><a href="{{ asset('/movies') }}">Tv-Series</a></li>
										<li><a href="{{ asset('/movies') }}">Horror</a></li>
										<li><a href="{{ asset('/movies') }}">Action</a></li>
										<li><a href="{{ asset('/movies') }}">Drama</a></li>
										<li><a href="{{ asset('/movies') }}">Family</a></li>
										<li><a href="{{ asset('/movies') }}">Thriller</a></li>
										<li><a href="{{ asset('/movies') }}">Commedy</a></li>
										<li><a href="{{ asset('/movies') }}">Romantic</a></li>
										<li><a href="{{ asset('/movies') }}">Tv-Series</a></li>
										<li><a href="{{ asset('/movies') }}">Horror</a></li>
									</ul>
								</div>
							</div>
							<a class="close" href="#close">×</a>
						</div>
						<!-- /search popup -->
						<!--/search-right-->

					</div>
					<div class="Login_SignUp" id="login"
						style="font-size: 2rem ; display: inline-block; position: relative;">
						<!-- <li class="nav-item"> -->
						<a class="nav-link" href="{{ url('signIn') }}"><i class="fa fa-user-circle-o"></i></a>
						<!-- </li> -->
					</div>
				</div>
				<!-- toggle switch for light and dark theme -->
				<div class="mobile-position">
					<nav class="navigation">
						<div class="theme-switch-wrapper">
							<label class="theme-switch" for="checkbox">
								<input type="checkbox" id="checkbox">
								<div class="mode-container">
									<i class="gg-sun"></i>
									<i class="gg-moon"></i>
								</div>
							</label>
						</div>
					</nav>
				</div>
			</div>
		</nav>
	</header>
