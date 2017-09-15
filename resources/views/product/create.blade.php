@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <h1 class="text-center">Subscribe</h1>

                {!! Form::open(['method' => 'POST', 'action' => 'ProductController@store', 'files' => true]) !!}
                    @include('product.form')
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