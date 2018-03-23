@extends('admin.admin-price')

@section('title', 'Перегляд ціни')

@section('content')

<div style="display: block; padding-bottom: 15px;">
	<a class="admin_button_add"  href="/admin/price/">ВСІ ЦІНИ</a>
</div>



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
		<tr>
	      <th>{{ $price->category }}</th>
	      <td>{{ $price->title }}</td>
	      <td>{{ $price->price }}</td>
	      <td>{!! $price->description !!}</td>
	    
	      <td >
			<a href="{{ URL::to('/admin/price/' . $price->id) . '/edit' }}" class="btn btn-default" style="margin-right: 7px;">Редагувати</a>
	
	      </td>
	    </tr>
 
  </tbody>
</table>


@endsection