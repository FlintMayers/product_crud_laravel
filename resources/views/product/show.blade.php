@extends('layouts.app')

@section('stylesheets')
    <link href="{{ asset('css/showproduct.css') }}" rel="stylesheet">
@endsection

@section('content')

    <div class="container">
        <div class="col-sm-6 col-sm-offset-3">
            <div class="well">
                <h4>Created at: {{ $product->created_at }}</h4>
                <h3>Name: {{ $product->name }}</h3>
                <h3>Surname: {{ $product->surname }}</h3>
                <h3>Email: {{ $product->email }}</h3>
                <h3>Subscription type: {{ $product->subscription }}</h3>
                {{--<h3><a href="{{ asset( 'product/' .$product->avatar }}">Parsisiusti CV</a></h3>--}}
                {{--<img src="{{ asset( 'product/' . $product->avatar }}" alt="" />--}}

                {{ Form::open(['method' => 'DELETE', 'route' => ['product.destroy', $product->id]]) }}
                    {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                {{ Form::close() }}
            </div>
        </div>
    </div>

@endsection
