@extends('master')
@section('content')
<h2>Wyszukiwanie</h2>

<input type="text" name="search" id="search" class="form-control" placeholder="Search Post Data"/>

<div class="table-responsive">
	<h3 align="center">Wyniki wyszukiwania:  <span id="total_records"></span></h3>
</div>

<table class="table table-striped table-borderd">
	<thead>
		<tr>
			<th>title</th>
			<th>description</th>
			<th>author</th>
			<th>created_at</th>
		</tr>
	</thead>
	<tbody>
		@foreach($posts as $post)
		<tr>
			<td>{{ $post->title }}</td>
			<td>{{ $post->description }}</td>
			<td>{{ $post->author }}</td>
		<tr>
		@endforeach
	</tbody>
</table>


    
    <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
   

<script>
	$(document).ready(function(){

		fetch_post_data();

		function fetch_post_data(query = '')
		{
			$.ajax({
				url:"{{ route('text_search.action') }}",
				method:'GET',
				data:{query:query},
				dataType:'json',
				success:function(data)
				{
					$('tbody').html(data.table_data);
					$('#total_records').text(data.total_data);
				}
			})
		}

		$(document).on('keyup', '#search', function(){
			var query = $(this).val();
			fetch_post_data(query);
		});
	});
</script>
@stop