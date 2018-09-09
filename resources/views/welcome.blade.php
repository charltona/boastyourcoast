<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Boast Your Coast!</title>

    <!-- Fonts -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Assistan:400,700|Kalam" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="css/style.css">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
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

@include('nav')

<div class="section no-pad-bot hero valign-wrapper" id="index-banner">
    <div class="container">
        <br><br>
        <h1 class="header center">Boast Your Coast</h1>
        <div class="row center">
            <h5 class="header col s12 light">Supporting sustainable growth on the Sunshine Coast</h5>
        </div>
        <div class="row center">
            <a href="/local-business" id="download-button" class="btn-large waves-effect waves-light expand">More Info</a>
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
                    <a href="/resident-information" id="download-button" class="btn-large byc-yellow expand">More Info</a>
                </div>
            </div>

            <div class="col s12 m4">
                <div class="icon-block center">
                    <img src="img/cocktail.png">
                    <h2 class="center byc-blue">Local Business Hub</h2>
                    <a href="/local-business" id="download-button" class="btn-large expand">More Info</a>
                </div>
            </div>

            <div class="col s12 m4">
                <div class="icon-block center">
                    <img src="img/map.png">
                    <h2 class="center byc-pink">Visitor Tips</h2>
                    <a href="/visitor-information" id="download-button" class="btn-large byc-pink expand">More Info</a>
                </div>
            </div>
        </div>

    </div>
</div>

<div class="featured-stores">
	<div class="container">
    <h4 class="center">Featured Local Businesses</h3>
    @include('stores.display-box', ['stores' => $featuredstores])
	</div>
</div>
<div class="row byc-blue-bg who-are-we">
    <div class="col l7 s12 valign-wrapper">
        <div class="byc-content">
            <h3>Who are we</h3>
            <p>Located a short drive North from Brisbane, the Sunshine Coast is so much more than stunning beaches;
                there’s also a lush hinterland and vibrant craft brewery scene. Sunny Coast residents are known for
                being laid back, friendly and fond of the beautiful natural wonders that line our Coast.</p>
            <p>Want more info on how you can help our community and small businesses? Look no further!</p>
            </br>
            <a href="/faq" class="btn-large byc-white expand">Find out more</a>
        </div>
    </div>
    <div class="col l5 s12">
        <div class="byc-content-bg"></div>
    </div>
</div>


<div class="row growth-opportunities">
    <div class="container">
        <h3 class="center">Growth and Opportunities</h3>
        <div class="col l6 s12 center">

            @include('charts.tourism-numbers')
            <p style="font-size: 14px;">Tourism share by region in 2016/2017 Financial Year</br><span
                        style="font-weight: 700;">(Hover to see figures)</span></p>
        </div>
        <div class="col l6 s12">
            <div class="byc-content">
                <p>Did you know that in Queensland, International tourists predominantly select Brisbane and the Gold
                    Coast as their holiday destination of choice? In 2016-2017, <span style="font-weight: 700;">only 11.3% of tourists visiting Queensland chose to visit the Sunshine Coast.</span>
                </p>
                <p>Tourism in Queensland set to growth exponentially over the next decade. The Sunshine Coast is in a
                    great position to experience sustainable growth across almost all industries as tourists consume a
                    diverse range of services.</p>
                <p>Dataset: <a href="https://data.qld.gov.au/dataset/internat-visitors-qld-tourism-region"
                               target="_blank">[International Visitors by Tourism Region - Queensland Government].</a>
                </p>
                </br>
                <a href="/local-business" class="btn-large byc-pink expand">Find out more</a>
            </div>
        </div>
    </div>
</div>

<div class="row byc-yellow-bg better-future">
    <div class="col l5 s12">
        <div class="byc-content-bg"></div>
    </div>
    <div class="col l7 s12">
        <div class="byc-content">
            <h3>Creating jobs and a better future</h3>
            <p>Helping and supporting local businesses creates new job opportunities for local residents, maintains our
                community spirit and also <span style="font-weight: 700;">gives smaller businesses a fighting chance for success</span>
                as the tourism industry grows within the region.</p>
            <p>Supporting our local community is easily! Simply choose to shop local where possible. For more
                information, check out our Local Business Hub.</p>
            </br>
            <a href="/faq" class="btn-large byc-white expand">Find out more</a>
        </div>
    </div>
</div>

<div class="row byc-pink-bg who-are-we why-tourism">
    <div class="col l7 s12">
        <div class="byc-content">
            <h3>Why Tourism</h3>
            <p>Tourism is an essential part of the Australian economy, directly contributing $54.7 billion in 2016-17,
                while employing 1 in 20 Australians and growing 1 in 8 businesses<sup>1</sup>. While Brisbane has seen
                an
                increase of 8.5% YoY for direct tourism GVA, the Sunshine Coast has held steady with less than 1% growth
                YoY for 2016-17<sup>2</sup>. Tourism to the Sunshine Coast generates half the $GVA than tourism to the
                Gold
                Coast.</p>
            <p>Tourism directly employs 11.6% of the total workforce on the Sunshine Coast contributing to the Food
                Services, Accomodation, Retail Trade and Transportation industries. With Australian Tourism forecast to
                grow by 50% in the next 10 years<sup>3</sup> there has never been a better time to #BoastYourCoast and
                get behind
                tourism growth in the Sunshine Coast to support the local community.
            </p>
            <sub>Datasets:<br/> 1. <a
                        href="https://www.tra.gov.au/ArticleDocuments/254/Tourism%20Satellite%20Account%202016-17.pdf.aspx?Embed=Y"
                        target="_blank">[Tourism Satelite Account - Australian Government]</a>,<br/> 2. <a
                        href="https://www.tra.gov.au/Economic-analysis/Economic-Value/Regional-Tourism-Satellite-Account/regional-tourism-satellite-account"
                        target="_blank">[Regional Tourism Satelite Account - Australian Government]</a>,<br/> 3. <a
                        href="https://www.tra.gov.au/ArticleDocuments/257/Tourism%20Forecasts.pdf.aspx?Embed=Y"
                        target="_blank">[Tourism Forecasts - Australian Government]</a>
            </sub>
            </br>
        </div>
    </div>
    <div class="col l5 s12">
        <img src="/img/palms.png">
    </div>
</div>


<div class="row living-in-sc">
    <div class="container">
        <h3 class="center">Living on the Sunshine Coast</h3>
        <div class="col xl4">
            <div class="byc-content">
                <p>The Sunshine Coast is home to a diverse range of people! The majority of Sunshine Coast residents are professionals, technician or trade workers, community service workers and clerical staff.</br></br>
				Sustainable growth within the tourism industry will ensure more jobs for local residents, meaning a more secure future and stronger community.
				</p>
				<p style="font-weight: 700;">Dataset: <a href="https://data.sunshinecoast.qld.gov.au/Society/Census-Data-2011-Qld-Employment-by-Industry/grkm-3d2g"
                               target="_blank">[Queensland Employment by Industry - Sunshine Coast Council (ABS)].</a>
                </p>
            </div>
        </div>
        <div class="col xl8 center">
			</br></br>
            <img src="/img/graph2.jpg">
        </div>
    </div>
</div>

@include('footer')

<script>
    $(document).ready(function () {
		$('.sidenav').sidenav();
        $('div#tourismnumbers a').css('color', '#fff');
		$(".dropdown-trigger").dropdown();
    });
</script>
</body>

</html>