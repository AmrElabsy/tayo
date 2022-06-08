<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
	public function index() {
		$products = Product::all();

		return view('products.index', compact('products'));
	}

	public function store( Request $request ) {
		$request->validate($this->getRules());

		$product = new Product();

		$product->name = $request->name;
		$product->amount = $request->amount;
		$product->price = $request->price;
		$product->description = $request->description;

		$product->save();
		if($request->hasFile('images')) {
			$product->uploadImages($request->file('images'));
		}


		return redirect()->route('product.index')->with('success', 'Product created successfully');
	}

	public function show( Product $product ) {
		return view('products.show', compact('product'));
	}

	public function update( Request $request, Product $product ) {
		$request->validate($this->getRules());

		$product->name = $request->name;
		$product->amount = $request->amount;
		$product->price = $request->price;
		$product->description = $request->description;

		if($request->hasFile('images')) {
			$product->uploadImages($request->file('images'));
		}

		$product->save();

		return redirect()->route('product.show', $product->id)->with('success', 'Product updated successfully');
	}

	public function destroy( Product $product ) {
		$product->delete();

		return redirect()->back()->with('success', 'Product deleted successfully');
	}

	private function getRules() {
		return [
			'name' => 'required|string|max:255',
			'price' => 'required|numeric',
		];
	}
}
