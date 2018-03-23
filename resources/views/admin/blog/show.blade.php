@extends('admin.admin-blog')

@section('title', 'Перегляд поста')

@section('content')

	<div style="display: block; padding-bottom: 15px;">
		<a class="admin_button_add"  href="/admin/blog/">Всі статті</a>
	</div>
	<div style="display: block; padding-bottom: 15px;">
		<a class="admin_button_add"  href="/admin/blog/create">Додати статтю</a>
	</div>

	<table class="table table-bordered">
	  <thead>
	    <tr>

	      <th scope="col">Заголовок</th>
	      <th scope="col">Основне - розмір (квадратна) Висота = Ширині </th> 
	      <th scope="col">Текст</th>
	      <th scope="col">дата</th>
	      <th scope="col"">керування</th>
	    </tr>
	  </thead>
	  <tbody>
		<tr>

	      <td>{{ $blog->title }}</td>
	      <td>
	      	<img src="{{asset("public/images/$blog->image")}}" style="width: 100%;">
	      </td>
	      <td class="tdtext">{!! $blog->description !!}</td>
	      <td>{{ Carbon\Carbon::parse($blog->created_at)->format('F d, Y') }}</td>

	      <td >
			<a href="{{ URL::to('admin/blog/' . $blog->id) . '/edit' }}" class="btn btn-default" style="margin-right: 7px;">Редагувати</a>
			{!! Form::open(['method'=>'DELETE', 'route'=>['blog.destroy', $blog->id]]) !!}
		    {!! Form::submit('Видалити', ['class' => 'btn btn-danger']) !!}
		    {!! Form::close() !!}		
	      </td>
	    </tr>
 
  </tbody>
</table>


@endsection