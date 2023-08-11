@extends('layouts.front')

@section('title')
View Cart | RIMON'S E-SHOP
@endsection

@section('content')

<div class="py-3 mb-4 shadow-sm bg-info border-top">
    <div class="container">
        <h6 class="mb-0"> <span> <a href="{{url('/')}}" style="color:white;">Home</a> </span> / <span> <a href="{{'cart'}}" style="color:white;">Cart</a> </span></h6>
    </div>
</div>

<div class="container my-3">
    <h5 class="alert alert-sm text-center" style="color: green;">Your cart items....</h5>
    <div class="card shadow ">
        <div class="card-body">
            @foreach ( $cartitems as $item)
                <div class="row product_data">
                    <div class="col-md-2">
                        <img src="{{asset('assets/uploads/products/'.$item->call_product_data->image)}}" alt="" height="50px;">
                    </div>
                    <div class="col-md-5">
                        <h6>{{$item->call_product_data->name}}</h6>
                    </div>
                    <div class="col-md-3">
                        <input type="hidden" class="prod_id" value="{{$item->prod_id}}">
                        <label for="quantity"> <h6>Quantity</h6> </label>
                        <div class="input-group text-center mb-3" style="width: 130px;">
                            <span class="btn btn-sm btn-info input-group-text dec-btn ">-</span>
                            <input type="text" name="quantity" value="{{$item->prod_qty}}" class="qty-input form-control text-center"/>
                            <span class="btn btn-sm btn-info input-group-text inc-btn">+</span>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <br>
                        <h6>
                            <button class="btn btn-sm btn-danger delete-cart-item"> <i class="fa fa-trash-o"></i> Remove </button>
                        </h6>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

@endsection

@section('scripts')

<script>
    $(document).ready(function () {

//---------- delete to cart start ---------------------------------------------------
        $('.delete-cart-item').click( function (e) {
            e.preventDefault();
            var product_id = $(this).closest('.product_data').find('.prod_id').val();

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
                url: "/delete-cart-item",
                data: {
                    'product_id' : product_id,

                    //input_field_name_to_controller: product_id_as_data
                },

                success: function (response) {
                    window.location.reload();
                    swal("", response.status, "success"); // sweet alert
                }
            });

        } );

 //---------- delete to cart end---------------------------------------------------

        //increment decrement ------------------------------------
        $('.inc-btn').click ( function (e) {
            e.preventDefault();

            //var inc_value = $('.qty-input').val();

            var inc_value = $(this).closest('.product_data').find('.qty-input').val();

            var value = parseInt(inc_value, 10);

            value = isNaN(value) ? 0: value;

            if(value < 10)
            {
                value++;
                $(this).closest('.product_data').find('.qty-input').val(value);
            }
        });


        $('.dec-btn').click ( function (e) {
            e.preventDefault();

            var dec_value = $(this).closest('.product_data').find('.qty-input').val();

            var value = parseInt(dec_value, 10);

            value = isNaN(value) ? 0: value;

            if(value > 1)
            {
                value--;
                $(this).closest('.product_data').find('.qty-input').val(value);
            }
        });

    });
</script>

@endsection
