<!-- modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">
          	<span class="glyphicon glyphicon-remove"></span>
          </button>
          <h2>ЗАБРОНЮВАТИ ДАТУ</h2>
        </div>
        <div class="modal-body">
          {!! Form::open(['url'=>'/', 'class'=>'contact-form custm-form', 'id'=>'contact_form', 'role'=>'form', 'enctype'=>'multipart/form-data']) !!}
             {{csrf_field ()}}
              <input type="hidden" name="id" value="ЗАМОВЛЕННЯ ФОТОСЕСІЇ">
          		 <div class="form-group has-success has-feedback">
      			    	 <label for="name" for="inputSuccess"></label>
      			   		 <input type="text" name="name" class="form-control" id="inputSuccess" placeholder="Ім'я та прізвище" required oninvalid="this.setCustomValidity('Будь ласка, заповніть дане поле')" oninput="setCustomValidity('')">
                   <span class=" form-control-feedback" style="font-size: 25px; color: #f38383;">*</span>
    				  </div>

				  <div class="form-group has-success has-feedback">
				    <label for="email" for="inputSuccess"></label>
				    <input type="email" name="email" class="form-control" id="inputSuccess" placeholder="E-mail" required oninvalid="this.setCustomValidity('Будь ласка, заповніть дане поле')" oninput="setCustomValidity('')">
            <span class=" form-control-feedback" style="font-size: 25px; color: #f38383;">*</span>
				  </div>
				  <div class="form-group">
				    <label for="phone"></label>
				    <input type="phone" class="form-control bfh-phone" name="phone" id="phone" placeholder="Телефон" >
				  </div>

				  <div class="form-group">
				    <label for="date"></label>
				    <input type="date" class="form-control bfh-date" name="date"  id="date" placeholder="Дата зйомки">
				  </div>

				  <div class="form-group">
				      <label for="sel"></label>
				      <select class="form-control" name="sel" id="sel">
				        <option>Тип зйомки</option>
				        <option>весільна фотосесія</option>
				        <option>розписка чи церемонія</option>
				        <option>love story</option>
				        <option>сімейна фотосесія</option>
				        <option>фотосесія для вагітних</option>
				        <option>індивідуальна фотосесія</option>
				      </select>
				    </div>
            <div class="form-group" style="text-align: left;">
              <span class="" style="font-size: 20px; color: #f38383;">*</span><span style="font-size: 9px; color: #8a8a8a;">обов'язкові поля</span>
			     </div>
			  <button type="submit" class="btn btn-default" >відправити</button>
			{!! Form::close() !!}
        </div>
      </div>
      <!-- Modal content end -->
      
    </div>
  </div>
<!-- modal end -->