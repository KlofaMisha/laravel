@extends('layouts.app')

@section('content')

@include('templates.navigator')





<h1 style="margin-top: 70px;"></h1>



<section class="secti_vidguk">
    <div class="container">
        <div class="row col-lg-10 col-lg-offset-1 col-md-12">
      <h2></h2>
            <button type="button" id="btninfo" class="btn btn-info" data-toggle="collapse" data-target="#feedback">Додати відгук  
                      <span id="glyphicon" class="glyphicon glyphicon-chevron-left "></span>
          </button><br><br>
            <div id="feedback" class="collapse ">
              
            


                      {!! Form::open([ 'url'=>'about_me', 'class'=>'form-horizontal', 'enctype'=>'multipart/form-data', 'data-focus'=>'false', 'data-toggle'=>'validator', 'novalidate'=>'true']) !!}
                       {{csrf_field ()}}








                        <div class="form-group">
                          <div class="col-lg-6">
                            <label for="Name" class="control-label"></label>
                            <input type="text" class="form-control" id="Name" name="name"  placeholder="Ім'я" required>
                          </div>
                          <div class="col-lg-6">  
                              <label for="email" class="control-label"></label>        
                              <input type="email" class="form-control" id="email" placeholder="E-mail" name="email" required>
                          </div>
                        </div>
                       





                     


                        
                          <div class="form-group">        
                            <div class="col-lg-12">
                                <label for="msg" class="control-label"></label> 
                                <textarea class="form-control message" name="msg" id="msg" required>Відгук</textarea>

                            </div>
                          </div>

                         
                        



          				<label class="btn btn-xs" for="my-file-selector">
          					    <input id="my-file-selector" type="file" style="display:none" name="image" 
          					    onchange="$('#upload-file-info').html(this.files[0].name)">
          				<span class="glyphicon glyphicon-plus"></span> <u>ваше фото</u>
          					</label>
          					<span class='label label-info' id="upload-file-info"></span>

                          <div class="form-group">   
                          <br>     
                            <div class="form_submit">
                              <button type="submit" class="btn btn-feedback">відправити</button>
                            </div>
                          </div>
                        {!! Form::close() !!}


          </div>
          <br>

           @foreach($feedback as $feed)
          <div class="row feedback_row" >
            <div class="col-lg-4 col-md-6 col-sm-7 col-xs-12">
              <div class="cont_feedback">
                  @if($feed->image!= null)
                  <img src="{{asset("public/images/$feed->image")}}" alt=" ">
                  @else
                   <img src="{{asset("public/img/avatar.png")}}" alt=" ">
                  @endif
              </div>
            </div>
            <div class="col-lg-8 col-md-6 col-sm-5 col-xs-12" >
          <div>
                <h4 style="float: left;">{{ $feed->name }}</h4>
               
          </div>  



              <p style="clear: both;">{{ $feed->msg }}</p>
            </div>

          </div>
          @endforeach

                         









          
 {{ $feedback->links() }}



        </div>
    </div>
</section>





@endsection
