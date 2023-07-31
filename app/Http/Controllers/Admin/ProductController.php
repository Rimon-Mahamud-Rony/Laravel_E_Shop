<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

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

    public function edit($id)
    {
        $products = Product::find($id);

        return view('admin.products.edit',compact('products'));

    }

    public function update(Request $request, $id)
    {
        //return "product update is under developing";
        $products = Product::find($id);

        if($request->hasfile('image'))
        {
            $path = 'assets/uploads/products/'.$products->image;

            if(File::exists($path))
            {
                File::delete($path);
            }

            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets/uploads/products',$filename);
            $products->image = $filename;
        }

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

        $products->update();

        return redirect('products')->with('status', "Product Updated Successfully");
    }

    public function delete($id)
    {
        $products = Product::find($id);

        if($products->image)
        {
            $path = 'assets/uploads/products/'.$products->image;

            if(File::exists($path))
            {
                File::delete($path);
            }
        }

        $products->delete();
        return redirect('products')->with('status',"Product deleted Successfully");
    }

}
