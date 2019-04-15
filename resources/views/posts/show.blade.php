@extends('master')
@section('content')

<!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron" style="background-color:yellow">
        <div class="container">
          <h1 class="display-3">Hello, welcome on texter!</h1>
          <p>Serwis pozwalający na tworzenie postów</p>
          
        </div>
      </div>


    
      <div class="container">
        <!-- Example row of columns -->
      

        <div class="row">
          <div class="col-md-10">
            <p>{{ $posts->title }}</p>
            <p>{{ $posts->description }}</p>
            <p>{{ $posts->author }}</p>
          </div>

          @if (Auth::check())
          <p><a class="btn btn-secondary" href="/posts/{{ $posts->id }}/edit" role="button">Edytuj &raquo;</a></p>
          @endif
          
        </div>

        <hr>
     
      </div> <!-- /container -->

     

    </main>


@stop