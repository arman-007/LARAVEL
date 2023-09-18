<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        
        $products = Product::latest()->get();  
        // dd($products);
        return view('backend.products.index', [
            'products' => $products
        ]);
    }
    
    public function create(){ 
        return view('backend.products.create');
    }
    
    public function store(Request $request){ 

        try{
            $request -> validate([
                'title' => ['required', 'min:5'],
                'description' => ['required', 'min:10'],
            ]);

            Product::create([
                'title' => $request->title,
                'description' => $request->description,
            ]);

            return redirect()->route('products.index')->with('message', 'Task is successfully stored!');
        }

        catch(QueryException $e){
            return redirect()->back()->withErrors($e->getMessage());
        }
        
    }

    public function show(Product $product){
        // dd($id);
        // $category = Category::findorFail();
        // dd($category);
        return view('backend.products.show', [
            'product' => $product,
        ]);
    }
}
