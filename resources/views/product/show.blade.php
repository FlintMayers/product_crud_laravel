@extends('layouts.app')

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
{{--                <img src="{{ asset( 'product/' . $product->avatar }}" alt="" />--}}
            </div>
        </div>
    </div>

@endsection