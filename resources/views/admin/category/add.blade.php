@extends('layouts.admin')

@section('content')

<div class="container" >
    <div class="card">
        <div class="card-header">
            <h5>Add Category</h5>
        </div>
        <div class="card-body" style=" margin-left:5%;">
            <form action="{{url("insert_category")}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group col-sm-7 mb-3">
                    <label >Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Enter Name" style="background-color: #D6EAF8;">
                </div>

                <div class="form-group col-sm-7">
                    <label >slug</label>
                    <input type="text" class="form-control" name="slug" placeholder="slug" style="background-color: #D6EAF8;">
                </div>

                <div class="form-group col-sm-7">
                    <label >description</label>
                    <textarea  name="description" rows="3" class="form-control" style="background-color: #D6EAF8;"></textarea>
                </div>

                <div class="form-check form-group col-sm-7">
                    <label >Status</label>
                    <input type="checkbox" class="form-check-input" name="status" placeholder="Enter status" style="background-color: #f80303;">
                </div>

                <div class="form-check form-group col-sm-7">
                    <label >Popular</label>
                    <input type="checkbox" class="form-check-input" name="popular" placeholder="Enter popular" style="background-color: #f80303;">
                </div>

                <div class="form-group col-sm-7">
                    <label >meta_title</label>
                    <input type="text" class="form-control" name="meta_title" placeholder="meta_title" style="background-color: #D6EAF8;">
                </div>

                <div class="form-group col-sm-7">
                    <label >meta_keywords</label>
                    <textarea  name="meta_keywords" rows="3" class="form-control" style="background-color: #D6EAF8;"></textarea>
                </div>


                <div class="form-group col-sm-7">
                    <label >meta_description</label>
                    <textarea  name="meta_descrip" rows="3" class="form-control" style="background-color: #D6EAF8;"></textarea>
                </div>

                <div class="form-group col-sm-7">
                    <label >image</label>
                    <input type="file" class="form-control" name="image"  style="background-color: #72bdf3;">
                </div>
                <br>
                <div class="form-group col-sm-7">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>


              </form>
        </div>
    </div>

</div>

@endsection
