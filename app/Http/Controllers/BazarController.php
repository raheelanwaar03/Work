<?php

namespace App\Http\Controllers;

use App\Models\bazar;
use Illuminate\Http\Request;

class BazarController extends Controller
{
    public function home()
    {
        $products = bazar::get();
        return view('home',[
            'products' => $products
        ]);
    }

    public function addProduct()
    {
        return view('addProduct');
    }

    public function saveProduct(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'price' => 'required|max:255',
            'description' => 'required|max:255',
        ]);
        $product = new bazar();
        $product->name =$validated['name'];
        $product->price =$validated['price'];
        $product->description =$validated['description'];
        $product->save();
        return redirect()->route('home')->with('success', 'Product saved successfully');


    }
    public function showProduct($id)
    {
        $product = bazar::find($id);
        return view('showProduct',[
            'product' => $product
        ]);
    }   
    public function editProduct($id)
    {
        $product = bazar::find($id);
        return view('editProduct',[
            'product' => $product
        ]);
    }
    public function updateProduct(Request $request,$id)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'price' => 'required|max:255',
            'description' => 'required|max:255',
        ]);
        $task = bazar::find($id);
        $task->name =$validated['name'];
        $task->price =$validated['price'];
        $task->description =$validated['description'];
        $task->save();
        return redirect()->route('home')->with('update', 'Product updated successfully');
    }
    public function destroyProduct($id)
    {
        $product = bazar::find($id);
        $product->delete();
        return redirect()->route('home')->with('delete', 'Product deleted successfully');
    }
}
