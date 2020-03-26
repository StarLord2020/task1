@extends('products.layouts.default')

@section('content')
    <div class="jumbotron">
        <div class="container">
            <h2>{{$product['header']}}</h2>
            <p>{{$product['content']}} </p>
            <p><a class="btn btn-secondary" href="#" role="button">{{$product['button']}}</a></p>
        </div>
    </div>
    @endsection
