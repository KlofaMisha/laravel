@extends('admin.admin-blog')

@section('title', 'Перегляд фото')

@section('content')


	<div style="display: block; padding-bottom: 15px;">
		<a class="admin_button_add"  href="/admin/blog_fotos">ВСІ ФОТО</a>
	</div>
	<div style="display: block; padding-bottom: 15px;">
		<a class="admin_button_add"  href="/admin/blog_fotos/create">Додати</a>
	</div>
	

	<table class="table table-bordered">
	  <thead>
	    <tr>
	
	      <th scope="col">Фото</th> 
	      <th scope="col">Ссилка на фото для статті</th>
	      <th scope="col">дата</th>
	      <th scope="col"">керування</th>
	    </tr>
	  </thead>
	  <tbody>
		<tr>

	      <td>
	      	<img src="{{asset("public/images/$blogfoto->image")}}" style="width: 100px;">
	      </td>
	      <td>
	      	<xmp>
	       		<img src="{{asset("public/images/$blogfoto->image")}}" >
	       </xmp>
	      </td>
	      <td>{{ Carbon\Carbon::parse($blogfoto->created_at)->format('F d, Y') }}</td>
	      <td >
			<a href="{{ URL::to('admin/blog_fotos/' . $blogfoto->id) . '/edit' }}" class="btn btn-default" style="margin-right: 7px;">Редагувати</a>
			{!! Form::open(['method'=>'DELETE', 'route'=>['blog_fotos.destroy', $blogfoto->id]]) !!}
		    {!! Form::submit('Видалити', ['class' => 'btn btn-danger']) !!}
		    {!! Form::close() !!}		
	      </td>
	    </tr>
 
  </tbody>
</table>


@endsection