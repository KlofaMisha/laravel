@extends('admin.admin-foto')

@section('title', 'Додати фото')

@section('content')


	
		{!! Form::model($photos, array('route' => array( $photos->url .'.update', $photos->id), 'method'=>'PUT', 'files' => true)) !!}
		<div class="col-md-7">
			@if($photos->checkbox=='ok')
				<div class="radio">

					<input {{$photos->inline}} name="inline" type="checkbox" value="checked">

					  <label><strong>включити/виключити альбом для перегляду</strong></label>
				</div>
		    @endif
		    <br>
		    
		  <div class="form-group" style="height: 50px;">
		    	<div class="col-md-3">
		    		{{ Form::label('image', 'Фото') }}
		    	</div>
		    	<div class="col-md-9">
		    		{{ Form::file('image',  ['class' => 'form-control', 'style'=>'border:none;']) }}
		    	</div>
		  </div>
		  @if($photos->checkbox)
		  <div class="form-group" style="height: 50px;">
		    	<div class="col-md-3">
		    		{{ Form::label('title', 'Title') }}
		    	</div>
		    	<div class="col-md-9">
		    		{{ Form::text('title', null, ['class' => 'form-control']) }}
		    	</div>
		    </div>
		    @endif
	
		  

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