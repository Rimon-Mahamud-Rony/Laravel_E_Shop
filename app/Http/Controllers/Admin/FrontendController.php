<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Controllers\Admin\FrontendController;

class FrontendController extends Controller
{
    //
    public function index()
    {
        return view('admin.index');
    }
}
