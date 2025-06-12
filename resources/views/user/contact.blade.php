<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us page</title>
  <link rel="stylesheet" type="text/css" href="{{ asset('user/assets/css/as-alert-message.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('user/assets/css/contact_us.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('user/assets/css/style-starter.css') }}">
  <link href="//fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;1,600&display=swap"
		rel="stylesheet">
</head>

<body>
  <header id="site-header" class="w3l-header fixed-top">
    <!--/nav-->
    <nav class="navbar navbar-expand-lg navbar-light fill px-lg-0 py-0 px-3">
      <div class="container">
        <h1><a class="navbar-brand" href="index.html"><span class="fa fa-play icon-log" aria-hidden="true"></span>
          MyShowz </a></h1>
        <!-- if logo is image enable this   
                    <a class="navbar-brand" href="#index.html">
                        <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
                    </a> -->
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
          data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
          aria-label="Toggle navigation">
          <!-- <span class="navbar-toggler-icon"></span> -->
          <span class="fa icon-expand fa-bars"></span>
          <span class="fa icon-close fa-times"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="{{ asset('/') }}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ asset('/movies') }}">Movies</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ asset('/about') }}">About</a>
            </li>

            <li class="nav-item active">
              <a class="nav-link" href="{{ asset('/contact') }}">Contact</a>
            </li>
          </ul>

          <!--/search-right-->
          <!--/search-right-->

          <div class="Login_SignUp" id="login" style="font-size: 2rem ; display: inline-block; position: relative;">
            <!-- <li class="nav-item"> -->
            <a class="nav-link" href="sign_in.html"><i class="fa fa-user-circle-o"></i></a>
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
  <!-- Contact Us Form -->
  <div class="container">
    <h4>Contact Us</h4>
    <h3>Leave a Message</h3>
    <p>If you have a question regarding our services,
      feel free to contact us using the form below.</p>

    <form name="contact-us-form" action="#" onsubmit="return validateForm()">
      <div class="row100" id="fname-row100">
        <div class="col">
          <div class="inputBox" id="fname-inputBox">
            <input type="text" name="fname" onclick="triggerAnim('fname')"/>
            <span class="text">First Name</span>
            <span class="line" id="fname-line"></span>
          </div>
        </div>
        <div class="col">
          <div class="inputBox" id="lname-inputBox">
            <input type="text" name="lname" onclick="triggerAnim('lname')"/>
            <span class="text">Last Name</span>
            <span class="line" id="lname-line"></span>
          </div>
        </div>
      </div>
      <div class="row100" id="email-row100">
        <div class="col">
          <div class="inputBox" id="email-inputBox">
            <input type="email" name="email" pattern="[^ @]*@[^ @]*" onclick="triggerAnim('email')"/>
            <span class="text">Email ID</span>
            <span class="line" id="email-line"></span>
          </div>
        </div>
        <div class="col">
          <div class="inputBox" id="tel-inputBox">
            <input type="tel" name="m-num" onclick="triggerAnim('tel')" />
            <span class="text">Mobile Number</span>
            <span class="line" id="tel-line"></span>
          </div>
        </div>
      </div>
      <div class="row100">
        <div class="col">
          <div class="inputBox textarea">
            <textarea name="msg"></textarea>
            <span class="text">Type your message Here...</span>
            <span class="line"></span>
          </div>
        </div>
      </div>
      <div class="row100">
        <div class="col">
          <div class="submitbutton">
            <button class="btn submitbtn" type="submit">Submit</button>
          </div>
        </div>
      </div>
    </form>
  </div>
  <script type="text/javascript" src="assets/js/contact-us.js"></script>
  <script type="text/javascript" src="assets/js/as-alert-message.min.js"></script>
  <script src="assets/js/jquery-3.3.1.min.js"></script>
  <!--/theme-change-->
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
  <script src="assets/js/theme-change.js"></script>
  <!-- disable body scroll which navbar is in active -->
  <script>
    $(function () {
      $('.navbar-toggler').click(function () {
        $('body').toggleClass('noscroll');
      })
    });
  </script>
  <!-- disable body scroll which navbar is in active -->
  <!--/MENU-JS-->
  <script>
    $(window).on("scroll", function () {
      var scroll = $(window).scrollTop();

      if (scroll >= 80) {
        $("#site-header").addClass("nav-fixed");
      } else {
        $("#site-header").removeClass("nav-fixed");
      }
    });

    //Main navigation Active Class Add Remove
    $(".navbar-toggler").on("click", function () {
      $("header").toggleClass("active");
    });
    $(document).on("ready", function () {
      if ($(window).width() > 991) {
        $("header").removeClass("active");
      }
      $(window).on("resize", function () {
        if ($(window).width() > 991) {
          $("header").removeClass("active");
        }
      });
    });
  </script>
  <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>