<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontendController extends Controller
{
    //
    public function index()
    {
        //return "front end working well";
        $feature_products = Product::where('trending','1')->take(10)->get();
        $trending_categories = Category::where('popular','1')->take(10)->get();

        //$feature_products = Product::where('trending','1')->paginate(4);

        return view('frontend.index', compact('feature_products','trending_categories'));
    }

    public function category()
    {
        $category = Category::where('status','0')->get();
        return view('frontend.category', compact('category'));
    }

    public function view_category($name)
    {
        if(Category::where('name',$name)->exists())
        {
            $category = Category::where('name', $name)->first();
            $products = Product::where('cat_id', $category->id)->where('status','0')->get();

            return view('frontend.products.index', compact('category','products'));
        }
        else
        {
            return redirect('/')->with('status', "category does not available");
        }
    }

    public function view_product($category_name, $product_name)
    {
        if(Category::where('name',$category_name)->exists())
        {
            if(Product::where('name',$product_name)->exists())
            {
                $products = Product::where('name', $product_name)->first();

                return view('frontend.products.view', compact('products'));
            }
            else
            {
                return redirect('/')->with('status', "Product is not available");
            }
        }

        else
        {
            return redirect('/')->with('status', "Category is not found");
        }
    }
}
