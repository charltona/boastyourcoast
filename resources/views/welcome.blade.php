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

    <div class="section no-pad-bot hero" id="index-banner">
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
  
  
  <div class="row byc-blue-bg who-are-we">
      <div class="col s7">
		<div class="byc-content">
			<h3>Who are we</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla fermentum lacus eu aliquet imperdiet. Praesent elementum tellus gravida massa euismod, in euismod arcu porttitor.</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla fermentum lacus eu aliquet imperdiet. Praesent elementum tellus gravida massa euismod, in euismod arcu porttitor.</p>
			</br>
			<a href="#" class="btn-large byc-white expand">Find out more</a>
		</div>
	  </div>
      <div class="col s5 "><div class="byc-content-bg"></div></div>
    </div>
  
    <footer class="page-footer orange">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">Boast your Coast</h5>
                    <p class="grey-text text-lighten-4">Insert Description</p>


                </div>
                <div class="col l3 s12">
                    <h5 class="white-text">Site Map</h5>
                    <ul>
                        <li><a class="white-text" href="#!">Link 1</a></li>
                        <li><a class="white-text" href="#!">Link 2</a></li>
                        <li><a class="white-text" href="#!">Link 3</a></li>
                        <li><a class="white-text" href="#!">Link 4</a></li>
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
</body>

</html>