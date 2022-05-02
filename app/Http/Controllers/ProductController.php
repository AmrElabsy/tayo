<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
		$products = Product::all();

		return view('products.index', compact('products'));
	}

    public function store(Request $request)
    {
		$request->validate($this->getRules() );
		$product = new Product();

		$product->name = $request->name;
		$product->amount = $request->amount;
		$product->price = $request->price;
		$product->description = $request->description;

    }

    public function show(Product $product)
    {
		return view('products.show', compact('product'));
    }
    public function update(Request $request, Product $product)
    {
		$request->validate($this->getRules() );

		$product->update($request->all());

		return redirect()->route('products.index',)->with('success', 'Product updated successfully');

    }
    public function destroy(Product $product)
    {
		$product->delete();

		return redirect()->route('products.index')->with('success', 'Product deleted successfully');
    }

	private function getRules() {
		return [
			'name' => 'required|string|max:255',
			'price' => 'required|numeric',
			'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
		];
	}
}
