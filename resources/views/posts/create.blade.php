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
                    {!! Form::open(['url'=>'/', 'class'=>'form-horizontal'])!!}
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
                            	{!! Form::label('author', 'Autor postu:') !!}
                            </div>
                            <div class="col-md-6">
                                {!! Form::text('author', null, ['class'=>'form-control']) !!}
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