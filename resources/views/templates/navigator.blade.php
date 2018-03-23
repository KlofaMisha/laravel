<div class="navigator">
	<nav class="navbar navbar-inverse navbar-fixed-top">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>                        
	      </button>
	    </div>
	    <div class="collapse navbar-collapse" id="myNavbar">
	     	<ul class="nav navbar-nav">
	     		<!-- main -->
	      		@if ($navactiv == 7)
					 <li class="active">
			        	<a href="{{ route('main') }}">ГОЛОВНА</a>
			        </li>
				@else
				    <li class="">
			        	<a href="{{ route('main') }}">ГОЛОВНА</a>
			        </li>
				@endif
			<!-- main end-->

	      	<!-- 0 -->
	      		@if ($navactiv == 0)
					 <li class="active">
			        	<a href="{{ route('portfolio') }}">ПОРТФОЛІО</a>
			        </li>
				@else
				    <li class="">
			        	<a href="{{ route('portfolio') }}">ПОРТФОЛІО</a>
			        </li>
				@endif
			<!-- 0 end-->



			<!-- 1 -->
	      		@if ($navactiv == 1)
					<li class="active">
			     		<a href="{{ route('about') }}">ПРО МЕНЕ</a>
			     	</li>
				@else
				    <li>
			     		<a href="{{ route('about') }}">ПРО МЕНЕ</a>
			     	</li>
				@endif
			<!-- 1 end-->



			<!-- 3 -->
	      		@if ($navactiv == 3)
					<li class="active">
			     		<a href="{{ route('price') }}">ПОСЛУГИ</a>
			     	</li>
				@else
				    <li>
			     		<a href="{{ route('price') }}">ПОСЛУГИ</a>
			     	</li>
				@endif
			<!-- 3 end-->




			<!-- 4 -->
	      		@if ($navactiv == 4)
					<li class="active">
			     		<a href="{{ route('certificate') }}">ПОДАРУНКОВІ СЕРТИФІКАТИ</a>
			     	</li>
				@else
				    <li>
			     		<a href="{{ route('certificate') }}">ПОДАРУНКОВІ СЕРТИФІКАТИ</a>
			     	</li>
				@endif
			<!-- 4 end-->


			<!-- 2 -->
	      		@if ($navactiv == 2)
					<li class="active">
			     		<a href="{{ route('stage') }}">ВІДГУКИ</a>
			     	</li>
				@else
				    <li>
			     		<a href="{{ route('stage') }}">ВІДГУКИ</a>
			     	</li>
				@endif
			<!-- 2 end-->



			<!-- 5 -->
	      		@if ($navactiv == 5)
					<li class="active">
			     		<a href="{{ route('blog') }}">БЛОГ</a>
			     	</li>
				@else
				    <li>
			     		<a href="{{ route('blog') }}">БЛОГ</a>
			     	</li>
				@endif
			<!-- 5 end-->




			<!-- 6 -->
	      		@if ($navactiv == 6)
					<li class="active">
			     		<a href="{{ route('feedback') }}">КОНТАКТИ</a>
			     	</li>
				@else
				    <li>
			     		<a href="{{ route('feedback') }}">КОНТАКТИ</a>
			     	</li>
				@endif
			<!-- 6 end-->
			<ul class="sotsial_nav_ul">
					<li>
						<a href="https://vk.com/ivanshumyk">
							<img src="{{ asset('public/img/sotsial_vk.png')}}" alt="">
						</a>
					</li>
					<li>
						<a href="https://www.facebook.com/vaniashumyk">
							<img src="{{ asset('public/img/sotsial_facebook.png')}}" alt="">
						</a>
					</li>
					<li>
						<a href="https://www.instagram.com/ivanshumyk">
							<img src="{{ asset('public/img/sotsial_instagram.png')}}" alt="">
						</a>
					</li>
					<li>
						<a href="https://plus.google.com/u/0/115383695551615171429">
							<img src="{{ asset('public/img/sotsial_google.png')}}" alt="">
						</a>
					</li>
				</ul>

	      </ul>


	    </div>
	  </div>
	  <div class="container">
		<div class="row">
			
		</div>
	</div>
	</nav>
	
</div>
<!-- ___navigator__ -->