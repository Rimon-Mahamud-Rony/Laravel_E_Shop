@extends('layouts.front')

@section('title')
{{$products->name}} | RIMON'S E-SHOP
@endsection

@section('content')

    <div class="py-3 mb-4 shadow-sm bg-info border-top">
        <div class="container">
            <h6 class="mb-0"> <span> <a href="{{url('/')}}" style="color:white;">Collection</a> </span> / <span> <a href="{{url('view_category/'.$products->call_catagory_data->name)}}" style="color:white;">{{$products->call_catagory_data->name}}</a> </span>/  {{$products->name}} </h6>
        </div>
    </div>

    <div class="container">
        <div class="card shadow product_data">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4 border-right">
                        <img src="{{asset('assets/uploads/products/'.$products->image)}}" class="w-100" alt="">
                    </div>
                    <div class="col-md-8">
                        <h2 class="mb-0">
                            {{$products->name}}
                            @if ($products->trending == '1')
                                <label class="float-end badge bg-danger trending_tag" style="font-size: 0.8rem;">Trending</label>
                            @endif
                        </h2>
                        <hr>
                        <label class="me-3"> Original price: <s>Bdt/={{$products->original_price}} </s></label>
                        <label class="fw-bold"> Selling price: Bdt/={{$products->selling_price}}</label>
                        <p class="mt-3">
                            {{$products->small_description}}
                        </p>
                        <hr>
                        @if ($products->qty > 0)
                            <label class="badge bg-success">In Stock</label>
                        @else
                        <label class="badge bg-success">Out of Stock</label>
                        @endif
                        <div class="row mt-2">
                            <div class="col-md-2">
                                <input type="hidden" value="{{$products->id}}" class="prod_id">
                                <label for="quantity">Quantity</label>
                                <div class="input-group text-center mb-3" style="width:110px;">
                                    <span class="btn btn-sm btn-info input-group-text dec-btn ">-</span>
                                    <input type="text" name="quantity" value="1" class="qty-input form-control"/>
                                    <span class="btn btn-sm btn-info input-group-text inc-btn">+</span>
                                </div>
                            </div>
                            <div class="col-md-10">
                                <br>
                                <button type="button" class="btn btn-success me-3  float-start">Add to Wishlist <i class="fa fa-heart" style="color: :red;"></i> </button>
                                <button type="button" class="btn btn-warning me-3 addToCartBtn float-start">Add to cart <i class="fa fa-cart-plus"></i> </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 float-end">
                    <hr>

                    <p style="padding-left: 5rem;">
                        <u> Description: </u> <br>
                        {{$products->description}}
                    </p>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
@endsection

@section('scripts')

<script>
    $(document).ready(function () {

//---------- ad to cart start ---------------------------------------------------
        $('.addToCartBtn').click( function (e) {
            e.preventDefault();
            var product_id = $(this).closest('.product_data').find('.prod_id').val();
            var product_qty = $(this).closest('.product_data').find('.qty-input').val();

            //The closest() method returns the first ancestor of the selected element.

            // alert(product_id);
            // alert(product_qty);

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({

                type: "POST",
                url: "/add-to-cart",
                data: {
                    'product_id' : product_id,

                    //input_field_name_to_controller: product_id_as_data

                    'product_qty' : product_qty,
                },

                success: function (response) {
                    swal(response.status); // sweet alert
                }
            });

        } );

 //---------- ad to cart end---------------------------------------------------

        //increment decrement ------------------------------------
        $('.inc-btn').click ( function (e) {
            e.preventDefault();

            var inc_value = $('.qty-input').val();

            var value = parseInt(inc_value, 10);

            value = isNaN(value) ? 0: value;

            if(value < 10)
            {
                value++;
                $('.qty-input').val(value);
            }
        });


        $('.dec-btn').click ( function (e) {
            e.preventDefault();

            var inc_value = $('.qty-input').val();

            var value = parseInt(inc_value, 0);

            value = isNaN(value) ? 0: value;

            if(value > 1)
            {
                value--;
                $('.qty-input').val(value);
            }
        });

    });
</script>

@endsection
