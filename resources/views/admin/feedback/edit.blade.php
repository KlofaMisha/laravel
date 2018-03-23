@extends('admin.admin-feedback')

@section('title', 'Редагувати відгук')

@section('content')



	
		{!! Form::model($feedbacks, array('route' => array('feedback.update', $feedbacks->id), 'method'=>'PUT', 'files' => true)) !!}
			<div class="col-md-8">
			    <div class="form-group">
	   
	    			{{ Form::label('image', 'ФОТО') }}

			
			    	{{ Form::file('image', ['class' => 'form-control', 'style'=>'border:none; ']) }}
			    </div>
			    <div class="form-group">
	   
	    		{{ Form::label('title', "ІМ'Я") }}
	 
	    		{{ Form::text('name', null, ['class' => 'form-control' , 'required' => 'required']) }}

			    </div>
			    <div class="form-group">
			    
			    	{{ Form::label('title', 'E-mail') }}
	 
	    			{{ Form::text('email', null, ['class' => 'form-control' , 'required' => 'required']) }}
			    
			    </div>
			    <div class="form-group">
			    	
			    		{{ Form::label('msg', 'Текст відгуку') }}
			    
			    		{{ Form::textarea('msg', null, ['class' => 'form-control', 'style'=>'height: 200px;', 'required' => 'required']) }}
			    
	    </div>
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