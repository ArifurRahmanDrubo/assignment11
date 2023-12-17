<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index()
    {
        $products = DB::table('products')->get();
        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'quantity' => 'required|numeric',
            'price' => 'required|numeric',
        ]);

        DB::table('products')->insert([
            'name' => $request->input('name'),
            'quantity' => $request->input('quantity'),
            'price' => $request->input('price'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->route('products.index')->with('success', 'Product created successfully');
    }

    public function show($id)
    {
        $product = DB::table('products')->find($id);

        if (!$product) {
            return redirect()->route('products.index')->with('error', 'Product not found');
        }

        return view('products.show', compact('product'));
    }

    public function edit($id)
    {
        $product = DB::table('products')->find($id);

        if (!$product) {
            return redirect()->route('products.index')->with('error', 'Product not found');
        }

        return view('products.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'quantity' => 'required|numeric',
            'price' => 'required|numeric',
        ]);

        DB::table('products')
            ->where('id', $id)
            ->update([
                'name' => $request->input('name'),
                'quantity' => $request->input('quantity'),
                'price' => $request->input('price'),
                'updated_at' => now(),
            ]);

        return redirect()->route('products.index')->with('success', 'Product updated successfully');
    }

    public function destroy($id)
    {
        DB::table('products')->where('id', $id)->delete();

        return redirect()->route('products.index')->with('success', 'Product deleted successfully');
    }
}

