@extends('admin.admin-foto')

@section('title', 'Всі фото  '.$url)

@section('content')



	<div style="display: block; padding-bottom: 15px;">
		<a class="admin_button_add"  href="/admin/{{ $url }}/create">Додати</a>
	</div>
	
	

	<table class="table table-bordered">
	  <thead>
	    <tr >

	      <th scope="col">Categiry</th>
	      <th scope="col">Фото</th>
	      <th scope="col">Title</th>
	      <th scope="col">Примітка</th>

	      <th scope="col">керування</th>
	    </tr>
	  </thead>
	  <tbody>
	@foreach($photos as $p)
		@if ($p->url == $url)
			@if ($p->checkbox)
			<tr>
		      <th scope="row">{{ $p->url }}</th>
		      <td>
		       	<img alt="ФОТО" src="{{asset("public/images/$p->image")}}" style="width: 100px;">
		      </td>
		      <td style="width:250px;">{{ $p->title }}</td>
		      <td style="width:250px;">{!! $p->description !!}</td>

		      <td >
				<a href="{{ URL::to('admin/'. $url .'/' . $p->id) . '/edit' }}" class="btn btn-default" style="margin-right: 7px;">Редагувати</a>
		      </td>
		    </tr>
		    @else
		    <tr>
		      <th scope="row">{{ $p->url }}</th>
		      <td>
		       	<img src="{{asset("public/images/$p->image")}}" style="width: 100px;">
		      </td>
		      <td colspan="2">{{ $p->title }}</td>
		      
		      <td >
				<a href="{{ URL::to('admin/'. $url .'/' . $p->id) . '/edit' }}" class="btn btn-default" style="margin-right: 7px;">Редагувати</a>
				{!! Form::open(['method'=>'DELETE', 'route'=>[$url.'.destroy', $p->id]]) !!}
			    {!! Form::submit('Видалити', ['class' => 'btn btn-danger']) !!}
			    {!! Form::close() !!}		
		      </td>
		    </tr>
		    @endif
	    @endif
	@endforeach
 
  </tbody>
</table>


@endsection