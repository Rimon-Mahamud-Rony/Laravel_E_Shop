<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontendController extends Controller
{
    //
    public function index()
    {
        //return "front end working well";
        $feature_products = Product::where('trending','1')->take(10)->get();

        //$feature_products = Product::where('trending','1')->paginate(4);

        return view('frontend.index', compact('feature_products'));
    }

}
