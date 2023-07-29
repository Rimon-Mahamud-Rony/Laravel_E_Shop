<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//use App\Http\Controllers\Admin\CategoryController;

class CategoryController extends Controller
{
    //
    public function index()
    {
        return view('admin.category.index');
    }

    public function add()
    {
        return view('admin.category.add');
    }

    public function insert_data (Request $request)
    {
        $category = new Category();

        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets/uploads/category',$filename);
            $category->image = $filename;
        }

        $category->name = $request->input('name');
        $category->slug = $request->input('slug');
        $category->description = $request->input('description');
        $category->status = $request->input('status')== TRUE ? '1' : '0';
        $category->popular = $request->input('popular')== TRUE ? '1' : '0';
        $category->meta_title = $request->input('meta_title');
        $category->meta_keywords = $request->input('meta_keywords');
        $category->meta_descrip = $request->input('meta_descrip');

        $category->save();

        return redirect('/dashboard')->with('status',"Category Added Successfully");
    }
}
