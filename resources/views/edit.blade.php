@extends('layout')

@section("content")
   <div class="container">
   		<h2>Edit Receipe</h2>

	   		@if ($errors->any())
			    <div class="alert alert-danger">
			        <ul>
			            @foreach ($errors->all() as $error)
			                <li>{{ $error }}</li>
			            @endforeach
			        </ul>
			    </div>
			@endif

   		 <form method="post" action="/receipe/{{ $receipe->id }}">
   		 	{{ method_field("PATCH") }}
   		 	{{ csrf_field()}}
		  <div class="form-group">
		    <label>Receipe Name</label>
		    <input type="text" name="name" class="form-control" value="{{ $receipe->name }}" required>
		   
		  </div>
		  <div class="form-group">
		    <label>Ingredients</label>
		    <input type="text" name="ingredients" class="form-control" value="{{ $receipe->ingredients }}" required>
		  </div>

		  <div class="form-group">
		    <label>Category</label>
		    <input type="text" name="category" class="form-control" value="{{ $receipe-> category }}" required>
		  </div>

		  <button type="submit" class="btn btn-primary">Edit</button>
		</form>
   </div>
  
@endsection