@extends('layouts.front')

@section('title')
RIMON'S E-SHOP
@endsection

@section('content')

@include('layouts.inc.front_slider')

<div class="py-5">
    <div class="container">
        <div class="row">
            <h3>All category</h3>
            @foreach ($category as $c_p)
                <div class="col-md-2 mt-3">
                    <div class="card ">
                        <img src="{{asset('assets/uploads/category/'.$c_p->image)}}" alt="product image" height="150">
                        <div class="card-body">
                            <h5>{{$c_p->name}}</h5>
                            <small>{{$c_p->description}}</small>
                        </div>
                     </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

@endsection
