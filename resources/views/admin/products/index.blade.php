@extends('layouts.admin')

@section('content')

<div class="card">
    <div class="card-header">
        <h5>Product Page</h5>
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
        }
        .dts
        {
            width: 200px;
        }
    </style>
    <div class="card-body kanit">
        <table class="table-sm table-borderd" style="font-size: 0.7rem;">
            <thead>
              <tr style="border: solid 1px black;">
                <th style="border: solid 1px black;">ID</th>
                <th style="border: solid 1px black;">Category</th>
                <th style="border: solid 1px black;">Name</th>
                <th style="border: solid 1px black;">Description</th>
                <th style="border: solid 1px black;">Original Price</th>
                <th style="border: solid 1px black;">Selling Price</th>
                <th style="border: solid 1px black;">Image</th>
                <th style="border: solid 1px black;">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($products as $recieve_product_items)
              <tr style="border: solid 1px black;">
                <td style="border: solid 1px black;">{{$recieve_product_items->id}}</td>
                <td style="border: solid 1px black;">{{$recieve_product_items->call_catagory_data->name}}</td>
                <td style="border: solid 1px black;">{{$recieve_product_items->name}}</td>
                <td  style="border: solid 1px black;">{{$recieve_product_items->description}}</td>
                <td style="border: solid 1px black;">{{$recieve_product_items->original_price}}</td>
                <td style="border: solid 1px black;">{{$recieve_product_items->selling_price}}</td>
                <td style="border: solid 1px black;">
                    <img src="{{asset('assets/uploads/products/'.$recieve_product_items->image)}}" alt="image here" height="50">
                </td>
                <td style="border: solid 1px black;">
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
