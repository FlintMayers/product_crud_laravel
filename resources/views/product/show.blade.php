@extends('layouts.app')

@section('stylesheets')
    <link href="{{ asset('css/subscriber_profile.css') }}" rel="stylesheet">
@endsection

@section('content')

    <div class="container">
        <div class="row">


            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >


                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title">{{ $product->name }} {{ $product->surname }}</h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-3 col-lg-3 " align="center">
                                <img alt="User Pic" src="{{ $product->avatar ? asset( 'avatar/' . $product->avatar) : asset( 'avatar/default_avatar.png') }}" class="img-circle img-responsive">
                            </div>

                            <div class=" col-md-9 col-lg-9 ">
                                <table class="table table-user-information">
                                    <tbody>
                                    <tr>
                                        <td>Type:</td>
                                        <td>Subscriber</td>
                                    </tr>
                                    <tr>
                                        <td>Subscription date:</td>
                                        <td>{{ $product->created_at->diffForHumans() }}</td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td><a href="mailto:{{ $product->email }}">{{ $product->email }}</a></td>
                                    </tr>
                                        <td>Phone Number</td>
                                        <td>{{ $product->phone }}</td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer">
                        <span class="pull-right">
                            <a href="{{ route('product.edit', $product->id) }}" type="button" class="btn btn-sm btn-warning"><i class="fa fa-pencil-square-o"></i></a>
                            {{ Form::open(['method' => 'DELETE', 'route' => ['product.destroy', $product->id]]) }}
                                {{ Form::button('<i class="fa fa-trash-o"></i>', array('class'=>'btn btn-danger btn-sm', 'type'=>'submit')) }}
                            {{ Form::close() }}
                        </span>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('js/subscriber_profile.js') }}"></script>
@endsection
