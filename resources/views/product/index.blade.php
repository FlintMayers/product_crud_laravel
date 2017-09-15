@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center">Subscribers list</h1>
        <table class="table table-hover">
            <thead>
            <tr>
                <th>Subscriber</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Subscription Type</th>
                <th>Created at</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{ $product->name }} {{ $product->surname }}</td>
                    <td>{{ $product->email }}</td>
                    <td>{{ $product->phone }}</td>
                    <td>{{ $product->subscription }}</td>
                    <td>{{ $product->created_at->diffForHumans() }}</td>
                    <td><a class="btn btn-success" href="{{ route('product.show', $product->id) }}">View</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection