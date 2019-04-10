@extends('master')
@section('content')

<!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron" style="background-color:yellow">
        <div class="container">
          <h1 class="display-3">Hello, welcom on texter!</h1>
          <p>Serwis pozwalający na tworzenie postów</p>
          
        </div>
      </div>

      <div class="container">
        <!-- Example row of columns -->
       @foreach($posts as $post)

        <div class="row">
          <div class="col-md-10">
            <h2>{{ $post->title }}</h2>
            <p>{{ $post->description }}</p>
            <p>Autor: {{ $post->author }}</p>
            <p><a class="btn btn-secondary" href="#" role="button">Czytaj &raquo;</a></p>
          </div>

          
        </div>

        <hr>
      @endforeach
      </div> <!-- /container -->

    </main>


@stop