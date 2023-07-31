@extends('layouts.admin')

@section('content')

<div class="container" >
    <div class="card">
        <div class="card-header">
            <h5>Edit/Update Category</h5>
        </div>
        <div class="card-body" style=" margin-left:5%;">
            <form action="{{url("update_category/".$category->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group col-sm-7 mb-3">
                    <label >Name</label>
                    <input type="text" class="form-control" name="name" value="{{$category->name}}" placeholder="Enter Name" style="background-color: #D6EAF8;">
                </div>

                <div class="form-group col-sm-7">
                    <label >slug</label>
                    <input type="text" class="form-control" name="slug" value="{{$category->slug}}" placeholder="slug" style="background-color: #D6EAF8;">
                </div>



                <div class="form-group col-sm-7">
                    <label >description</label>
                    <textarea  name="description"  rows="3" class="form-control" style="background-color: #D6EAF8;">{{$category->description}}</textarea>
                </div>

                <div class="form-check form-group col-sm-7">
                    <label >Status</label>
                    <input type="checkbox" {{$category->status == "1" ? 'checked':'' }} class="form-check-input" name="status" placeholder="Enter status" style="background-color: #f80303;">
                </div>

                <div class="form-check form-group col-sm-7">
                    <label >Popular</label>
                    <input type="checkbox"  {{$category->popular == "1" ? 'checked':'' }}  class="form-check-input" name="popular" placeholder="Enter popular" style="background-color: #f80303;">
                </div>

                <div class="form-group col-sm-7">
                    <label >meta_title</label>
                    <input type="text" class="form-control" name="meta_title" value="{{$category->meta_title}}" placeholder="meta_title" style="background-color: #D6EAF8;">
                </div>

                <div class="form-group col-sm-7">
                    <label >meta_keywords</label>
                    <textarea  name="meta_keywords" rows="3" class="form-control" style="background-color: #D6EAF8;">{{$category->meta_keywords}}</textarea>
                </div>


                <div class="form-group col-sm-7">
                    <label >meta_description</label>
                    <textarea  name="meta_descrip" rows="3" class="form-control" style="background-color: #D6EAF8;">{{$category->meta_descrip}}</textarea>
                </div>

                <div class="form-group col-sm-7">
                    <br>
                    <label style="color: #f90000">Old Image</label>
                    <img src="{{asset('assets/uploads/category/'.$category->image)}}" height="80" >
                    <br>
                    <label style="color: #72bdf3">New Image</label>
                    <img id="show_current_image" height="200">
                    <br>
                    <input type="file" class="form-control" name="image" onchange="loadFile(event)"  style="background-color: #72bdf3;">
                    <br>
                </div>
                <br>
                <div class="form-group col-sm-7">
                    <br>
                    <button type="submit" class="btn btn-primary">Update</button>
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
