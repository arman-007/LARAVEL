<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryControler extends Controller
{
    public function index(){
        
        $categories = Category::all();  
        dd($categories);
        return view('backend.categories.index');
    }
}
