@extends('layouts.admin')

@section('content')

<div class="card">
    <div class="card-header">
        <h5>Product Page</h5>
    </div>


    <div class="card-body kanit">
        <table class="mytable">
            <thead>
              <tr class="tbs">
                <th class="tbs">ID</th>
                <th class="tbs">Category</th>
                <th class="tbs">Name</th>
                <th class="dbs">Description</th>
                <th class="tbs">Original Price</th>
                <th class="tbs">Selling Price</th>
                <th class="tbs">Image</th>
                <th class="tbs">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($products as $recieve_product_items)
              <tr class="tbs">
                <td class="tbs">{{$recieve_product_items->id}}</td>
                <td class="tbs">{{$recieve_product_items->call_catagory_data->name}}</td>
                <td class="tbs">{{$recieve_product_items->name}}</td>
                <td class="dbs">{{$recieve_product_items->description}}</td>
                <td class="tbs">{{$recieve_product_items->original_price}}/=BDT</td>
                <td class="tbs">{{$recieve_product_items->selling_price}}/=BDT</td>
                <td class="tbs">
                    <img src="{{asset('assets/uploads/products/'.$recieve_product_items->image)}}" alt="image here" height="50">
                </td>
                <td class="tbs">
                    <a href="{{url('edit_prod/'.$recieve_product_items->id)}}" class="btn btn-sm btn-info thisbtn">Edit</a>
                    <a href="{{url('delete_prod/'.$recieve_product_items->id)}}" class="btn btn-sm btn-danger thisbtn">Delete</a>
                </td>

              </tr>
              @endforeach
            </tbody>
          </table>
    </div>
</div>

<style>
    .thisbtn
    {
        margin-left: 0.2rem;
        border-radius: 0px;
        font-size: 0.6rem;
    }
    .mytable
    {
        font-size: 0.8rem;
        font-family: 'Kanit', sans-serif;
        color: black;
    }
    .tbs
    {
        border: solid 1px rgb(141, 140, 140);
        padding: 5px;
        margin: 1rem;
    }
    .dbs
    {
        border: solid 1px rgb(141, 140, 140);
        padding: 5px;
        margin: 1rem;
        width: 10%;
    }
</style>

@endsection
