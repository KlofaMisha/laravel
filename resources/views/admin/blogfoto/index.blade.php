@extends('admin.admin-blog')

@section('title', 'Всі фото')

@section('content')

<div style="display: block; padding-bottom: 15px;">
		<a class="admin_button_add"  href="/admin/blog_fotos/create">Додати</a>
	</div>

	
	<table class="table table-bordered">
	  <thead>
	    <tr>

	      <th scope="col">Фото</th>
	      <th scope="col">Ссилка на фото для статті</th>
	      <th scope="col">дата</th>
	      <th scope="col">керування</th>
	    </tr>
	  </thead>
	  <tbody>
	@foreach($blogfoto as $f)
		<tr>

	      <td>
	       	<img src="{{asset("public/images/$f->image")}}" style="width: 100px;">
	      </td>
	      <td>
	      	<xmp>
	       		<img src="{{asset("public/images/$f->image")}}" >
	       </xmp>
	      </td>

	      <td>{{ $f->created_at }}</td>
	      <td >
			<a href="{{ URL::to('admin/blog_fotos/' . $f->id) . '/edit' }}" class="btn btn-default" style="margin-right: 7px;">Редагувати</a>
			{!! Form::open(['method'=>'DELETE', 'route'=>['blog_fotos.destroy', $f->id]]) !!}
		    {!! Form::submit('Видалити', ['class' => 'btn btn-danger']) !!}
		    {!! Form::close() !!}		
	      </td>
	    </tr>
	@endforeach
 
  </tbody>
</table>


@endsection