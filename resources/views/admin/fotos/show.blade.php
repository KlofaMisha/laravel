@extends('admin.admin-foto')

@section('title', 'Перегляд фото')

@section('content')



<div style="display: block; padding-bottom: 15px;">
	<a class="admin_button_add"  href="/admin/{{ $photos->url }}/">ВСІ ФОТО</a>
</div>
<div style="display: block; padding-bottom: 15px;">
		<a class="admin_button_add"  href="/admin/{{$photos->url }}/create">Додати</a>
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
		@if ($photos->checkbox)
			<tr>
				<th scope="row">{{ $photos->url }}</th>

				<td>
					<img alt="ФОТО" src="{{asset("public/images/$photos->image")}}" style="width: 100px;">
				</td>
				<td style="width:250px;">{{ $photos->title }}</td>
				<td style="width:250px;">{!! $photos->description !!}</td>
		
				<td >
					<a href="{{ URL::to('admin/'.$photos->url.'/' . $photos->id) . '/edit' }}" class="btn btn-default" style="margin-right: 7px;">Редагувати</a>
				</td>
			</tr>
		@else
			<tr>
				<th scope="row">{{ $photos->url }}</th>

				<td>
					<img src="{{asset("public/images/$photos->image")}}" style="width: 100px;">
				</td>
				<td colspan="2">{{ $photos->title }}</td>
				
				<td >
					<a href="{{ URL::to('admin/'.$photos->url.'/' . $photos->id) . '/edit' }}" class="btn btn-default" style="margin-right: 7px;">Редагувати</a>
					{!! Form::open(['method'=>'DELETE', 'route'=>[$photos->url.'.destroy', $photos->id]]) !!}
					{!! Form::submit('Видалити', ['class' => 'btn btn-danger']) !!}
					{!! Form::close() !!}		
				</td>
			</tr>
		@endif

	</tbody>
</table>


@endsection