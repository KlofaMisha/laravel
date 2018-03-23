	@extends('layouts.app')

	@section('content')

	@include('templates.navigator')






	<section class="section_certificate_main">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-lg-offset-4 col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-8 col-xs-offset-2">
					<img src="public/img/logomain.png" alt="">
				</div>
			</div>
		</div>
	</section>
	<!-- section_certificate_main -->


	<section class="section_certificate">
		<div class="container">
			<div class="row">
				<h2>ПОДАРУНКОВІ СЕРТИФІКАТИ</h2>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="certificate_cont">
			      		<h5></h5>
			      		<h4>ПОДАРУНКОВИЙ СЕРТИФІКАТ</h4>
			      		<p>на фотосесію</p>
			      		<div class="pill_img">
				    		<img class="pill_img_one" src="public/img/tabs_lv1.png" alt="">
				    		<img class="pill_img_two" src="public/img/tabs_lv2.png" alt="">
				    	</div>
						<button class="record_online" type="button" data-toggle="modal" data-target="#certificate">замовити зараз</button>	

					</div>	      	
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="certificate_cont">
						<h5></h5>
			      		<h4>ПОДАРУНКОВИЙ СЕРТИФІКАТ</h4>
			      		<p>на сімейну зйомку</p>
			      		<div class="pill_img">
			    			<img class="pill_img_one" src="public/img/tabs_fm1.png" alt="">
			    			<img class="pill_img_two" src="public/img/tabs_fm2.png" alt="">
			    		</div>
						<button class="record_online" type="button" data-toggle="modal" data-target="#certificate">замовити зараз</button>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="certificate_cont">
						<h5></h5>
			      		<h4>ПОДАРУНКОВИЙ СЕРТИФІКАТ</h4>
			      		<p>для коханої</p>
			      		<div class="pill_img">
			    			<img class="pill_img_one" src="public/img/tabs_sg1.png" alt="">
			    			<img class="pill_img_two" src="public/img/tabs_sg2.png" alt="">
			    		</div>
						<button class="record_online" type="button" data-toggle="modal" data-target="#certificate">замовити зараз</button>
						</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="certificate_cont">
						<h5></h5>
			      		<h4>ПОДАРУНКОВИЙ СЕРТИФІКАТ</h4>
			      		<p>на весільну зйомку</p>
			      		<div class="pill_img">
			    			<img class="pill_img_one" src="public/img/tabs_wd1.png" alt="">
			    			<img class="pill_img_two" src="public/img/tabs_wd2.png" alt="">
			    		</div>
						<button class="record_online" type="button" data-toggle="modal" data-target="#certificate">замовити зараз</button>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- section_certificate -->


	<section class="section_your_certificate">
		<div class="container">
			<h2>ОСЬ ТАК ВИГЛЯДАТИМЕ ВАШ СЕРТИФІКАТ</h2>
			<div class="row">
				<div class="your_certif_img">
					<img src="public/img/certificate_one.png" alt="">
				</div>
				<div class="your_certif_img">
					<img src="public/img/certificate_two.png" alt="">
				</div>
				<div class="your_certif_img">
					<img src="public/img/certificate_three.png" alt="">
				</div>
			</div>
		</div>
	</section>
	<!-- section_your_certificate -->


	<!-- modal certificate -->
	  <div class="modal fade" id="certificate" role="dialog">
	    <div class="modal-dialog">
	    
	      <!-- Modal content-->
	      <div class="modal-content">
	        <div class="modal-header">
	          <button type="button" class="close" data-dismiss="modal">
	          	<span class="glyphicon glyphicon-remove"></span>
	          </button>
	          <h2>ЗАМОВИТИ ЗАРАЗ</h2>
	        </div>
	        <div class="modal-body">
	          {!! Form::open(['url'=>'/', 'class'=>'contact-form custm-form', 'id'=>'contact_form', 'role'=>'form', 'enctype'=>'multipart/form-data']) !!}
	             {{csrf_field ()}}
	             <input type="hidden" name="id" value="ПОДАРУНКОВІ СЕРТИФІКАТИ">
	          		<div class="form-group has-success has-feedback">
				    	<label for="name"></label>
				   		 <input type="text" name="name" class="form-control" id="inputSuccess" placeholder="Ім'я та прізвище" required oninvalid="this.setCustomValidity('Будь ласка, заповніть дане поле')" oninput="setCustomValidity('')">



				   		 <span class=" form-control-feedback" style="font-size: 25px; color: #f38383;">*</span>
				  </div>
				  <div class="form-group has-success has-feedback">
				    <label for="email"></label>
				    <input type="email" class="form-control" name="email" id="inputSuccess" placeholder="E-mail" required
				    oninvalid="this.setCustomValidity('Будь ласка, заповніть дане поле')" oninput="setCustomValidity('')">


				    <span class=" form-control-feedback" style="font-size: 25px; color: #f38383;">*</span>
				  </div>
				  <div class="form-group">
				    <label for="phone"></label>
				    <input type="phone" class="form-control bfh-phone" name="phone" id="phone" placeholder="Телефон">
				  </div>
				  <div class="form-group">
					      <label for="sel"></label>
					      <select class="form-control" name="cert" id="cert">
					        <option>витрати тип сертифікату</option>
					        <option>на фотосесію</option>
					        <option>на сімейну зйомку</option>
					        <option>для коханої</option>
					        <option>на весільну зйомку</option>
					      </select>
					    </div>
					<div class="form-group" style="text-align: left;">
             		 <span class="" style="font-size: 20px; color: #f38383;">*</span>
             		 <span style="font-size: 9px; color: #8a8a8a;">обов'язкові поля</span>
			     </div>
				  
				  
				  <button type="submit" class="btn btn-default" >відправити</button>
				{!! Form::close() !!}
	        </div>
	      </div>
	      <!-- Modal content end -->
	      
	    </div>
	  </div>
	<!-- modal certificate end -->





	@endsection