@extends('admin.admin-price')

@section('title', 'Ціна послуг')

@section('content')



	
{!! Form::open(['route' => 'price.store', 'enctype'=>'multipart/form-data']) !!}
	<div class="col-md-7">
	    <div class="form-group" style="height: 50px;">
	    	<div class="col-md-3" >
	    		{{ Form::label('title', 'Title') }}
	    	</div>
	    	<div class="col-md-9">
	    		{{ Form::text('title', null, ['class' => 'form-control']) }}
	    	</div>
		 </div>
	    <div class="form-group" style="height: 50px;">
	    	<div class="col-md-3" >
	    		{{ Form::label('price', 'Ціна') }}
	    	</div>
	    	<div class="col-md-9">
	    		{{ Form::text('price', null, ['class' => 'form-control']) }}
	    	</div>
		 </div>
	    <div class="form-group">
	    	
	    		{{ Form::label('description', 'Опис послуги') }}
	    
	    		{{ Form::textarea('description', null, ['class' => 'form-control', 'style'=>'height: 300px;']) }}
	    
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