@extends('layouts.app')

@section('stylesheets')
    <link href="{{ asset('css/product_list.css') }}" rel="stylesheet">
    <link href="{{ asset('css/landing_styles.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.16/datatables.min.css"/>
@endsection

@section('content')


    <div class="container bootstrap snippet">

        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                @if(session()->has('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div>
                @endif
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="main-box no-header clearfix">
                    <div class="main-box-body clearfix">
                        <div class="table-responsive">
                            <table id="products" class="table user-list">
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
                                        <img src={{ $product->avatar ? asset( 'avatar/' . $product->avatar) : asset( 'avatar/default_avatar.png') }} alt="">
                                        <a href="{{ route('product.show', $product->id) }}" class="user-link">{{ $product->name }} {{ $product->surname }}</a>
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
                {{ $products->links() }}
            </div>
        </div>
    </div>

@endsection

@section('scripts')
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.16/datatables.min.js"></script>
    <script src="{{ asset('js/index_styles.js') }}"></script>
@endsection
