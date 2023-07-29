@extends('layouts.admin')

@section('content')

<div class="card">
    <div class="card-header">
        <h5>Category Page</h5>
    </div>

    <style>
        .thisbtn
        {
            margin-left: 1rem;
            border-radius: 0px;
            font-size: 0.6rem;
        }
        .mytable
        {
            font-size: 0.8rem;
        }
    </style>
    <div class="card-body kanit">
        <table class="table table-sm table-bordered table-striped mytable">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Image</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($category as $product)
              <tr>
                <td>{{$product->id}}</td>
                <td>{{$product->name}}</td>
                <td>{{$product->description}}</td>
                <td>
                    <img src="{{asset('assets/uploads/category/'.$product->image)}}" alt="image here" height="50">
                </td>
                <td>
                    <button class="btn btn-sm btn-info thisbtn">Edit</button>
                    <button class="btn btn-sm btn-danger thisbtn">Delete</button>
                </td>

              </tr>
              @endforeach
            </tbody>
          </table>
    </div>
</div>


@endsection
