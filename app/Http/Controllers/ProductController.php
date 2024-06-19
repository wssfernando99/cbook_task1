<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
   
    public function create(){
        return view("productadd");
    }
   public function store(Request $request){
   
    $rules = [
        "name"=> "required",
        "description"=> "required",
        "quantity"=> "required",
    ];

    Product::create([
        "name"=> $request->name,
        "description"=> $request->description,
        "quantity"=> $request->quantity
    ]);
    
    return response()->json(["message"=>"Successfully added"]);
   }

   public function edit($id, Product $product){
    $product = Product::find($id);
    return view('productupdate', compact('product'));   
   }

   public function update(Request $request, Product $product){
    $product->update([
        "name"=> $request->name,
        "description"=> $request->description,
        "quantity"=> $request->quantity
    ]);

    return response()->json(["message"=> "Record Updated"]);
    }
}

 /**
     * Display a listing of the resource.
     */
    // public function index()
    // {
    //     $products = Product::all();
    //     return $products;
    // }

    /**
     * Show the form for creating a new resource.
     */
    // public function create()
    // {
    //     return view("productadd");
    // }

    /**
     * Store a newly created resource in storage.
     */
    // public function store(Request $request)
    // {
    //     $rules = [
    //         "name"=> "required",
    //         "description"=> "required",
    //         "quantity"=> "required",
    //     ];

    //     Product::create([
    //         "name"=> $request->name,
    //         "description"=> $request->description,
    //         "quantity"=> $request->quantity
    //     ]);
        
    //     return response()->json(["message"=>"Successfully added"]);
    // }
    

    /**
     * Display the specified resource.
     */
    // public function show(Product $product)
    // {
        
    // }

    /**
     * Show the form for editing the specified resource.
     */
    // public function edit(Product $product)
    // {
    //     return view('productupdate',compact('product'));
    // }

    /**
     * Update the specified resource in storage.
     */
    // public function update(Request $request, Product $product)
    // {
        
    //     $product->update([
    //         "name"=> $request->name,
    //         "description"=> $request->description,
    //         "quantity"=> $request->quantity
    //     ]);

    //     return response()->json(["message"=> "Record Updated"]);
    // }

    /**
     * Remove the specified resource from storage.
     */
    // public function destroy(Product $product)
    // {
    //     $product->delete();
    //     return response()->json(["message"=> "Record Deleted"]);
    // }