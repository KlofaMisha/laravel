<!DOCTYPE html>
<html lang="en">
<head>
	  <meta charset="UTF-8">
	  <title>@yield('title')</title>
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <meta charset="utf-8">
	  <link rel="icon" href="public/img/element.png" type="images/png">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	  <link href="https://fonts.googleapis.com/css?family=Exo+2:300,400,500,600,700,800,900" rel="stylesheet">
	  <link rel="stylesheet" href="{{ asset('public/css/owl.carousel.min.css') }}">
	  <link rel="stylesheet" href="{{ asset('public/css/style.css') }}">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script></head>
<body>

<nav class="navbar navbar-default">
	  <div class="container-fluid">
	    <div class="navbar-header">
	    <div class="collapse navbar-collapse" id="myNavbar">
	      <ul class="nav navbar-nav">
	      	<li class="" style="background: #8ecaeb;">
			      <a class="admin_border" href="/admin/">Admin</a>
			  </li>
			  <li >
			      <a class="admin_border" href="/admin/feedback/">Всі відгуки</a>
			  </li>
	       	  
	      </ul>
	     </div>
	  </div>
	  <h4 style="float: right;">Привіт Admin!</h4>
	</nav>


	<div class="container">
		<div class="row">
			@include('admin.part.msg')
			@yield('content')
		</div>
	</div>
</body>
</html>