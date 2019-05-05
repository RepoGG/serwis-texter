@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                @if($users === 'admin')
                <div class="card-header-admin">Panel Administratora </div>
                @else
                <div class="card-header">Panel Użytkownika </div>
                @endif

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="container">
        <!-- Example row of columns -->
       @foreach($posts as $post)
        

            @if( $post->author  ===  $users )

            <div class="row">
              <div class="col-md-10">
                
                <h2>{{ $post->title }}</h2>
                <p>{{ $post->description }}</p>
                <p>Autor: {{ $post->author }}</p>
                <p><a class="btn btn-secondary" href="/posts/{{ $post->id }}/edit" role="button">Edytuj &raquo;</a>
                <a class="btn btn-secondary" href="/posts/{{ $post->id }}/destroy" role="button">Usuń &raquo;</a></p>
              </div>

              
            </div>
            @elseif($users === 'admin')

                <div class="row">
              <div class="col-md-10">
                
                <h2>{{ $post->title }}</h2>
                <p>{{ $post->description }}</p>
                <p>Autor: {{ $post->author }}</p>
                
                <a class="btn btn-secondary" href="/posts/{{ $post->id }}/destroy" role="button">Usuń &raquo;</a></p>
              </div>

              
            </div>


            <hr>
        @endif
      
      @endforeach
      </div> <!-- /container -->
                         

        

        <hr>
     



                </div>
            </div>
        </div>
    </div>
</div>
@endsection
