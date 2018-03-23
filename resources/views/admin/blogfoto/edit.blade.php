@extends('admin.admin-blog')

@section('title', 'Додати фото')

@section('content')



	
		{!! Form::model($blogfoto, array('route' => array('blog_fotos.update', $blogfoto->id), 'method'=>'PUT', 'files' => true)) !!}
		<div class="col-md-7">
		    
		  <div class="form-group">
		    	<div class="col-md-3">
		    		{{ Form::label('image', 'Фото') }}
		    	</div>
		    	<div class="col-md-9">
		    		{{ Form::file('image',  ['class' => 'form-control', 'style'=>'border:none;']) }}
		    	</div>
		  </div>
		
		  

	</div>	




<div class="col-md-12">
	<div class="form-group">
		    	<div class="col-md-9 col-md-offset-3">
		    		{{ Form::submit('Зберегти', ['class' => 'btn btn-primary']) }}
		    	</div>
		  </div>
</div>






		{!! Form::close() !!}		




@endsection