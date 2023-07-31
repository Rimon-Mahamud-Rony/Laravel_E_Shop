<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    //
    public function index()
    {
         $products = Product::all();

       return view('admin.products.index', compact('products'));
    }

    public function add()
    {
        $category = Category::all();

        return view('admin.products.add',compact('category'));
    }



    public function insert(Request $request)
    {
        //return "ok it is not showing problem";

        $products = new Product();

        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets/uploads/products',$filename);
            $products->image = $filename;
        }

        $products->cat_id = $request->input('cat_id');
        $products->name = $request->input('name');
        $products->slug = $request->input('slug');
        $products->small_description = $request->input('small_description');
        $products->description = $request->input('description');
        $products->original_price = $request->input('original_price');
        $products->selling_price = $request->input('selling_price');
        $products->tax = $request->input('tax');
        $products->qty = $request->input('qty');
        $products->status = $request->input('status')== TRUE ? '1' : '0';
        $products->trending = $request->input('trending')== TRUE ? '1' : '0';
        $products->mata_title = $request->input('mata_title');
        $products->meta_keywords = $request->input('meta_keywords');
        $products->mata_description = $request->input('mata_description');

        $products->save();

        return redirect('products')->with('status', "Product Added Successfully");

    }
}
