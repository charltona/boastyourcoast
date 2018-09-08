<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Boast Your Coast!</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Assistan:400,700|Kalam" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
    <link type="text/css" rel="stylesheet" href="css/style.css">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Styles -->

    <!-- amCharts javascript sources -->
    <script type="text/javascript" src="https://www.amcharts.com/lib/3/amcharts.js"></script>
    <script type="text/javascript" src="https://www.amcharts.com/lib/3/pie.js"></script>
    <script type="text/javascript" src="https://www.amcharts.com/lib/3/themes/light.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


</head>

<body>

    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/materialize.min.js"></script>



    <div class="content">
        <nav>
            <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo"><img src="img/logo.png"></a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="#">Navbar Link</a></li>
                </ul>

                <ul id="nav-mobile" class="sidenav">
                    <li><a href="#">Navbar Link</a></li>
                    @if (Route::has('login'))
                    @auth
                    <li><a href="{{ url('/home') }}">Home</a></li>
                    @else
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li>
                    @endauth
                    @endif
                </ul>
                <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            </div>
        </nav>

    </div>

    <div class="section no-pad-bot hero valign-wrapper" id="index-banner">
        <div class="container">
            <br><br>
            <h1 class="header center">Boast Your Coast</h1>
            <div class="row center">
                <h5 class="header col s12 light">Supporting sustainable growth on the Sunshine Coast</h5>
            </div>
            <div class="row center">
                <a href="#" id="download-button" class="btn-large waves-effect waves-light expand">More Info</a>
            </div>
            <br><br>

        </div>
    </div>
    <div class="container">
    <div class="section three-col-options">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m4">
          <div class="icon-block center">
            <img src="img/flipflops.png">
            <h2 class="center byc-yellow">Resident Info</h2>
            <a href="#" id="download-button" class="btn-large byc-yellow expand">More Info</a>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block center">
              <img src="img/cocktail.png">
            <h2 class="center byc-blue">Local Business Hub</h2>
            <a href="#" id="download-button" class="btn-large expand">More Info</a>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block center">
              <img src="img/map.png">
            <h2 class="center byc-pink">Visitor Tips</h2>
            <a href="#" id="download-button" class="btn-large byc-pink expand">More Info</a>
          </div>
        </div>
      </div>

    </div>
  </div>
  
  	<div class="featured-stores">
	<h4 class="center">Featured Local Businesses</h3>
	{{--@include('stores.display-box', ['stores' => $featuredstores])--}}
	</div>
  <div class="row byc-blue-bg who-are-we">
      <div class="col s7  valign-wrapper">
		<div class="byc-content">
				<h3>Who are we</h3>
			<p>Located a short drive North from Brisbane, the Sunshine Coast is so much more than stunning beaches; there’s also a lush hinterland and vibrant craft brewery scene. Sunny Coast residents are known for being laid back, friendly and fond of the beautiful natural wonders that line our Coast.</p>
			<p>Want more info on how you can help our community and small businesses? Look no further!</p>
			</br>
			<a href="#" class="btn-large byc-white expand">Find out more</a>
		</div>
	  </div>
      <div class="col s5 "><div class="byc-content-bg"></div></div>
    </div>


	<div class="row growth-opportunities">
	<div class="container">
	<h3 class="center">Growth and Opportunities</h3>
	<div class="col s6 center">
	<!--<img src="/img/piechart.jpg">-->
        @include('charts.tourism-numbers')
		<p style="font-size: 14px;">Tourism share by region in 2016/2017 Financial Year</br><span style="font-weight: 700;">(Hover to see figures)</span></p>
	</div>
	<div class="col s6">
	<div class="byc-content">
		<p>Did you know that in Queensland, International tourists predominantly select Brisbane and the Gold Coast as their holiday destination of choice? In 2016-2017, <span style="font-weight: 700;">only 11.3% of tourists visiting Queensland chose to visit the Sunshine Coast.</span></p>
	<p>Tourism in Queensland set to growth exponentially over the next decade. The Sunshine Coast is in a great position to experience sustainable growth across almost all industries as tourists consume a diverse range of services.</p>
	<p>Dataset: <a href="https://data.qld.gov.au/dataset/internat-visitors-qld-tourism-region" target="_blank">[International Visitors by Tourism Region - Queensland Government].</a></p>
	</br>
	<a href="#" class="btn-large byc-pink expand">Find out more</a>
	</div>
	</div>
	</div>
	</div>

	<div class="row byc-yellow-bg better-future">
	<div class="col s5 "><div class="byc-content-bg"></div></div>
      <div class="col s7">
		<div class="byc-content">
			    	<h3>Creating jobs and a better future</h3>
			<p>Helping and supporting local businesses creates new job opportunities for local residents, maintains our community spirit and also <span style="font-weight: 700;">gives smaller businesses a fighting chance for success</span> as the tourism industry grows within the region.</p>
			<p>Supporting our local community is easily! Simply choose to shop local where possible. For more information, check out our Local Business Hub.</p>
			</br>
			<a href="#" class="btn-large byc-white expand">Find out more</a>
		</div>
	  </div>
    </div>
	
	<div class="row byc-pink-bg who-are-we why-tourism">
      <div class="col s7  valign-wrapper">
		<div class="byc-content">
			<h3>Why Tourism</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla fermentum lacus eu aliquet imperdiet. Praesent elementum tellus gravida massa euismod, in euismod arcu porttitor.</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla fermentum lacus eu aliquet imperdiet. Praesent elementum tellus gravida massa euismod, in euismod arcu porttitor.</p>
			</br>
			<a href="#" class="btn-large byc-white expand">Find out more</a>
		</div>
	  </div>
      <div class="col s5 ">
	  <img src="/img/palms.png">
	  </div>
    </div>
	
	
	<div class="row living-in-sc">
	<div class="container">
	<h3 class="center">Living on the Sunshine Coast</h3>
	<div class="col s6">
	<div class="byc-content">
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla fermentum lacus eu aliquet imperdiet. Praesent elementum tellus gravida massa euismod, in euismod arcu porttitor. </br></br>Donec fermentum, dui quis rhoncus ullamcorper, magna lorem cursus elit, hendrerit fringilla mi arcu in velit. Aliquam vulputate orci eu diam vestibulum scelerisque. Maecenas orci diam, eleifend vitae ante at, tincidunt interdum quam. Vestibulum ornare ultricies neque non ultricies. </p>
	</br>
	<a href="#" class="btn-large byc-blue expand">Find out more</a>
	</div>
	</div>
	<div class="col s6 center">
	<img src="/img/graph.jpg">
	</div>
	</div>
	</div>
  
    <footer class="page-footer orange">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">Boast your Coast</h5>
                    <p class="grey-text text-lighten-4">Proudly supported by the Sunshine Coast Council. Help us support local businesses, foster sustainable growth and improve the quality of life for all residents.</p>


                </div>
                <div class="col l3 s12">
                    <h5 class="white-text">Site Map</h5>
                    <ul>
                        <li><a class="white-text" href="#!">Home</a></li>
                        <li><a class="white-text" href="#!">Local Business Hub</a></li>
                        <li><a class="white-text" href="#!">Resident Info</a></li>
                        <li><a class="white-text" href="#!">Visitor Tips</a></li>
						<li><a class="white-text" href="#!">FAQ</a></li>
                    </ul>
                </div>
                <div class="col l3 s12">
                    <h5 class="white-text">Connect</h5>
                    <ul>
                        <li><a class="white-text" href="#!">Link 1</a></li>
                        <li><a class="white-text" href="#!">Link 2</a></li>
                        <li><a class="white-text" href="#!">Link 3</a></li>
                        <li><a class="white-text" href="#!">Link 4</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container center">
                Made by <a class="orange-text text-lighten-3" href="#">A Nice Well Behaved Cheese</a> | GovHack 2018
            </div>
        </div>
    </footer>
	<script>
	$(document).ready(function () {
    $('div#tourismnumbers a').css('color', '#fff');
	console.log("test");
	});
	</script>
</body>

</html>