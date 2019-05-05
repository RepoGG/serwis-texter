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

               
               
                    {!! Form::open(['url'=>'/posts/{id}/comments', 'class'=>'form-horizontal'])!!}
                        @csrf

                        

                         <div class="form-group row">
                            <div for="email" class="col-md-4 col-form-label text-md-right">
                            	{!! Form::label('description', 'Treść komentarza:') !!}
                            </div>
                            <div class="col-md-6">
                                {!! Form::textarea('description', null, ['class'=>'form-control']) !!}
                            </div>
                        </div>

                          <div class="form-group row">
                            <div for="email" class="col-md-4 col-form-label text-md-right">
                            	{!! Form::label('name', 'Autor postu:') !!}
                            </div>
                            <div class="col-md-6">
                                {!!Form::checkbox('name', $users['name'])!!}
                            </div>
                        </div>

                         <div class="form-group row">
                            <div for="email" class="col-md-4 col-form-label text-md-right">
                                {!! Form::label('id_post', ' post:') !!}
                            </div>
                            <div class="col-md-6">
                                {!!Form::checkbox('id_post', $id)!!}

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