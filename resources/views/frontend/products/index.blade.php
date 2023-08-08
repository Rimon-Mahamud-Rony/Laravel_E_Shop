@extends('layouts.front')

@section('title')
{{$category->name}} | RIMON'S E-SHOP
@endsection

@section('content')
<div class="py-5">
    <div class="container">
        <div class="row">
            <h3>ALL {{$category->name}}s</h3>
            @foreach ($products as $product)
                <div class="col-md-2 mt-3">
                    <div class="card ">
                        <img src="{{asset('assets/uploads/products/'.$product->image)}}" alt="product image" height="150"> <hr>
                        <div class="card-body">
                            <h5 class="text-center">{{$product->name}}</h5>
                            <small class="float-start">{{$product->selling_price}}</small>
                            <small class="float-end"><strike>{{$product->original_price}}</strike></small>
                        </div>
                     </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
