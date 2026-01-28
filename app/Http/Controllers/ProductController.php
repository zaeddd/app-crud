<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product; 


class ProductController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('products.index', ['products' => $products]);

    }

   public function create(){
        return view('products.create');
   }

   public function store(Request $request){
        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'qty' => 'required|integer|min:1',
            'price' => 'required|numeric|min:0',
            'description' => 'nullable|string',
        ]);

        // Create a new product using the validated data
        $newProduct = Product::create($validatedData);

        // Redirect to a specific route with a success message
        return redirect()->route('product.index')->with('success', 'Product created successfully!');
   }
}
