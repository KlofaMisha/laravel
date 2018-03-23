@extends('admin.admin-blog')

@section('title', 'Всі статті')

@section('content')


<div style="display: block; padding-bottom: 15px;">
		<a class="admin_button_add"  href="/admin/blog/create">Додати статтю</a>
	</div>

	
	<table class="table table-bordered">
	  <thead>
	    <tr>
	
	      <th scope="col">Заголовок</th>
	      <th scope="col">Основне фото - розмір (квадратна) Висота = Ширині</th>
	      <th scope="col">Текст</th>
	      <th scope="col">дата</th>
	  	   <th scope="col">керування</th>
	    </tr>
	  </thead>
	  <tbody>
	@foreach($blog as $bl)
		<tr>

	      <td>{{ $bl->title }}</td>
	      <td class="tdImg">
	      	<img src="{{asset("public/images/$bl->image")}}" style="width: 100%;">
	      </td>
	      <td class="tdtext">{!! $bl->description !!}</td>
	      <td>{{ $bl->created_at }}</td>
	      <td >
			<a href="{{ URL::to('admin/blog/' . $bl->id) . '/edit' }}" class="btn btn-default" style="margin-right: 7px;">Редагувати</a>
			{!! Form::open(['method'=>'DELETE', 'route'=>['blog.destroy', $bl->id]]) !!}
		    {!! Form::submit('Видалити', ['class' => 'btn btn-danger']) !!}
		    {!! Form::close() !!}		
	      </td>
	    </tr>
	@endforeach
 
  </tbody>
</table>


@endsection