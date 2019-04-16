@extends('master')
@section('content')
<h2>Wyszukiwanie</h2>

<input type="text" name="search" id="search" class="form-control" placeholder="Search Post Data"/>

<div class="table-responsive">
	<h3 align="center">Wyniki wyszukiwania: <span id="total_records"></span></h3>
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
		
	</tbody>
</table>
@stop