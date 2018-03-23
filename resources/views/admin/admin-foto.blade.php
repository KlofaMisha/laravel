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


		<!-- wedding -->
		@if ($category == 'wedding')
			<!-- 1 -->
	      		@if ($nav == 1)
					<li class="active">
					    <a class="admin_border" href="/admin/wedding_one/">Весілля: ОДИН</a>
					</li>
				@else
				    <li class="">
				      	<a class="admin_border" href="/admin/wedding_one/">Весілля: ОДИН</a>
				 	</li>
				@endif
			<!-- 1 end-->
			<!-- 2 -->
	      		@if ($nav == 2)
					<li class="active">
					    <a class="admin_border" href="/admin/wedding_two/">Весілля: ДВА</a>
					</li>
				@else
				    <li class="">
				      	<a class="admin_border" href="/admin/wedding_two/">Весілля: ДВА</a>
				 	</li>
				@endif
			<!-- 2 end-->

			<!-- 3 -->
	      		@if ($nav == 3)
					<li class="active">
					    <a class="admin_border" href="/admin/wedding_three/">Весілля: ТРИ</a>
					</li>
				@else
				    <li class="">
				      	<a class="admin_border" href="/admin/wedding_three/">Весілля: ТРИ</a>
				 	</li>
				@endif
			<!-- 3 end-->

			<!-- 4 -->
	      		@if ($nav == 4)
					<li class="active">
					    <a class="admin_border" href="/admin/wedding_four/">Весілля: ЧОТИРИ</a>
					</li>
				@else
				    <li class="">
				      	<a class="admin_border" href="/admin/wedding_four/">Весілля: ЧОТИРИ</a>
				 	</li>
				@endif
			<!-- 4 end-->

			<!-- 5 -->
	      		@if ($nav == 5)
					<li class="active">
					    <a class="admin_border" href="/admin/wedding_five/">Весілля: П'ЯТЬ</a>
					</li>
				@else
				    <li class="">
				      	<a class="admin_border" href="/admin/wedding_five/">Весілля: П'ЯТЬ</a>
				 	</li>
				@endif
			<!-- 5 end-->


			<!-- 6 -->
	      		@if ($nav == 6)
					<li class="active">
					     <a class="admin_border" href="/admin/wedding_six/">Весілля: ШІСТЬ</a>
					</li>
				@else
				    <li class="">
				      	 <a class="admin_border" href="/admin/wedding_six/">Весілля: ШІСТЬ</a>
				 	</li>
				@endif
			<!-- 6 end-->

			<!-- 7 -->
	      		@if ($nav == 7)
					<li class="active">
					    <a class="admin_border" href="/admin/wedding_seven/">Весілля: СІМ</a>
					</li>
				@else
				    <li class="">
				      	<a class="admin_border" href="/admin/wedding_seven/">Весілля: СІМ</a>
				 	</li>
				@endif
			<!-- 7 end-->

			<!-- 8 -->
	      		@if ($nav == 8)
					<li class="active">
					    <a class="admin_border" href="/admin/wedding_eight/">Весілля: ВІСІМ</a>
					</li>
				@else
				    <li class="">
				        <a class="admin_border" href="/admin/wedding_eight/">Весілля: ВІСІМ</a>
				 	</li>
				@endif
			<!-- 8 end-->







			<!-- 9 -->
	      		@if ($nav == 9)
					<li class="active">
					    <a class="admin_border" href="/admin/wedding_nine/">Весілля: ДЕВЯТЬ</a>
					</li>
				@else
				    <li class="">
				      	<a class="admin_border" href="/admin/wedding_nine/">Весілля: ДЕВЯТЬ</a>
				 	</li>
				@endif
			<!-- 9 end-->
			<!-- 10 -->
	      		@if ($nav == 10)
					<li class="active">
					    <a class="admin_border" href="/admin/wedding_ten/">Весілля: ДЕСЯТЬ</a>
					</li>
				@else
				    <li class="">
				      	<a class="admin_border" href="/admin/wedding_ten/">Весілля: ДЕСЯТЬ</a>
				 	</li>
				@endif
			<!-- 10 end-->

			<!-- 11 -->
	      		@if ($nav == 11)
					<li class="active">
					    <a class="admin_border" href="/admin/wedding_eleven/">Весілля: ОДИНАДЦЯТЬ</a>
					</li>
				@else
				    <li class="">
				      	<a class="admin_border" href="/admin/wedding_eleven/">Весілля: ОДИНАДЦЯТЬ</a>
				 	</li>
				@endif
			<!-- 11 end-->

			<!-- 12 -->
	      		@if ($nav == 12)
					<li class="active">
					    <a class="admin_border" href="/admin/wedding_twelve/">Весілля: ДВАНАДЦЯТЬ</a>
					</li>
				@else
				    <li class="">
				      	<a class="admin_border" href="/admin/wedding_twelve/">Весілля: ДВАНАДЦЯТЬ</a>
				 	</li>
				@endif
			<!-- 12 end-->

			<!-- 13 -->
	      		@if ($nav == 13)
					<li class="active">
					    <a class="admin_border" href="/admin/wedding_thirteen/">Весілля: ТРИНАДЦЯТЬ</a>
					</li>
				@else
				    <li class="">
				      	<a class="admin_border" href="/admin/wedding_thirteen/">Весілля: ТРИНАДЦЯТЬ</a>
				 	</li>
				@endif
			<!-- 13 end-->


			<!-- 14 -->
	      		@if ($nav == 14)
					<li class="active">
					     <a class="admin_border" href="/admin/wedding_fourteen/">Весілля: ЧОТИРНАДЦЯТЬ</a>
					</li>
				@else
				    <li class="">
				      	 <a class="admin_border" href="/admin/wedding_fourteen/">Весілля: ЧОТИРНАДЦЯТЬ</a>
				 	</li>
				@endif
			<!-- 14 end-->

			<!-- 15 -->
	      		@if ($nav == 15)
					<li class="active">
					    <a class="admin_border" href="/admin/wedding_fifteen/">Весілля: П'ЯТНАДЦЯТЬ</a>
					</li>
				@else
				    <li class="">
				      	<a class="admin_border" href="/admin/wedding_fifteen/">Весілля: П'ЯТНАДЦЯТЬ</a>
				 	</li>
				@endif
			<!-- 15 end-->

			<!-- 16 -->
	      		@if ($nav == 16)
					<li class="active">
					    <a class="admin_border" href="/admin/wedding_sixteen/">Весілля: ШІСНАДЦЯТЬ</a>
					</li>
				@else
				    <li class="">
				        <a class="admin_border" href="/admin/wedding_sixteen/">Весілля: ШІСНАДЦЯТЬ</a>
				 	</li>
				@endif
			<!-- 16 end-->


		@endif
		<!-- wedding end -->



			  



		<!-- ceremony -->
		@if ($category == 'ceremony')
			<!-- 1 -->
	      		@if ($nav == 1)
					<li class="active">
					    <a class="admin_border" href="/admin/ceremony_one/">Церемонія: ОДИН</a>
					</li>
				@else
				    <li class="">
				      	<a class="admin_border" href="/admin/ceremony_one/">Церемонія: ОДИН</a>
				 	</li>
				@endif
			<!-- 1 end-->

			<!-- 2 -->
	      		@if ($nav == 2)
					<li class="active">
					    <a class="admin_border" href="/admin/ceremony_two/">Церемонія: ДВА</a>
					</li>
				@else
				    <li class="">
				      	<a class="admin_border" href="/admin/ceremony_two/">Церемонія: ДВА</a>
				 	</li>
				@endif
			<!-- 2 end-->

			<!-- 3 -->
	      		@if ($nav == 3)
					<li class="active">
					    <a class="admin_border" href="/admin/ceremony_three/">Церемонія: ТРИ</a>
					</li>
				@else
				    <li class="">
				      	<a class="admin_border" href="/admin/ceremony_three/">Церемонія: ТРИ</a>
				 	</li>
				@endif
			<!-- 3 end-->

			<!-- 4 -->
	      		@if ($nav == 4)
					<li class="active">
					    <a class="admin_border" href="/admin/ceremony_four/">Церемонія: ЧОТИРИ</a>
					</li>
				@else
				    <li class="">
				      	<a class="admin_border" href="/admin/ceremony_four/">Церемонія: ЧОТИРИ</a>
				 	</li>
				@endif
			<!-- 4 end-->

			<!-- 5 -->
	      		@if ($nav == 5)
					<li class="active">
					    <a class="admin_border" href="/admin/ceremony_five/">Церемонія: П'ЯТЬ</a>
					</li>
				@else
				    <li class="">
				      	<a class="admin_border" href="/admin/ceremony_five/">Церемонія: П'ЯТЬ</a>
				 	</li>
				@endif
			<!-- 5 end-->


			<!-- 6 -->
	      		@if ($nav == 6)
					<li class="active">
					     <a class="admin_border" href="/admin/ceremony_six/">Церемонія: ШІСТЬ</a>
					</li>
				@else
				    <li class="">
				      	 <a class="admin_border" href="/admin/ceremony_six/">Церемонія: ШІСТЬ</a>
				 	</li>
				@endif
			<!-- 6 end-->

			<!-- 7 -->
	      		@if ($nav == 7)
					<li class="active">
					     <a class="admin_border" href="/admin/ceremony_seven/">Церемонія: СІМ</a>
					</li>
				@else
				    <li class="">
				      	 <a class="admin_border" href="/admin/ceremony_seven/">Церемонія: СІМ</a>
				 	</li>
				@endif
			<!-- 7 end-->

			<!-- 8 -->
	      		@if ($nav == 8)
					<li class="active">
					     <a class="admin_border" href="/admin/ceremony_eight/">Церемонія: ВІСІМ</a>
					</li>
				@else
				    <li class="">
				      	 <a class="admin_border" href="/admin/ceremony_eight/">Церемонія: ВІСІМ</a>
				 	</li>
				@endif
			<!-- 8 end-->
		@endif
		<!-- ceremony end -->





		<!-- love_story -->
		@if ($category == 'lovestory')
			<!-- 1 -->
	      		@if ($nav == 1)
					<li class="active">
					    <a class="admin_border" href="/admin/lovestory_one/">love story: ОДИН</a>
					</li>
				@else
				    <li class="">
				      	<a class="admin_border" href="/admin/lovestory_one/">love story: ОДИН</a>
				 	</li>
				@endif
			<!-- 1 end-->

			<!-- 2 -->
	      		@if ($nav == 2)
					<li class="active">
					    <a class="admin_border" href="/admin/lovestory_two/">love story: ДВА</a>
					</li>
				@else
				    <li class="">
				      	<a class="admin_border" href="/admin/lovestory_two/">love story: ДВА</a>
				 	</li>
				@endif
			<!-- 2 end-->

			<!-- 3 -->
	      		@if ($nav == 3)
					<li class="active">
					    <a class="admin_border" href="/admin/lovestory_three/">love story: ТРИ</a>
					</li>
				@else
				    <li class="">
				      	<a class="admin_border" href="/admin/lovestory_three/">love story: ТРИ</a>
				 	</li>
				@endif
			<!-- 3 end-->

			<!-- 4 -->
	      		@if ($nav == 4)
					<li class="active">
					    <a class="admin_border" href="/admin/lovestory_four/">love story: ЧОТИРИ</a>
					</li>
				@else
				    <li class="">
				      	<a class="admin_border" href="/admin/lovestory_four/">love story: ЧОТИРИ</a>
				 	</li>
				@endif
			<!-- 4 end-->

			<!-- 5 -->
	      		@if ($nav == 5)
					<li class="active">
					    <a class="admin_border" href="/admin/lovestory_five/">love story: П'ЯТЬ</a>
					</li>
				@else
				    <li class="">
				      	<a class="admin_border" href="/admin/lovestory_five/">love story: П'ЯТЬ</a>
				 	</li>
				@endif
			<!-- 5 end-->


			<!-- 6 -->
	      		@if ($nav == 6)
					<li class="active">
					     <a class="admin_border" href="/admin/lovestory_six/">love story: ШІСТЬ</a>
					</li>
				@else
				    <li class="">
				      	 <a class="admin_border" href="/admin/lovestory_six/">love story: ШІСТЬ</a>
				 	</li>
				@endif
			<!-- 6 end-->

			<!-- 7 -->
	      		@if ($nav == 7)
					<li class="active">
					     <a class="admin_border" href="/admin/lovestory_seven/">love story: СІМ</a>
					</li>
				@else
				    <li class="">
				      	 <a class="admin_border" href="/admin/lovestory_seven/">love story: СІМ</a>
				 	</li>
				@endif
			<!-- 7 end-->

			<!-- 8 -->
	      		@if ($nav == 8)
					<li class="active">
					     <a class="admin_border" href="/admin/lovestory_eight/">love story: ВІСІМ</a>
					</li>
				@else
				    <li class="">
				      	 <a class="admin_border" href="/admin/lovestory_eight/">love story: ВІСІМ</a>
				 	</li>
				@endif
			<!-- 8 end-->
		@endif
		<!-- love_story end -->




		<!-- family -->
		@if ($category == 'family')
			<!-- 1 -->
	      		@if ($nav == 1)
					<li class="active">
					    <a class="admin_border" href="/admin/family_one/">Сімейна: ОДИН</a>
					</li>
				@else
				    <li class="">
				      	<a class="admin_border" href="/admin/family_one/">Сімейна: ОДИН</a>
				 	</li>
				@endif
			<!-- 1 end-->

			<!-- 2 -->
	      		@if ($nav == 2)
					<li class="active">
					    <a class="admin_border" href="/admin/family_two/">Сімейна: ДВА</a>
					</li>
				@else
				    <li class="">
				      	<a class="admin_border" href="/admin/family_two/">Сімейна: ДВА</a>
				 	</li>
				@endif
			<!-- 2 end-->

			<!-- 3 -->
	      		@if ($nav == 3)
					<li class="active">
					    <a class="admin_border" href="/admin/family_three/">Сімейна: ТРИ</a>
					</li>
				@else
				    <li class="">
				      	<a class="admin_border" href="/admin/family_three/">Сімейна: ТРИ</a>
				 	</li>
				@endif
			<!-- 3 end-->

			<!-- 4 -->
	      		@if ($nav == 4)
					<li class="active">
					    <a class="admin_border" href="/admin/family_four/">Сімейна: ЧОТИРИ</a>
					</li>
				@else
				    <li class="">
				      	<a class="admin_border" href="/admin/family_four/">Сімейна: ЧОТИРИ</a>
				 	</li>
				@endif
			<!-- 4 end-->

			<!-- 5 -->
	      		@if ($nav == 5)
					<li class="active">
					    <a class="admin_border" href="/admin/family_five/">Сімейна: П'ЯТЬ</a>
					</li>
				@else
				    <li class="">
				      	<a class="admin_border" href="/admin/family_five/">Сімейна: П'ЯТЬ</a>
				 	</li>
				@endif
			<!-- 5 end-->


			<!-- 6 -->
	      		@if ($nav == 6)
					<li class="active">
					     <a class="admin_border" href="/admin/family_six/">Сімейна: ШІСТЬ</a>
					</li>
				@else
				    <li class="">
				      	 <a class="admin_border" href="/admin/family_six/">Сімейна: ШІСТЬ</a>
				 	</li>
				@endif
			<!-- 6 end-->

			<!-- 7 -->
	      		@if ($nav == 7)
					<li class="active">
					     <a class="admin_border" href="/admin/family_seven/">Сімейна: СІМ</a>
					</li>
				@else
				    <li class="">
				      	 <a class="admin_border" href="/admin/family_seven/">Сімейна: СІМ</a>
				 	</li>
				@endif
			<!-- 7 end-->

			<!-- 8 -->
	      		@if ($nav == 8)
					<li class="active">
					     <a class="admin_border" href="/admin/family_eight/">Сімейна: ВІСІМ</a>
					</li>
				@else
				    <li class="">
				      	 <a class="admin_border" href="/admin/family_eight/">Сімейна: ВІСІМ</a>
				 	</li>
				@endif
			<!-- 8 end-->
		@endif
		<!-- family end -->



		<!-- individual -->
		@if ($category == 'individual')
			<!-- 1 -->
	      		@if ($nav == 1)
					<li class="active">
					    <a class="admin_border" href="/admin/individual_one/">Індивідуальна: ОДИН</a>
					</li>
				@else
				    <li class="">
				      	<a class="admin_border" href="/admin/individual_one/">Індивідуальна: ОДИН</a>
				 	</li>
				@endif
			<!-- 1 end-->

			<!-- 2 -->
	      		@if ($nav == 2)
					<li class="active">
					    <a class="admin_border" href="/admin/individual_two/">Індивідуальна: ДВА</a>
					</li>
				@else
				    <li class="">
				      	<a class="admin_border" href="/admin/individual_two/">Індивідуальна: ДВА</a>
				 	</li>
				@endif
			<!-- 2 end-->

			<!-- 3 -->
	      		@if ($nav == 3)
					<li class="active">
					    <a class="admin_border" href="/admin/individual_three/">Індивідуальна: ТРИ</a>
					</li>
				@else
				    <li class="">
				      	<a class="admin_border" href="/admin/individual_three/">Індивідуальна: ТРИ</a>
				 	</li>
				@endif
			<!-- 3 end-->

			<!-- 4 -->
	      		@if ($nav == 4)
					<li class="active">
					    <a class="admin_border" href="/admin/individual_four/">Індивідуальна: ЧОТИРИ</a>
					</li>
				@else
				    <li class="">
				      	<a class="admin_border" href="/admin/individual_four/">Індивідуальна: ЧОТИРИ</a>
				 	</li>
				@endif
			<!-- 4 end-->

			<!-- 5 -->
	      		@if ($nav == 5)
					<li class="active">
					    <a class="admin_border" href="/admin/individual_five/">Індивідуальна: П'ЯТЬ</a>
					</li>
				@else
				    <li class="">
				      	<a class="admin_border" href="/admin/individual_five/">Індивідуальна: П'ЯТЬ</a>
				 	</li>
				@endif
			<!-- 5 end-->


			<!-- 6 -->
	      		@if ($nav == 6)
					<li class="active">
					     <a class="admin_border" href="/admin/individual_six/">Індивідуальна: ШІСТЬ</a>
					</li>
				@else
				    <li class="">
				      	 <a class="admin_border" href="/admin/individual_six/">Індивідуальна: ШІСТЬ</a>
				 	</li>
				@endif
			<!-- 6 end-->

			<!-- 7 -->
	      		@if ($nav == 7)
					<li class="active">
					     <a class="admin_border" href="/admin/individual_seven/">Індивідуальна: СІМ</a>
					</li>
				@else
				    <li class="">
				      	 <a class="admin_border" href="/admin/individual_seven/">Індивідуальна: СІМ</a>
				 	</li>
				@endif
			<!-- 7 end-->

			<!-- 8 -->
	      		@if ($nav == 8)
					<li class="active">
					     <a class="admin_border" href="/admin/individual_eight/">Індивідуальна: ВІСІМ</a>
					</li>
				@else
				    <li class="">
				      	 <a class="admin_border" href="/admin/individual_eight/">Індивідуальна: ВІСІМ</a>
				 	</li>
				@endif
			<!-- 8 end-->
		@endif
		<!-- individual end -->







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