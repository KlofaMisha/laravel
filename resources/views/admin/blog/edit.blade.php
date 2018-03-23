@extends('admin.admin-blog')

@section('title', 'Додати пост')

@section('content')



	
		{!! Form::model($blog, array('route' => array('blog.update', $blog->id), 'method'=>'PUT', 'files' => true)) !!}
		<div class="col-md-8">
		    <div class="form-group">
		    	
		    		{{ Form::label('title', 'Заголовок') }}
		    
		    		{{ Form::text('title', null, ['class' => 'form-control']) }}
		    	</div>
	
		  <div class="form-group">
		    	
		    		{{ Form::label('image', 'Головне фото - розмір 293х293') }}
		
		    		{{ Form::file('image',  ['class' => 'form-control', 'style'=>'border:none;']) }}
		   
		  </div>
		  <div class="form-group">
		    	
		    		{{ Form::label('description', 'Текст статті') }}
		    
		    		{{ Form::textarea('description', null, ['class' => 'form-control', 'style'=>'height: 1200px;']) }}
		    
		  </div>
		  

	</div>	




	<div class="col-md-4">
		<h4>Інструкція</h4>
		<p style="color: red;">Для переносу рядка:<br>
            <xmp>Тег -  <br> - ставимо в кінець рядка</xmp>
          </p>
          <p style="color: red;">Для абзіців використовуємо комбінацію:
            <xmp>Тег -  <p> - ставимо на початок абзацу</xmp>
            <xmp>Тег -  </p> - ставимо на кінець абзацу</xmp>
          </p>
          <P style="color: red;">
              ПРИКЛАД <br>
              <strong style="background-color: #f8f35e; display: block;">
                <xmp><p>  абзац статі  </p></xmp>
              </strong>
              
              
            </P>
               <p>
            <span style="color: red;">Щоб додати фото в середиту статті потрібно:</span><br>
            <span>перейти у меню на кнопки<br> 
              <strong>"БЛОГ"-> "Додаткові фото для статті" </strong>
              <br> загрузити потрібні фото для статті, у таблиці скопіювати ссилку на фотогріфію (зразок) </span><br>
            <br>
            <<strong>img src="http://fotograf.com.ua/public/images/1511561678.png" </strong>>
            
              
      
            <span style="padding-bottom:100px; ">та додати її в середину статті між абзацами</span>
            
          </p><br>



            <p><strong>ОДНА ФОТОГРАФІЯ НА ШИРИНУ СТАТТІ</strong></p>
            <div style="display: block; background-color: #f5f74b;">
              <span style="color: red;">ЗРАЗОК</span><br>
              <strong>
                <xmp><p>  абзац статі  </p></xmp>
              </strong>
              <<strong>img src="http://fotograf.com.ua/public/images/1511561678.png" </strong>>
              <strong>
                <xmp><p>  абзац статі  </p></xmp><br>
              </strong>
            </div>
            <p><strong>ДВІ ФОТОГРАФІЇ НА ШИРИНУ СТАТТІ ПО ГОРИЗОНТАЛІ</strong>
              <br> потрібно дві фотографії обгорнути:<br>
              перед першим фото: <xmp><div></xmp>
              після другого фото: <xmp></div></xmp></p>
            <div style="display: block; background-color: #f5f74b;">
              <span style="color: red;">ЗРАЗОК</span><br>
              <strong>
                <xmp><p>  абзац статі  </p></xmp>
              </strong>
              <strong>
                <xmp style="color: red;"><div></xmp>
              </strong>
              <<strong>img src="http://fotograf.com.ua/public/images/1511561678.png" </strong>><br>
              <<strong>img src="http://fotograf.com.ua/public/images/1511561678.png" </strong>>
              <strong>
                <xmp style="color: red;"></div></xmp>
              </strong>
              <strong>
                <xmp><p>  абзац статі  </p></xmp><br>
              </strong>
            </div><br>




		<p style="color: red;">Для виділення тексту жирним:<br>
			<xmp><strong> - ставимо на початок рядка</xmp><br>
			<xmp></strong> - ставимо на кінець рядка</xmp><br>
		</p>

		<p style="color: red;">Для форматування похилого тексту:<br>
			<xmp><i> - ставимо на початок рядка</xmp><br>
			<xmp></i> - ставимо на кінець рядка</xmp><br>
		</p>
		<p style="color: red;">Для створення посилання:<br>
			<xmp><a href="URL ссилка куди потрібно перенаправити"></xmp>
			<xmp>назва ссилки куди потрібно перенарпавити</a></xmp><br>
			<strong>Приклад посилання</strong>	
			<xmp><a href="http://fotograf.com.ua/">Сайт фотографа</a></xmp><br>
		</p>
		<p ><span style="color: red;">Для підключення відео з YouTube:</span><br>
			<strong>Знайти відео в YouTube</strong><br>
			<span>Натиснути кнопку "ПОДІЛИТИСЬ"</span>
			<img style="width: 350px;" src="{{asset("public/img/share.png")}}" alt=""><br>
			<span> У випадаючому вікні натискаємо кнопку "ВСТАВИТИ"</span><br>
			<span>У наступномі випадаючому вікні "Embed Video"</span><img style="width: 450px;" src="{{asset("public/img/codvideo.png")}}" alt=""><br>
			<span>Копіюємо код відео <span style="color: red;">"iframe"</span> і всталяєто в середину стаття між абзацами</span><br>
		</p><br>
		
		


	</div> 


<div class="col-md-12" style="padding-bottom: 200px;">
	<div class="form-group">
		    	<div class="col-md-9 col-md-offset-3">
		    		{{ Form::submit('Зберегти', ['class' => 'btn btn-primary']) }}
		    	</div>
		  </div>
</div>






		{!! Form::close() !!}		




@endsection