<section class="section_price">
    <div class="container">
        <div class="row" style="min-height: 940px;">
            <h2>ПОСЛУГИ</h2>

                <ul class="nav nav-pills col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12">
                    <li class="active" >
                        <a data-toggle="pill" href="#price0">
                            <div class="pill_img">
                                <img class="pill_img_one" src="public/img/tabs_wd1.png" alt="">
                                <img class="pill_img_two" src="public/img/tabs_wd2.png" alt="">
                            </div>

                            <span>весільна фотосесія</span>
                        </a>
                    </li>

                    <li >
                        <a data-toggle="pill" href="#price1">
                            <div class="pill_img">
                                <img class="pill_img_one" src="public/img/tabs_rd1.png" alt="">
                                <img class="pill_img_two" src="public/img/tabs_rd2.png" alt="">
                            </div>
                            <span>розписка чи церемонія</span>
                        </a>
                    </li>
                    <li>
                        <a data-toggle="pill" href="#price2">
                            <div class="pill_img">
                                <img class="pill_img_one" src="public/img/tabs_lv1.png" alt="">
                                <img class="pill_img_two" src="public/img/tabs_lv2.png" alt="">
                            </div>
                            <span>love story</span>
                        </a>
                    </li>
                    <li>
                        <a data-toggle="pill" href="#price3">
                            <div class="pill_img">
                                <img class="pill_img_one" src="public/img/tabs_fm1.png" alt="">
                                <img class="pill_img_two" src="public/img/tabs_fm2.png" alt="">
                            </div>
                            <span>сімейна фотосесія</span>
                        </a>
                    </li>

                    <li >
                        <a data-toggle="pill" href="#price4">
                            <div class="pill_img">
                                <img class="pill_img_one" src="public/img/tabs_pr1.png" alt="">
                                <img class="pill_img_two" src="public/img/tabs_pr2.png" alt="">
                            </div>
                            <span>фотосесія для вагітних</span>
                        </a>
                    </li>

                    <li >
                        <a data-toggle="pill" href="#price5">
                            <div class="pill_img">
                                <img class="pill_img_one" src="public/img/tabs_sg1.png" alt="">
                                <img class="pill_img_two" src="public/img/tabs_sg2.png" alt="">
                            </div>
                            <span>індивідуальна фотосесія</span>
                        </a>
                    </li>
                </ul>
              <!-- ___botton tabs____ -->


              <div class="tab-content col-lg-12" >
                    <div id="price0" class="tab-pane fade in active">
                          <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-12 col-sm-offset-0 col-xs-10 col-xs-offset-1">
                                @foreach($price as $pr)
                                    @if($pr->category_id == 'wedding')
                                        <div class="price_namber price_wedding">
                                            <h5>{{ $pr->title }}</h5>
                                            <h3>{{ $pr->price }}</h3>
                                            <p>{!! $pr->description !!}</p>
                                                <button class="record_online" type="button" data-toggle="modal" data-target="#myModal">забронювати</button>    
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                    </div>
                    <!-- price0 -->



                    <div id="price1" class="tab-pane fade">
                          <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1" >
                                @foreach($price as $pr)
                                    @if($pr->category_id == 'ceremony')
                                        <div class="price_namber price_write">
                                            <h5>{{ $pr->title }}</h5>
                                            <h3>{{ $pr->price }}</h3>
                                            <p>{!! $pr->description !!}</p>
                                                <button class="record_online" type="button" data-toggle="modal" data-target="#myModal">забронювати</button>    
                                        </div>
                                    @endif
                                @endforeach
                          </div>
                          
                    </div>
                    <!-- price1 -->
                    <div id="price2" class="tab-pane fade">
                          <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
                                @foreach($price as $pr)
                                    @if($pr->category_id == 'love_story')
                                        <div class="price_namber price_love">
                                            <h5>{{ $pr->title }}</h5>
                                            <h3>{{ $pr->price }}</h3>
                                            <p>{!! $pr->description !!}</p>
                                                <button class="record_online" type="button" data-toggle="modal" data-target="#myModal">забронювати</button>    
                                        </div>
                                    @endif
                                @endforeach
                          </div>
                    </div>
                    <!-- price2 -->

                    <div id="price3" class="tab-pane fade">
                          <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
                                @foreach($price as $pr)
                                    @if($pr->category_id == 'family')
                                        <div class="price_namber price_family">
                                            <h5>{{ $pr->title }}</h5>
                                            <h3>{{ $pr->price }}</h3>
                                            <p>{!! $pr->description !!}</p>
                                                <button class="record_online" type="button" data-toggle="modal" data-target="#myModal">забронювати</button>    
                                        </div>
                                    @endif
                                @endforeach
                          </div>
                    </div>
                    <!-- price3 -->

                     <div id="price4" class="tab-pane fade">
                          <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
                                @foreach($price as $pr)
                                    @if($pr->category_id == 'pregnant_women')
                                        <div class="price_namber price_family">
                                            <h5>{{ $pr->title }}</h5>
                                            <h3>{{ $pr->price }}</h3>
                                            <p>{!! $pr->description !!}</p>
                                                <button class="record_online" type="button" data-toggle="modal" data-target="#myModal">забронювати</button>    
                                        </div>
                                    @endif
                                @endforeach
                          </div>
                    </div>
                    <!-- price4 -->

                     <div id="price5" class="tab-pane fade">
                          <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-12 col-sm-offset-0 col-xs-10 col-xs-offset-1">
                                @foreach($price as $pr)
                                    @if($pr->category_id == 'individual')
                                        <div class="price_namber price_individual">
                                            <h5>{{ $pr->title }}</h5>
                                            <h3>{{ $pr->price }}</h3>
                                            <p>{!! $pr->description !!}</p>
                                                <button class="record_online" type="button" data-toggle="modal" data-target="#myModal">забронювати</button>    
                                        </div>
                                    @endif
                                @endforeach
                          </div>
                        
                    </div>
                    <!-- price5 -->

              </div>
              <!-- tab-content -->
        </div>
        <div class="row">
              
              

                <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-12 col-xs-12 price_sertif">
                    <h2>ПОДАРУНКОВІ СЕРТИФІКАТИ</h2>
                    <a href="/certificate">вибрати зараз</a>
                </div>
        </div>
    </div>
</section>
<!-- ___section_price___ -->