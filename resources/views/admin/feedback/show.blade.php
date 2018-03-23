@extends('admin.admin-feedback')

@section('title', 'Перегляд відгуку')

@section('content')

	<div style="display: block; padding-bottom: 15px;">
		<a class="admin_button_add"  href="/admin/feedback/">Всі відгуки</a>
	</div>
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
		<tr>
		  <td class="tdImg">
	      	<img alt="ФОТО" src="{{asset("public/images/$feedbacks->image")}}" style="width: 100%;">
	      </td>
	      <td>{{ $feedbacks->name }}</td>
	      <td class="">{{ $feedbacks->email }}</td>
	      <td class="" style="50%;">{{ $feedbacks->msg }}</td>
	      <td>{{ $feedbacks->created_at }}</td>
	      <td >
			<a href="{{ URL::to('admin/feedback/' . $feedbacks->id) . '/edit' }}" class="btn btn-default" style="margin-right: 7px;">Редагувати</a>
			{!! Form::open(['method'=>'DELETE', 'route'=>['feedback.destroy', $feedbacks->id]]) !!}
		    {!! Form::submit('Видалити', ['class' => 'btn btn-danger']) !!}
		    {!! Form::close() !!}		
	      </td>
	    </tr>
 
  </tbody>
</table>


@endsection