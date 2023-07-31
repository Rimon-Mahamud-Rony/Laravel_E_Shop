@extends('layouts.admin')

@section('content')

<div class="card">
    <div class="card-header">
        <h5>Product Page</h5>
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
                @foreach ($products as $recieve_product_items)
              <tr>
                <td>{{$recieve_product_items->id}}</td>
                <td>{{$recieve_product_items->name}}</td>
                <td>{{$recieve_product_items->description}}</td>
                <td>
                    <img src="{{asset('assets/uploads/products/'.$recieve_product_items->image)}}" alt="image here" height="50">
                </td>
                <td>
                    <a href="{{url('edit_prod/'.$recieve_product_items->id)}}" class="btn btn-sm btn-info thisbtn">Edit</a>
                    <a href="{{url('delete_prod/'.$recieve_product_items->id)}}" class="btn btn-sm btn-danger thisbtn">Delete</a>
                </td>

              </tr>
              @endforeach
            </tbody>
          </table>
    </div>
</div>


@endsection
