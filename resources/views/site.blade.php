<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>il Studio - студія краси у Львові</title>
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <meta charset="utf-8">
	  <meta name="Keywords" content="Салон краси, косметика, краса, салон, зачіска, манікюр, перукарня у м. Львів"> 
	  <link rel="icon" href="public/img/element.png" type="images/png">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	  <link href="https://fonts.googleapis.com/css?family=Exo+2:300,400,500,600,700,800,900" rel="stylesheet">
	  <link rel="stylesheet" href="{{ asset('public/css/owl.carousel.min.css') }}">
	  <link rel="stylesheet" href="{{ asset('public/css/style.css') }}">

	  

	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>



@yield('content')



<footer class="sectionFooter">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-3 col-sm-6 col-sx-12 logoFooter">
				<img src="public/img/ilstudio.png" alt="">
			</div>
			<div class="col-lg-3 col-md-3 col-sm-6 col-sx-12">
				<div>
					<img src="public/img/Location.png" alt="">
				</div>
				<div>
					@foreach($contacts as $contact)
						@if ($contact->address != "")
							<p class="address">{{$contact->address}}</p>
						@endif
					@endforeach
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-6 col-sx-12">
				<div>
					<img src="public/img/phone.png" alt="">
				</div>
				<div>
					@foreach($contacts as $contact)
						@if ($contact->tel != "")
							<a href="tel:{{$contact->tel}}">{{$contact->tel}}</a><br>
						@endif
					@endforeach
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-6 col-sx-12">
				<div>
					<img src="public/img/mail.png" alt="">
				</div>
				<div>
					@foreach($contacts as $contact)
						@if ($contact->email != "")
							<a href="mailto:{{$contact->email}}">{{$contact->email}}</a><br>
						@endif
					@endforeach
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-3 col-lg-offset-9 col-md-3 col-md-offset-9 col-sm-4 col-sm-offset-6 col-xs-12  sotsFooter">
				<a href="https://www.facebook.com/ilstudioua">
					<img src="public/img/facebook.png" alt="facebook">
				</a>
				
				<a href="https://plus.google.com/b/104753892431609165458/104753892431609165458">
		      		<img src="public/img/gogle+.png" alt="gogle+">
		      	</a>

				<a href="https://www.instagram.com/il_studio_salon">
		      		<img src="public/img/instagram.png" alt="instagram">
		      	</a>
	
				
			</div>



		</div>
	</div>
	<div class="studio2017">
		<h4>il Studio 2017 ©</h4>
	</div>
</footer>

<script src="{{ asset('public/js/jquery.min.js') }}"></script>
<script src="{{ asset('public/js/owl.carousel.js') }}"></script>

<script src="{{ asset('public/js/script.js')}} "></script>
<script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC9GbnH2xb8JAJMYr4zl-MDxrrz1NKwlvA&callback=initMap">
    </script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-109447144-1"></script>

</body>
</html>
