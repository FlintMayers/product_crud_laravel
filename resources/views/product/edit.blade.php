@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <h1 class="text-center">Edit Subscriber data</h1>

                {!! Form::model($product, ['route' => ['product.update', $product->id], 'class' => 'form-horizontal', 'method' => 'put']) !!}
                    @include('product.form')
                    <div class="form-group">
                        {!! Form::submit('Update', ['class' => 'btn btn-success col-xs-12']) !!}
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