@extends('layouts.app')

@section('stylesheets')
    <link href="{{ asset('css/showproduct.css') }}" rel="stylesheet">
@endsection

@section('content')

    <div class="container bootstrap snippet">
        <div class="row">
            <div class="col-lg-12">
                <div class="main-box no-header clearfix">
                    <div class="main-box-body clearfix">
                        <div class="table-responsive">
                            <table class="table user-list">
                                <thead>
                                <tr>
                                    <th><span>Name</span></th>
                                    <th><span>Subscribed</span></th>
                                    <th class="text-center"><span>Subscription type</span></th>
                                    <th><span>Email</span></th>
                                    <th>&nbsp;</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($products as $product)
                                <tr>
                                    <td>
                                        <img src="https://bootdey.com/img/Content/user_1.jpg" alt="">
                                        <a href="#" class="user-link">{{ $product->name }} {{ $product->surname }}</a>
                                        <span class="user-subhead">Subscriber</span>
                                    </td>
                                    <td>{{ $product->created_at->diffForHumans() }}</td>
                                    <td class="text-center">
                                        <span class="label label-{{ $product->subscription == 'Yearly' ? "success" : "info" }}">{{ $product->subscription }}</span>
                                    </td>
                                    <td>
                                        <a href="#">{{ $product->email }}</a>
                                    </td>
                                    <td style="width: 20%;">
                                        <a href="{{ route('product.show', $product->id) }}" class="table-link">
                                            <span class="fa-stack">
                                                <i class="fa fa-square fa-stack-2x"></i>
                                                <i class="fa fa-search-plus fa-stack-1x fa-inverse"></i>
                                            </span>
                                        </a>
                                        <a href="{{ route('product.edit', $product->id) }}" class="table-link">
                                            <span class="fa-stack">
                                                <i class="fa fa-square fa-stack-2x"></i>
                                                <i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
                                            </span>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
