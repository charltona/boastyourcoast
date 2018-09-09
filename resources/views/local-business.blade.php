@extends('landing')
@section('title', 'Local Business')

@section('content')
<div class="business-hub byc-page">
		<div class="page-title valign-wrapper">
			<div class="container">
			<h1>Business Hub</h1>
			</div>
		</div>
  
	<div class="container">
	<div class="featured" style="margin-top: 60px;">
    <h4 class="center">Featured Local Businesses</h3>
    @include('stores.display-box', ['stores' => $stores])
	</div>
	<div class="byc-section">
	<div class="row">
	<div class="col l6 s12">
	<h4>Register your business</h4>
	<p>Local businesses play a role in many of the Sunshine Coast City Councils strategies for economic growth through sustainable tourism. One of the strategic directions for the Sunshine Coast is to help businesses leverage events and opportunities to promote tourism to the Sunshine Coast. To do this we have created the Local Business Hub here on Boast Your Coast where you can submit your business listing which will be viewed by residents and tourists.</p>
	<p>You can get involved by creating your local business listing here and promote the #BoastYourCoast hashtag through social media channels.</p>
	<a href="/store/create" class="btn-large byc-blue">Register</a>
	</div>
	<div class="col l6 s12">
	<img src="/img/photo-4.jpg" style="max-width:100%;">
	</div>
	</div>
	</div>
	
	<div class="byc-section">
	<div class="row">
	<div class="col l6 s12">
	<img src="/img/photo-5.jpg" style="max-width:100%;">
	</div>
	<div class="col l6 s12">
	<h4>The figures</h4>
	<p>In 2016-17, tourism and hospitality lead to $2.5 billion in sales on the Sunshine Coast, adding a total value of $1.3 billion to the region. Tourism is a key driver for the Australian economy as it includes many different industries. It is estimated that tourism directly represents 7.9% of the total Sunshine Coast economy, compared to 5.3% in regional parts of Queensland. Industries such as Cafes, restaurants, retail trade, accomodation and many others make up 10% of Queensland’s tourism consumption.</p> 

	<p>Growth in the tourism sector can lead to growth in most local businesses indirectly as more people visit the Sunshine Coast, more businesses can open which mean more jobs for locals. Currently, the tourism sector employs approximately 23,000 people, directly and indirectly which is just shy of 10% of the workforce on the Sunshine Coast.</p>
	</div>
	</div>
	</div>
	
	</div>
	<div class="cta center" style="background-color: #ff6160; text-align: center; color: #fff; paddin-top: 40px;">
	<div style="padding-top: 70px; padding-bottom: 70px;">
	<p class="center" style="display: block; padding-top: 0px; margin-top: 0px; font-size: 20px;">Want to find out more about how you can promote your Sunshine Coast business?</p>
	<a class="btn-large byc-white" href="#">Contact Us</a>
	</div>
	</div>
</div>
@endsection