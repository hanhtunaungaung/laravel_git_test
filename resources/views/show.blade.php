@extends('layout')
@section("content")
  
  	<div class="container">
  		<h2>{{ $receipe->name}}</h2>
	  	<li>Ingredients - {{ $receipe->ingredients}}</li>
	  	<li>Category - {{ $receipe->category}}</li>

	  	<a href="/receipe/{{$receipe->id}}/edit" class="btn btn-primary">Edit</a>

	  	<form method="post" action="/receipe/{{ $receipe->id }}">
   		 	{{ method_field("DELETE") }}
   		 	{{ csrf_field()}}
			<button type="submit" class="btn btn-warning">DELETE</button>
		</form>
  	</div>
 
@endsection