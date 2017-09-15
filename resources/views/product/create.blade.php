@extends('layouts.app')

@section('stylesheets')
    <link href="{{ asset('css/form_styling.css') }}" rel="stylesheet">
@endsection

@section('content')

    <div class="container">
        <div class="row">
        @include('errors')
            <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
                <h2>Form <small>Subscribe to our Newsletter and stay tuned.</small></h2>

                <hr class="colorgraph">

                {!! Form::open(['method' => 'POST', 'action' => 'ProductController@store', 'files' => true]) !!}
                    @include('product.form')
                    <div class="form-group">
                        {!! Form::submit('Subscribe', ['class' => 'btn btn-success col-xs-12']) !!}
                    </div>
                {!! Form::close() !!}
            </div>
        </div>

    </div>

@endsection

@section('scripts')
    <script src="{{ asset('js/form_styles.js') }}"></script>
@endsection