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
            <p><a href="{{ $posts->url }}"> {{ $posts->url }}</a></p>
            <p>Kategoria: {{ $posts->category }}</p>
            <p>{{ $posts->author }}</p>
          </div>

          @if (isset($users->name) === $posts->name)
          <p><a class="btn btn-secondary" href="/posts/{{ $posts->id }}/edit" role="button">Edytuj &raquo;</a></p>
          <p><a class="btn btn-secondary" href="/posts/{{ $posts->id }}/destroy" role="button">Usuń &raquo;</a></p>
          @endif
          <p><a class="btn btn-secondary" href="/posts/{{ $posts->id }}/comments/create" role="button">Dodaj komentarz &raquo;</a></p>
          
        </div>

        <hr>
        <p><h4><b>Komentarze: </b></h4></p>

        @foreach($comments as $comment)
        <div class="row">
          <div class="col-md-10">
            @if($posts->id === $comment->id_post)
            
            <p>{{ $comment->description }}</p>
            <p>{{ $comment->created_at }}</p>
            @endif
          </div>
        </div>

        @endforeach
     
      </div> <!-- /container -->

     

    </main>


@stop