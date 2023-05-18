<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Gallery;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.index', [
            'products' => Product::latest()->with('oneimage')->paginate(9),
            'images' => Gallery::all(),
        ]); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.create')->with([
            'brands' => Brand::all(),
            'images' => Gallery::all(),
        ]); 
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // dd($request);

        $this->validate($request, [
        
            'title' => 'required',
            'paragraph' => 'required',
            'color' => 'required',
            'price' => 'required',
            'date_of_year' => 'required',
            'millage' => 'required',
            'transmission' => 'required',
            'oil_type' => 'required',
            'condition' => 'required',
            'address' => 'required',
            'images' => 'min:2|required',
            'images.*' => 'mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);

        $product = Product::create([
            'user_id' => auth()->id(),
            'brand_id' => $request->brand_id,
            'name' => $request->title,
            'paragraph' => $request->paragraph,
            'color' => $request->color,
            'price' => $request->price,
            'date_of_year' => $request->date_of_year,
            'millage' => $request->millage,
            'transmission' => $request->transmission,
            'oil_type' => $request->oil_type,
            'condition' => $request->condition,
            'address' => $request->address
        ]);

        foreach($request->file('images') as $image) 
        {  
            $name = $image->getClientOriginalName();
            $image = $image->move('image/', $name);
            $image = $name;
            Gallery::create([
                'images'=>$name,
                'product_id'=>$product->id
            ]);
          }

        return redirect()->route('products.index')->with('success', 'waw it was created successfully');
    
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('pages.show',[
            'product' => Product::with('images')->findOrFail($id),
            'brands' => Brand::all()
        ]);
     

    
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        return view('pages.edit', [
            'product' => Product::findOrFail($id),
            'brands' => Brand::all(),
            'images' => Gallery::all(),

        ]);

        

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        // dd($request);

        $this->validate($request, [
            'name' => 'required',
            'paragraph' => 'required',
            'color' => 'required',
            'price' => 'required',
            'date_of_year' => 'required',
            'millage' => 'required',
            'transmission' => 'required',
            'oil_type' => 'required',
            'condition' => 'required',
            'address' => 'required',
            'images' => 'min:2|required',
            'images.*' => 'mimes:jpeg,png,jpg,gif,svg|max:2048',
           

        ]);



        foreach($request->file('images') as $image) 
        {  
            $name = $image->getClientOriginalName();
            $image = $image->move('image/', $name);
            $image = $name;
            Gallery::create([
                'images'=>$name,
                'product_id'=>$product->id
            ]);
          }
          
          $product->update($request->all());

        return redirect()->route('products.index')->with('success', 'waw it was updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        // Gate::authorize('delete', $post);

        
        $product->delete();

        return redirect()->route('products.index')->with('success','waw it was deleted successfully');
    }

}
