@extends('layouts.admin')

@section('content')

<div class="container" >
    <style>
        .dc{
            float: left;
            margin-left: 1rem;
        }
        .btw
        {
            width: 50%;
        }
    </style>
    <div class="card">
        <div class="card-header">
            <h5>Add Product</h5>
        </div>
        <div class="card-body" style=" margin-left:5%;">
            <form action="{{url("update_products/".$products->id)}}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group col-sm-5 mb-3 dc">
                    <label > Category List</label>
                    <select class="form-select" aria-label="Default select example" style="background-color: #D6EAF8;">
                        <option value="">{{$products->call_catagory_data->name}}</option>
                    </select>
                </div>

                <div class="form-group col-sm-5 mb-3 dc">
                    <label >Name</label>
                    <input type="text" value="{{$products->name}}" class="form-control" name="name" placeholder="Enter Name" style="background-color: #D6EAF8;">
                </div>

                <div class="form-group col-sm-5 mb-3 dc">
                    <label >slug</label>
                    <input type="text" value="{{$products->slug}}" class="form-control" name="slug" placeholder="slug" style="background-color: #D6EAF8;">
                </div>

                <div class="form-group col-sm-5 mb-3 dc">
                    <label >Small description</label>
                    <textarea  name="small_description"  class="form-control" style="background-color: #D6EAF8;">{{$products->small_description}}</textarea>
                </div>

                <div class="form-group col-sm-5 mb-3 dc">
                    <label >Description</label>
                    <textarea  name="description"  class="form-control" style="background-color: #D6EAF8;"> {{$products->slug}}</textarea>
                </div>

                <div class="form-group col-sm-5 mb-3 dc">
                    <label >Original price</label>
                    <input type="number" value="{{$products->original_price}}" class="form-control" name="original_price" placeholder="original_price" style="background-color: #D6EAF8;">
                </div>

                <div class="form-group col-sm-5 mb-3 dc">
                    <label >Selling price</label>
                    <input type="number" value="{{$products->selling_price}}" class="form-control" name="selling_price" placeholder="selling_price" style="background-color: #D6EAF8;">
                </div>

                <div class="form-group col-sm-5 mb-3 dc">
                    <label >Tax</label>
                    <input type="number" value="{{$products->tax}}" class="form-control" name="tax" placeholder="tax" style="background-color: #D6EAF8;">
                </div>

                <div class="form-group col-sm-5 mb-3 dc">
                    <label >Quantity</label>
                    <input type="number" value="{{$products->qty}}" class="form-control" name="qty" placeholder="qty" style="background-color: #D6EAF8;">
                </div>

                <div class="form-check form-group col-sm-5 mb-3 dc">
                    <label >Status</label>
                    <input type="checkbox" {{$products->status == "1" ? 'checked':'' }} class="form-check-input" name="status" placeholder="Enter status" style="background-color: #f80303;">
                </div>

                <div class="form-check form-group col-sm-5 mb-3 dc">
                    <label >Trending</label>
                    <input type="checkbox" {{$products->trending == "1" ? 'checked':'' }}  class="form-check-input" name="trending" placeholder="Enter status" style="background-color: #f80303;">
                </div>


                <div class="form-group col-sm-5 mb-3 dc">
                    <label >meta_title</label>
                    <input type="text" value="{{$products->mata_title}}" class="form-control" name="mata_title" placeholder="meta_title" style="background-color: #D6EAF8;">
                </div>

                <div class="form-group col-sm-5 mb-3 dc">
                    <label >meta_keywords</label>
                    <textarea  name="meta_keywords" class="form-control" style="background-color: #D6EAF8;">
                        {{$products->meta_keywords}}
                    </textarea>
                </div>


                <div class="form-group col-sm-5 mb-3 dc">
                    <label >Meta description</label>
                    <textarea  name="mata_description"  class="form-control" style="background-color: #D6EAF8;">
                        {{$products->mata_description}}
                    </textarea>
                </div>

                <div class="form-group col-sm-5 mb-3 dc">
                    <br>
                    <label style="color: red;">Old image</label>
                    <img src="{{asset('assets/uploads/products/'.$products->image)}}" height="50">
                    <br>
                    <label >New image</label>
                    <br>
                    <img id="show_current_image" height="80">
                    <br>
                    <input type="file" class="form-control" name="image" onchange="loadFile(event)" style="background-color: #72bdf3;">
                </div>
                <br>
                <div class="form-group col-sm-10 mb-3 dc">
                    <br>
                    <button type="submit" class="btn btn-primary btw">Update Products</button>
                </div>


              </form>
        </div>
    </div>

</div>

        <script>
            var loadFile = function (event)
            {
                var image_show = document.getElementById("show_current_image");

                image_show.src = URL.createObjectURL(event.target.files[0]);
            } ;
        </script>


@endsection
