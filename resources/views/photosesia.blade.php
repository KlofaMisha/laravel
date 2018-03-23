@extends('layouts.app')

@section('content')

@include('templates.navigator')









<section class="sectoion_photosesia_url">
	@foreach($photos as $photo)
		@if($photo->url == $urls)
			@if($photo->checkbox!='ok')
						@if($photo->checkbox=='bg')
						@if($photo->image!=null)
						<div class="foto_bg" style="background-image: url({{asset("public/images/$photo->image")}});">
							
								<div class="container">
									<div class="row">
										<div class="col-lg-6 col-md-7 col-sm-9 col-xs-11">
											<span>
												{!! $photo->title !!}
											</span>

										</div>
									</div>
								</div>
							

						</div>
						@endif

						<div class="container">
							<div class="row sectoion_photosesia_img col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-12 col-xs-12">





						@else

						<i style="display: none;">{{$i++}}</i>

							@if($i%3==0)
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<a type="button" class="" data-toggle="modal" data-target="#myModal">
									<img src="{{asset("public/images/$photo->image")}}" alt="">
								</a>
							</div>

							@else
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<a type="button" class="" data-toggle="modal" data-target="#myModal">
									<img src="{{asset("public/images/$photo->image")}}" alt="">
								</a>
							</div>

							@endif

						@endif

					@endif
				@endif
			@endforeach
		</div>
	</div>
	<button onclick="topFunction()" id="buttonBtn" ><span class="glyphicon glyphicon-chevron-up" style="font-size: 26px;"></span></button>
</section>




@endsection




@section('script')
<script type="text/javascript">
	
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 500 || document.documentElement.scrollTop > 500) {
        document.getElementById("buttonBtn").style.display = "block";
    } else {
        document.getElementById("buttonBtn").style.display = "none";
    }
}


function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
	
</script>




@endsection