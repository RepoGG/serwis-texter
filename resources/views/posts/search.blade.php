@extends('master')
@section('content')
<br><br><br><br>
<form action="{{ URL::to('/search') }}" method="POST"  role="search">
	@csrf
	<div class="input-group">
		<input type="text" name="q" class="form-control" placeholder="Search posts"><span class="input-group-btn">
			<button type="submit" class="btn btn-default">
				Szukaj
			</button>
			
		</span>
	</div>
</form>

	@if(isset($details))
		<p>Wyniki wyszukiwania <b> {{ $query }} </b> :</p>
		<h1> Posty: </h1>

		<table class="table table-striped">
			<thead>
				<tr>
					<th>title</th>
					<th>description</th>
					<th>author</th>
					<th></th>
				</tr>
			</thead>

			<tbody>
				@foreach ($details as $post)
				
					<tr>
						<td> {{ $post->title }} </td>
						<td> {{ $post->description }}</td>
						<td> {{ $post->author }}</td>
						<td><a href="/posts/{{ $post->id }}"><button>Czytaj</button></td>
					</tr>

				@endforeach
			</tbody>

		</table>
		@elseif(isset($message))
		<p>{{ $message }}</p>
	@endif

@stop