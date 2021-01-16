<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;

use Illuminate\Support\Str;
use App\Category;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function __construct() {

        $this->middleware(['permission:read_category'])->only('index');
        $this->middleware(['permission:create_category'])->only('create');
        $this->middleware(['permission:update_category'])->only('update', 'edit');
        $this->middleware(['permission:delete_category'])->only('destroy');

    }

    public function index(){
        $categories = Category::with('childrenRecursive')
            ->latest()
            ->whereNull('parent_id')
            ->get();

        return view('pages.back-end.category.index', compact('categories'));
    }

    public function create(){
        $categories = Category::whereNull('parent_id')->get();
        return view('pages.back-end.category.create', compact('categories'));
    }

    public function store(Request $request){
        $this->validate($request,[
            'name'   => 'required|max:255',
        ]);

        $category            = new Category;
        $category->name      = $request->name;
        $category->slug      = Str::slug($request->name);
        $category->parent_id = $request->parent_id;
        $category->save();

        return redirect()->Route('category.index');
    }

    public function edit($id)
    {
        $category   = Category::findOrFail($id);
        $categories = Category::whereNull('parent_id')->get();
        return view('pages.back-end.category.edit', compact('category', 'categories'));

    } // End Of Edit


    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name'   => 'required|max:255',
        ]);

        $category              = Category::findOrFail($id);
        $category->name        = $request->name;
        $category->slug        = Str::slug($request->name);
        $category->parent_id   = $request->parent_id;
        $category->save();

        notify()->preset('category-update');
        return redirect()->Route('category.index');

    } // End Of Update


    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        notify()->preset('category-delete');
        return redirect()->Route('category.index');

    }





}
