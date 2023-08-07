@extends('layouts.front')

@section('title')
RIMON'S E-SHOP
@endsection

@section('content')

@include('layouts.inc.front_slider')

<div class="container">
    <br><br>
    <h3 class="">Feature Products</h3>
    <br>
    <div class="row">
        <div class="owl-carousel owl-theme">
            @foreach ($feature_products as $f_p)
                <div class="item">
                    <div class="card">
                        <div class="card-body">
                            <img src="{{asset('assets/uploads/products/'.$f_p->image)}}" alt="this is image" height="180">
                            <hr>
                            <h5 class="text-center">{{$f_p->name}}</h5>
                            <small class="float-start">{{$f_p->selling_price}}</small>
                            <small class="float-end"><strike>{{$f_p->original_price}}</strike></small>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

@endsection




<!--

    <div class="py-5">
        <div class="container">
            <div class="row">
                <h3>Feature Products</h3>
                @foreach ($feature_products as $f_p)
                    <div class="col-md-3 mt-3">
                        <div class="card ">
                            <img src="{{asset('assets/uploads/products/'.$f_p->image)}}" alt="product image" height="220">
                            <div class="card-body">
                                <h5>{{$f_p->name}}</h5>
                                <small>{{$f_p->	selling_price}}</small>
                            </div>
                         </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
-->
