@extends('partials.user.main')
@section('content')
<!-- main-slider -->
	<section class="w3l-main-slider position-relative" id="home">
		<div class="companies20-content">
			<div class="owl-one owl-carousel owl-theme">
				<div class="item">
					<li>
                        <div class="slider-info banner-view banner-top2 bg bg2">
                            <div class="banner-info">
                                <h3>IT</h3>
                                    <p>In the town of Derry, a group of kids face their worst nightmares when a shape-shifting clown emerges.An unsettling battle against evil that haunts them from the sewers.
                                    </p>
                                    <a href="https://www.youtube.com/watch?v=xKJmEC5ieOk" target="_blank">
                                    <h6 class="text-white fw-bold">Watch Trailer</h6>
                                    </a>
                             </div>
                        </div>
                    </li>
				</div>
				<div class="item">
					<li>
						<div class="slider-info  banner-view banner-top1 bg bg2">
							<div class="banner-info">
                                <h3>Frozen 2</h3>
                                    <p>Join Elsa, Anna, Kristoff, and Olaf as they journey beyond Arendelle to uncover the secrets of the past.An enchanting adventure that will test their courage and the power of sisterhood.
                                    </p>
                                    <a href="https://www.youtube.com/watch?v=Zi4LMpSDccc" target="_blank">
                                    <h6 class="text-white fw-bold">Watch Trailer</h6>
                                    </a>
                             </div>
						</div>
					</li>
				</div>
				<div class="item">
					<li>
                        <div class="slider-info banner-view image-jpg bg bg2">
                            <div class="banner-info">
                                <h3>Avengers:Endgame</h3>
                                    <p>The Avengers unite for one final stand to undo the devastation caused by Thanos. An epic showdown that decides the fate of the universe.
                                    </p>
                                    <a href="https://www.youtube.com/watch?v=TcMBFSGVi1c" target="_blank">
                                    <h6 class="text-white fw-bold">Watch Trailer</h6>
                                    </a>
                             </div>
                        </div>
                    </li>
				</div>
				<div class="item">
					<li>
						<div class="slider-info banner-view banner-top3 bg bg2">
							<div class="banner-info">
                                <h3>Disney's Aladin</h3>
                                    <p>A kind-hearted street rat discovers a magical lamp and a whole new world of adventure. With the help of a genie, he fights for love, freedom, and his destiny.
                                    </p>
                                    <a href="https://www.youtube.com/watch?v=-G5XI61Y9ms" target="_blank">
                                    <h6 class="text-white fw-bold">Watch Trailer</h6>
                                    </a>
                             </div>
						</div>
					</li>
				</div>
			</div>
		</div>
	</section>
	<!-- main-slider -->
	<!--grids-sec1-->
	<section class="w3l-grids">
		<div class="grids-main py-5">
			<div class="container py-lg-3">
				<div class="headerhny-title">
					<div class="w3l-title-grids">
						<div class="headerhny-left">
							<h3 class="hny-title">Popular Movies</h3>
						</div>
						<div class="headerhny-right text-lg-right">
							<h4><a class="show-title" href="{{ url('/user/movies') }}">Show all</a></h4>
						</div>
					</div>
				</div>
				<div class="w3l-populohny-grids">
					<div class="item vhny-grid">
						<div class="box16">
							<a href="{{ url('/user/movies') }}">
								<figure>
									<img class="img-fluid" src="{{ asset('user/assets/images/wednesday.jpeg') }}" alt="">
								</figure>
								<div class="box-content">
									<h3 class="title">A Wednesday</h3>
									<h4> <span class="post"><span class="fa fa-clock-o"> </span> 1 Hr 4min

										</span>

										<span class="post fa fa-heart text-right"></span>
									</h4>
								</div>
								<span class="fa fa-play video-icon" aria-hidden="true"></span>
							</a>
						</div>
					</div>
					<div class="item vhny-grid">
						<div class="box16">
							<a href="{{ url('/user/movies') }}">
								<figure>
									<img class="img-fluid" src="{{ asset('user/assets/images/commando2.jpeg') }}" alt="">
								</figure>
								<div class="box-content">
									<h3 class="title">Commando-3</h3>
									<h4> <span class="post"><span class="fa fa-clock-o"> </span> 1 Hr 4min

										</span>

										<span class="post fa fa-heart text-right"></span>
									</h4>
								</div>
								<span class="fa fa-play video-icon" aria-hidden="true"></span>
							</a>
						</div>
					</div>
					<div class="item vhny-grid">
						<div class="box16">
							<a href="{{ url('/user/movies') }}">
								<figure>
									<img class="img-fluid" src="{{ asset('user/assets/images/gujju2.jpeg') }}" alt="">
								</figure>
								<div class="box-content">
									<h3 class="title">Gujjubhai Most Wanted</h3>
									<h4> <span class="post"><span class="fa fa-clock-o"> </span> 1 Hr 4min

										</span>

										<span class="post fa fa-heart text-right"></span>
									</h4>
								</div>
								<span class="fa fa-play video-icon" aria-hidden="true"></span>
							</a>
						</div>
					</div>
					<div class="item vhny-grid">
						<div class="box16">
							<a href="{{ url('/user/movies') }}">
								<figure>
									<img class="img-fluid" src="{{ asset('user/assets/images/avtar-2.jpeg') }}" alt="">
								</figure>
								<div class="box-content">
									<h3 class="title">Avatar</h3>
									<h4> <span class="post"><span class="fa fa-clock-o"> </span> 1 Hr 4min

										</span>

										<span class="post fa fa-heart text-right"></span>
									</h4>
								</div>
								<span class="fa fa-play video-icon" aria-hidden="true"></span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--//grids-sec1-->
	<!--grids-sec2-->
	<section class="w3l-grids">
		<div class="grids-main">
			<div class="container py-lg-3">
				<div class="headerhny-title">
					<div class="w3l-title-grids">
						<div class="headerhny-left">
							<h3 class="hny-title">New Releases</h3>
						</div>
					</div>
				</div>
				<div class="owl-three owl-carousel owl-theme">
					<div class="item vhny-grid">
						<div class="box16 mb-0">
								<figure>
									<img class="img-fluid" src="{{ asset('user/assets/images/n1.jpg') }}" alt="">
								</figure>
								<div class="box-content">
									<h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min

										</span>

										<span class="post fa fa-heart text-right"></span>
									</h4>
								</div>
								<span class="fa fa-play video-icon" aria-hidden="true"></span>
						</div>
						<h3> <a class="title-gd" href="{{ url('/user/movies') }}">No Time to Die</a></h3>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
						<div class="button-center text-center mt-4">
							<a href="{{ url('/user/movies') }}" class="btn watch-button">Watch now</a>
						</div>

					</div>
					<div class="item vhny-grid">
						<div class="box16 mb-0">
								<figure>
									<img class="img-fluid" src="{{ asset('user/assets/images/n2.jpg') }}" alt="">
								</figure>
								<div class="box-content">

									<h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min

										</span>

										<span class="post fa fa-heart text-right"></span>
									</h4>
								</div>
								<span class="fa fa-play video-icon" aria-hidden="true"></span>
						</div>
						<h3> <a class="title-gd" href="{{ url('/user/movies') }}">Mulan</a></h3>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
						<div class="button-center text-center mt-4">
							<a href="{{ url('/user/movies') }}" class="btn watch-button">Watch now</a>
						</div>
					</div>
					<div class="item vhny-grid">
						<div class="box16 mb-0">
								<figure>
									<img class="img-fluid" src="{{ asset('user/assets/images/n3.jpg') }}" alt="">
								</figure>
								<div class="box-content">

									<h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min

										</span>

										<span class="post fa fa-heart text-right"></span>
									</h4>
								</div>
								<span class="fa fa-play video-icon" aria-hidden="true"></span>
						</div>
						<h3> <a class="title-gd" href="{{ url('/user/movies') }}">Free Guy</a></h3>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
						<div class="button-center text-center mt-4">
							<a href="{{ url('/user/movies') }}" class="btn watch-button">Watch now</a>
						</div>
					</div>
					<div class="item vhny-grid">
						<div class="box16 mb-0">
								<figure>
									<img class="img-fluid" src="{{ asset('user/assets/images/n4.jpg') }}" alt="">
								</figure>
								<div class="box-content">

									<h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min

										</span>

										<span class="post fa fa-heart text-right"></span>
									</h4>
								</div>
								<span class="fa fa-play video-icon" aria-hidden="true"></span>
						</div>
						<h3> <a class="title-gd" href="{{ url('/user/movies') }}">My Spy</a></h3>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
						<div class="button-center text-center mt-4">
							<a href="{{ url('/user/movies') }}" class="btn watch-button">Watch now</a>
						</div>

					</div>
					<div class="item vhny-grid">
						<div class="box16 mb-0">
								<figure>
									<img class="img-fluid" src="{{ asset('user/assets/images/n5.jpg') }}" alt="">
								</figure>
								<div class="box-content">

									<h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min

										</span>

										<span class="post fa fa-heart text-right"></span>
									</h4>
								</div>
								<span class="fa fa-play video-icon" aria-hidden="true"></span>
						</div>
						<h3> <a class="title-gd" href="{{ url('/user/movies') }}">Scoob</a></h3>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
						<div class="button-center text-center mt-4">
							<a href="{{ url('/user/movies') }}" class="btn watch-button">Watch now</a>
						</div>
					</div>
					<div class="item vhny-grid">
						<div class="box16 mb-0">
								<figure>
									<img class="img-fluid" src="{{ asset('user/assets/images/n6.jpg') }}" alt="">
								</figure>
								<div class="box-content">

									<h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min

										</span>

										<span class="post fa fa-heart text-right"></span>
									</h4>
								</div>
								<span class="fa fa-play video-icon" aria-hidden="true"></span>
						</div>
						<h3> <a class="title-gd" href="{{ url('/user/movies') }}">Downhill</a></h3>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
						<div class="button-center text-center mt-4">
							<a href="{{ url('/user/movies') }}" class="btn watch-button">Watch now</a>
						</div>
					</div>
				</div>
			</div>

		</div>
	</section>
	<!--grids-sec2-->
	<!--mid-slider -->
	<section class="w3l-mid-slider position-relative">
		<div class="companies20-content">
			<div class="owl-mid owl-carousel owl-theme">
				<div class="item">
					<li>
						<div class="slider-info mid-view bg bg2">
							<div class="container">
								<div class="mid-info">
									<span class="sub-text">Comedy</span>
									<h3>Jumanji: The Next Level</h3>
									<p>2019 ‧ Comedy/Action ‧ 2h 3m</p>
										<a href="https://www.youtube.com/watch?v=rBxcF-r9Ibs" target="_blank">
                                    <h6 class="text-white fw-bold">Watch Trailer</h6>
                                    </a>
								</div>
							</div>
						</div>
					</li>
				</div>
				<div class="item">
					<li>
						<div class="slider-info mid-view mid-top1 bg bg2">
							<div class="container">
								<div class="mid-info">
									<span class="sub-text">Adventure</span>
									<h3>Dolittle</h3>
									<p>2020 ‧ Family/Adventure ‧ 1h 41m</p>
									<a href="https://www.youtube.com/watch?v=FEf412bSPLs" target="_blank">
                                    <h6 class="text-white fw-bold">Watch Trailer</h6>
                                    </a>
								</div>
							</div>
						</div>
					</li>
				</div>
				<div class="item">
					<li>
						<div class="slider-info mid-view mid-top2 bg bg2">
							<div class="container">
								<div class="mid-info">
									<span class="sub-text">Action</span>
									<h3>Bad Boys for Life</h3>
									<p>2020 ‧ Comedy/Action ‧ 2h 4m</p>
									 <a href="https://www.youtube.com/watch?v=jKCj3XuPG8M" target="_blank">
                                    <h6 class="text-white fw-bold">Watch Trailer</h6>
                                    </a>
								</div>
							</div>
						</div>
					</li>
				</div>
			</div>
		</div>
	</section>
@endsection
