<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\CategoryController;

class CategoryController extends Controller
{
    //
    public function index()
    {
        return view('admin.category.index');
    }
}
