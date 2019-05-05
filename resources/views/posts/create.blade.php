@extends('master')
@section('content')
<br><br>
<div class="card-body">


				@if(count($errors) > 0)
				<div class="alert alert-danger">
					@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</div>
				@endif
               {{ $users->name }}
                    {!! Form::open(['url'=>'/posts', 'class'=>'form-horizontal'])!!}
                        @csrf

                        <div class="form-group row">
                            <div for="email" class="col-md-4 col-form-label text-md-right">
                            	{!! Form::label('title', 'Tytuł:') !!}
                            </div>
                            <div class="col-md-6">
                                {!! Form::text('title', null, ['class'=>'form-control']) !!}
                            </div>
                        </div>

                         <div class="form-group row">
                            <div for="email" class="col-md-4 col-form-label text-md-right">
                            	{!! Form::label('description', 'Treść postu:') !!}
                            </div>
                            <div class="col-md-6">
                                {!! Form::textarea('description', null, ['class'=>'form-control']) !!}
                            </div>
                        </div>

                        <div class="form-group row">
                            <div for="email" class="col-md-4 col-form-label text-md-right">
                                {!! Form::label('url', 'Link: ') !!}
                            </div>
                            <div class="col-md-6">
                                {!! Form::text('url', null, ['class'=>'form-control']) !!}
                            </div>
                        </div>

                        <div class="form-group row">
                            <div for="email" class="col-md-4 col-form-label text-md-right">
                                {!! Form::label('category', 'Kategoria:  ') !!}
                            </div>
                            <div class="col-md-6">
                                {!! Form::select('category', array('1'=>'kategoria 1', '2'=>'kategoria 2', '3'=>'kategoria 3', '4'=>'kategoria 4'))!!}
                            </div>
                        </div>

                          <div class="form-group row">
                            <div for="email" class="col-md-4 col-form-label text-md-right">
                            	{!! Form::label('author', 'Autor postu:') !!}
                            </div>
                            <div class="col-md-6">
                                {!!Form::checkbox('author', $users->name)!!}
                            </div>
                        </div>

                        

                         <div class="form-group row">
                            <div class="col-md-6" align="right">
                                {!! Form::submit('Dodaj post', null, ['class'=>'btn btn-primary']) !!}
                            </div>
                        </div>

                       

                       

                        
                    {!! Form::close() !!}
                </div>


@stop