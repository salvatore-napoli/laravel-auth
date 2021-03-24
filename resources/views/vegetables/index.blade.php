@extends('vegetables.base')

@section('head')
	@section('title', 'Vegetables - Table')

@section('body')
	<table class="table">
	  <thead class="thead-dark">
	    <tr>
	      <th scope="col">#</th>
	      <th scope="col">Image</th>
	      <th scope="col">Type</th>
	      <th scope="col">Brand</th>
	      <th scope="col">Price</th>
	      <th scope="col">Actions</th>
	    </tr>
	  </thead>
	  <tbody>
			@foreach ($vegetables as $vegetable)
				<tr>
					<th scope="row">{{$vegetable->id}}</th>
					<td>
						<img src="{{$vegetable->image}}" alt="vegetable" width="130px" height="150px" />
					</td>
					<td>{{$vegetable->type}}</td>
					<td>{{$vegetable->brand}}</td>
					<td>{{$vegetable->price}}€</td>
					<td>
						<a href="{{ route('vegetables.show', compact('vegetable')) }}">
							<i class="far fa-eye"></i>
						</a>
					</td>
				</tr>
			@endforeach
	  </tbody>
	</table>
