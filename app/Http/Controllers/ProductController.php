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

   public function update(Request $request, Product $product,$id){
    $product = Product::find($id);
    $product->update([
        "name"=> $request->name,
        "description"=> $request->description,
        "quantity"=> $request->quantity
    ]);

    return response()->json(["message"=> "Record Updated"]);
    }

    public function view(){
        $product = Product::all();
        return $product;
    }

    public function destroy(Product $product, $id){
        $product = Product::find($id);
        $product->delete();
        return response()->json(["message"=> "Record deleted"]);
    }
}
