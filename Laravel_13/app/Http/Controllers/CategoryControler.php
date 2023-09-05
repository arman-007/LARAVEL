<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryControler extends Controller
{
    public function index(){
        
        $categories = Category::latest()->get();  
        // dd($categories);
        return view('backend.categories.index', [
            'categories' => $categories
        ]);
    }
    
    public function create(){ 
        return view('backend.categories.create');
    }
    
    public function store(Request $request){ 
        // dd('I am from store method');
        // dd(request()->all());
        // dd(request()->title);
        Category::create([
            'title' => $request->title,
            'description' => $request->description,
        ]);

        // $request->session()->flash('message', 'Task was successful!');

        return redirect()->route('categories.index')->with('message', 'Task is successfully stored!');
    }
}
