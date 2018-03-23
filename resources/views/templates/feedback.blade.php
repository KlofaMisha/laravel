<section class="section_feedback">
    <div class="container">
        <div class="row">
            <h2>НАПИШІТЬ МЕНІ АБО ЗАБРОНЮЙТЕ ДАТУ</h2>

            {!! Form::open(['url'=>'/',  'class'=>'form-horizontal col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12 col-xs-offset-0', 'role'=>'form', 'enctype'=>'multipart/form-data' ]) !!}
             {{csrf_field ()}}
             <input type="hidden" name="id" value="КОНТАКТ З ФОТОГРАФОМ">
                <div class="form-group">
                  
                  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <label for="name" class="control-label"></label>
                    <input type="text" class="form-control" id="name" placeholder="Ім'я" name="name" required oninvalid="this.setCustomValidity('Будь ласка, заповніть дане поле')" oninput="setCustomValidity('')">
                  </div>
                
                  
                  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"> 
                    <label for="email" class="control-label"></label>         
                    <input type="email" class="form-control" id="email" placeholder="E-mail" name="email" required oninvalid="this.setCustomValidity('Будь ласка, заповніть дане поле')" oninput="setCustomValidity('')">
                  </div>
                </div>
                <div class="form-group">        
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                      <textarea class="form-control message" name="msg" required>Повідомлення</textarea>

                  </div>
                </div>
                <div class="form-group">        
                  <div class="form_submit">
                    <button type="submit" class="btn btn-default">відправити</button>
                  </div>
                </div>
              {!! Form::close() !!}
        </div>
    </div>
</section>
<!-- section_feedback -->