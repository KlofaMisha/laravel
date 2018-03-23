@extends('admin.admin-feedback')

@section('title', 'Всі відгуки')

@section('content')


<div style="display: block; padding-bottom: 15px;">
		<a class="admin_button_add"  href="/admin/feedback/create">Додати відгук</a>
	</div>

	
	<table class="table table-bordered">
	  <thead>
	    <tr>
	
	      <th scope="col">ФОТО</th>
	      <th scope="col">ІМ'Я</th>
	      <th scope="col">E-mail</th>
	      <th scope="col">Текст відгуку</th>
	      <th scope="col">дата</th>
	  	   <th scope="col">керування</th>
	    </tr>
	  </thead>
	  <tbody>
	@foreach($feedbacks as $feed)
		<tr>
		  <td class="tdImg">
	      	<img alt="ФОТО" src="{{asset("public/images/$feed->image")}}" style="width: 100%;">
	      </td>
	      <td>{{ $feed->name }}</td>
	      <td class="">{{ $feed->email }}</td>
	      <td class="" style="50%;">{{ $feed->msg }}</td>
	      <td>{{ $feed->created_at }}</td>
	      <td >
			<a href="{{ URL::to('admin/feedback/' . $feed->id) . '/edit' }}" class="btn btn-default" style="margin-right: 7px;">Редагувати</a>
			{!! Form::open(['method'=>'DELETE', 'route'=>['feedback.destroy', $feed->id]]) !!}
		    {!! Form::submit('Видалити', ['class' => 'btn btn-danger']) !!}
		    {!! Form::close() !!}		
	      </td>
	    </tr>
	@endforeach
 
  </tbody>
</table>


@endsection