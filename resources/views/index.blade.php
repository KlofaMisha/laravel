@extends('layouts.app')

@section('content')

@include('templates.navigator')

<section class="section_fotosesia">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-lg-offset-4 col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-8 col-xs-offset-2">
                <img src="public/img/logomain.png" alt="">
            </div>
        </div>

         
        <div class="row">
            
              
              <ul class="nav nav-pills col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12">
                <li class="active" style="width: 19.6%;">
                    <a data-toggle="pill" href="#menu0">
                        <div class="pill_img">
                            <img class="pill_img_one" src="public/img/tabs_wd1.png" alt="">
                            <img class="pill_img_two" src="public/img/tabs_wd2.png" alt="">
                        </div>
                        
                        <span>весільна фотосесія</span>
                    </a>
                </li>
                <li style="width: 20%;">
                    <a data-toggle="pill" href="#menu1">
                        <div class="pill_img">
                            <img class="pill_img_one" src="public/img/tabs_rd1.png" alt="">
                            <img class="pill_img_two" src="public/img/tabs_rd2.png" alt="">
                        </div>
                        <span>розписка чи церемонія</span>
                    </a>
                </li>
                <li style="width: 18%;">
                    <a data-toggle="pill" href="#menu2">
                        <div class="pill_img">
                            <img class="pill_img_one" src="public/img/tabs_lv1.png" alt="">
                            <img class="pill_img_two" src="public/img/tabs_lv2.png" alt="">
                        </div>
                        <span>love story</span>
                    </a>
                </li>
                <li style="width: 19%;">
                    <a data-toggle="pill" href="#menu3">
                        <div class="pill_img">
                            <img class="pill_img_one" src="public/img/tabs_fm1.png" alt="">
                            <img class="pill_img_two" src="public/img/tabs_fm2.png" alt="">
                        </div>
                        <span>сімейна фотосесія</span>
                    </a>
                </li>
                <li style="width: 20%; ">
                    <a data-toggle="pill" href="#menu4">
                        <div class="pill_img">
                            <img class="pill_img_one" src="public/img/tabs_sg1.png" alt="">
                            <img class="pill_img_two" src="public/img/tabs_sg2.png" alt="">
                        </div>
                        <span>індивідуальна фотосесія</span>
                    </a>
                </li>
              </ul>
              <!-- ___botton tabs____ -->
              
              <div class="tab-content col-lg-12" style="">
                    <div id="menu0" class="tab-pane fade in active">

                            @foreach($photos as $p)
                            
                                @if ($p->category_id == "wedding" && $p->inline == 'checked' && $p->image != '')
                                    <i style="display: none;">{{$i++}}</i>
                                    @if($i<9)
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                        <div class="tab_pane">
                                            <div class="tab_pane_images">
                                               <img src="public/images/{{ $p->image }}" alt="">
                                            </div>
                                            <div class="tab-pane_none">
                                                <img src="public/img/tab-pane_none.png" alt="">
                                                <span>{{ $p->title }}</span>
                                                <a href="/portfolio/{{ $p->url}}/"></a>
                                            </div>
                                        </div>
                                    </div>
                                     @endif

                                    
                                @endif
                            @endforeach

                    </div>
                    <!-- menu0 -->
                    <div id="menu1" class="tab-pane fade">
                          @foreach($photos as $p)
                                @if ($p->category_id == "ceremony" && $p->inline == 'checked' && $p->image != '')
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                        <div class="tab_pane">
                                            <div class="tab_pane_images">
                                               <img src="public/images/{{ $p->image }}" alt="">
                                            </div>
                                            <div class="tab-pane_none">
                                                <img src="public/img/tab-pane_none.png" alt="">
                                                <span>{{ $p->title }}</span>
                                                <a href="/portfolio/{{ $p->url}}/"></a>
                                            </div>
                                        </div>
                                    </div>

                                    
                                @endif
                            @endforeach
                    </div>
                    <!-- menu1 -->
                    <div id="menu2" class="tab-pane fade">
                            @foreach($photos as $p)
                                @if ($p->category_id == "lovestory" && $p->inline == 'checked' && $p->image != '')
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                        <div class="tab_pane">
                                            <div class="tab_pane_images">
                                               <img src="public/images/{{ $p->image }}" alt="">
                                            </div>
                                            <div class="tab-pane_none">
                                                <img src="public/img/tab-pane_none.png" alt="">
                                                <span>{{ $p->title }}</span>
                                                <a href="/portfolio/{{ $p->url}}/"></a>
                                            </div>
                                        </div>
                                    </div>

                                    
                                @endif
                            @endforeach
                    </div>
                    <!-- menu2 -->

                    <div id="menu3" class="tab-pane fade">
                          @foreach($photos as $p)
                                @if ($p->category_id == "family" && $p->inline == 'checked' && $p->image != '')
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                        <div class="tab_pane">
                                            <div class="tab_pane_images">
                                               <img src="public/images/{{ $p->image }}" alt="">
                                            </div>
                                            <div class="tab-pane_none">
                                                <img src="public/img/tab-pane_none.png" alt="">
                                                <span>{{ $p->title }}</span>
                                                <a href="/portfolio/{{ $p->url}}/"></a>
                                            </div>
                                        </div>
                                    </div>

                                    
                                @endif
                            @endforeach
                    </div>
                    <!-- menu3 -->

                     <div id="menu4" class="tab-pane fade">
                          @foreach($photos as $p)
                                @if ($p->category_id == "individual" && $p->inline == 'checked' && $p->image != '')
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                        <div class="tab_pane">
                                            <div class="tab_pane_images">
                                               <img src="public/images/{{ $p->image }}" alt="">
                                            </div>
                                            <div class="tab-pane_none">
                                                <img src="public/img/tab-pane_none.png" alt="">
                                                <span>{{ $p->title }}</span>
                                                <a href="/portfolio/{{ $p->url}}/"></a>
                                            </div>
                                        </div>
                                    </div>

                                    
                                @endif
                            @endforeach
                    </div>
                    <!-- menu4 -->

              </div>
            
        </div>

        
    </div>
</section>
<!-- section_fotosesia -->





@include('templates.aboutme')


@include('templates.stage')

@include('templates.reserve')

@include('templates.price')










<section class="section_blog">
    <div class="container">
        <h2>БЛОГ</h2>
        <div class="row">
            @foreach($blog as $key => $bl)
                 @if(3>$key)
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="blog_main_photo">
                            <img src="{{asset("public/images/$bl->image")}}" alt="">
                        </div>
                        <div class="blog_main_text">
                            <h4>{{ $bl->title }}</h4>
                            <div class="blog_text_content" style="height: 180px; overflow: hidden;">{!! $bl->description !!}
                             <div class="blog_text_bg"></div>
                         </div>
                            <div class="blog_text_button">
                                <a href="/blog/{{ $bl->url }}">читати</a>
                            </div>
                        </div>
                    </div>
                
                @endif

            @endforeach
            
        </div>
        <div class="row">
            <div class="blog_button_bilshe">
                <a href="/blog/">більше</a>
            </div>
        </div>
    </div>
</section>
<!-- section_blog -->

@include('templates.thankyou')

@include('templates.feedback')

@endsection
