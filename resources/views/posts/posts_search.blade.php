@extends('master')
@section('content')
<br><br><br><br>
<form action="{{ URL::to('/posts/search') }}" method="POST" role="search">
	{{ csrf_field() }}

	<div>
		<input type="text" name="q" class="form-control" placeholder="Search posts"><span class="input-group-btn">
			<button type="submit" class="btn btn-default">
				Wyszukaj
			</button>
		</span>
	</div>



@stop