@extends('layouts.app')

@section('content')

@include('templates.navigator')



<section class="sectionBlogid">
	<div class="container">
		<div class="row" style="margin-top: 50px;">

			



					<div class="col-lg-10 col-lg-offset-1 col-md-12 col-sm-12 col-xs-12" style="text-align: center;">
							<h2 style="">
								<i></i>
								<span>
								{{$blog->title}}
								</span>
								<i></i>
							</h2>
							<i style="margin-left: 45px;">{{ Carbon\Carbon::parse($blog->updated_at)->format('F d, Y') }}</i>
							<div class="blogContetn" >{!! $blog->description !!}</div>

						<div class="" style="clear: both;padding-bottom: 25px;padding-left: 15px; padding-top: 15px;">





							
				 

							<div class="sotsFooter" style="text-align: center; margin-top: 100px;">
								<a href="/blog" style="float: left; border: 2px dashed #838080; text-decoration: none; padding: 6px 13px; border-radius: 3px; color: #000;margin-bottom: 8px;">НАЗАД</a>

								
							 </div>

						</div>
					</div>
			
				
		</div>
	</div>
</section>


@endsection