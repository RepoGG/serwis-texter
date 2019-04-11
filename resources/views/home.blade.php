@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="container">
        <!-- Example row of columns -->
       @foreach($posts as $post)

            @if( $post->author  === 'John Doe')

            <div class="row">
              <div class="col-md-10">
                
                <h2>{{ $post->title }}</h2>
                <p>{{ $post->description }}</p>
                <p>Autor: {{ $user->name }}</p>
                <p><a class="btn btn-secondary" href="{{ url('/', $post->id) }}" role="button">Edytuj &raquo;</a></p>
                
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
