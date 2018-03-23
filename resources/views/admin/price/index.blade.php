@extends('admin.admin-price')

@section('title', 'Всі ціни')

@section('content')
	
	
	<table class="table table-bordered">
	  <thead>
	    <tr>
	      <th scope="col">Категорія</th>
	      <th scope="col">Title</th>
	      <th scope="col">Ціна</th>
	      <th scope="col">Опис роботи</th>
	   
	      <th scope="col">керування</th>
	    </tr>
	  </thead>
	  <tbody>
	@foreach($price as $pr)
		<tr>
	      <th>{{ $pr->category }}</th>
	      <td>{{ $pr->title }}</td>
	      <td>{{ $pr->price }}</td>
	      <td>{!! $pr->description !!}</td>

	   

	      <td style="width: 220px; ">
			<a href="{{ URL::to('/admin/price/' . $pr->id) . '/edit' }}" class="btn btn-default" style="margin-right: 7px; float: left;">Редагувати</a>
		
	      </td>
	    </tr>
	@endforeach
 
  </tbody>
</table>


@endsection