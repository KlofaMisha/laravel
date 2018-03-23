@extends('layouts.app')

@section('content')

@include('templates.navigator')





<section class="section_blog">
    <div class="container">
        
        <div class="row" style="margin-top: 110px;">
            @foreach($blog as $key => $bl)

            <i style="display: none;">{{$i++}}</i>

                @if($i%7!=0)
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="blog_main_photo">
                            <img src="{{asset("public/images/$bl->image")}}" alt="">
                        </div>
                        <div class="blog_main_text">
                            <h4>{{ $bl->title }}</h4>
                            <div class="blog_text_content" >{!! $bl->description !!}
                                <div class="blog_text_bg"></div>

                            </div>
                            <div class="blog_text_button">
                                <a href="/blog/{{ $bl->url }}">читати</a>
                            </div>
                        </div>
                    </div>
                @else
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="blog_main_photo col-lg-6 col-md-6 col-sm-6 col-xs-5">
                            <img src="{{asset("public/images/$bl->image")}}" alt="">
                        </div>
                        <div class="blog_main_text col-lg-6 col-md-6 col-sm-6 col-xs-7">
                            <h4>{{ $bl->title }}</h4>
                            <div class="blog_text_content" >{!! $bl->description !!}</div>
                            <div class="blog_text_button">
                                <a href="/blog/{{ $bl->url }}">читати</a>
                            </div>
                        </div>
                    </div>










                @endif
             

            @endforeach
            
        </div>

    </div>
</section>
<!-- section_blog -->





@endsection
