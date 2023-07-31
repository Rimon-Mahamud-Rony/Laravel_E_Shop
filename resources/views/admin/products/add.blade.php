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
            <form action="{{url("insert_products")}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group col-sm-5 mb-3 dc">
                    <label > Category List</label>
                    <select class="form-select" name="cat_id" aria-label="Default select example" style="background-color: #D6EAF8;">
                        <option value="">Select a category</option>
                        @foreach ($category as $cat_list)
                        <option value="{{$cat_list->id}}">{{$cat_list->name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group col-sm-5 mb-3 dc">
                    <label >Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Enter Name" style="background-color: #D6EAF8;">
                </div>

                <div class="form-group col-sm-5 mb-3 dc">
                    <label >slug</label>
                    <input type="text" class="form-control" name="slug" placeholder="slug" style="background-color: #D6EAF8;">
                </div>

                <div class="form-group col-sm-5 mb-3 dc">
                    <label >Small description</label>
                    <textarea  name="small_description"  class="form-control" style="background-color: #D6EAF8;"></textarea>
                </div>

                <div class="form-group col-sm-5 mb-3 dc">
                    <label >Description</label>
                    <textarea  name="description"  class="form-control" style="background-color: #D6EAF8;"></textarea>
                </div>

                <div class="form-group col-sm-5 mb-3 dc">
                    <label >Original price</label>
                    <input type="number" class="form-control" name="original_price" placeholder="original_price" style="background-color: #D6EAF8;">
                </div>

                <div class="form-group col-sm-5 mb-3 dc">
                    <label >Selling price</label>
                    <input type="number" class="form-control" name="selling_price" placeholder="selling_price" style="background-color: #D6EAF8;">
                </div>

                <div class="form-group col-sm-5 mb-3 dc">
                    <label >Tax</label>
                    <input type="number" class="form-control" name="tax" placeholder="tax" style="background-color: #D6EAF8;">
                </div>

                <div class="form-group col-sm-5 mb-3 dc">
                    <label >Quantity</label>
                    <input type="number" class="form-control" name="qty" placeholder="qty" style="background-color: #D6EAF8;">
                </div>

                <div class="form-check form-group col-sm-5 mb-3 dc">
                    <label >Status</label>
                    <input type="checkbox" class="form-check-input" name="status" placeholder="Enter status" style="background-color: #f80303;">
                </div>

                <div class="form-check form-group col-sm-5 mb-3 dc">
                    <label >Trending</label>
                    <input type="checkbox" class="form-check-input" name="trending" placeholder="Enter status" style="background-color: #f80303;">
                </div>


                <div class="form-group col-sm-5 mb-3 dc">
                    <label >meta_title</label>
                    <input type="text" class="form-control" name="mata_title" placeholder="meta_title" style="background-color: #D6EAF8;">
                </div>

                <div class="form-group col-sm-5 mb-3 dc">
                    <label >meta_keywords</label>
                    <textarea  name="meta_keywords" class="form-control" style="background-color: #D6EAF8;"></textarea>
                </div>


                <div class="form-group col-sm-5 mb-3 dc">
                    <label >Meta description</label>
                    <textarea  name="mata_description"  class="form-control" style="background-color: #D6EAF8;"></textarea>
                </div>

                <div class="form-group col-sm-5 mb-3 dc">
                    <label >image</label>
                    <br>
                    <img id="show_current_image" height="80">
                    <br>
                    <input type="file" class="form-control" name="image" onchange="loadFile(event)" style="background-color: #72bdf3;">
                </div>
                <br>
                <div class="form-group col-sm-10 mb-3 dc">
                    <br>
                    <button type="submit" class="btn btn-primary btw">Submit</button>
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
