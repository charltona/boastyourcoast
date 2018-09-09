<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title') - Boast Your Coast!</title>

    <!-- Fonts -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Assistan:400,700|Kalam" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="/css/materialize.min.css" media="screen,projection" />
    <link type="text/css" rel="stylesheet" href="/css/style.css">
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
    <script type="text/javascript" src="/js/materialize.min.js"></script>



    <div class="content">
    <nav>
        <div class="nav-wrapper container"><a id="logo-container" href="/home" class="brand-logo"><img
                        src="/img/logo.png"></a>
            <ul class="right hide-on-med-and-down">
				<li><a href="{{ url('/home') }}">Home</a></li>
				<li><a href="/resident-information">Resident Info</a></li>
				<li><a href="/local-business" class="dropdown-trigger" data-target="dropdown1">Business Hub<i class="material-icons right">arrow_drop_down</i></a></li>
				<ul id="dropdown1" class="dropdown-content">
				  <li><a href="/store/create">Register business</a></li>
				</ul>
				<li><a href="/visitor-information">Visitors</a></li>
				<li><a href="#">FAQ</a></li>
				<li><a href="#">Contact</a></li>
            </ul>

            <ul id="nav-mobile" class="sidenav">
				<li><a href="{{ url('/home') }}">Home</a></li>
                <li><a href="/resident-information">Resident Info</a></li>
                <li><a href="/local-business">Business Hub</a></li>
				<li><a href="/visitor-information">Visitors</a></li>
				<li><a href="#">FAQ</a></li>
				<li><a href="#">Contact</a></li>
                @if (Route::has('login'))
                    @auth
                        
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

       @yield('content')

    <footer class="page-footer orange">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">Boast your Coast</h5>
                    <p class="grey-text text-lighten-4">Proudly supported by the Sunshine Coast Council. Help us support
                        local businesses, foster sustainable growth and improve the quality of life for all residents.</p>


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
	<script>
    $(document).ready(function () {
		$('.sidenav').sidenav();
		$(".dropdown-trigger").dropdown();
    });
	</script>
</body>

</html>