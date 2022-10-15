<?php

namespace App\Http\Controllers;

use App\Http\Requests\LotRequest;
use App\Models\Category;
use App\Models\Lot;

class LotController extends Controller
{

    public function index(){
        $lots = Lot::get();

        return view('lots.index', compact('lots'));
    }

    public function create(){
        $categories = Category::all();

        return view('lots.form', compact('categories'));
    }

    public function store(LotRequest $request){
        Lot::create($request->all());
        return redirect(route('lots.index'));
    }

    public function show(Lot $lot){
        return view('lots.show', compact('lot'));
    }

    public function edit(Lot $lot){
        $categories = Category::all();

        return view('lots.form', compact('lot','categories'));
    }

    public function update(LotRequest $request, Lot $lot){
        $lot->update($request->all());

        return redirect(route('lots.index'));
    }

    public function destroy(Lot $lot){
        $lot->delete();

        return redirect()->route('lots.index');
    }
}
