<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index(){
        $categories =Category::get();
        return view('categories.index', compact('categories'));
    }

    public function create(){
        return view('categories.form');
    }

    public function store(CategoryRequest $request){
        Category::create($request->all());
        return redirect(route('categories.index'));
    }

    public function show(Category $category){
        return view('categories.show', compact('category'));
    }

    public function edit(Category $category){
        return view('categories.form', compact('category'));
    }

    public function update(CategoryRequest $request, Category $category){
        $category->update($request->all());

        return redirect(route('categories.index'));
    }

    public function destroy(Category $category){
        $category->delete();

        return redirect()->route('categories.index');
    }
}
