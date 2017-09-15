@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <h1 class="text-center">Subscribe</h1>

                {!! Form::open(['method' => 'POST', 'action' => 'ProductController@store', 'files' => true]) !!}
                <div class="form-group">
                    {!! Form::label('name', 'First Name') !!}
                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('surname', 'Last Name') !!}
                    {!! Form::text('surname', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('email', 'Email') !!}
                    {!! Form::email('email', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('phone', 'Phone') !!}
                    {!! Form::text('phone', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('subscription', 'Subscription Type') !!}
                    {!! Form::select('subscription', array('Monthly' => 'Monthly', 'Yearly' => 'Yearly'), 0, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('avatar', 'Optional: upload your avatar') !!}
                    {!! Form::file('avatar', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::submit('Subscribe', ['class' => 'btn btn-success col-xs-12']) !!}
                </div>
                {!! Form::close() !!}
            </div>

            <div class="col-sm-6 col-sm-offset-3">
            @if (count($errors) > 0)
                <!--   	klaidos -->
                    <div class="row">
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endif
            </div>
        </div>

    </div>



@endsection